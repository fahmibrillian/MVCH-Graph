@extends('layouts.layouts')

@section('title', 'Patients Diagnose')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="iq-card">
                <div class="iq-card-header d-flex justify-content-between">
                    <div class="iq-header-title">
                        <h4 class="card-title">Patient's Diagnose</h4>
                    </div>
                </div>
                <div class="iq-card-body">
                    <div class="table-responsive">
                    <span class="table-add float-right mb-3 mr-2">
                        <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#diagnoseModal">
                            <i class="ri-add-fill"></i><span class="pl-1">
                                Add New Diagnose
                            </span>
                        </button>
                    </span>
                    <table id="datatable" class="table table-striped table-bordered" >
                        <thead>
                            <tr>
                                <th width="20">No</th>
                                <th>Physician</th>
                                <th>Patient</th>
                                <th>Diagnosis</th>
                                <th width="210">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($diagnose as $index=>$diagnoses)
                            <tr>
                                <td align="center">{{$index+1}}</td>
                                <td>
                                    {{$diagnoses->visit->physician->person->Name}}
                                </td>
                                <td>
                                    {{$diagnoses->visit->patient->person->Name}}
                                </td>
                                <td>
                                    {{$diagnoses->diagnosis->DiagnosisName}}
                                </td>
                                <td align="center">
                                    <button class="btn btn-sm btn-primary" title="Detail" data-toggle="modal" data-target="#detailData{{$diagnoses['id']}}">Detail</button>
                                    <button class="btn btn-sm btn-warning" title="Edit" data-toggle="modal" data-target="#editData{{$diagnoses['id']}}">Edit</button>
                                    <a href="{{$diagnoses->id}}/deleteDiagnose" class="btn btn-sm btn-danger hapusData" title="Hapus">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Physician</th>
                                <th>Patient</th>
                                <th>Diagnosis</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Modal Add Data -->
<div class="modal fade" id="diagnoseModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add New Diagnose</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/addDiagnose" method="POST" class="needs-validation" novalidate>

					@csrf

                    <div class="form-group">
                        <label>Physician</label>
						<select class="form-control" name="PhisicianID" id="PhisicianID" required>
							<option value="" selected>Select Physician</option>

							@foreach($physician as $physicians)

							<option value="{{ $physicians->id }}">{{ $physicians->person->Name }}</option>

							@endforeach

						</select>
						<div class="invalid-feedback">Physician invalid</div>
                    </div>
                    <div class="form-group">
                        <label>Patient</label>
						<select class="form-control" name="MRN" id="MRN" required>
							<option value="" selected>Select Patient</option>

							@foreach($patient as $patients)

							<option value="{{ $patients->id }}">{{ $patients->person->Name }}</option>

							@endforeach

						</select>
						<div class="invalid-feedback">Patient invalid</div>
                    </div>
                    <div class="form-group">
                        <label>Diagnosis</label>
						<select class="form-control" name="DiagnosisId" id="DiagnosisId" required>
							<option value="" selected>Select Diagnosis</option>

							@foreach($diagnosis as $diag)

							<option value="{{ $diag->id }}">{{ $diag->DiagnosisName }}</option>

							@endforeach

						</select>
						<div class="invalid-feedback">Diagnosis invalid</div>
                    </div>
                    <div class="form-group">
						<label>Time</label>
						<input type="time" name="Time" id="Time" class="form-control" required>
						<div class="invalid-feedback">Visit time invalid</div>
					</div>
                    <div class="form-group">
                        <label class="font-weight-bold">Description</label>
                        <textarea rows="2" class="form-control" id="Description" name="Description" placeholder="Description" required></textarea>
                        <div class="invalid-feedback">Description invalid</div>
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


<!-- Modal Edit Data -->
{{-- @foreach ($visits as $visit)
<div class="modal fade" id="editData{{$visit['id']}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Patient Visitation</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
				<form action="{{$visit->id}}/updateVisit" method="POST" class="needs-validation" novalidate>

					@csrf

					<div class="form-group">
                        <label>Patient</label>
						<select class="form-control" name="MRN" id="MRN" required>
							<option value="{{ $visit->patient->id }}" selected>{{ !empty($visit->patient) ? $visit->patient->person['Name']:'' }}</option>

							@foreach($patient as $patients)

							<option value="{{ $patients->id }}">{{ $patients->person->Name }}</option>

							@endforeach

						</select>
						<div class="invalid-feedback">Patient invalid</div>
                    </div>
                    <div class="form-group">
                        <label>Care Center</label>
						<select class="form-control" name="CareCenterId" id="CareCenterId" required>
							<option value="{{ $visit->careCenter->id }}" selected>{{ !empty($visit->careCenter) ? $visit->careCenter['CareCenterName']:'' }}</option>

							@foreach($care as $cares)

							<option value="{{ $cares->id }}">{{ $cares->CareCenterName }}</option>

							@endforeach

						</select>
						<div class="invalid-feedback">Care center invalid</div>
                    </div>
                    <div class="form-group">
                        <label>Physician</label>
						<select class="form-control" name="PhisicianID" id="PhisicianID" required>
							<option value="{{ $visit->physician->id }}" selected>{{ !empty($visit->physician) ? $visit->physician->person['Name']:'' }}</option>

							@foreach($physician as $physicians)

							<option value="{{ $physicians->id }}">{{ $physicians->person->Name }}</option>

							@endforeach

						</select>
						<div class="invalid-feedback">Physician invalid</div>
                    </div>
                    <div class="form-group">
						<label>Visit Date</label>
						<input type="date" name="VisitDate" id="VisitDate" value="{{ $visit->VisitDate }}" class="form-control" required>
						<div class="invalid-feedback">Visit date invalid</div>
					</div>
                    <div class="form-group">
						<label>Visit Time</label>
						<input type="time" name="VisitTime" id="VisitTime" value="{{ $visit->VisitTime }}" class="form-control" required>
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
@endforeach --}}


<!-- Modal Detail Data -->
@foreach ($diagnose as $diagnoses)
<div class="modal fade" id="detailData{{$diagnoses['id']}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Detail Diagnose</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>

			<div class="modal-body">

                <div class="form-group row">
					<p class=" col-sm-4 font-weight-bold">Physician</p>
					<div class="col-sm-8">
						<p>: {{$diagnoses->visit->physician->person->Name}}</p>
					</div>
				</div>
				<div class="form-group row">
					<p class=" col-sm-4 font-weight-bold">Patient</p>
					<div class="col-sm-8">
						<p>: {{$diagnoses->visit->patient->person->Name}}</p>
					</div>
				</div>
				<div class="form-group row">
					<p class=" col-sm-4 font-weight-bold">Diagnosis</p>
					<div class="col-sm-8">
						<p>: {{$diagnoses->diagnosis->DiagnosisName}}</p>
					</div>
				</div>
                <div class="form-group row">
					<p class=" col-sm-4 font-weight-bold">Description</p>
					<div class="col-sm-8">
						<p>: {{$diagnoses->Description}}</p>
					</div>
				</div>
                <div class="form-group row">
					<p class=" col-sm-4 font-weight-bold">Time</p>
					<div class="col-sm-8">
						<p>: {{$diagnoses->Time}}</p>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>
@endforeach


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
