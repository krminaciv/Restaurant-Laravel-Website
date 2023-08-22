@extends('layout')

@section('content')

@php
$page = "О нама"
@endphp
<x-hero-page-card :page="$page" />


<!-- This is our secrets -->
<section class="ftco-section ftco-no-pt ftco-no-pb">
  <div class="container">
    <div class="row d-flex">
      <div class="col-md-6 d-flex">
        <div class="img img-2 w-100 mr-md-2" style="background-image: url(images/bg_6.jpg);"></div>
        <div class="img img-2 w-100 ml-md-2" style="background-image: url(images/bg_4.jpg);"></div>
      </div>
      <div class="col-md-6 ftco-animate makereservation p-4 p-md-5">
        <div class="heading-section ftco-animate mb-5">
          <span class="subheading">Ово су наше тајне</span>
          <h2 class="mb-4">Савршени састојци</h2>
          <p>
            Добродошли у "Диверзију" - мјесто где ћете уживати у укусима и моментима који остају у сјећању!
          </p>
          <p><a href="/menu" class="btn btn-primary">Сазнај више</a></p>
        </div>
      </div>
    </div>
  </div>
</section>



<!-- Our Master Chef -->
<section class="ftco-section bg-light">
  <div class="container">
    <div class="row justify-content-center mb-5 pb-2">
      <div class="col-md-7 text-center heading-section ftco-animate">
        <span class="subheading">Шеф</span>
        <h2 class="mb-4">Наш Мастер Шеф</h2>
      </div>
    </div>
    <div class="row">

      <div class="col-md-6 col-lg-3 ftco-animate">
        <div class="staff">
          <div class="img" style="background-image: url(images/chef-4.jpg);"></div>
          <div class="text px-4 pt-2">
            <h3>Марко Марковић</h3>
            <span class="position mb-2">CEO, Co Founder</span>
            <div class="faded">
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-3 ftco-animate">
        <div class="staff">
          <div class="img" style="background-image: url(images/chef-2.jpg);"></div>
          <div class="text px-4 pt-2">
            <h3>Маја Мајић</h3>
            <span class="position mb-2">Head Chef</span>
            <div class="faded">
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-3 ftco-animate">
        <div class="staff">
          <div class="img" style="background-image: url(images/chef-3.jpg);"></div>
          <div class="text px-4 pt-2">
            <h3>Перо Перић</h3>
            <span class="position mb-2">Chef Cook</span>
            <div class="faded">
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-3 ftco-animate">
        <div class="staff">
          <div class="img" style="background-image: url(images/chef-1.jpg);"></div>
          <div class="text px-4 pt-2">
            <h3>Лазар Лазић</h3>
            <span class="position mb-2">Chef Cook</span>
            <div class="faded">
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>



<!-- Small Section -->
<section class="ftco-section ftco-no-pt ftco-no-pb ftco-intro bg-primary">
  <div class="container py-5">
    <div class="row py-2">
      <div class="col-md-12 text-center">
        <h2>Приватне Вечере &amp; Славља</h2>
        <a href="/reservation" class="btn btn-white btn-outline-white">Резервишите Сад</a>
      </div>
    </div>
  </div>
</section>



<!-- About -->
<section class="ftco-section contact-section bg-light">
  <div class="container">
    <div class="row d-flex contact-info">
      <div class="col-md-12">
        <h2 class="h4 font-weight-bold">Контакт информације</h2>
      </div>
      <div class="w-100"></div>
      <div class="col-md-3 d-flex">
        <div class="dbox">
          <p><span>Адреса:</span> Бањалучка 1, Бања Лука</p>
        </div>
      </div>
      <div class="col-md-3 d-flex">
        <div class="dbox">
          <p><span>Телефон:</span> +00 12 345 678</p>
        </div>
      </div>
      <div class="col-md-3 d-flex">
        <div class="dbox">
          <p><span>И-мејл:</span> <a href="mailto:info@diverzija.com">info@diverzija.com</a></p>
        </div>
      </div>
      <div class="col-md-3 d-flex">
        <div class="dbox">
          <p><span>Фејсбук</span> <a href="#"></a></p>
        </div>
      </div>
    </div>
  </div>
</section>



@endsection