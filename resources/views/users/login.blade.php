@extends('layout')

@section('content')

     @php
          $page = "Пријавите се"
     @endphp
     <x-hero-page-card :page="$page"/>

     <br>

     <div class="container" style="padding-left: 440px;">
          <form style="" method="POST" action="/authenticate">
               @csrf


               <div style="padding-bottom: 20px" class="mb-6">
                    <label for="email" class="inline-block text-lg mb-2" style="padding-right: 5px"
                         >И-мејл</label
                    >
                    <input
                         type="email"
                         class="border border-gray-200 rounded p-2 w-full"
                         name="email"
                    />
                    @error('email')
                         <p style="color: red">{{$message}}</p>
                    @enderror
               </div>


               <div style="padding-bottom: 20px" class="mb-6">
                    <label
                    style="padding-right: 5px"
                         for="password"
                         class="inline-block text-lg mb-2"
                    >
                         Лозинка
                    </label>
                    <input
                         type="password"
                         class="border border-gray-200 rounded p-2 w-full"
                         name="password"
                    />
                    @error('password')
                         <p style="color: red">{{$message}}</p>
                    @enderror
               </div>
               
               <div" class="mb-6">
                    <button style="background-color: #177ab8;
                         type="submit"
                         class="bg-laravel text-white rounded py-2 px-4"
                    >
                         Пријавите се
                    </button>
                    
               </div>

          </form>
     </div>
     
     <br>

@endsection