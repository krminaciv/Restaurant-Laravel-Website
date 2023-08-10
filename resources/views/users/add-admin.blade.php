@extends('users/dashboard-layout')

@section('content')

@auth

<div class="wrapper d-flex align-items-stretch">
     <nav id="sidebar">
          <div class="p-4 pt-5">

               <ul class="list-unstyled components mb-5">

                    <li>
                         <a href="/dashboard">Добродошли, {{auth()->user()->name}}
                    </li></a> <br><br>
                    
                    <li>
                         <a href="/dashboard/reservations">Резервације</a>
                    </li>

                    <li>
                         <a href="/dashboard/comments">Коментари</a>
                    </li>

                    <li class="active">
                         <a href="/dashboard/addAdmin">Додај Админа</a>
                    </li>

                    <li>
                         <a href="/dashboard/menu">Мени</a>
                    </li>

                    <li>
                         <a href="/dashboard/blog">Блог</a>
                    </li>

                    <li>
                         <form method="POST" action="/logout">
                              @csrf
                              <button
                                   style="padding-top: 11px; background-color: transparent; border-color: transparent; color: rgb(218, 218, 218)"
                                   type="submit">
                                   <p>Одјави се</p>
                              </button>
                         </form>
                    </li>
               </ul>

               <div class="footer">
                    <p>
                         <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                         Copyright &copy;<script>
                              document.write(new Date().getFullYear());
                         </script> All rights reserved | <i class="icon-heart" aria-hidden="true"></i> by <a
                              href="https://colorlib.com" target="_blank">Colorlib.com</a>
                         <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
               </div>

          </div>
     </nav>

     <!-- Page Content  -->
     <div id="content" class="p-4 p-md-5">


          <h2 class="mb-4">Додајте Админа</h2>


          <div class="card-body">
               <form method="POST" action="/dashboard/addAdmin">
               @csrf
                    <div class="form-row">
                         <div class="name">Име</div>
                         <div class="value">
                              <input class="input--style-6" type="text" name="name">
                         </div>
                    </div>
                    <div class="form-row">
                         <div class="name">И-мејл</div>
                         <div class="value">
                              <div class="input-group">
                                   <input class="input--style-6" type="email" name="email"
                                        placeholder="example@email.com">
                              </div>
                         </div>
                    </div>
                    <div class="form-row">
                         <div class="name">Лозинка</div>
                         <div class="value">
                              <div class="input-group">
                                   <input class="input--style-6" type="password" name="password">
                              </div>
                         </div>
                    </div>

                    <div class="card-footer">
                         <button class="btn btn--radius-2 btn--blue-2" type="submit">Потврди</button>
                    </div>

               </form>
          </div>
     </div>
</div>

@endauth

@endsection