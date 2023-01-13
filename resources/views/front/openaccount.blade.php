@extends('layouts.master')
@section('content')
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
                        <label for="fname">Full name</label>
                        <input type="text" id="fname" name="name" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="photo">Passport size Photo</label>
                        <input type="file" id="photo" name="photo" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="number" id="phone" name="phone" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" id="email" name="email" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="dob">Date Of Birth</label>
                        <input type="date" id="dob" name="dob" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="account_type">Gender</label>
                        <select name="account_type" id="account_type">
                            <option value="0">Gender</option>
                            <option value="1">Male </option>
                            <option value="2">Female </option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="pname">Father's anme</label>
                        <input type="text" id="pname" name="fathers_name" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="mname">Mother's anme</label>
                        <input type="text" id="mname" name="mothers_name" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="marry_type">Marital Status</label>
                        <select name="marry_type" id="marry_type">
                            <option value="0">Married</option>
                            <option value="12">Unmarried</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="sname">Account Type</label>
                        <select name="account_type" id="account_type">
                            <option value="0">Personal</option>
                            <option value="1">Business</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="nation">Nationality/Country</label>
                        <input type="text" id="nation" name="nationality" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="ocupation">NID (or fill Passport)</label>
                        <input type="text" id="ocupation" name="nid_number" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="mon">Passport (or Fill NID) </label>
                        <input type="text" id="mon" name="passport_number" />
                    </div>
                </div>
                <div class="col-md-612">
                    <div class="form-group">
                        <label for="soi">Address</label>
                        <textarea name="address" id="address_2" cols="30" rows="10"></textarea>
                    </div>
                </div>
               <div class="col-md-12">
                    <h4>Nomini Information</h4>
                </div> 
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="nomini_name">Nomini Name</label>
                        <input type="text" id="nomini_name" name="nomini_name" />
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="address_2">Nomini Photo</label>
                        <input type="file" name="nomini_name" id="nomini_name" >
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="nomini_address">Nomini Address</label>
                        <input type="text" name="nomini_address" id="nomini_address" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="state">Nomini NID (or fill Passport)</label>
                        <input type="text" name="nomini_nid" id="state" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="state"> Passport (or fill NID)</label>
                        <input type="text" name="nomini_passport" id="state" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="zip">Nomini Phone</label>
                        <input type="text" name="nomini_phone" id="nomini_phone" />
                    </div>
                </div>
              
                <div class="col-md-12">
                    <button class="btn style1 w-100 d-block">Open Account</button>
                </div>
            </div>
        </form>
    </div>
</section>

@endsection