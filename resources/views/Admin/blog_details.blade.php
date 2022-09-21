@extends('layouts.adminHeader')

@section('content')
<div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Blogs Table</h4>
                  <p class="card-description">
                    List of Blogs 
                  </p>
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>Blog-ID</th>
                          <th>Blog-Image</th>
                          <th>Blog Name</th>
                          <th>Posted date</th>
                          
                          <th>Blog-details</th>
                          <th>Video_refrence_link</th>
                          
                          <th>Edit</th>
                          <th>Delete</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($blogs as $book)
                        <tr>
                          <td>{{$book->id}}</td>
                          <td><img src="{{asset('storage/uploads/blogimages/'.$book->blog_image)}}" width="200px" height="200px"alt="Error"></td>
                          <td>{{$book->blog_name}}</td>
                          <td>{{$book->date}}</td>
                          <td>{{$book->blog_details}}</td>
                          
                          
                          <td>{{$book->blog_video_link}}</td>
                         
                          
                          
                          <td><button><a href="{{route('editBlog',['id'=>$book->id])}}">Edit</a></button></td>
                          <td><button><a href="{{route('deleteBlog',['id'=>$book->id])}}">Delete</a></button></td>
                        </tr>
                        @endforeach
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        
        <!-- partial -->
      </div>
@endsection