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
                                <li class="breadcrumb-item active">Feedback</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Admin/Client/Feedback</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-6">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title">Client Feedback</h4>
                            <p class="sub-header">Add New Client Feedback</p>
                            <form action="{{route('feedback.store')}}" method="post" enctype="multipart/form-data">
                            @csrf    
                            <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="" class="col-form-label">Client ID</label>
                                        <input type="text" name="client_id" class="form-control" id="" placeholder="Client ID">
                                        
</br>
                                        <div class="form-check">
                          <input type="checkbox" name="active" class="form-check-input" id="active" value="1">
                          <label class="form-check-label" for="">Display In Homepage</label>
                                    
                                    
                                    </div>
                                    </div>

                                   
                       
                        
 

                                   
                                        <!-- SummerNote-->
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label for="" class="col-form-label">Description </label>
                                                <textarea name="description" id="summernote-editor"></textarea>
                                              
                                               
                                            </div> <!-- end summernote-editor-->
                                         

                                            <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>

                            </form>
                        </div> <!-- end card-body-->



                        

















                    </div> <!-- end card-->





                </div><!-- end col -->











                
            </div>

















        </div>











        
        <div class="col-md-6">

<div class="card">
    <div class="card-header">
      <h3 class="card-title">Client's Feedback</h3>
    </div>

   
    <!-- /.card-header -->
    <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                  <thead>
                    <tr>

                      <th style="width:80px;">SL#</th>
                      <th style="width:80px;">ID</th>
             
                      <th style="width:300px;">Feedback</th>
                      <th>Action</th>
                      
                      
                    </tr>
                  </thead>
                  <tbody>
                
       
            
                      <tr>
                        <td></td>
                     
                        <td style="display:none;"></td>
                        <td style="display:none;"></td>
                        
                        <td></td>
                        <td>

                          <div class="col-md-12">
                         
                        </td>
                        <td>
                          <div class="col-md-12">
                            
                            <button type="button" onclick="location.href='';"  class="dmctg btn btn-danger btn-xs" >Delete</button>
                        </td>
                      </tr>
                               
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            
            </tbody>
        </table>
    </div>















    </div>
</div>








@endsection

@section('script')
<!-- Summernote js -->
<script src="{{asset('/')}}back-end/assets/libs/summernote/summernote-bs4.min.js"></script>

<!-- Init js -->
<script src="{{asset('/')}}back-end/assets/js/pages/form-summernote.init.js"></script>
@endsection