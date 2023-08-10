<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Blog;
use App\Models\Menu;
use App\Models\Comment;
use App\Models\Reservation;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(){
        
        $menu = Menu::all();
        $ctg = ['Доручак', 'Ручак', 'Специјалитети'];
        $res = collect([]);
        foreach($ctg as $c){
            $i = 0;
            foreach($menu as $item){
                if($item->category == $c){
                    $i++;
                    $res->push($item);
                }
                if($i == 3) break;
            }
        }

        $blog = Blog::all();
        $num = $blog->count();
        $blog = $blog->slice($num - 3);
        $blog = $blog->reverse();

        return view('index', [
            'menu' => $res,
            'blog' => $blog
        ]);

    }

    public function about(){
        return view('about');
    }

    public function menu(){
        return view('menu', [
            'menu' => Menu::all()
        ]);
    }

    public function reservation(){
        return view('reservation');
    }

    public function storeReservation(Request $request){
        //dd($request);
        
        $formFields = $request->validate([
            'name' => 'required',
            'email' => 'nullable',
            'telephone' => 'required',
            'date' => 'required',
            'time' => 'required',
            'guestNum' => 'required'
        ]);
        
        $formFields['datetime'] = $formFields['date'] . ' ' . $formFields['time'] . ':00';
        $formFields = Arr::except($formFields, 'date');
        $formFields = Arr::except($formFields, 'time');
        
        $reservation = Reservation::create($formFields);

        return redirect('/');
    }

    public function blog(){
        //dd(request('category'));
        return view('blog', [
            'blogs' => Blog::latest()->filter(request(['category']))->get()
        ]);
    }

    public function singleBlog($id){
        $blog = Blog::find($id);

        $arr = preg_split("/\;/", $blog->text);

        return view('single-blog', [
            'blog' => $blog,
            'arr' => $arr,
            'comments' => Comment::all()
        ]);
    }

    public function storeComment(Request $request, $id){

        $formFields = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'message' => 'required'
        ]);

        $formFields['blog_id'] = $id;

        $comment = Comment::create($formFields);

        return back();

    }

    

}
