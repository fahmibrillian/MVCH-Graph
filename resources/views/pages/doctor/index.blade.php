@extends('layouts.layouts')

@section('title', 'List Doctors')

@section('content')

<div class="container-fluid">
   <div class="row">
      <div class="col-sm-12">
         <div class="iq-card">
            <div class="iq-card-header d-flex justify-content-between">
               <div class="iq-header-title">
                  <h4 class="card-title">List Doctors</h4>
               </div>
            </div>
            <div class="iq-card-body">
               <div class="table-responsive">
                  {{-- <span class="table-add float-right mb-3 mr-2">
                     <button class="btn btn-sm iq-bg-success">
                           <i class="ri-add-fill"><span class="pl-1">Add New Employee</span></i>
                     </button>
                  </span> --}}
                  <table id="datatable" class="table table-striped table-bordered" >
                     <thead>
                        <tr>
                           <th>#</th>
                           <th>Name</th>
                           <th>DEA Number</th>
                           <th>Speciality</th>
                           <th>Action</th>
                        </tr>
                     </thead>
                     <tbody>
                        @foreach ($physicians as $index => $physician)
                        <tr>
                            <td>
                                {{$index+1}}
                            </td>
                           <td>
                                {{@$physician->person->Name}}
                            </td>
                           <td>
                                {{@$physician->DEANumber}}
                            </td>
                           <td>
                                {{@$physician->Speciality}}
                            </td>
                           <td>
                                <a href="{{route('doctor.edit', $physician->id)}}" class="btn btn-sm btn-primary">Edit</a>
                                <a href="{{route('doctor.show', $physician->id)}}" class="btn btn-sm btn-warning">View</a>
                                <form action="{{route('doctor.destroy', $physician->id)}}" method="POST" class="d-inline">
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
                           <th>DEA Number</th>
                           <th>Speciality</th>
                           <th>Action</th>
                        </tr>
                     </tfoot>
                  </table>
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
        $('#datatable').DataTable();
    } );
</script>

@endpush

