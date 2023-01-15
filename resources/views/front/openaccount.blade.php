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
                        <label for="name">Full name</label>
                        <input type="text" id="name" name="namnamee" />
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
                        <label for="date_of_birth">Date Of Birth</label>
                        <input type="date" id="date_of_birth" name="date_of_birth" />
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
                        <input type="text" id="fathers_name" name="fathers_name" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="mothers_name">Mother's anme</label>
                        <input type="text" id="mothers_name" name="mothers_name" />
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
                        <input type="text" id="nationality" name="nationality" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="nid_number">National ID Number (or fill Passport)</label>
                        <input type="text" id="nid_number" name="nid_number" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="passport_number">Passport (or Fill National ID Number) </label>
                        <input type="text" id="passport_number" name="passport_number" />
                    </div>
                </div>
                <div class="col-md-612">
                    <div class="form-group">
                        <label for="address">Address</label>
                        <textarea name="address" id="address" cols="30" rows="10"></textarea>
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
                        <label for="nomini_photo">Nomini Photo</label>
                        <input type="file" name="nomini_photo" id="nomini_photo" >
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
                        <label for="state">Nomini National ID Number (or fill Passport)</label>
                        <input type="text" name="nomini_nid" id="state" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="nomini_passport"> Passport (or fill National ID Number)</label>
                        <input type="text" name="nomini_passport" id="nomini_passport" />
                    </div>
                </div>
                <!-- <div class="col-md-6">
                    <div class="form-group">
                        <label for="zip">Nomini Phone</label>
                        <input type="text" name="nomini_phone" id="nomini_phone" />
                    </div>
                </div> -->
                <div class="col-md-12">
                    <button class="btn style1 w-100 d-block">Open Account</button>
                </div>
            </div>
        </form>
    </div>
</section>

@endsection