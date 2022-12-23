@extends('layouts.layouts')

@section('title', 'List Records')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="iq-card">
                <div class="iq-card-header d-flex justify-content-between">
                    <div class="iq-header-title">
                        <h4 class="card-title">List Records</h4>
                    </div>
                </div>
                <div class="iq-card-body">
                    <div class="table-responsive">
                    <span class="table-add float-right mb-3 mr-2">
                        <a href="{{url('obtain/create')}}" class="btn btn-sm btn-primary">
                            <i class="ri-add-fill"></i><span class="pl-1">
                                Add New Records
                            </a>
                        </button>
                    </span>
                    <table id="datatable" class="table table-striped table-bordered" >
                        <thead>
                            <tr>
                                <th width="20">No</th>
                                {{-- <th>Nurse</th> --}}
                                <th>Date/Time</th>
                                <th>Visit Reason</th>
                                <th width="210">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($record as $row)
                                <tr>
                                    <td align="center">{{$loop->iteration}}</td>
                                    {{-- <td>{{$row->nurse->person->Name}}</td> --}}
                                    <td>{{$row->Date}}</td>
                                    <td>{{$row->VisitReason}}</td>
                                    <td align="center">
                                        <button class="btn btn-sm btn-primary" title="Detail" data-toggle="modal" data-target="#detailData{{$row['id']}}">Detail</button>
                                        <button class="btn btn-sm btn-warning" title="Edit" data-toggle="modal" data-target="#editData{{$row['id']}}">Edit</button>
                                        <a href="{{$row->id}}/deleteObtain" class="btn btn-sm btn-danger hapusData" title="Hapus">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                {{-- <th>Nurse</th> --}}
                                <th>Date/Time</th>
                                <th>Visit Reason</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


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
