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
                                <li class="breadcrumb-item active">View</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Admin/Portfolio</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <!-- end page title --> 

<div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h5 class="mt-0">Portfolio List</h5>
                    
                    <div class="table-responsive">
                        <table class="table table-centered mb-0" id="inline-editable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>URL</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                        
                            <tbody>
                            <?php $number = 1; ?>
                                @forelse($portfolios as $portfolio)
                                <tr>
                                    <td>{{$number}}</td>
                                    <td>{{$portfolio->title}}</td>
                                    <td>{!! $portfolio->description !!}</td>
                                    <td>{{$portfolio->purl}}</td>
                                    <td>{{$portfolio->pdate}}</td>
                                    <td><button type="button" class="btn btn-dark"  onclick="location.href='{{ url('/admin/portfolio/delete/') }}/{{$portfolio->id}}';">Delete</button></td>
                                    <?php $number++; ?>
                                    
                                </tr>
                                @empty
                                @endforelse
                                
                            </tbody>
                        </table>
                    </div> <!-- end .table-responsive-->
                </div> <!-- end card-body -->
            </div> <!-- end card -->
        </div> <!-- end col -->
    </div> <!-- end row -->




@endsection

@section('script')



@if(Session::has("status"))
      toastr.success("{{ Session::get('status')}}");

    @endif



    @endsection