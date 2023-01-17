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
						@include('layouts.partials.sidemenu')
					</div>
				</div>
				<div class="col-lg-9">
					<div class="card" style="">
						<div class="card-body">
							@php
                               //dd($data->name);
                            @endphp

                            

                            <section class="account-wrap ptb-100">
    <div class="container">
        <div class="section-title style1 text-center mb-40">
            <span>Account Opening Form</span>
            <h2>Apply For Account</h2>
        </div>
        <form action="{{route('front.openaccount')}}" class="account-form" method="POST" enctype="multipart/form-data">
        @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">Full name</label>
                        <input type="text" id="name" name="namnamee" value="{{$data->name}}"/>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <img src="{{$data->photo}}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="number" id="phone" name="phone"  value="{{$data->phone}}"/>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" id="email" name="email"  value="{{$data->phone}}"/>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="date_of_birth">Date Of Birth</label>
                        <input type="date" id="date_of_birth" name="date_of_birth" value="{{$data->phone}}" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="gender">Gender</label>
                        <select name="gender" id="gender">
                            <option value="Male">Male </option>
                            <option value="Female">Female </option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="fathers_name">Father's anme</label>
                        <input type="text" id="fathers_name" name="fathers_name"  value="{{$data->phone}}"/>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="mothers_name">Mother's anme</label>
                        <input type="text" id="mothers_name" name="mothers_name" value="{{$data->phone}}"/>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="marital_status">Marital Status</label>
                        <select name="marital_status" id="marital_status">
                            <option value="0">Married</option>
                            <option value="12">Unmarried</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="account_type">Account Type</label>
                        <select name="account_type" id="account_type">
                            <option value="Personal">Personal</option>
                            <option value="Business">Business</option>
                            <option value="Deposit">Deposit</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="nationality">Nationality/Country</label>
                        <input type="text" id="nationality" name="nationality" value="{{$data->phone}}" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="nid_number">National ID Number (or fill Passport)</label>
                        <input type="text" id="nid_number" name="nid_number"  value="{{$data->phone}}"/>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="passport_number">Passport (or Fill National ID Number) </label>
                        <input type="text" id="passport_number" name="passport_number" value="{{$data->phone}}"/>
                    </div>
                </div>
                <div class="col-md-612">
                    <div class="form-group">
                        <label for="address">Address</label>
                        <textarea name="address" id="address" cols="30" rows="10">{{$data->phone}}</textarea>
                    </div>
                </div>
               <div class="col-md-12">
                    <h4>Nomini Information</h4>
                </div> 
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="nomini_name">Nomini Name</label>
                        <input type="text" id="nomini_name" name="nomini_name" value="{{$data->phone}}"/>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="nomini_photo">Nomini Photo</label>
                        <input type="file" name="nomini_photo" id="nomini_photo" value="{{$data->phone}}" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="nomini_address">Nomini Address</label>
                        <input type="text" name="nomini_address" id="nomini_address"value="{{$data->phone}}" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="state">Nomini National ID Number (or fill Passport)</label>
                        <input type="text" name="nomini_nid" id="state" value="{{$data->phone}}"/>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="nomini_passport"> Passport (or fill National ID Number)</label>
                        <input type="text" name="nomini_passport" id="nomini_passport" value="{{$data->phone}}"/>
                    </div>
                </div>
                <!-- <div class="col-md-6">
                    <div class="form-group">
                        <label for="zip">Nomini Phone</label>
                        <input type="text" name="nomini_phone" id="nomini_phone" />
                    </div>
                </div> -->
                <div class="col-md-12">
                    <button class="btn style1 w-100 d-block">Update Account</button>
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