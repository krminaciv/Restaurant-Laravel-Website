<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Menu;
use App\Models\User;
use App\Models\Comment;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class UserController extends Controller
{
    public function login(){
        return view('users/login');
    }

    public function authenticate(Request $request){

        $formFields = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(auth()->attempt($formFields)){
            $request->session()->regenerate();
            return redirect('/dashboard');
        }

        return back()->withErrors(['email' => 'Invalid'])->onlyInput('email');
    }

    public function dashboard(){
        return view('users/dashboard');
    }

    public function logout(Request $request){
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function showReservations(){

        $currentDate = Carbon::now();
        $res = Reservation::where('datetime', '>', $currentDate)->get();
        //dd($res); //prikazace samo rezervacije koje su u buducnosti

        return view('users/reservations', [
            'reservations' => $res
        ]);
    }

    public function deleteReservation($id){
        $item = Reservation::find($id);
        $item->delete();
        return redirect('/dashboard/reservations');
    }

    public function showComments(){
        return view('users/comments', [
            'comments' => Comment::all()
        ]);
    }

    public function deleteComment($id){
        $item = Comment::find($id);
        $item->delete();
        return redirect('/dashboard/comments');
    }

    public function showBlog(){
        return view('users/blog', [
            'blog' => Blog::all()
        ]);
    }

    public function storeBlog(Request $request){

        $formFields = $request->validate([
            'title' => 'required',
            'text' => 'required',
            'category' => 'required',
            'tags' => 'required',
            'image' => 'nullable'
        ]);

        $formFields['user_id'] = auth()->id();

        if($request->hasFile('image')){
            $formFields['image'] = $request->file('image')->store('blog', 'public');
        }

        $blog = Blog::create($formFields);

        return redirect('/dashboard');

    }

    public function deleteBlog($id){
        $item = Blog::find($id);
        $item->delete();
        return redirect('/dashboard/blog');
    }

    public function showAddAdmin(){
        return view('users/add-admin');
    }

    public function storeAdmin(Request $request){

        $formFields = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);

        //hash password
        $formFields['password'] = bcrypt($formFields['password']);

        //napravati korisnika
        $user = User::create($formFields);
        
        return redirect('/dashboard');

    }

    public function editAdmin(Request $request){

        $formFields = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'nullable'
        ]);

        if($request->input('password')){
            $formFields['password'] = bcrypt($formFields['password']);
        }

        $user = auth()->user();
        $user->update($formFields);

        return redirect('/dashboard');

    }

    public function showMenu(){
        return view('users/menu', [
            'menu' => Menu::all()
        ]);
    }

    public function storeMenu(Request $request){

        $formFields = $request->validate([
            'title' => 'required',
            'ingredients' => 'required',
            'price' => 'required',
            'category' => 'required',
            'image' => 'nullable'
        ]);

        if($request->hasFile('image')){
            $formFields['image'] = $request->file('image')->store('menu', 'public');
        }

        //dd($request);
        $item = Menu::create($formFields);

        return redirect('/dashboard/menu');

    }

    public function deleteMenu($id){
        $item = Menu::find($id);
        $item->delete();
        return redirect('/dashboard/menu');
    }

    
}
