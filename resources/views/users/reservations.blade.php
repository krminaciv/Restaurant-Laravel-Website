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

                    <li class="active">
                         <a href="/dashboard/reservations">Резервације</a>
                    </li>

                    <li>
                         <a href="/dashboard/comments">Коментари</a>
                    </li>

                    <li>
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


          <h2 class="mb-4">Резервације</h2>


          <div class="card-body">


               <div class="container">
                    <div class="row">
                         <div class="col-md-12">
                              <div class="table-wrap">
                                   <table class="table">
                                        <thead class="thead-dark">
                                             <tr>
                                                  <th>Име</th>
                                                  <th>И-мејл</th>
                                                  <th>Телефон</th>
                                                  <th>Датум и Вријеме</th>
                                                  <th>Гости</th>
                                                  <th>Креирано</th>
                                                  <th>&nbsp;</th>
                                             </tr>
                                        </thead>
                                        <tbody>

                                             @foreach($reservations as $r)
                                                  <x-reservation-row-card :reservation="$r" />
                                             @endforeach

                                        </tbody>
                                   </table>
                              </div>
                         </div>
                    </div>
               </div>
          </div>



     </div>
</div>

@endauth

@endsection