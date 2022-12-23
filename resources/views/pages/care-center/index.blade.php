@extends('layouts.layouts')

@section('title', 'Care Centers')

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
                        <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#careCenterModal">
                            <i class="ri-add-fill"></i><span class="pl-1">
                                Add Care Center
                            </span>
                        </button>
                    </span>
                    <table id="datatable" class="table table-striped table-bordered" >
                        <thead>
                            <tr align="center">
                                <th width="20">No</th>
                                <th>Care Center Name</th>
                                <th>Work Unit Name</th>
                                <th width="210">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($care as $row)
                                <tr>
                                    <td align="center">{{$loop->iteration}}</td>
                                    <td>{{$row->CareCenterName}}</td>
                                    <td>{{$row->workUnit->WorkUnitName}}</td>
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
                                        <a href="{{$row->id}}/deleteCareCenter" class="btn btn-sm btn-danger hapusData" title="Hapus">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>No</th>
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


<!-- Modal Add Data -->
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
                <form action="addCareCenter" method="POST" class="needs-validation" novalidate>

					@csrf

                    <div class="form-group">
						<label for="CareCenterName">Care Center Name</label>
						<input type="text" name="CareCenterName" id="CareCenterName" class="form-control" placeholder="Care center name" required>
						<div class="invalid-feedback">Care center name invalid</div>
					</div>
                    <div class="form-group">
                        <label>Work Unit</label>
						<select class="form-control" name="WorkUnitId" id="WorkUnitId" required>
							<option value="" selected>Select Work Unit</option>

							@foreach($workUnit as $units)

							<option value="{{ $units->id }}">{{ $units->WorkUnitName }}</option>

							@endforeach

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


<!-- Modal Edit Data -->
@foreach ($care as $row)
<div class="modal fade" id="editData{{$row['id']}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Care Center</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{$row->id}}/updateCareCenter" method="POST" class="needs-validation" novalidate>

					@csrf

                    <div class="form-group">
						<label for="CareCenterName">Care Center Name</label>
						<input type="text" name="CareCenterName" id="CareCenterName" class="form-control" value="{{$row['CareCenterName']}}" required>
						<div class="invalid-feedback">Care center name invalid</div>
					</div>
                    <div class="form-group">
                        <label>Work Unit</label>
						<select class="form-control" name="WorkUnitId" id="WordUnitId" required>
							<option value="{{$row['WorkUnitId']}}" selected>{{ !empty($row->workUnit) ? $row->workUnit['WorkUnitName']:'' }}</option>

							@foreach($care as $units)

							<option value="{{ $units->workUnit->id }}">{{ $units->workUnit->WorkUnitName }}</option>

							@endforeach

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
@endforeach


<!-- Modal Detail Data -->
@foreach ($care as $row)
<div class="modal fade" id="detailData{{$row['id']}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Detail Care Center</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>

			<div class="modal-body">

				<div class="form-group row">
					<p class=" col-sm-4 font-weight-bold">Care Center Name</p>
					<div class="col-sm-8">
						<p>: {{$row->CareCenterName}}</p>
					</div>
				</div>
				<div class="form-group row">
					<p class=" col-sm-4 font-weight-bold">Work Unit Name</p>
					<div class="col-sm-8">
						<p>: {{$row->workUnit->WorkUnitName}}</p>
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
