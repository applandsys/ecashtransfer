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
                                <section class="account-wrap ptb-100">
                                    <div class="container">
                                        <div class="section-title style1 text-center mb-40">
                                            <span>Money Transfer Form</span>
                                            <h2>Apply For Transfer</h2>
                                        </div>
                                        <form action="{{route('front.openaccount')}}" class="account-form" method="POST" enctype="multipart/form-data">
                                        @csrf
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="name">Transfer Ac # </label>
                                                        <input type="text" id="name" name="namnamee" />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                <div class="form-group">
                                                        <label for="phone">Amount</label>
                                                        <input type="number" id="phone" name="phone"  value=""/>
                                                    </div>
                                                </div>
                                               
                                                <div class="col-md-12">
                                                    <button class="btn style1 w-100 d-block">Confirm</button>
                                                </div>
                                            </div>
                                        </form>
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