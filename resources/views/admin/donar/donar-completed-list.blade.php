@extends('admin.master')

@section('libcss')

<link href="{{asset('/admin/')}}/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">

@endsection



@section('homeContent')


<div class="page-wrapper">

<a href="{{url('/add-project')}}" class="btn btn-primary">Add Project</a>



	<div class="card">
                            <div class="card-body">

 @if(session()->has('success')) <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success!</strong> {{session()->get('success')}}

  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif



                                <h5 class="card-title">Basic Datatable</h5>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Image</th>
                                                <th>Name</th>
                                                <th>Total</th>
                                                <th>Quantity</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

@php
$x=1;
@endphp


@foreach($alldatas as $alldata)

@php
$project=App\Project::where('id',$alldata->pid)->first();
@endphp
<tr>
    <td>{{$x++}}</td>
    <td><img src="{{asset('/upload/'.$project->thum_img)}}" width="30" alt=""></td>
    <td>{{$project->name}}</td>
    <td>{{$alldata->total}}</td>
    <td>{{$alldata->qty}}</td>
    <td>In Progress</td>
    <td>
     <a href="{{url('/donar-delete_'.$alldata->id)}}" class="btn btn-danger btn-sm">Delete</a>
    
    </td>
</tr>



@endforeach



                                         
                                            
                                        </tbody>
                                        <tfoot>
                                             <tr>
                                                 <th>No</th>
                                                <th>Image</th>
                                                <th>Name</th>
                                                <th>Total</th>
                                                <th>Quantity</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>

                            </div>
                        </div>




</div>









@endsection


@section('libjs')
   <script src="{{asset('/admin/')}}/assets/extra-libs/DataTables/datatables.min.js"></script>
    <script>
        /****************************************
         *       Basic Table                   *
         ****************************************/
        $('#zero_config').DataTable();
    </script>

@endsection