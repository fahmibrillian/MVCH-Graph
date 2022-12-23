@extends('layouts.layouts')

@section('title', 'List Diagnosis')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="iq-card">
                <div class="iq-card-header d-flex justify-content-between">
                    <div class="iq-header-title">
                        <h4 class="card-title">List Diagnosis</h4>
                    </div>
                </div>
                <div class="iq-card-body">
                    <div class="table-responsive">
                    <span class="table-add float-right mb-3 mr-2">
                        <button class="btn btn-sm btn-primary"  data-toggle="modal" data-target="#diagnosisModal">
                            <i class="ri-add-fill"></i><span class="pl-1">
                                Add New Diagnosis
                            </span>
                        </button>
                    </span>
                    <table id="datatable" class="table table-striped table-bordered" >
                        <thead>
                            <tr>
                                <th width="20">No</th>
                                <th>Diagnosis Code</th>
                                <th>Diagnosis Name</th>
                                <th width="210">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($diagnosis as $row)
                                <tr>
                                    <td align="center">{{$loop->iteration}}</td>
                                    <td>{{$row->DiagnosisCode}}</td>
                                    <td>{{$row->DiagnosisName}}</td>
                                    <td>
                                        <button class="btn btn-sm btn-primary" title="Detail" data-toggle="modal" data-target="#detailData{{$row['id']}}">Detail</button>
                                        <button class="btn btn-sm btn-warning" title="Edit" data-toggle="modal" data-target="#editData{{$row['id']}}">Edit</button>
                                        <a href="{{$row->id}}/deleteDiagnosis" class="btn btn-sm btn-danger hapusData" title="Hapus">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Diagnosis Code</th>
                                <th>Diagnosis Name</th>
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
<div class="modal fade" id="diagnosisModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Diagnosis</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="addDiagnosis" method="POST" class="needs-validation" novalidate>

					@csrf

                    <div class="form-group">
						<label for="DiagnosisCode">Diagnosis Code</label>
						<input type="text" name="DiagnosisCode" id="DiagnosisCode" class="form-control" placeholder="Diagnosis code" required>
						<div class="invalid-feedback">Diagnosis code invalid</div>
					</div>
                    <div class="form-group">
						<label for="DiagnosisName">Diagnosis Name</label>
						<input type="text" name="DiagnosisName" id="DiagnosisName" class="form-control" placeholder="Diagnosis name" required>
						<div class="invalid-feedback">Diagnosis name invalid</div>
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
@foreach ($diagnosis as $row)
<div class="modal fade" id="editData{{$row['id']}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Diagnosis</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{$row->id}}/updateDiagnosis" method="POST" class="needs-validation" novalidate>

					@csrf

                    <div class="form-group">
						<label for="DiagnosisCode">Diagnosis Code</label>
						<input type="text" name="DiagnosisCode" id="DiagnosisCode" class="form-control" value="{{$row['DiagnosisCode']}}" required>
						<div class="invalid-feedback">Dignosis code invalid</div>
					</div>
                    <div class="form-group">
						<label for="DiagnosisName">Diagnosis Name</label>
						<input type="text" name="DiagnosisName" id="DiagnosisName" class="form-control" value="{{$row['DiagnosisName']}}" required>
						<div class="invalid-feedback">Diagnosis name invalid</div>
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
@endforeach


<!-- Modal Detail Data -->
@foreach ($diagnosis as $row)
<div class="modal fade" id="detailData{{$row['id']}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Detail Diagnosis</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>

			<div class="modal-body">

				<div class="form-group row">
					<p class=" col-sm-4 font-weight-bold">Diagnosis COde</p>
					<div class="col-sm-8">
						<p>: {{$row->DiagnosisCode}}</p>
					</div>
				</div>
				<div class="form-group row">
					<p class=" col-sm-4 font-weight-bold">Diagnosis Name</p>
					<div class="col-sm-8">
						<p>: {{$row->DiagnosisName}}</p>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>
@endforeach


@endsection


@push('scripts')
<script>
    $(document).ready(function() {
        $('#datatable').DataTable();
    } );
</script>
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

@endpush