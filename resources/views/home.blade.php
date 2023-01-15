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
						<h2>My Account</h2>
						<ul class="breadcrumb-menu list-style">
							<li><a href="index.html">Home </a></li>
							<li>My Account</li>
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
						<ul>
							<li><a> My Account </a> </li>
							<li><a> My Profile </a></li>
							<li><a> Money Transfer </a> </li>
							<li><a> Transaction History </a> </li>
						</ul>
					</div>
				</div>
				<div class="col-lg-9">
					<div class="card" style="">
						<div class="card-body">
							<div style="display: flex; justify-content: space-between">
								<div> <!--left-->
									<div class="card-title" style="color: yellowgreen;
									font-family: unset;
									font-size: 1.4rem;">
										Welcome   {{ Auth::user()->name }} !
									</div>
									<div class="card-text" style=" color: #ccc;
																	font-family: unset;
																}">Personal Account
									</div>
									<div> AC # 254854785 </div>
									<br/>
									<div>
										<a href="" class="" style=" 
																padding: 10px;
																border-radius: 7px;
																background: #dc3545;
																color: #fff;"> Transfer Money </a>
									</div>
								</div>
								<div style=""> <!--right-->
									<div class="text-center">
										<img src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp" class="rounded-circle" style="width: 150px;" alt="Avatar" />
									</div>	
									<div class="text-center">
									Balance
										<h6 style="	font-family: unset;
    color: #036A1F;
    font-size: 22px;">US$ 0.6 Million</h6>
									</div>						
								</div>		
							</div>		
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</section>
</div>
@endsection