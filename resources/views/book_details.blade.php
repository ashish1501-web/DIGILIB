@extends('layouts.adminHeader')

@section('content')
<div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Books Table</h4>
                  <p class="card-description">
                    List of books present on DigiLib
                  </p>
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Book Name</th>
                          <th>Author</th>
                          <th>Pages</th>
                          <th>Publication</th>
                          <th>Details</th>
                          <th>Category</th>
                          <!-- <th>Status</th> -->
                          <th>Edit</th>
                          <th>delete</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($books as $book)
                        <tr>
                          <td>{{$book->id}}</td>
                          <td>{{$book->book_name}}</td>
                          <td>{{$book->author_name}}</td>
                          <td>{{$book->pages}}</td>
                          <td>{{$book->publisher}}</td>
                          <td>{{$book->description}}</td>
                          <td>{{$book->category }}</td>
                          
                          <!-- <td>{{$book->statuscheck}}</td> -->
                          <td><button> <a href="{{route('editBook',['id'=>$book->id])}}">Edit</a> </button></td>
                          <td><button> <a href="{{route('deleteBook',['id'=>$book->id])}}">{{$book->id}}Delete</a> </button></td>
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