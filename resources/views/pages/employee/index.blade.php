@extends('layouts.layouts')

@section('title', 'List Employees')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="iq-card">
                <div class="iq-card-header d-flex justify-content-between">
                    <div class="iq-header-title">
                        <h4 class="card-title">List Employees</h4>
                    </div>
                </div>
                <div class="iq-card-body">
                    <div class="table-responsive">
                    <span class="table-add float-right mb-3 mr-2">
                        <a class="btn btn-sm btn-primary" href="/create">
                            <span class="pl-1"><i class="ri-add-fill"></i>Add New Employee</span>
                        </a>
                    </span>
                    <table id="datatable" class="table table-striped table-bordered" >
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Work Unit</th>
                                <th>Hire Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($employee as $index => $row)
                            <tr>
                                <td>
                                    {{$index+1}}
                                </td>
                                <td>{{$row->person->Name}}</td>
                                @if($row->nurse)
                                    <td>Nurse</td>
                                    <td>
                                        @foreach ($row->nurse->careCenter as $cc)
                                            Work Unit : {{$cc->workUnit->WorkUnitName}}<br>
                                            Care Center : {{$cc->CareCenterName}}<br>
                                        @endforeach
                                    </td>
                                @elseif($row->staff)
                                    <td>Staff</td>
                                    <td>
                                        @foreach ($row->staff->workUnit as $wu)
                                                Work Unit : {{$wu->WorkUnitName}}<br>
                                        @endforeach
                                    </td>
                                @elseif($row->technician)
                                    <td>Technician</td>
                                    <td>
                                    @foreach ($row->technician->workUnit as $wu)
                                            Work Unit : {{$wu->WorkUnitName}}<br>
                                    @endforeach
                                    </td>
                                @else
                                    <td>Not Assign</td>
                                    <td></td>
                                @endif
                                <td>{{$row->HireDate->format('d M Y')}}</td>
                                <td>
                                    <a href="{{route('employee.show', $row->id)}}" class="btn btn-sm btn-primary">Detail</a>
                                    <a href="{{route('employee.edit', $row->id)}}" class="btn btn-sm btn-warning">Edit</a>
                                    <form action="{{route('employee.destroy', $row->id)}}" method="POST" class="d-inline">
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
                                <th>#</th>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Work Unit</th>
                                <th>Hire Date</th>
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
