@extends('layouts.layouts')

@section('title', 'Register New Patient')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="iq-card">
                <div class="iq-card-header d-flex justify-content-between">
                    <div class="iq-header-title">
                        <h4 class="card-title">Patient Information</h4>
                    </div>
                </div>
                <div class="iq-card-body">
                    <div class="new-user-info">
                        <form>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="ssn">SSN:</label>
                                    <input type="text" class="form-control" name="ssn" id="ssn" placeholder="SSN">
                                    {{-- <button type="#" class="btn btn-primary">Check</button> --}}
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="checkSSN">.</label><br>
                                    <button type="#" class="btn btn-primary">Check</button>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="fname">First Name:</label>
                                    <input type="text" class="form-control" name="fname" id="fname" placeholder="First Name">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="lname">Last Name:</label>
                                    <input type="text" class="form-control" name="lname" id="lname" placeholder="Last Name">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="city">City:</label>
                                    <input type="text" class="form-control" name="city" id="city" placeholder="City">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="state">State:</label>
                                    <input type="text" class="form-control" name="state" id="state" placeholder="State">
                                </div>
                                <div class="form-group col-sm-6">
                                    <label for="country">Country:</label>
                                    <select class="form-control" name="country" id="country">
                                        <option>Select Country</option>
                                        <option value="europe">EU</option>
                                        <option value="sea">SEA</option>
                                        <option value="usa">USA</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="bod">Birth of Date:</label>
                                    <input type="date" class="form-control" name="bod" id="bod">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="zipcode">ZIP Code:</label>
                                    <input type="text" class="form-control" name="zipcode" id="zip" placeholder="ZIP Code">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="phone">Phone Number:</label>
                                    <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone Number">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="email">Email:</label>
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="mrn">MRN:</label>
                                    <input type="text" class="form-control" name="mrn" id="mrn" placeholder="Medical Record Number">
                                </div>
                            </div>
                            <hr>
                            <h5 class="mb-3">Account Information</h5>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="username">Username:</label>
                                    <input type="text" class="form-control" name="username" id="username" placeholder="Username">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="email">E-mail:</label>
                                    <input type="email" class="form-control" name="email" id="email" placeholder="E-mail">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="password">Password:</label>
                                    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="repeatPass">Repeat Password:</label>
                                    <input type="password" class="form-control" name="repeatPass" id="repeatPass" placeholder="Repeat Password">
                                </div>
                            </div>
                            <div class="checkbox">
                                <label><input class="mr-2" type="checkbox">Enable Two-Factor-Authentication</label>
                            </div>
                            <button type="submit" class="btn btn-primary">Register New Patient</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
