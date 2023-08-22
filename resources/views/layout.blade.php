<!DOCTYPE html>
<html lang="en">
<head>
     <title>Диверзија Ресторан</title>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     
     <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">

     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

     <link rel="stylesheet" href="{{asset('css/animate.css')}}">
     
     <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
     <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
     <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">

     <link rel="stylesheet" href="{{asset('css/bootstrap-datepicker.css')}}">
     <link rel="stylesheet" href="{{asset('css/jquery.timepicker.css')}}">

     
     <link rel="stylesheet" href="{{asset('css/flaticon.css')}}">
     <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>

     <!-- START nav -->
     <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
		<div class="container">
			<a class="navbar-brand" href="/">Диверзија</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> Menu
			</button>

			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item"><a href="/" class="nav-link">Почетна</a></li>
					<li class="nav-item"><a href="/about" class="nav-link">О нама</a></li>
					<li class="nav-item"><a href="/menu" class="nav-link">Мени</a></li>
					<li class="nav-item"><a href="/reservation" class="nav-link">Резервације</a></li>
					<li class="nav-item"><a href="/blog" class="nav-link">Блог</a></li>
				</ul>
			</div>
		</div>
	</nav>
     <!-- END nav -->


     @yield('content')


     <footer class="ftco-footer ftco-no-pb ftco-section">
		<div class="container">
			<div class="row mb-5">
				<div class="col-md-6 col-lg-3">
					<div class="ftco-footer-widget mb-4">
						<h2 class="ftco-heading-2">Диверзија</h2>
						<p>Добродошли у "Диверзију" - мјесто где ћете уживати у укусима и моментима који остају у сећању! </p>
						<ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
							<li class="ftco-animate"><a href="#"><span class="fa fa-twitter"></span></a></li>
							<li class="ftco-animate"><a href="#"><span class="fa fa-facebook"></span></a></li>
							<li class="ftco-animate"><a href="#"><span class="fa fa-instagram"></span></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-6 col-lg-3">
					<div class="ftco-footer-widget mb-4">
						<h2 class="ftco-heading-2">Радно вријеме</h2>
						<ul class="list-unstyled open-hours">
							<li class="d-flex"><span>Пон - Пет</span><span>8:00 - 24:00</span></li>
							<li class="d-flex"><span>Суб - Нед</span><span>8:00 - 01:00</span></li>
                                   <li class="d-flex"><span>Контакт</span><span>+00 12 345 678</span></li>
						</ul>
					</div>
				</div>
				<div class="col-md-6 col-lg-3">
					<div class="ftco-footer-widget mb-4">
						<h2 class="ftco-heading-2">Instagram</h2>
						<div class="thumb d-sm-flex">
							<a href="#" class="thumb-menu img" style="background-image: url(images/insta-1.jpg);">
							</a>
							<a href="#" class="thumb-menu img" style="background-image: url(images/insta-2.jpg);">
							</a>
							<a href="#" class="thumb-menu img" style="background-image: url(images/insta-3.jpg);">
							</a>
						</div>
						<div class="thumb d-flex">
							<a href="#" class="thumb-menu img" style="background-image: url(images/insta-4.jpg);">
							</a>
							<a href="#" class="thumb-menu img" style="background-image: url(images/insta-5.jpg);">
							</a>
							<a href="#" class="thumb-menu img" style="background-image: url(images/insta-6.jpg);">
							</a>
						</div>
					</div>
				</div>
				
			</div>
		</div>
		<div class="container-fluid px-0 bg-primary py-3">
			<div class="row no-gutters">
				<div class="col-md-12 text-center">

					<p class="mb-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
					</div>
				</div>
			</div>
		</footer>



          <script src="{{asset('js/jquery.min.js')}}"></script>
		<script src="{{asset('js/jquery-migrate-3.0.1.min.js')}}"></script>
		<script src="{{asset('js/popper.min.js')}}"></script>
		<script src="{{asset('js/bootstrap.min.js')}}"></script>
		<script src="{{asset('js/jquery.easing.1.3.js')}}"></script>
		<script src="{{asset('js/jquery.waypoints.min.js')}}"></script>
		<script src="{{asset('js/jquery.stellar.min.js')}}"></script>
		<script src="{{asset('js/owl.carousel.min.js')}}"></script>
		<script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
		<script src="{{asset('js/jquery.animateNumber.min.js')}}"></script>
		<script src="{{asset('js/bootstrap-datepicker.js')}}"></script>
		<script src="{{asset('js/jquery.timepicker.min.js')}}"></script>
		<script src="{{asset('js/scrollax.min.js')}}"></script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
		<script src="{{asset('js/google-map.js')}}"></script>
		<script src="{{asset('js/main.js')}}"></script>

</body>
</html>