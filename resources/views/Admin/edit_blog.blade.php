<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>    
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="icon" href="{{asset('assets/images/favicon (1).ico')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
    <link rel="stylesheet" href="{{asset('assets/style.css')}}">
    <title>digiLib | Library Card</title>
</head>
<style>
  /* body{
    /* background-image: url({{asset('assets/images/lib_card_back.jpg')}}); */
    background-size: cover;
    background-attachment: fixed;
  } */
</style>

<div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div style="box-shadow: 0 0 20px -10px;" class="card-body">
                  <h4 class="card-title">Add Blog</h4>
                  <p class="card-description">
                    Update the blog details
                  </p>
                  <form action="{{route('updateBlog',['id'=>$blog->id])}}" method="post"  class="forms-sample" enctype="multipart/form-data"> 
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                      <label for="exampleInputUsername1">Name</label>
                      <input type="text" name="blog_name" class="form-control" value="{{$blog->blog_name}}" id="exampleInputUsername1" placeholder="Blog Name">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Date</label>
                      <input type="date" name="date" class="form-control" id="exampleInputUsername1" value="{{$blog->date}}">
                    </div>
                    
                    <div class="form-group">
                      <label for="exampleInputEmail1">Description</label>
                      <input type="text" name="blog_details" class="form-control" id="exampleInputEmail1" value="{{$blog->blog_details}}" placeholder="Description">
                    </div>
                    <!-- <div class="form-group">
                      <label for="exampleInputPassword1">Image</label>
                      <input type="file" name="blog_image" class="form-control" id="exampleInputPassword1" value="{{$blog->blog_image}}" placeholder="Image">
                    </div> -->
                    <!-- <div class="form-group">
                      <label for="exampleInputConfirmPassword1">Video</label>
                      <input type="file" name= class="form-control" id="exampleInputConfirmPassword1" placeholder="Video">
                    </div> -->
                    <div class="form-group">
                      <label for="exampleInputPassword1">Add Link of the video</label>
                      <input type="longtext" name="blog_video_link" class="form-control" value="{{$blog->blog_video_link}}" id="exampleInputPassword1" placeholder="Link">
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
                    <button type="submit" class="btn btn-primary me-2">Update Blog</button>
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