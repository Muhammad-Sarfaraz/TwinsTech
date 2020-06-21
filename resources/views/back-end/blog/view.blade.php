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
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Blog</a></li>
                                <li class="breadcrumb-item active">view</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Admin/Blog</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <!-- end page title --> 

<div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h5 class="mt-0">Posts</h5>
                    
                    <div class="table-responsive">
                        <table class="table table-centered mb-0" id="inline-editable">
                            <thead>
                                <tr>
                                    <th style="width:10px;">SL</th>
                                    <th style="width:200px;">Title</th>
                                    <th style="width:100px;">Author</th>
                                    <th style="width:100px;">Date</th>
                                    <th style="width:50px;">Views</th>      
                                
                                    <th style="width:50px;">Status</th>      
                                    <th style="width:150px;">Action</th>
                                    
  
                                </tr>
                            </thead>
                        


                            <tbody>
                           
                                @forelse($posts as $post)
                                <tr>

                                    <td></td>
                                    <td>{{$post->title}}</td>
                                    <td>{{$post->author}}</td>
                                    <td>{{$post->date}}</td>
                                    <td>Views</td>
                                   
                                    <td><?php
                                    if($post->status=='1')
                                    echo "Published";
                                    else
                                    echo "UnPublished";
                                    ?>
                                    </td>
                                    
                                    <td>
                                    <button type="button" class="btn btn-dark"  onclick="location.href='{{url('admin/blog/edit/'.$post->id)}}';">Edit</button>
                                        <button type="button" class="btn btn-dark"  onclick="location.href='{{url('admin/blog/delete/'.$post->id)}}';">Delete</button>
                                        <button type="button" class="btn btn-dark"  onclick="location.href='{{url('admin/blog/status/update/'.$post->id)}}';"><?php
                                            if($post->status=='1')
                                            echo "UnPublish";
                                            else
                                            echo "Publish";
                                            ?></button>
                                        
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
