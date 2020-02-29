@extends('back-end.layout.master')

@section('content')

<!-- ============================================================== -->
<!-- Start Page Content here -->
<!-- ============================================================== -->

<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Setting</a></li>
                                <li class="breadcrumb-item active">Site-information</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Admin/Project</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title">Site Information</h4>
                            <p class="sub-header">Add New Site Description</p>
                            <form action="{{route('site-information.store')}}" method="post" enctype="multipart/form-data">
                            @csrf    
                            <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="" class="col-form-label">Name</label>
                                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="" placeholder="Name">
                                        
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="" class="col-form-label">Title</label>
                                        <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="" placeholder="Title">
                                   
                                        
                                   
                                   
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="" class="col-form-label">Address</label>
                                        <input type="text" name="address" class="form-control" id="" placeholder="Address" required>
                                    </div>
                                    <div class="form-group col-md-6 ">
                                        <label for="" class="col-form-label">Phone Number</label>
                                        <input type="text" name="pnumber" class="form-control" id="" placeholder="Phone Number" required>
                                        <span class="text-danger">{{ $errors->first('pnumber') }}</span>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="" class="col-form-label">Email</label>
                                        <input type="text" name="email" class="form-control" id="" placeholder="Email" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="" class="col-form-label">Facebook</label>
                                        <input type="text" name="facebook" class="form-control" id="" placeholder="Facebook" >
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="" class="col-form-label">Twitter</label>
                                        <input type="text" name="twitter" class="form-control" id="" placeholder="Twitter" >
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="" class="col-form-label">Youtube</label>
                                        <input type="text" name="youtube" class="form-control" id="" placeholder="Youtube">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="" class="col-form-label">Site URL</label>
                                        <input type="text" name="surl" class="form-control" id="" placeholder="Site URL" required>
                                        <span class="text-danger">{{ $errors->first('surl') }}</span>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="" class="col-form-label">Copyright TEXT</label>
                                        <input type="text" name="ctext" class="form-control" id="" placeholder="Copyright TEXT" required>
                                    </div>
                                    
                                        <!-- SummerNote-->
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label for="" class="col-form-label">Description </label>
                                                <textarea name="description" id="summernote-editor"></textarea>
                                                <br>
                                                <div class="custom-file">
                                                <input type="file" class="custom-file-input @error('title') is-invalid @enderror" id="customFile" name="logo">
                                                <label class="custom-file-label" for="customFile">Logo</label>
                                                <span class="text-danger">{{ $errors->first('logo') }}</span>
                                                <br>
                                             <br>
                                            </div>
                                            <div class="custom-file ">
                                                <input type="file" class="custom-file-input @error('title') is-invalid @enderror" id="customFile" name="flogo">
                                                <label class="custom-file-label" for="customFile">favicon</label>
                                               
                                                <span class="text-danger">{{ $errors->first('flogo') }}</span>
                                                
                                            </div>
                                            </div> <!-- end summernote-editor-->
                                            <br>

                                            

                                            <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>

                            </form>
                        </div> <!-- end card-body-->

                    </div> <!-- end card-->
                </div><!-- end col -->
            </div>
        </div>
    </div>
</div>

@endsection

@section('extraURL')
<!-- Summernote js -->
<script src="{{asset('/')}}back-end/assets/libs/summernote/summernote-bs4.min.js"></script>

<!-- Init js -->
<script src="{{asset('/')}}back-end/assets/js/pages/form-summernote.init.js"></script>
@endsection
@section('script')

    @if(Session::has("status"))
      toastr.success("{{ Session::get('status')}}");

        @endif

@endsection