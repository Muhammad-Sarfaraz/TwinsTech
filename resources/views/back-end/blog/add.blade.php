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
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Client</a></li>
                                <li class="breadcrumb-item active">Add Blog Article</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Admin/Blog</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title">Blog</h4>
                            <p class="sub-header">Add New Blog Post</p>
                            <form action="{{route('blog.store')}}" method="post" enctype="multipart/form-data">
                            @csrf    


                            @if(count($errors))
                    <div class="alert alert-secondary">
                        <strong>Whoops!</strong> There were some problems with your input.
                        <br/>
                        <ul>
                            @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif



                            <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="" class="col-form-label">Title</label>
                                        <input type="text" name="title" class="form-control" value="{{ old('title') }}" id="" placeholder="Title">
                                    </div>

                                    
                                        <!-- SummerNote-->
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label for="" class="col-form-label">Description </label>
                                                <textarea name="description"  id="summernote-editor">{{ old('description') }}</textarea>
                                                </br>
                                                <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="customFile" name="image">
                                                <label class="custom-file-label" for="customFile">Choose file</label>
                                                <br>
                                             <br>
                                            </div>
                                            </div> <!-- end summernote-editor-->
                                            
                                        
                                            <button type="submit" class="btn btn-primary waves-effect waves-light">Publish</button>

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


