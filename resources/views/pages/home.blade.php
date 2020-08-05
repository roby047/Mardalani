@extends('layouts.app')

@section('title')
	Mardalani
@endsection

@section('content')
	<!-- Header -->
  <header class="text-center">
    <h1>Explore The Beautiful World As 
      <br>
      Easy One Click
    </h1>
    <p class="mt-3">You Will See beautiful 
      <br>
      moments you never see before
    </p>
    	<a href="#" class="btn btn-get-started px-4 mt-4">Get Started</a>
  </header>


	<!-- Main -->
	<main>
		<div class="container">
			<div class="section-stats row justify-content-center">
				<div class="col-3 col-md-2 stats-detail">
					<h2>20K</h2>
					<p>Anggota</p>
				</div>
				<div class="col-3 col-md-2 stats-detail">
					<h2>72</h2>
					<p>Kabupaten</p>
				</div>
				<div class="col-3 col-md-2 stats-detail">
					<h2>+200</h2>
					<p>Tempat Wisata</p>
				</div>
				<div class="col-3 col-md-2 stats-detail">
					<h2>+300</h2>
					<p>Travel</p>
				</div>
			</div>
		</div>

		<section class="section-popular" id="popular">
			<div class="container">
				<div class="row">
					<div class="col text-center section-popular-heading">
						<h2>Wisata Sumut</h2>
						<p>Jelajahi setiap wilayah Sumatera Utara
							<br>
							dan Temukan Pengalaman Luar Biasa
						</p>
					</div>
				</div>
			</div>
		</section>

		<!-- section-popular-content -->
		<section class="section-popular-content" id="popular-content">
			<div class="container">
				<div class="section-popular-travel row justify-content-center">
					<div class="col-sm-6 col-md-4 col-lg-3">
						<div class="card-travel text-center d-flex flex-column" style="background-image: url('frontend/images/popular-1.jpg')">
							<div class="travel-country">Mesjid Raya</div>
							<div class="travel-location">Medan</div>
							<div class="travel-button mt-auto">
								<a href="{{ route('Detail')}}" class="btn btn-travel-details px-4">
									Detail
								</a>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-4 col-lg-3">
						<div class="card-travel text-center d-flex flex-column" style="background-image: url('frontend/images/popular-2.jpg')">
							<div class="travel-country">Pantai Cermin</div>
							<div class="travel-location">Tebing Tinggi</div>
							<div class="travel-button mt-auto">
								<a href="{{ route('Detail')}}" class="btn btn-travel-details px-4">
									Detail
								</a>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-4 col-lg-3">
						<div class="card-travel text-center d-flex flex-column" style="background-image: url('frontend/images/popular-3.jpg')">
							<div class="travel-country">Brastagi</div>
							<div class="travel-location">Kabanjahe</div>
							<div class="travel-button mt-auto">
								<a href="{{ route('Detail')}}" class="btn btn-travel-details px-4">
									Detail
								</a>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-4 col-lg-3">
						<div class="card-travel text-center d-flex flex-column" style="background-image: url('frontend/images/popular-4.jpg')">
							<div class="travel-country">Danau Toba</div>
							<div class="travel-location">Parapat</div>
							<div class="travel-button mt-auto">
								<a href="{{ route('Detail')}}" class="btn btn-travel-details px-4">
									Detail
								</a>
							</div>
						</div>
					</div>

				</div>
			</div>
		</section>

		<section class="section-network" id="networks">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<h2>Our Networks</h2>
						<p>	Companies Are Trusted Us
							<br />
							more just than a trip
						</p>
					</div>
					<div class="col-md-8 text-center">
							<img src="{{ url('frontend/images/partner.png')}}" alt="Logo-Partner">
					</div>			
				</div>
			</div>
		</section>

		<section class="section-testimonial-heading" id="testimonialHeading">
			<div class="container">
				<div class="row">
					<div class="col text-center">
						<h2>They Loving US</h2>
						<p>Moments were giving them
							<br>
							the best experience
						</p>
					</div>
				</div>
			</div>

		</section>

		<section class="section section-testimonial-content">
			<div class="container">
				<div class="section-popular-travel row justify-content-center">
					<div class="col-sm-6 col-md-6 col-lg-4">
						<div class="card card-testimonial text-center">
							<div class="testimonial-content">
								<img src="{{ url('frontend/images/testimonial-1.png')}}" alt="User" class="mb-4 rounded-circle">
								<h3 class="mb-">Roby Yetsun</h3>
								<p class="testimonial">
									Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odio illo rem dolore velit voluptate nemo voluptas maiores dolores sit optio iure accusamus nesciunt debitis praesentium doloribus, possimus quo atque architecto!
								</p>
							</div>
							<hr/>
							<p class="trip-to mt-">
								Trip to Brastagi
							</p>
						</div>
					</div>
					<div class="col-sm-6 col-md-6 col-lg-4">
						<div class="card card-testimonial text-center">
							<div class="testimonial-content">
								<img src="{{ url('frontend/images/testimonial-2.png')}}" alt="User" class="mb-4 rounded-circle">
								<h3 class="mb-">Roby Yetsun</h3>
								<p class="testimonial">
									Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odio illo rem dolore velit voluptate nemo voluptas maiores dolores sit optio iure accusamus nesciunt debitis praesentium doloribus, possimus quo atque architecto!
								</p>
							</div>
							<hr/>
							<p class="trip-to mt-">
								Trip to Brastagi
							</p>
						</div>
					</div>
					<div class="col-sm-6 col-md-6 col-lg-4">
						<div class="card card-testimonial text-center">
							<div class="testimonial-content">
								<img src="{{ url('frontend/images/testimonial-3.png')}}" alt="User" class="mb-4 rounded-circle">
								<h3 class="mb-">Roby Yetsun</h3>
								<p class="testimonial">
									Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odio illo rem dolore velit voluptate nemo voluptas maiores dolores sit optio iure accusamus nesciunt debitis praesentium doloribus, possimus quo atque architecto!
								</p>
							</div>
							<hr/>
							<p class="trip-to mt-">
								Trip to Brastagi
							</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12 text-center">
						<a href="#" class="btn btn-need-help px-4 mt-4 mx-1">Need Help</a>
						<a href="" class="btn btn-get-started px-4 mt-4 mx-1">Get Started</a>
					</div>
				</div>
			</div>
		</section>
	</main>
@endsection