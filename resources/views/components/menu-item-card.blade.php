@props(['item'])

<div class="menus d-flex ftco-animate">
     <div class="menu-img img" 
          style="background-image: url('{{asset('storage/' . $item->image)}}');"></div>
     <div class="text">
          <div class="d-flex">
               <div class="one-half">
                    <h3>{{$item->title}}</h3>
               </div>
               <div class="one-forth">
                    <span class="price">{{$item->price}} KM</span>
               </div>
          </div>
          <p><span>{{$item->ingredients}}</span>
          </p>
     </div>
</div>