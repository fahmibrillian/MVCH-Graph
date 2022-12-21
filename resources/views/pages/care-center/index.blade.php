@extends('layouts.layouts')

@section('title', 'Work Units')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="iq-card">
                <div class="iq-card-header d-flex justify-content-between">
                    <div class="iq-header-title">
                        <h4 class="card-title">Care Centers</h4>
                    </div>
                </div>
                <div class="iq-card-body">
                    <div class="table-responsive">
                    <span class="table-add float-right mb-3 mr-2">
                        <button class="btn btn-sm iq-bg-success" data-toggle="modal" data-target="#careCenterModal">
                            <i class="ri-add-fill"><span class="pl-1">
                                Add Care Center
                            </span></i>
                        </button>
                    </span>
                    <table id="datatable" class="table table-striped table-bordered" >
                        <thead>
                            <tr>
                                <th>Care Center Name</th>
                                <th>Work Unit Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>Edinburgh</td>
                                <td>$320,800</td>
                            </tr>
                            <tr>
                                <td>Garrett Winters</td>
                                <td>Tokyo</td>
                                <td>$170,750</td>
                            </tr>
                            <tr>
                                <td>Ashton Cox</td>
                                <td>San Francisco</td>
                                <td>$86,000</td>
                            </tr>
                            <tr>
                                <td>Cedric Kelly</td>
                                <td>Edinburgh</td>
                                <td>$433,060</td>
                            </tr>
                            <tr>
                                <td>Airi Satou</td>
                                <td>Tokyo</td>
                                <td>$162,700</td>
                            </tr>
                            <tr>
                                <td>Brielle Williamson</td>
                                <td>New York</td>
                                <td>$372,000</td>
                            </tr>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>Edinburgh</td>
                                <td>$320,800</td>
                            </tr>
                            <tr>
                                <td>Garrett Winters</td>
                                <td>Tokyo</td>
                                <td>$170,750</td>
                            </tr>
                            <tr>
                                <td>Ashton Cox</td>
                                <td>San Francisco</td>
                                <td>$86,000</td>
                            </tr>
                            <tr>
                                <td>Cedric Kelly</td>
                                <td>Edinburgh</td>
                                <td>$433,060</td>
                            </tr>
                            <tr>
                                <td>Airi Satou</td>
                                <td>Tokyo</td>
                                <td>$162,700</td>
                            </tr>
                            <tr>
                                <td>Brielle Williamson</td>
                                <td>New York</td>
                                <td>$372,000</td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Care Center Name</th>
                                <th>Work Unit Name</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="careCenterModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Care Center</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="care-center/addCareCenter" method="POST" class="needs-validation" novalidate>

					@csrf

                    <div class="form-group">
						<label for="care_center_name">Care Center Name</label>
						<input type="text" name="care_center_name" id="care_center_name" class="form-control" placeholder="Care center name" required>
						<div class="invalid-feedback">Care center name invalid</div>
					</div>
                    <div class="form-group">
                        <label>Work Unit</label>
						<select class="form-control" name="work_unit_id" id="work_unit_id" required>
							<option value="" selected>Select Work Unit</option>

							{{-- @foreach($unit as $units)

							<option value="{{ $units->id }}">{{ $units->work_unit_name }}</option>

							@endforeach --}}

                            <option value="1">Work Unit 1</option>
                            <option value="2">Work Unit 2</option>
                            <option value="3">Work Unit 3</option>

						</select>
						<div class="invalid-feedback">Work unit invalid</div>
                    </div>
            
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection


<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>

<!-- SCRIPT VALIDASI FORM -->
<script>
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script>
