@props(['item'])

<div class="block-21 mb-4 d-flex">
     <a class="blog-img mr-4" style="background-image: url({{asset('storage/' . $item->image)}});"></a>
     <div class="text">
         <h3 class="heading"><a href="/blog/{{$item->id}}">{{$item->title}}</a></h3>
         <div class="meta">
             <div><a href="#"><span class="icon-calendar"></span> {{$item->created_at}}</a></div>
             <div><a href="#"><span class="icon-person"></span> {{$item->category}}</a></div>
         </div>
     </div>
 </div>