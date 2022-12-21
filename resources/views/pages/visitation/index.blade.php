@extends('layouts.layouts')

@section('title', 'Patient Visitations')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="iq-card">
                <div class="iq-card-header d-flex justify-content-between">
                    <div class="iq-header-title">
                        <h4 class="card-title">List Visitations</h4>
                    </div>
                </div>
                <div class="iq-card-body">
                    <div class="table-responsive">
                    <span class="table-add float-right mb-3 mr-2">
                        <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#visitationModal">
                            <i class="ri-add-fill"></i><span class="pl-1">
                                Add New Visitation
                            </span>
                        </button>
                    </span>
                    <table id="datatable" class="table table-striped table-bordered" >
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Care Center</th>
                                <th>Visit Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($visits as $index=>$visit)
                            <tr>
                                <td>{{$index+1}}</td>
                                <td>
                                    {{$visit->patient->person->Name}}
                                </td>
                                <td>
                                    {{$visit->careCenter->CareCenterName}}
                                </td>
                                <td>
                                    {{$visit->VisitDate}}
                                </td>
                                <td>
                                    <a href="{{route('visit.show', $visit->id)}}" class="btn btn-sm btn-primary">Detail</a>
                                    <a href="{{route('visit.edit', $visit->id)}}" class="btn btn-sm btn-warning">Edit</a>
                                    <form action="{{route('visit.destroy', $visit->id)}}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Care Center</th>
                                <th>Visit Date</th>
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
<div class="modal fade" id="visitationModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

                    {{-- <div class="form-group">
						<label for="name">Name</label>
						<input type="text" name="name" id="name" class="form-control" placeholder="Patient name" required>
						<div class="invalid-feedback">Patient name invalid</div>
					</div> --}}
                    <div class="form-group">
                        <label>Patient</label>
						<select class="form-control" name="mrn_patient" id="mrn_patient" required>
							<option value="" selected>Select Patient</option>

							{{-- @foreach($patient as $patients)

							<option value="{{ $patients->mrn }}">{{ $patients->name }}</option>

							@endforeach --}}

                            <option value="1">Patient 1</option>
                            <option value="2">Patient 2</option>
                            <option value="3">Patient 3</option>

						</select>
						<div class="invalid-feedback">Patient invalid</div>
                    </div>
                    <div class="form-group">
                        <label>Care Center</label>
						<select class="form-control" name="care_center_id" id="care_center_id" required>
							<option value="" selected>Select Care Center</option>

							{{-- @foreach($care as $cares)

							<option value="{{ $cares->id }}">{{ $cares->care_center_name }}</option>

							@endforeach --}}

                            <option value="1">Care Center 1</option>
                            <option value="2">Care Center 2</option>
                            <option value="3">Care Center 3</option>

						</select>
						<div class="invalid-feedback">Care center invalid</div>
                    </div>
                    <div class="form-group">
						<label>Visit Date</label>
						<input type="date" name="visit_date" id="visit_date" class="form-control" required>
						<div class="invalid-feedback">Visit date invalid</div>
					</div>
                    <div class="form-group">
						<label>Visit Time</label>
						<input type="time" name="visit_time" id="visit_time" class="form-control" required>
						<div class="invalid-feedback">Visit time invalid</div>
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

@push('scripts')
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

<script>
    $(document).ready(function() {
        $('#datatable').DataTable();
    } );
</script>

@endpush


