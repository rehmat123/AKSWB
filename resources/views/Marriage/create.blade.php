@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="row">
    <div class="col-md-12">
        <form id="msform" method="post" action="/store">
            <!-- progressbar -->
            <ul id="progressbar">
                <li class="active">Personal Details</li>
                <li>Social Profiles</li>
                <li>Account Setup</li>
            </ul>
            <!-- fieldsets -->
            <fieldset>
                <h2 class="fs-title">Personal Details</h2>
                <h3 class="fs-subtitle">Tell us something more about you</h3>
                <div class="form-group required">
                    <div class="col-md-6">
                        <input type="text" name="first_name" placeholder="First Name"/>
                    </div>
                    <div class="col-md-6">
                        <input type="text" name="last_name" placeholder="Last Name"/>
                    </div>
                </div>
                <div class="form-group required">
                    <div class="col-md-6">
                        <input type="text" name="city" placeholder="city"/>
                    </div>
                    <div class="col-md-6">
                        <input type="text" name="country" placeholder="Country"/>
                    </div>
                </div>
                 <div class="form-group required">
                    <div class="col-md-6">
                        <input type="text" name="phone_no" placeholder="Phone"/>
                    </div>
                    <div class="col-md-6">
                         <input type="text" name="cnic" placeholder="CNIC"/>
                    </div>
                </div>
                <div class="form-group required">
                    <div class="col-md-6">
                        <input type="text" name="Address" placeholder="Permenant Address"/>
                    </div>
                    <div class="col-md-6">
                        <select  name="Gender">
                        <option value="1">Male</option>
                        <option value="2">Female</option>
                        </select>
                    </div>
                </div>
                <div class="form-group required">
                    <div class="col-md-6">
                         <input type="date" name="dob" placeholder="Date"/>
                    </div>
                    <div class="col-md-6">
                         <input type="text" name="jk" placeholder="jamat khana name"/>
                    </div>
                </div>


                <input type="button" name="next" class="next action-button" value="Next"/>
            </fieldset>
            <fieldset>
                <h2 class="fs-title">Social Profiles</h2>
                <h3 class="fs-subtitle">Your presence on the social network</h3>
                <input type="text" name="twitter" placeholder="Twitter"/>
                <input type="text" name="facebook" placeholder="Facebook"/>
                <input type="text" name="gplus" placeholder="Google Plus"/>
                <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                <input type="button" name="next" class="next action-button" value="Next"/>
            </fieldset>
            <fieldset>
                <h2 class="fs-title">Create your account</h2>
                <h3 class="fs-subtitle">Fill in your credentials</h3>
                <input type="text" name="email" placeholder="Email"/>
                <input type="password" name="pass" placeholder="Password"/>
                <input type="password" name="cpass" placeholder="Confirm Password"/>
                <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                <input type="submit" name="submit" class="submit action-button" value="Submit"/>
            </fieldset>

        </form>
    </div>
</div>
    </div>
</div>
@endsection
