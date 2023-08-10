@extends('layout')

@section('content')

@php
$page = "Резервишите Сто"
@endphp
<x-hero-page-card :page="$page" />



<section class="ftco-section ftco-wrap-about ftco-no-pb ftco-no-pt">
	<div class="container">
		<div class="row no-gutters">
			<div class="col-sm-12 p-4 p-md-5 d-flex align-items-center justify-content-center bg-primary">

				<form method="POST" action="/reservation" class="appointment-form">
					@csrf
					<h3 class="mb-3">Резервишите Ваш Сто</h3>
					<div class="row justify-content-center">
						<div class="col-md-4">
							<div class="form-group">
								<input name="name" type="name" class="form-control" placeholder="Име">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<input name="email" type="email" class="form-control" placeholder="И-мејл">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<input name="telephone" type="text" class="form-control" placeholder="Телефон">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<div class="input-wrap">
									<div class="icon"><span class="fa fa-calendar"></span></div>
									<input type="text" class="form-control book_date" placeholder="Датум"
										name="date">
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<div class="input-wrap">
									<div class="icon"><span class="fa fa-clock-o"></span></div>
									<input type="text" class="form-control book_time" placeholder="Вријеме"
										name="time">
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<div class="form-field">
									<div class="select-wrap">
										<div class="icon"><span class="fa fa-chevron-down"></span></div>
										<select name="guestNum" id="" class="form-control">
											<option disabled>Број гостију</option>
											<option value="1" style="color: black">1</option>
											<option value="2" style="color: black">2</option>
											<option value="3" style="color: black">3</option>
											<option value="4" style="color: black">4</option>
											<option value="5" style="color: black">5</option>
										</select>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<input type="submit" value="Резервишите" class="btn btn-white py-3 px-4">
							</div>
						</div>
					</div>
				</form>

			</div>
		</div>
	</div>
</section>



@endsection