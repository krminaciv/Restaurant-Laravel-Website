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

                    <li>
                         <a href="/dashboard/reservations">Резервације</a>
                    </li>

                    <li>
                         <a href="/dashboard/comments">Коментари</a>
                    </li>

                    <li>
                         <a href="/dashboard/addAdmin">Додај Админа</a>
                    </li>

                    <li class="active">
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


          <h2 class="mb-4">Додајте Ставку у Мени</h2>

          <div class="card-body">

               <form method="POST" action="/dashboard/menu" enctype="multipart/form-data">
                    @csrf
                    <div class="form-row">
                         <div class="name">Назив</div>
                         <div class="value">
                              <input class="input--style-6" type="text" name="title">
                         </div>
                    </div>
                    <div class="form-row">
                         <div class="name">Састојци</div>
                         <div class="value">
                              <div class="input-group">
                                   <input class="input--style-6" type="text" name="ingredients">
                              </div>
                         </div>
                    </div>
                    <div class="form-row">
                         <div class="name">Цијена</div>
                         <div class="value">
                              <div class="input-group">
                                   <input class="input--style-6" type="text" name="price">
                              </div>
                         </div>
                    </div>
                    <div class="form-row">
                         <div class="name">Категорија</div>
                         <div class="value">
                              <div class="input-group">
                                   <select name="category" id="dog-names">
                                        <option value="Доручак">Доручак</option>
                                        <option value="Ручак">Ручак</option>
                                        <option value="Специјалитети">Специјалитети</option>
                                        <option value="Дезерт">Дезерт</option>
                                        <option value="Вина">Вина</option>
                                        <option value="Пића">Пића</option>
                                   </select>
                              </div>
                         </div>
                    </div>
                    <div class="form-row">
                         <div class="name">Слика</div>
                         <div class="value">
                              <div class="input-group js-input-file">
                                   <input class="input-file" type="file" name="image" id="file">
                                   <label class="label--file" for="file">Изаберите датотеку</label>
                              </div>
                              <div class="label--desc">Максимална величина датотеке је
                                   50 MB</div>
                         </div>
                    </div>

                    <div class="card-footer">
                         <button class="btn btn--radius-2 btn--blue-2" type="submit">Потврди</button>
                    </div>
               </form>
          </div>


          <br>
          <h2>Табела Мени</h2>

          <div class="container">
               <div class="row">
                    <div class="col-md-12">
                         <div class="table-wrap">
                              <table class="table">
                                   <thead class="thead-dark">
                                        <tr>
                                             <th>id</th>
                                             <th>Назив</th>
                                             <th>Састојци</th>
                                             <th>Цијена</th>
                                             <th>Категорија</th>
                                             <th>&nbsp;</th>
                                             <th>&nbsp;</th>
                                        </tr>
                                   </thead>
                                   <tbody>

                                        @foreach($menu as $item)
                                             <x-menu-row-card :item="$item" />
                                        @endforeach

                                   </tbody>
                              </table>
                         </div>
                    </div>
               </div>
          </div>

     </div>
</div>

@endauth

@endsection