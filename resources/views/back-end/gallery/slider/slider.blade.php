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
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Gallery</a></li>
                                <li class="breadcrumb-item active">Slider</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Admin/Team</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <!-- end page title --> 






 
<section class="content">
  <div class="container-fluid">
      <div class="row">
        <div class="col-md-5">

            <div class="card card-info">
                <div class="card-header">
                  <h3 class="card-title">Add Images</h3>
                 
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form class="form-horizontal" method="POST" action="{{route('slider.store')}}" enctype="multipart/form-data" >
                  @csrf
                  <div class="card-body">
                    <div class="form-group row">
                      <label for="name" class="col-sm-3 control-label">Image Title</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="title" value="" required placeholder="Image Title">
                       
                            <span class="invalid-feedback" role="alert">
                                <strong></strong>
                            </span>
                       
                        
                      </div>

                      <label for="name" class="col-sm-3 control-label">Image Location</label>
                      <div class="col-sm-9">
                        <input type="file" class="form-control" name="image" required placeholder="Uplaod Your Images" required>
                        
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-sm-offset-2 col-sm-10">
                        <div class="form-check">
                          <input type="checkbox" name="active" class="form-check-input" id="active" value="1">
                          <label class="form-check-label" for="sts">Display in Slider</label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Upload</button>
                  </div>
                </form>
              </div>
            </div>
			
            <div class="col-md-7">

<div class="card">
    <div class="card-header">
      <h3 class="card-title">Slider Images</h3>
    </div>

   
    <!-- /.card-header -->
    <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                  <thead>
                    <tr>

                      <th style="width:80px;">SL#</th>
                      <th>Title</th>
                      <th style="width:150px;">View</th>
                      <th style="width:150px;">Action</th>
                      
                      
                    </tr>
                  </thead>
                  <tbody>
                
                  <?php $serial = 1; ?>
                  @forelse($images as $image)
                      <tr>
                        <td>{{ $serial }}</td>
                        <?php $serial++; ?>
                        <td style="display:none;">{{ $image->id }}</td>
                        <td style="display:none;">{{ $image->title }}</td>
                        
                        <td>{{ $image->title }}</td>
                        <td>

                          <div class="col-md-12">
                          <img src="{{ Storage::url($image->image) }}" alt="" width="100px" height="100px">
                        </td>
                        <td>
                          <div class="col-md-12">
                            
                            <button type="button" onclick="location.href='{{ url('admin/slider/destroy/') }}/{{$image->id}}';"  class="dmctg btn btn-danger btn-xs" >Delete</button>
                        </td>
                      </tr>
                          @empty
                          @endforelse        
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            
            </tbody>
        </table>
    </div>
          
</section>



@endsection