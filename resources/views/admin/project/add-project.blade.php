@extends('admin.master')

@section('libcss')
 <link rel="stylesheet" type="text/css" href="{{asset('/admin/')}}/assets/libs/quill/dist/quill.snow.css">
@endsection
@section('homeContent')


<div class="page-wrapper">
	<div class="col-md-12">
		<div class="card">
                      @if(session()->has('success')) <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success!</strong> {{session()->get('success')}}

  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif




                            <form action="{{url('/save-project')}}" method="post" class="form-horizontal" enctype="multipart/form-data">


                                @csrf
                                <div class="card-body">
                                    <h4 class="card-title">Personal Info</h4>
                                    <div class="form-group row">
                                        <label for="fname" class="
                                         @error('name')
                                        text-danger
                                         @enderror



                                        col-sm-3 text-right control-label col-form-label">Project Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="

                                           @error('name')
                                        border-danger
                                         @enderror



                                            form-control" name="name" id="fname" placeholder="Project Name Here" value="{{old('name')}}">
                                            @error('name')

                                   <span class="text-danger">{{$message}}</span>
                                        @enderror
                                        </div>
                                         






                                    </div>
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Project Code</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="code" name="code"
                                            placeholder="Project code Here" value="{{old('code')}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="cname" class="col-sm-3 text-right control-label col-form-label">Country Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="cname" name="cname" placeholder="Country Name Here" value="{{old('cname')}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="reason" class="col-sm-3 text-right control-label col-form-label">Reason</label>
                                        <div class="col-sm-9">
                                            <input type="text" min="0" class="form-control" id="reason" name="reason" placeholder="Reason Here" value="{{old('reason')}}">
                                        </div>
                                    </div>  
                                      <div class="form-group row">
                                        <label for="email1" class="col-sm-3 text-right control-label col-form-label">Category</label>
                                        <div class="col-sm-9">
						         <select class="custom-select" name="category">
								  <option selected>select category</option>
								  <option @if(old('category')==1) selected  @endif value="1">Health</option>
								  <option @if(old('category')==2) selected @endif  value="2">Stret Children</option>
								  <option @if(old('category')==3) selected @endif  value="3">Disaster recovery</option>
								</select>
                                        </div>
                                    </div>

                                   
                                        <div class="form-group row">
                                        <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Condition</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="condition" class="form-control" id="cono1" placeholder="condition Here" value="{{old('condition')}}">
                                        </div>
                                    </div>
                                     <div class="form-group row">
                                        <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Thum Image</label>
                                        <div class="col-sm-9">
                                     
                                             
                                            <input type="file"  name="thum_img" id="validatedCustomFile" >
                                     
                                        </div>
                                    </div>

                                        <div class="form-group row">
                                        <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Multi Image</label>
                                        <div class="col-sm-9">
                                     
                                         
                                            <input type="file"  name="image[]" id="validatedCustomFile" multiple >
                                       
                                        </div>
                                    </div>


                                  

                                    <div class="form-group row">
                                        <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Details</label>
                                        <div class="col-sm-9">
                                            <textarea id="editor" name="details" class="form-control" value="{{old('details')}}" ></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top">
                                    <div class="card-body">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>



	</div>
</div>

@endsection

@section('libjs')
<script src="{{asset('/admin/')}}/assets/libs/quill/dist/quill.min.js"></script>

<script>
     
     
        var quill = new Quill('#editor', {
            theme: 'snow'
        });

    </script>


@endsection