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
                                <li class="breadcrumb-item active">View</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Admin/Team</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <!-- end page title --> 

<div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h5 class="mt-0">Team Member List</h5>
                    
                    <div class="table-responsive">
                        <table class="table table-centered mb-0" id="inline-editable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Description</th>
                                    <th>Education</th>
                                    <th>Profile</th>
                                    <th>Action</th>
                                    
  
                                </tr>
                            </thead>
                        
                            <tbody>
                            <?php $serial = 1; ?>
                                @forelse($members as $member)
                                <tr>
                                    <td>{{$serial}}</td>
                                    <td>{{ $member->name }}</td>
                                    <td>{{ $member->positon }}</td>
                                    <td>{!! $member->description !!}</td>
                                    <td>{{ $member->education }}</td>
                                    <td>

                          <div class="col-md-12">
                          <img src="{{ asset("/uploads/Team/".$member->image) }}" alt="" width="100px" height="100px">
                        </td>
                    <td>
                        <button type="button" class="btn btn-dark"  onclick="location.href='{{url('admin/team/edit/'.$member->id)}}';">Edit</button>
                        <button type="button" class="btn btn-dark"  onclick="location.href='{{url('admin/team/delete/'.$member->id)}}';">Delete</button>
                        
                    </td>
                                    <?php $serial++; ?>
                                    
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