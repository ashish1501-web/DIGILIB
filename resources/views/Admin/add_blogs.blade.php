@extends('layouts.adminHeader')
@section('content')
<div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div style="box-shadow: 0 0 20px -10px;" class="card-body">
                  <h4 class="card-title">Add Blog</h4>
                  <p class="card-description">
                    Enter the blog details
                  </p>
                  <form action="{{route('addBlogs.store')}}" method="post"  class="forms-sample" enctype="multipart/form-data"> 
                    @csrf
                    <div class="form-group">
                      <label for="exampleInputUsername1">Name</label>
                      <input type="text" name="blog_name" class="form-control" id="exampleInputUsername1" placeholder="Blog Name">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Date</label>
                      <input type="date" name="date" class="form-control" id="exampleInputUsername1">
                    </div>
                    
                    <div class="form-group">
                      <label for="exampleInputEmail1">Description</label>
                      <input type="text" name="blog_details" class="form-control" id="exampleInputEmail1" placeholder="Description">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Image</label>
                      <input type="file" name="blog_image" class="form-control" id="exampleInputPassword1" placeholder="Image">
                    </div>
                    <!-- <div class="form-group">
                      <label for="exampleInputConfirmPassword1">Video</label>
                      <input type="file" name= class="form-control" id="exampleInputConfirmPassword1" placeholder="Video">
                    </div> -->
                    <div class="form-group">
                      <label for="exampleInputPassword1">Add Link of the video</label>
                      <input type="longtext" name="blog_video_link" class="form-control" id="exampleInputPassword1" placeholder="Link">
                    </div>
                    <!-- <label class="form-check-label">Status</label> -->
                    <!-- <div class="row">
                      <div class="col-md-1"></div>
                      <div class="col-md-5 status form-check form-check-flat form-check-primary">
                        <label class="form-check-label">
                          <input type="radio" name="status" value="available">
                          Show
                        </label>
                      </div>
                      <div class="col-md-6 form-check form-check-flat form-check-primary">
                        <label class="form-check-label">
                          <input type="radio" name="statuscheck" value="unavailable">
                          Archive
                        </label>
                      </div>
                    </div> -->
                    <button type="submit" class="btn btn-primary me-2">Add Blog</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div>            
            <div class="col-md-3"></div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    @endsection