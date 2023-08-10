@extends('layout')

@section('content')

@php
$page = "Мени"
@endphp
<x-hero-page-card :page="$page" />


<section class="ftco-section">
	<div class="container">
		<div class="row justify-content-center mb-5 pb-2">
			<div class="col-md-7 text-center heading-section ftco-animate">
				<span class="subheading">Специјалитети</span>
				<h2 class="mb-4">Наш мени</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 col-lg-4">
				<div class="menu-wrap">
					<div class="heading-menu text-center ftco-animate">
						<h3>Доручак</h3>
					</div>

					@foreach($menu as $item)
						@if($item->category == 'Доручак')
							<x-menu-item-card :item="$item" />
						@endif
					@endforeach

					<span class="flat flaticon-bread" style="left: 0;"></span>
					<span class="flat flaticon-breakfast" style="right: 0;"></span>
				</div>
			</div>

			<div class="col-md-6 col-lg-4">
				<div class="menu-wrap">
					<div class="heading-menu text-center ftco-animate">
						<h3>Ручак</h3>
					</div>
					
					@foreach($menu as $item)
						@if($item->category == 'Ручак')
							<x-menu-item-card :item="$item" />
						@endif
					@endforeach
					
					<span class="flat flaticon-pizza" style="left: 0;"></span>
					<span class="flat flaticon-chicken" style="right: 0;"></span>
				</div>
			</div>

			<div class="col-md-6 col-lg-4">
				<div class="menu-wrap">
					<div class="heading-menu text-center ftco-animate">
						<h3>Специјалитети</h3>
					</div>
					
					@foreach($menu as $item)
						@if($item->category == 'Специјалитети')
							<x-menu-item-card :item="$item" />
						@endif
					@endforeach
					

					<span class="flat flaticon-omelette" style="left: 0;"></span>
					<span class="flat flaticon-burger" style="right: 0;"></span>
				</div>
			</div>

			<!--  -->
			<div class="col-md-6 col-lg-4">
				<div class="menu-wrap">
					<div class="heading-menu text-center ftco-animate">
						<h3>Дезерти</h3>
					</div>
					<div class="menus d-flex ftco-animate">
						<div class="menu-img img" style="background-image: url(images/dessert-1.jpg);"></div>
						<div class="text">
							<div class="d-flex">
								<div class="one-half">
									<h3>Beef Roast Source</h3>
								</div>
								<div class="one-forth">
									<span class="price">$29</span>
								</div>
							</div>
							<p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span>
							</p>
						</div>
					</div>
					<div class="menus d-flex ftco-animate">
						<div class="menu-img img" style="background-image: url(images/dessert-2.jpg);"></div>
						<div class="text">
							<div class="d-flex">
								<div class="one-half">
									<h3>Beef Roast Source</h3>
								</div>
								<div class="one-forth">
									<span class="price">$29</span>
								</div>
							</div>
							<p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span>
							</p>
						</div>
					</div>
					<div class="menus d-flex ftco-animate">
						<div class="menu-img img" style="background-image: url(images/dessert-3.jpg);"></div>
						<div class="text">
							<div class="d-flex">
								<div class="one-half">
									<h3>Beef Roast Source</h3>
								</div>
								<div class="one-forth">
									<span class="price">$29</span>
								</div>
							</div>
							<p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span>
							</p>
						</div>
					</div>
					<div class="menus d-flex ftco-animate">
						<div class="menu-img img" style="background-image: url(images/dessert-4.jpg);"></div>
						<div class="text">
							<div class="d-flex">
								<div class="one-half">
									<h3>Beef Roast Source</h3>
								</div>
								<div class="one-forth">
									<span class="price">$29</span>
								</div>
							</div>
							<p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span>
							</p>
						</div>
					</div>
					<div class="menus border-bottom-0 d-flex ftco-animate">
						<div class="menu-img img" style="background-image: url(images/dessert-5.jpg);"></div>
						<div class="text">
							<div class="d-flex">
								<div class="one-half">
									<h3>Beef Roast Source</h3>
								</div>
								<div class="one-forth">
									<span class="price">$29</span>
								</div>
							</div>
							<p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span>
							</p>
						</div>
					</div>
					<span class="flat flaticon-cupcake" style="left: 0;"></span>
					<span class="flat flaticon-ice-cream" style="right: 0;"></span>
				</div>
			</div>

			<div class="col-md-6 col-lg-4">
				<div class="menu-wrap">
					<div class="heading-menu text-center ftco-animate">
						<h3>Винска Карта</h3>
					</div>
					<div class="menus d-flex ftco-animate">
						<div class="menu-img img" style="background-image: url(images/wine-1.jpg);"></div>
						<div class="text">
							<div class="d-flex">
								<div class="one-half">
									<h3>Beef Roast Source</h3>
								</div>
								<div class="one-forth">
									<span class="price">$29</span>
								</div>
							</div>
							<p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span>
							</p>
						</div>
					</div>
					<div class="menus d-flex ftco-animate">
						<div class="menu-img img" style="background-image: url(images/wine-2.jpg);"></div>
						<div class="text">
							<div class="d-flex">
								<div class="one-half">
									<h3>Beef Roast Source</h3>
								</div>
								<div class="one-forth">
									<span class="price">$29</span>
								</div>
							</div>
							<p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span>
							</p>
						</div>
					</div>
					<div class="menus d-flex ftco-animate">
						<div class="menu-img img" style="background-image: url(images/wine-3.jpg);"></div>
						<div class="text">
							<div class="d-flex">
								<div class="one-half">
									<h3>Beef Roast Source</h3>
								</div>
								<div class="one-forth">
									<span class="price">$29</span>
								</div>
							</div>
							<p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span>
							</p>
						</div>
					</div>
					<div class="menus d-flex ftco-animate">
						<div class="menu-img img" style="background-image: url(images/wine-4.jpg);"></div>
						<div class="text">
							<div class="d-flex">
								<div class="one-half">
									<h3>Beef Roast Source</h3>
								</div>
								<div class="one-forth">
									<span class="price">$29</span>
								</div>
							</div>
							<p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span>
							</p>
						</div>
					</div>
					<div class="menus d-flex ftco-animate">
						<div class="menu-img img" style="background-image: url(images/wine-5.jpg);"></div>
						<div class="text">
							<div class="d-flex">
								<div class="one-half">
									<h3>Beef Roast Source</h3>
								</div>
								<div class="one-forth">
									<span class="price">$29</span>
								</div>
							</div>
							<p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span>
							</p>
						</div>
					</div>
					<div class="menus d-flex ftco-animate">
						<div class="menu-img img" style="background-image: url(images/wine-6.jpg);"></div>
						<div class="text">
							<div class="d-flex">
								<div class="one-half">
									<h3>Beef Roast Source</h3>
								</div>
								<div class="one-forth">
									<span class="price">$29</span>
								</div>
							</div>
							<p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span>
							</p>
						</div>
					</div>
					<div class="menus d-flex ftco-animate">
						<div class="menu-img img" style="background-image: url(images/wine-7.jpg);"></div>
						<div class="text">
							<div class="d-flex">
								<div class="one-half">
									<h3>Beef Roast Source</h3>
								</div>
								<div class="one-forth">
									<span class="price">$29</span>
								</div>
							</div>
							<p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span>
							</p>
						</div>
					</div>
					<div class="menus border-bottom-0 d-flex ftco-animate">
						<div class="menu-img img" style="background-image: url(images/wine-8.jpg);"></div>
						<div class="text">
							<div class="d-flex">
								<div class="one-half">
									<h3>Beef Roast Source</h3>
								</div>
								<div class="one-forth">
									<span class="price">$29</span>
								</div>
							</div>
							<p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span>
							</p>
						</div>
					</div>
					<span class="flat flaticon-wine" style="left: 0;"></span>
					<span class="flat flaticon-wine-1" style="right: 0;"></span>
				</div>
			</div>

			<div class="col-md-6 col-lg-4">
				<div class="menu-wrap">
					<div class="heading-menu text-center ftco-animate">
						<h3>Пића</h3>
					</div>
					<div class="menus d-flex ftco-animate">
						<div class="menu-img img" style="background-image: url(images/drink-1.jpg);"></div>
						<div class="text">
							<div class="d-flex">
								<div class="one-half">
									<h3>Beef Roast Source</h3>
								</div>
								<div class="one-forth">
									<span class="price">$29</span>
								</div>
							</div>
							<p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span>
							</p>
						</div>
					</div>
					<div class="menus d-flex ftco-animate">
						<div class="menu-img img" style="background-image: url(images/drink-2.jpg);"></div>
						<div class="text">
							<div class="d-flex">
								<div class="one-half">
									<h3>Beef Roast Source</h3>
								</div>
								<div class="one-forth">
									<span class="price">$29</span>
								</div>
							</div>
							<p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span>
							</p>
						</div>
					</div>
					<div class="menus d-flex ftco-animate">
						<div class="menu-img img" style="background-image: url(images/drink-3.jpg);"></div>
						<div class="text">
							<div class="d-flex">
								<div class="one-half">
									<h3>Beef Roast Source</h3>
								</div>
								<div class="one-forth">
									<span class="price">$29</span>
								</div>
							</div>
							<p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span>
							</p>
						</div>
					</div>
					<div class="menus d-flex ftco-animate">
						<div class="menu-img img" style="background-image: url(images/drink-4.jpg);"></div>
						<div class="text">
							<div class="d-flex">
								<div class="one-half">
									<h3>Beef Roast Source</h3>
								</div>
								<div class="one-forth">
									<span class="price">$29</span>
								</div>
							</div>
							<p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span>
							</p>
						</div>
					</div>
					<div class="menus d-flex ftco-animate">
						<div class="menu-img img" style="background-image: url(images/drink-5.jpg);"></div>
						<div class="text">
							<div class="d-flex">
								<div class="one-half">
									<h3>Beef Roast Source</h3>
								</div>
								<div class="one-forth">
									<span class="price">$29</span>
								</div>
							</div>
							<p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span>
							</p>
						</div>
					</div>
					<div class="menus d-flex ftco-animate">
						<div class="menu-img img" style="background-image: url(images/drink-6.jpg);"></div>
						<div class="text">
							<div class="d-flex">
								<div class="one-half">
									<h3>Beef Roast Source</h3>
								</div>
								<div class="one-forth">
									<span class="price">$29</span>
								</div>
							</div>
							<p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span>
							</p>
						</div>
					</div>
					<div class="menus border-bottom-0 d-flex ftco-animate">
						<div class="menu-img img" style="background-image: url(images/drink-7.jpg);"></div>
						<div class="text">
							<div class="d-flex">
								<div class="one-half">
									<h3>Beef Roast Source</h3>
								</div>
								<div class="one-forth">
									<span class="price">$29</span>
								</div>
							</div>
							<p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span>
							</p>
						</div>
					</div>
					<span class="flat flaticon-wine" style="left: 0;"></span>
					<span class="flat flaticon-wine-1" style="right: 0;"></span>
				</div>
			</div>
		</div>
	</div>

</section>




<section class="ftco-section ftco-wrap-about bg-primary ftco-no-pb ftco-no-pt">
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
									<input type="text" class="form-control book_date" placeholder="Датум" name="date">
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<div class="input-wrap">
									<div class="icon"><span class="fa fa-clock-o"></span></div>
									<input type="text" class="form-control book_time" placeholder="Вријеме" name="time">
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