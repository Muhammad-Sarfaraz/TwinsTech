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
                                <li class="breadcrumb-item active">View</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Admin/Client</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <!-- end page title --> 

<div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h5 class="mt-0">Client List</h5>
                    
                    <div class="table-responsive">
                        <table class="table table-centered mb-0" id="inline-editable">
                            <thead>
                                <tr>
                                    <th style="width:10px;">ID</th>
                                    <th style="width:50px;">Name</th>
                                    <th style="width:100px;">Company Name</th>
                                    <th style="width:100px;">Contact Number</th>
                                    <th style="width:80px;">Project Name</th>
                                    <th style="width:100px;">Address</th>
                                    <th style="width:100px;">FeedBack</th>
                                    <th style="width:80px;">Action</th>
                                    
  
                                </tr>
                            </thead>
                        


                            <tbody>
                           
                            @forelse($clients as $client)
                                <tr>
                                <td>{{$client->id}}</td>
                                    <td>{{$client->name}}</td>
                                    <td>{{$client->cname}}</td>
                                    <td>{{$client->cnumber}}</td>
                                    <td>{{$client->pname}}</td>
                                    <td>{{$client->address}}</td>
                                    <td>{!! $client->description !!}</td>
                                    
                                    <td>
                                        <button type="button" class="btn btn-dark"  onclick="location.href='{{url('admin/client/edit/'.$client->id)}}';">Edit</button>
                                        <button type="button" class="btn btn-dark"  onclick="location.href='{{url('admin/client/delete/')}}/{{$client->id}}';">Delete</button>
                                    </td>
                                  
                                    
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
