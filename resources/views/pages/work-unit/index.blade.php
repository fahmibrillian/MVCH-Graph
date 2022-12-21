@extends('layouts.layouts')

@section('title', 'Work Units')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="iq-card">
                <div class="iq-card-header d-flex justify-content-between">
                    <div class="iq-header-title">
                        <h4 class="card-title">Work Units</h4>
                    </div>
                </div>
                <div class="iq-card-body">
                    <div class="table-responsive">
                    <span class="table-add float-right mb-3 mr-2">
                        <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#workUnitModal">
                            <i class="ri-add-fill"></i><span class="pl-1">
                                Add Work Unit
                            </span>
                        </button>
                    </span>
                    <table id="datatable" class="table table-striped table-bordered" >
                        <thead>
                            <tr align="center">
                                <th width="20">No</th>
                                <th>Work Unit Name</th>
                                <th>Location Facility</th>
                                <th width="150">Location Floor</th>
                                <th width="210">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($work as $row)
                                <tr>
                                    <td align="center">{{$loop->iteration}}</td>
                                    <td>{{$row->WorkUnitName}}</td>
                                    <td>{{$row->LocationFacility}}</td>
                                    <td>{{$row->LocationFloor}}</td>
                                    <td align="center">
                                        {{-- <a href="{{route('employee.show', $row->id)}}" class="btn btn-sm btn-primary">Detail</a> --}}
                                        <button class="btn btn-sm btn-primary" title="Detail" data-toggle="modal" data-target="#detailData{{$row['id']}}">Detail</button>
                                        {{-- <a href="{{route('employee.edit', $row->id)}}" class="btn btn-sm btn-warning">Edit</a> --}}
                                        <button class="btn btn-sm btn-warning" title="Edit" data-toggle="modal" data-target="#editData{{$row['id']}}">Edit</button>
                                        {{-- <form action="{{route('employee.destroy', $row->id)}}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                        </form> --}}
                                        <a href="{{$row->id}}/deleteWorkUnit" class="btn btn-sm btn-danger hapusData" title="Hapus">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr align="center">
                                <th>No</th>
                                <th>Work Unit Name</th>
                                <th>Location Facility</th>
                                <th>Location Floor</th>
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
<div class="modal fade" id="workUnitModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Work Unit</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="work-unit/addWorkUnit" method="POST" class="needs-validation" novalidate>

					@csrf

					<div class="form-group">
						<label for="WorkUnitName">Work Unit Name</label>
						<input type="text" name="WorkUnitName" id="WorkUnitName" class="form-control" placeholder="Work unit name" required>
						<div class="invalid-feedback">Work unit name invalid</div>
					</div>
					<div class="form-group">
						<label for="LocationFacility">Location Facility</label>
						<input type="text" name="LocationFacility" id="LocationFacility" class="form-control" placeholder="Location facility" required>
						<div class="invalid-feedback">Location facility invalid</div>
					</div>
                    <div class="form-group">
						<label for="LocationFloor">Location Floor</label>
						<input type="text" name="LocationFloor" id="LocationFloor" class="form-control" placeholder="Location floor" required>
						<div class="invalid-feedback">Location floor invalid</div>
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
@foreach ($work as $row)
<div class="modal fade" id="editData{{$row['id']}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Work Unit</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
				<form action="{{$row->id}}/updateWorkUnit" method="POST" class="needs-validation" novalidate>

					@csrf

					<div class="form-group">
						<label for="WorkUnitName">Work Unit Name</label>
						<input type="text" name="WorkUnitName" id="WorkUnitName" class="form-control" value="{{$row['WorkUnitName']}}" required>
						<div class="invalid-feedback">Work unit name invalid</div>
					</div>
					<div class="form-group">
						<label for="LocationFacility">Location Facility</label>
						<input type="text" name="LocationFacility" id="LocationFacility" class="form-control" value="{{$row['LocationFacility']}}" required>
						<div class="invalid-feedback">Location facility invalid</div>
					</div>
                    <div class="form-group">
						<label for="LocationFloor">Location Floor</label>
						<input type="text" name="LocationFloor" id="LocationFloor" class="form-control" value="{{$row['LocationFloor']}}" required>
						<div class="invalid-feedback">Location floor invalid</div>
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
@foreach ($work as $row)
<div class="modal fade" id="detailData{{$row['id']}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Detail Work Unit</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>

			<div class="modal-body">

				<div class="form-group row">
					<p class=" col-sm-4 font-weight-bold">Work Unit Name</p>
					<div class="col-sm-8">
						<p>: {{$row->WorkUnitName}}</p>
					</div>
				</div>
				<div class="form-group row">
					<p class=" col-sm-4 font-weight-bold">Location Facility</p>
					<div class="col-sm-8">
						<p>: {{$row->LocationFacility}}</p>
					</div>
				</div>
				<div class="form-group row">
					<p class=" col-sm-4 font-weight-bold">Location Floor</p>
					<div class="col-sm-8">
						<p>: {{$row->LocationFloor}}</p>
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
