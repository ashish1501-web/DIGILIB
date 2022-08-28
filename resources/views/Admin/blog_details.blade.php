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
                         
                          
                          
                          <td><button>Edit</button></td>
                        </tr>
                        @endforeach
                        <tr>
                          <td>2</td>
                          <td>Book2</td>
                          <td>Author2</td>
                          <td>1234</td>
                          <td>Publication2</td>
                          <td>sadfghasdfgh</td>
                          <td>Physics</td>
                          <td>Visible</td>
                          <td><button>Edit</button></td>
                        </tr>
                        <tr>
                          <td>3</td>
                          <td>Book3</td>
                          <td>Author3</td>
                          <td>1234</td>
                          <td>Publication3</td>
                          <td>sadfghasdfgh</td>
                          <td>Chemistry</td>
                          <td>Visible</td>
                          <td><button>Edit</button></td>
                        </tr>
                        <tr>
                          <td>4</td>
                          <td>Book4</td>
                          <td>Author4</td>
                          <td>1234</td>
                          <td>Publication4</td>
                          <td>sadfghasdfgh</td>
                          <td>Comics</td>
                          <td>Hidden</td>
                          <td><button>Edit</button></td>
                        </tr>
                        <tr>
                          <td>5</td>
                          <td>Book5</td>
                          <td>Author5</td>
                          <td>1234</td>
                          <td>Publication5</td>
                          <td>sadfghasdfgh</td>
                          <td>Computer Science</td>
                          <td>Visible</td>
                          <td><button>Edit</button></td>
                        </tr>
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