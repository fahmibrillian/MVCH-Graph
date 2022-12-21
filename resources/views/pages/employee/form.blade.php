@extends('layouts.layouts')

@section('title', 'Add Employee')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="iq-card">
                <div class="iq-card-header d-flex justify-content-between">
                    <div class="iq-header-title">
                        <h4 class="card-title">Employee Information</h4>
                    </div>
                </div>
                <div class="iq-card-body">
                    <div class="new-user-info">
                        <form>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <div class="col-md-10">
                                            <label for="ssn" class="font-weight-bold">Personal Information</label>
                                        </div>
                                        <div class="col-md-10">
                                            <label for="ssn">SSN:</label>
                                            <input type="text" class="form-control" name="ssn" id="ssn" placeholder="SSN">
                                        </div>
                                        <div class="col-md-2">
                                            <label for="button">_</label>
                                            <button type="button" class="btn btn-primary" id="btn-check">Check</button>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="fname">Name:</label>
                                        <input type="text" class="form-control" name="name" id="name" placeholder="First Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="bod">Birth of Date:</label>
                                        <input type="date" class="form-control" name="bod" id="bod">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label for="" class="font-weight-bold">Hire Information</label>
                                        </div>
                                        <div class="form-group">
                                            <label for="position">Position:</label>
                                            <select class="form-control" name="position" id="position">
                                                <option>Select Position</option>
                                                <option value="nurse">Nurse</option>
                                                <option value="staff">Staff</option>
                                                <option value="technician">Technician</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="employeenumber">Employee Number:</label>
                                            <input type="text" class="form-control" name="employeenumber" id="employeenumber" placeholder="Employee Number">
                                        </div>
                                        <div class="form-group">
                                            <label for="specality">Specality:</label>
                                            <select class="form-control" name="specality" id="specality">
                                                <option>Select Specality</option>
                                                <option value="nurse">Nurse</option>
                                                <option value="staff">Staff</option>
                                                <option value="technician">Technician</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="datehired">Date Hired:</label>
                                            <input type="date" class="form-control" name="datehired" id="datehired">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="address" class="font-weight-bold">Address:</label>
                                    </div>
                                    <div class="form-group">
                                        <label for="country">Region:</label>
                                        <select class="form-control" name="country" id="country">
                                            <option>Select Region</option>
                                            <option value="europe">EU</option>
                                            <option value="sea">SEA</option>
                                            <option value="usa">USA</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="city">City:</label>
                                        <input type="text" class="form-control" name="city" id="city" placeholder="City">
                                    </div>
                                    <div class="form-group">
                                        <label for="state">State:</label>
                                        <input type="text" class="form-control" name="state" id="state" placeholder="State">
                                    </div>
                                    <div class="form-group">
                                        <label for="zipcode">ZIP Code:</label>
                                        <input type="text" class="form-control" name="zipcode" id="zip" placeholder="ZIP Code">
                                    </div>
                                <div class="form-group">
                                    <label for="phone">Phone Number:</label>
                                    <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone Number">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email:</label>
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="address" class="font-weight-bold">Login Information:</label>
                                </div>
                                <div class="form-group">
                                    <label for="username">Username:</label>
                                    <input type="text" class="form-control" name="username" id="username" placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <label for="email">E-mail:</label>
                                    <input type="email" class="form-control" name="email" id="email" placeholder="E-mail">
                                </div>
                                <div class="form-group">
                                    <label for="password">Password:</label>
                                    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <label for="repeatPass">Repeat Password:</label>
                                    <input type="password" class="form-control" name="repeatPass" id="repeatPass" placeholder="Repeat Password">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary float-right">Add New Employee</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    $(document).ready(function() {
        $('#btn-check').click(function() {
            var ssn = $('#ssn').val();
            $.ajax({
                url: "{{url('api/person')}}" + '/' + ssn,
                type: 'GET',
                success: function(data) {
                    if(data.person == null) {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Person Not Found',
                        })
                        return;
                    }
                    Swal.fire({
                        icon: 'success',
                        title: 'Success',
                        text: 'Person Found',
                    })

                    $('#name').val(data.person.Name);
                    $('#bod').val(data.person.BirthDate);
                }
            });
        });
    });
</script>
@endpush
