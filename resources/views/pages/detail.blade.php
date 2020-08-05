@extends('layouts.app')

@section('title')
	detail
@endsection

@section('content')
<main>
	<section class="section-details-header"></section>
	<section class="section-details-content">
		<div class="container">
			<div class="row">
				<div class="col p-0">
					<nav>
						<ol class="breadcrumb">
							<li class="breadcrumb-item">
								Paket Travel 
							</li>
							<li class="breadcrumb-item active">
								Details
							</li>
						</ol>
					</nav>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-8 pl-lg-0">
					<div class="card card-details">
						<h1>Nusa Peninda</h1>
						<br>
						<p>REpublic Indonesia Raya</p>
						<div class="gallery">
							<div class="xzoom-container">
									<img src="frontend/images/details.jpg" class="xzoom"
                id="xzoom-default"
                xoriginal="frontend/images/details.jpg"
                >
              </div>
              <div class="xzoom-thumbs">
                <a href="images/details.jpg">
                <img src="frontend/images/details.jpg" class="xzoom-gallery" width="128" xpreview="images/details">
              </a>
              <a href="images/details.jpg">
                <img src="frontend/images/details.jpg" class="xzoom-gallery" width="128" xpreview="images/details">
              </a>
              <a href="images/details.jpg">
                <img src="frontend/images/details.jpg" class="xzoom-gallery" width="128" xpreview="images/details">
              </a>
              <a href="images/details.jpg">
                <img src="frontend/images/details.jpg" class="xzoom-gallery" width="128" xpreview="images/details">
              </a>
              <a href="images/details.jpg">
                <img src="frontend/images/details.jpg" class="xzoom-gallery" width="128" xpreview="images/details">
              </a>
					</div>
						</div>
						<h2>Tentang Wisata</h2>
						<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Qui beatae voluptatem, placeat ea minima dolores tempora accusamus omnis libero. Dolore vel laudantium dignissimos non adipisci facere provident commodi accusamus ut!
						</p>
						<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eos iusto perspiciatis ipsa. Praesentium commodi consectetur reprehenderit porro quaerat neque qui aperiam earum nisi atque. Nam sequi temporibus quos minima non.
						</p>
						<div class="features row">
							<div class="col-md-4">
								<img src="{{ url('frontend/images/ic_event.png')}}" alt="" class="features-images">
								<div class="description">
										<h3>Feature Event</h3>
										<p>Tari Kecak</p>		
								</div>
							</div>
							<div class="col-md-4">
								<img src="{{ url('frontend/images/ic_language.png')}}" alt="" class="features-images">
								<div class="description">
									<h3>Language</h3>
									<p>Bahasa Indoensia</p>
								</div>
							</div>
							<div class="col-md-4">
								<img src="{{ url('frontend/images/ic_foods.png')}}" alt="" class="features-images">
								<div class="description">
									<h3>Foods</h3>
									<p>Local Foods</p>
								</div>
							</div>
						</div>		
					</div>
				</div>
				
					<!-- bagian sebelah kanan -->
					<div class="col-lg-4">
						<div class="card-details card-right">
							<h2>Members are Going</h2>
							<div class="my-2">
								<img src="{{ url('frontend/images/member-1.png')}}" alt="" class="member-image mr-1">
								<img src="{{ url('frontend/images/member-2.png')}}" alt="" class="member-image mr-1">
								<img src="{{ url('frontend/images/member-3.png')}}" alt="" class="member-image mr-1">
								<img src="{{ url('frontend/images/member-4.png')}}" alt="" class="member-image mr-1">
								<img src="{{ url('frontend/images/member-5.png')}}" alt="" class="member-image mr-1">
							</div>
							<hr>
							<h2>Trip Information</h2>
							<table class="trip-information">
								<tbody>
									<tr>
										<th width="50%">Date of Departure</th>
										<td width="50%" class="text-right">22 April 2020</td>
									</tr>
									<tr>
										<th width="50%">Duration</th>
										<td width="50%" class="text-right">4D 3N</td>
									</tr>
									<tr>
										<th width="50%">Type</th>
										<td width="50%" class="text-right">Open Trip</td>
									</tr>
									<tr>
										<th width="50%">Price</th>
										<td width="50%" class="text-right">Rp 3.000.000,-</td>
									</tr>
								</tbody>
							</table>
						</div>
						<div class="join-container">
							<a href="{{ route('Checkout')}}" class="btn btn-block btn-join-now mt-3 py-3">Join Now</a>
						</div>
					</div>
			</div>
		</div>
	</section>		
</main>	
@endsection

@push('prepend-style')
	<link rel="stylesheet" href="{{ url('frontend/libraries/xzoom/xzoom.css')}}">
@endpush

@push('prepend-script')
	<script src="{{ url('frontend/libraries/xzoom/xzoom.min.js') }}"></script>
	<script>
		$(document).ready(function() {
				$('.xzoom, .xzoom-gallery').xzoom({
					zoomWidth: 500,
					title: false,
					tint: '#333',
					Xoffset: 15
				});
			});
	</script>
@endpush