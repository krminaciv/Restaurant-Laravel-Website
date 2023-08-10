@extends('layout')

@section('content')

     <section class="hero-wrap">
          <div class="home-slider owl-carousel js-fullheight">
               <div class="slider-item js-fullheight" style="background-image:url(images/bg_1.jpg);">
                    <div class="overlay"></div>
                    <div class="container">
                         <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
                              <div class="col-md-12 ftco-animate">
                                   <div class="text w-100 mt-5 text-center">
                                        <span class="subheading">Ресторан Диверзија</h2></span>
                                        <h1>Кухамо од</h1>
                                        <span class="subheading-2">1958</span>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>

               <div class="slider-item js-fullheight" style="background-image:url(images/bg_2.jpg);">
                    <div class="overlay"></div>
                    <div class="container">
                         <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
                              <div class="col-md-12 ftco-animate">
                                   <div class="text w-100 mt-5 text-center">
                                        <span class="subheading">Ресторан Диверзија</h2></span>
                                        <h1>Добродошли</h1>
                                        <span class="subheading-2 sub">Храна & Пиће</span>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </section>


     <section class="ftco-section ftco-wrap-about ftco-no-pb ftco-no-pt">
		<div class="container">
			<div class="row no-gutters">
				<div class="col-sm-4 p-4 p-md-5 d-flex align-items-center justify-content-center bg-primary">
					<form method="POST" action="/reservation" class="appointment-form">
						@csrf
						<h3 class="mb-3">Резервишите сто</h3>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<input type="name" class="form-control" placeholder="Име" name="name">
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<input type="email" class="form-control" placeholder="И-мејл" name="email">
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Телефон" name="telephone">
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<div class="input-wrap">
										<div class="icon"><span class="fa fa-calendar"></span></div>
										<input type="text" class="form-control book_date" placeholder="Датум" name="date">
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<div class="input-wrap">
										<div class="icon"><span class="fa fa-clock-o"></span></div>
										<input type="text" class="form-control book_time" placeholder="Вријеме" name="time">
									</div>
								</div>
							</div>
							<div class="col-md-12">
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
							<div class="col-md-12">
								<div class="form-group">
									<input type="submit" value="Резервишите" class="btn btn-white py-3 px-4">
								</div>
							</div>
						</div>
					</form>
				</div>
				<div class="col-sm-8 wrap-about py-5 ftco-animate img" style="background-image: url(images/about.jpg);">
					<div class="row pb-5 pb-md-0">
						<div class="col-md-12 col-lg-7">
							<div class="heading-section mt-5 mb-4">
								<div class="pl-lg-3 ml-md-5">
									<span class="subheading">О нама</span>
									<h2 class="mb-4">Добродошли у Диверзију</h2>
								</div>
							</div>
							<div class="pl-lg-3 ml-md-5">
								<p>Диверзија је породични ресторан који је срцем и душом посвећен пружању изузетног гурманског доживљаја свима који нас посете. Отворени смо са једним циљем - да Вам приуждимо место где ћете уживати у незаборавним моментима окружени укусима који мамију осмех на лице.
                                        <br>     Наши врхунски кувари с посебном пажњом бирају најквалитетније састојке из домаћих и светских извора, што нам омогућава да свако јело припремимо са љубављу и пажњом, као за сопствену породицу.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


     <section class="ftco-section ftco-intro" style="background-image: url(images/bg_3.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<span>Резервишите</span>
					<h2>Приватне вечере &amp; Славља</h2>
				</div>
			</div>
		</div>
	</section>


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
								<p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
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
								<p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
							</div>
						</div>
						<div class="menus border-bottom-0 d-flex ftco-animate">
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
								<p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
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
								<p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
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
								<p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
							</div>
						</div>
						<div class="menus border-bottom-0 d-flex ftco-animate">
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
								<p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
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
								<p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
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
								<p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
							</div>
						</div>
						<div class="menus border-bottom-0 d-flex ftco-animate">
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
								<p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
							</div>
						</div>
						<span class="flat flaticon-wine" style="left: 0;"></span>
						<span class="flat flaticon-wine-1" style="right: 0;"></span>
					</div>
				</div>
			</div>
		</div>

	</section>


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
						<p>Добродошли у "Диверзију" - мјесто где ћете уживати у укусима и моментима који остају у сећању!</p>
						<p><a href="/menu" class="btn btn-primary">Сазнај више</a></p>
					</div>
				</div>
			</div>
		</div>
	</section>


     <section class="ftco-section bg-light">
		<div class="container">
			<div class="row justify-content-center mb-5 pb-2">
				<div class="col-md-7 text-center heading-section ftco-animate">
					<span class="subheading">Блог</span>
					<h2 class="mb-4">Најновије</h2>
				</div>
			</div>
			<div class="row">
				
				@foreach($blog as $item)
					<x-blog-card :blog="$item" />
				@endforeach
				
			</div>
		</div>
	</section>



@endsection