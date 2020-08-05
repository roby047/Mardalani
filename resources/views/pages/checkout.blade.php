@extends('layouts.checkout')

@section('title')
	checkout
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
								<li class="breadcrumb-item">
									Details
								</li>
								<li class="breadcrumb-item active">
									Checkout
								</li>
							</ol>
						</nav>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-8 pl-lg-0">
						<div class="card card-details">
							<h1>Who is Going</h1>
							<br>
							<p>Trip to Ubud, Bali, Indonesia</p>
							<div class="attendee">
								<table class="table table-responsive-sm text-center">
									<thead>
										<tr>
											<td scope="col">Pictures</td>
											<td scope="col">Name</td>
											<td scope="col">Nationality</td>
											<td scope="col">Visa</td>
											<td scope="col">Passport</td>
											<td scope="col"></td>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>
												<img src="{{ url('frontend/images/avatar-1.png')}}" height="60" alt="">
											</td>
											<td class="align-middle">Roby</td>
											<td class="align-middle">Indonesia</td>
											<td class="align-middle">N/A</td>
											<td class="align-middle">Active</td>
											<td>
												<a href="#">
													<img src="{{ url('frontend/images/ic_remove.png')}}" alt="">
												</a>		
											</td>
										</tr>
										<tr>
											<td>
												<img src="{{ url('frontend/images/avatar-2.png')}}" height="60" alt="">
											</td>
											<td class="align-middle">Yetsun</td>
											<td class="align-middle">Indonesia</td>
											<td class="align-middle">N/A</td>
											<td class="align-middle">Active</td>
											<td>
												<a href="#">
													<img src="{{ url('frontend/images/ic_remove.png')}}" alt="">
												</a>		
											</td>									
										</tr>	
									</tbody>
								</table>
							</div>
							<div class="member mt-3">
								<h2>Add Member</h2>
								<form class="form-inline">
									<label for="inputUserName" class="sr-only">Name</label>
									<input type="text" class="form-control mb-2 mr-sm-3" id="inputUserName" placeholder="UserName">
									<select class="custom-select mb-2 mr-sm-3">
										<option value="selected-value">Visa</option>
										<option value="2">30</option>
										<option value="3">N/A</option>
									</select>			
									 <label for="doePassport" class="sr-only">DOE Passport</label>
					                <div class="input-group mb-2 mr-sm-2">
					                  <input
					                    type="text"
					                    name="doe_passport"
					                    class="form-control datepicker"
					                    id="doePassport"
					                    placeholder="DOE Passport"
					                  />
					                </div>
                    <button type="submit" class="btn btn-add-now mb-2 px-4">
                      Add Now
                    </button>
                  </form>
                  <h3 class="mt-2 mb-0">Note</h3>
                  <p class="disclaimer mb-0">
                    You are only able to invite member that has registered in
                    Nomads.
                  </p>

								</form>
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
                <h3 class="bold">Checkout Information</h3>
                <table class="trip-information">
                  <tr>
                    <th width="50%">Members</th>
                    <td width="50%" class="text-right"> 2 person</td>
                  </tr>
                  <tr>
                    <th width="50%">Additional Visa</th>
                    <td width="50%" class="text-right">$190,00</td>
                  </tr>
                  <tr>
                    <th width="50%">Trip Price</th>
                    <td width="50%" class="text-right">$80,00 / person</td>
                  </tr>
                  <tr>
                    <th width="50%">Sub Total</th>
                    <td width="50%" class="text-right">$280,00 </td>
                  </tr>
                  <tr>
                    <th width="50%">Total (+Unique Code)</th>
                    <td width="50%" class="text-right text-total">
                      <span class="text-blue">$279,</span>
                      <span class="text-orange">33</span>
                    </td>
                  </tr>
                </table>
                <hr/>
                <h2>Payment Instruction</h2>
                <p class="payment-instruction">
                  Please complete your payment before to continue the wonderful trip
                </p>
                <div class="bank">
                  <div class="bank-item pb-3">
                    <div class="description">
                      <img src="{{ url('frontend/images/ic_bank.png')}} " alt="" class="bank-image">
                      <h3>PT Nomads ID</h3>
                      <p>
                        085277116949
                        <br>
                        Bank Central Asia
                      </p>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="bank-item pb-3">
                    <div class="description">
                      <img src="{{ url('frontend/images/ic_bank.png')}} " alt="" class="bank-image">
                      <h3>PT Nomads ID</h3>
                      <p>
                        085270942350
                        <br>
                        Bank RAkyat Indonesia
                      </p>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                </div>

              </div>
              <div class="join-container">
                <a href="{{ route('Checkout-success')}}" class="btn btn-block btn-join-now mt-3 py-3">
                  I Have Made a Payment
                </a>
              </div>
              <div class="text-center">
                <a href="{{ route('Detail')}}" class="text-muted">Cancel Booking</a>
              </div>
            </div>
          </div>
        </div>
      </section>
	</main>	
@endsection

@push('prepend-style')
	<link rel="stylesheet" href="{{ url('frontend/libraries/gijgo/css/gijgo.min.css') }}">
@endpush

@push('prepend-script')
	<script src="{{ url('frontend/libraries/gijgo/js/gijgo.min.js') }}"></script>
	<script>
    $(document).ready(function() {
      $('.datepicker').datepicker({
        format: 'yyyy-mm-dd',
        uiLibrary: 'bootstrap4',
        icons: {
          rightIcon: '<img src="{{ url('frontend/images/ic_doe.png') }}" />'
        }
      });
    });
	</script>
@endpush