@extends('layouts.adminHeader')

@section('content')
<div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Users Table</h4>
                  <p class="card-description">
                    List of students registered on DigiLib 
                  </p>
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>User Name</th>
                          <th>User Email</th>
                          <th>Phone_Number</th>
                          <th>Role</th>
                          <th>Registered_on</th>
                          
                          <th>Edit</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($student as $book)
                        <tr>
                          <td>{{$book->id}}</td>
                          <td>{{$book->userName}}</td>
                          <td>{{$book->email}}</td>
                          <td>{{$book->phoneNumber}}</td>
                          
                          @if($book->role=='1')
                          <td>"User"</td>
                          @else
                          <td>"Admin"</td>
                          @endif
                          <td>{{$book->created_at}}</td>
                         
                          
                          
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