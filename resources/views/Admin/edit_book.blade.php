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
              <div style="box-shadow: 0 0 20px -10px;" class="card">
                <div class="card-body">
                  <h4 class="card-title">Add Books</h4>
                  <p class="card-description">
                    Enter the book details
                  </p>
                  <form action="{{route('updateBook',['id'=>$book->id])}}" method="post" class="forms-sample" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                      <label for="exampleInputUsername1">Name</label>
                      <input type="text" name="book_name" class="form-control" id="exampleInputUsername1" value="{{$book->book_name}}" placeholder="Book Name">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputauthor">Author</label>
                      <input type="text"name="author_name" class="form-control" id="exampleInputEmail1" value="{{$book->author_name}}" placeholder="Author">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputpublisher">Publication</label>
                      <input type="text" name="publisher" class="form-control" id="exampleInputEmail1" value="{{$book->publisher}}" placeholder="Book Publisher">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputdescription">Book Details</label>
                      <input type="text" name="description" class="form-control" id="exampleInputEmail1" value="{{$book->description}}" placeholder="Details">
                    </div>
                    <!-- <div class="form-group">
                      <label for="exampleInputimage">Image</label>
                      <input type="file" name="book_image" class="form-control" id="exampleInputPassword1" value="{{$book->book_image}}" placeholder="Image">
                    </div> -->
                    <div class="form-group">
                      <label for="exampleInputpages">Number of Pages</label>
                      <input type="number" name="pages" class="form-control" id="exampleInputConfirmPassword1" value="{{$book->pages}}" placeholder="Pages">
                    </div>
                    
                    
                    <div class="form-group">
                      <label for="exampleInputcategory">Category</label>
                      <!-- <input type="text" name="category" class="form-control" id="exampleInputEmail1" placeholder="Category"> -->
                      <select name="category" value="{{$book->category}}" id="">
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
                    <!-- <div> -->
                    <!-- <label>File upload</label>
                      <input type="file" name="book_file" value="{{$book->book_file}}" class="file-upload-default">
                      
                    </div> -->
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
                    <button type="submit" class="btn btn-primary me-2">Update</button>
                    <button class="btn btn-light">Cancel</button>
  
  </div>
                  </form>
                </div>
              </div>
            </div>            
            <div class="col-md-3"></div>
          </div>
        </div>
        
      </div>


    
