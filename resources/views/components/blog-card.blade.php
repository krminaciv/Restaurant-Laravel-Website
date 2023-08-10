@props(['blog'])

<div class="col-md-4 ftco-animate">
     <div class="blog-entry">
         <a href="/blog/{{$blog->id}}" class="block-20" 
            style="background-image: url('{{$blog->image ? asset('storage/' . $blog->image) : asset('images/image_3.jpg')}}');">
         </a>
         <div class="text px-4 pt-3 pb-4">
             <div class="meta">
                 <div><a>{{$blog->created_at}}</a></div>
             </div>
             <h3 class="heading"><a href="/blog/{{$blog->id}}">{{$blog->title}}</a></h3>
             <p class="clearfix">
                 <a href="/blog/{{$blog->id}}" class="float-left read btn btn-primary">Прочитај више</a>
                 <a href="#" class="float-right meta-chat"><span class="fa fa-comment"></span> </a>
             </p>
         </div>
     </div>
 </div>