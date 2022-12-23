@extends('layouts.layouts')

@section('title', 'List Patients')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="iq-card">
                <div class="iq-card-header d-flex justify-content-between">
                    <div class="iq-header-title">
                        <h4 class="card-title">List Patients</h4>
                    </div>
                </div>
                <div class="iq-card-body">
                    <div class="table-responsive">
                    {{-- <span class="table-add float-right mb-3 mr-2">
                        <button class="btn btn-sm iq-bg-success">
                            <i class="ri-add-fill"><span class="pl-1">Add New Patient</span></i>
                        </button>
                    </span> --}}
                    <table id="datatable" class="table table-striped table-bordered" >
                        <thead>
                            <tr>
                                <th width="20">No</th>
                                <th>Name</th>
                                <th>MRN</th>
                                <th>Address</th>
                                <th>Phone</th>
                                <th width="210">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($patients as $index =>$patient)
                            <tr>
                                <td>
                                    {{$index+1}}
                                </td>
                                <td>
                                    {{@$patient->person->Name}}
                                </td>
                                <td>
                                    {{@$patient->MRN}}
                                </td>
                                <td>
                                    {{@$patient->person->AddressCity}}
                                </td>
                                <td>
                                    {{@$patient->person->Phone}}
                                </td>
                                <td align="center">
                                    <a href="{{route('employee.show', $patient->id)}}" class="btn btn-sm btn-primary">Detail</a>
                                    <a href="{{route('employee.edit', $patient->id)}}" class="btn btn-sm btn-warning">Edit</a>
                                    <form action="{{route('employee.destroy', $patient->id)}}" method="POST" class="d-inline">
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
                                <th>MRN</th>
                                <th>Address</th>
                                <th>Phone</th>
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

@endpush
