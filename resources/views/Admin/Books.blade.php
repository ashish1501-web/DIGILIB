@extends('layouts.adminHeader')
@section('content')
      <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 grid-margin stretch-card">
              <div style="box-shadow: 0 0 20px -10px;" class="card">
                <div class="card-body">
                  <h4 class="card-title">Add Books</h4>
                  <p class="card-description">
                    Enter the book details
                  </p>
                  <form action="{{route('addBooks.store')}}" method="post" class="forms-sample" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <label for="exampleInputUsername1">Name</label>
                      <input type="text" name="book_name" class="form-control" id="exampleInputUsername1" placeholder="Book Name">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputauthor">Author</label>
                      <input type="text"name="author_name" class="form-control" id="exampleInputEmail1" placeholder="Author">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputpublisher">Publication</label>
                      <input type="text" name="publisher" class="form-control" id="exampleInputEmail1" placeholder="Book Publisher">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputdescription">Book Details</label>
                      <input type="text" name="description" class="form-control" id="exampleInputEmail1" placeholder="Details">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputimage">Image</label>
                      <input type="file" name="book_image" class="form-control" id="exampleInputPassword1" placeholder="Image">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputpages">Number of Pages</label>
                      <input type="number" name="pages" class="form-control" id="exampleInputConfirmPassword1" placeholder="Pages">
                    </div>
                    
                    
                    <div class="form-group">
                      <label for="exampleInputcategory">Category</label>
                      <!-- <input type="text" name="category" class="form-control" id="exampleInputEmail1" placeholder="Category"> -->
                      <select name="category" id="">
                          @foreach($cat as $c)
                            <option value="{{$c->id}}">{{$c->category_name}}</option>
                          @endforeach
                      </select>
                      
                    </div>
                    <!-- <div class="form-group">
                      <label>File upload</label>
                      <input type="file" name="book_file" class="file-upload-default">
                      <div class="input-group col-xs-12">
                        <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Book">
                        <span class="input-group-append">
                          <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                        </span>
                      </div>
                    </div> -->
                    <div>
                    <label>File upload</label>
                      <input type="file" name="book_file" class="file-upload-default">
                      
                    </div>
                    <!-- <label class="form-check-label">Status</label>
                    <div class="row">
                      <div class="col-md-1"></div>
                      <div class="col-md-5 status form-check form-check-flat form-check-primary">
                        <label class="form-check-label">
                          <input type="radio" name="status" value="available">
                          Available
                        </label>
                      </div>
                      <div class="col-md-6 form-check form-check-flat form-check-primary">
                        <label class="form-check-label">
                          <input type="radio" name="status" value="unavailable">
                          Unavailable
                        </label>
                      </div>
                    </div> -->
                    <!-- <input type="hidden" value='active' name='statuscheck'> -->
                    <button type="submit" class="btn btn-primary me-2">Add Book</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div>            
            <div class="col-md-3"></div>
          </div>
        </div>
        
      </div>

@endsection