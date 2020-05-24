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
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Team</a></li>
                                <li class="breadcrumb-item active">Create</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Admin/Team</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title">Team</h4>
                            <p class="sub-header">Add New Team Member Description</p>
                            <form action="{{route('team.store')}}" method="post" enctype="multipart/form-data">
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
                                    <div class="form-group col-md-6">
                                        <label for="" class="col-form-label">Name</label>
                                        <input type="text" name="name" value="{{ old('name')}}"class="form-control" id="" placeholder="Name">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="" class="col-form-label">Email</label>
                                        <input type="text" name="email" value="{{ old('email') }}" class="form-control" id="" placeholder="Email">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="" class="col-form-label">Password</label>
                                        <input type="text" name="password"  class="form-control" id="" placeholder="Password">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="" class="col-form-label">Position</label>
                                        <input type="text" name="position" value="{{ old('position') }}" class="form-control" id="" placeholder="Position">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="" class="col-form-label">Education</label>
                                        <input type="text" name="education" value="{{ old('education') }}" class="form-control" id="" placeholder="Education">
                                    </div>
                                    

  
                                        <div class="form-group col-md-6">
                                            <label for="" class="col-form-label">Social Media URL </label>
                                            <input type="text" name="url" value="{{ old('url') }}" class="form-control" id="" placeholder="Social Media URL">
                                        </div>
                                        <!-- SummerNote-->
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label for="" class="col-form-label">Description </label>
                                                <textarea name="description" {{ old('description') }} id="summernote-editor">{{ old('description') }}</textarea>
                                                </br>
                                                <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="customFile" name="image">
                                                <label class="custom-file-label" for="customFile">Choose file</label>
                                                <br>
                                             <br>
                               
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

    
toastr.options = {
    "closeButton": false,
    "debug": false,
    "newestOnTop": false,
    "progressBar": false,
    "positionClass": "toast-bottom-right",
    "preventDuplicates": false,
    "onclick": null,
    "showDuration": "300",
    "hideDuration": "1000",
    "timeOut": "5000",
    "extendedTimeOut": "1000",
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut"
  }
toastr.success("{{ Session::get('status')}}");

     




        @endif

@endsection