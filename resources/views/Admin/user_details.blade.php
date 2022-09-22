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
                          <!-- <th>Role</th> -->
                          <th>Registered_on</th>
                          
                          <th>Edit</th>
                          <th>Delete</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($student as $book)
                        <tr>
                          <td>{{$book->id}}</td>
                          <td>{{$book->userName}}</td>
                          <td>{{$book->email}}</td>
                          <td>{{$book->phoneNumber}}</td>
                          
                          <!-- @if($book->role=='1')
                          <td>"User"</td>
                          @else
                          <td>"Admin"</td>
                          @endif -->
                          <td>{{$book->created_at}}</td>
                         
                          
                          
                          <td><button> <a href="{{route('editUser',['id'=>$book->id])}}">Edit</a> </button></td>
                          <td><button> <a href="{{route('deleteUser',['id'=>$book->id])}}">Delete</a> </button></td>
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