@props(['page'])

<section class="hero-wrap hero-wrap-2" style="background-image: url('/images/bg_5.jpg');" data-stellar-background-ratio="0.5">
     <div class="overlay"></div>
     <div class="container">
       <div class="row no-gutters slider-text align-items-end justify-content-center">
         <div class="col-md-9 ftco-animate text-center mb-5">
           <h1 class="mb-2 bread">{{$page}}</h1>
           <p class="breadcrumbs"><span class="mr-2"><a href="/">Почетна <i class="fa fa-chevron-right"></i></a></span> <span>{{$page}} <i class="fa fa-chevron-right"></i></span></p>
         </div>
       </div>
     </div>
</section>