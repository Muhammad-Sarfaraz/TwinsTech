@extends('back-end.layout.app')

@section('content')

<body class="authentication-bg authentication-bg-pattern">

<div class="account-pages mt-5 mb-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-5">
                <div class="card">

                    <div class="card-body p-4">

                        <div class="error-ghost text-center">
                            <img src="{{asset('/')}}back-end/assets/images/error.svg" width="200" alt="error-image"/>
                        </div>

                        <div class="text-center">
                            <h3 class="mt-4 text-uppercase font-weight-bold">Page not found </h3>
                            <p class="text-muted mb-0 mt-3" style="line-height: 20px;">It's looking like you may have taken a wrong turn. Don't worry...
                                it happens to the best of us. You might want to check your internet connection.
                                Here's a little tip that might help you get back on track.</p>

                            <a class="btn btn-info mt-3" href="{{url('/')}}"><i class="mdi mdi-reply mr-1"></i> Return Home</a>
                        </div>

                    </div> <!-- end card-body -->
                </div>
                <!-- end card -->       

            </div> <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</div>
<!-- end page -->

@endsection