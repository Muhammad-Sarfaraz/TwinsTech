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
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Project</a></li>
                                <li class="breadcrumb-item active">Create</li>
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
                            <h4 class="header-title">Project</h4>
                            <p class="sub-header">Add New Project Description</p>
                            <form action="{{route('portfolio.store')}}" method="post" enctype="multipart/form-data">
                            @csrf    
                            <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="" class="col-form-label">Title</label>
                                        <input type="text" name="title" class="form-control" id="" placeholder="Title">
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="" class="col-form-label">Project URL </label>
                                            <input type="text" name="purl" class="form-control" id="" placeholder="Project URL">
                                        </div>
                                        <!-- SummerNote-->
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label for="" class="col-form-label">Project Description </label>
                                                <textarea name="description" id="summernote-editor"></textarea>
                                                </br>
                                                <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="customFile" name="image">
                                                <label class="custom-file-label" for="customFile">Choose file</label>
                                                <br>
                                             <br>
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