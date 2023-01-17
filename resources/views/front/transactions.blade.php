@extends('layouts.master')
@section('content')
<div class="content-wrapper">
	<div class="breadcrumb-wrap bg-spring">
		<img src="{{asset('front_template/assets/img/breadcrumb/br-shape-1.png')}}" alt="Image" class="br-shape-one xs-none">
		<img src="{{asset('front_template/assets/img/breadcrumb/br-shape-2.png')}}" alt="Image" class="br-shape-two xs-none">
		<img src="{{asset('front_template/assets/img/breadcrumb/br-shape-3.png')}}" alt="Image" class="br-shape-three moveHorizontal sm-none">
		<img src="{{asset('front_template/assets/img/breadcrumb/br-shape-4.png')}}" alt="Image" class="br-shape-four moveVertical sm-none">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-7 col-md-8 col-sm-8">
					<div class="breadcrumb-title">
						<h2>Mone  Transfer</h2>
						<ul class="breadcrumb-menu list-style">
							<li><a href="index.html">My Account </a></li>
							<li>Money Transfer</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-5 col-md-4 col-sm-4 xs-none">
					<div class="breadcrumb-img">
						<img src="{{asset('front_template/assets/img/breadcrumb/br-shape-5.png')}}" alt="Image" class="br-shape-five animationFramesTwo">
						<img src="{{asset('front_template/assets/img/breadcrumb/br-shape-6.png')}}" alt="Image" class="br-shape-six bounce">
						<img src="{{asset('front_template/assets/img/breadcrumb/breadcrumb-3.png')}}" alt="Image">
					</div>
				</div>
			</div>
		</div>
	</div>
	<section class="ptb-100">
		<div class="container">
			<div class="row">
				<div class="col-lg-3">
					<div class="sidebar">
						@include('layouts.partials.sidemenu')
					</div>
				</div>
				<div class="col-lg-9">
					<div class="card" style="">
						<div class="card-body">
							<section class="account-wrap ptb-10">
								<div class="container">
									<div class="section-title style1 text-center mb-40">
										<span>Transaction History</span>
										<h2>All Transactions</h2>
									</div>
									<div class="row">
                                        <div class="col-md-12">
										<table class="table">
											<thead>
												<tr>
													<th scope="col">#</th>
													<th scope="col">Date</th>
													<th scope="col">Sender</th>
													<th scope="col">Receiver</th>
													<th scope="col">Type</th>
													<th scope="col">Amount</th>
													<th scope="col">Million</th>
												</tr>
											</thead>
											<tbody>
												<tr>
												<th scope="row">1</th>
												<td>January-17-2023</td>
												<td>Mr. Ebrahimovich Gomez</td>
												<td>Mr. Sri Biplob Chanda Das</td>
												<td>Money Received</td>
												<td>US$ 481164.60 </td>
												<td>US$ 0.4811646 </td>
												</tr>
											</tbody>
											</table>
										</div>
									</div>				
								</div>
							</section>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
@endsection