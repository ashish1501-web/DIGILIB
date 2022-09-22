@extends('layouts.adminHeader')
@section('content')
<div class="main-panel">        
        <div class="content-wrapper">
          <div class="row" style="margin-top: 4vw;">
            <div class="col-md-3"></div>
            <div class="col-md-6 grid-margin stretch-card">
              <div style="box-shadow: 0 0 10px -10px;" class=" card">
                <div style="box-shadow: 0 0 20px -10px;" class="card-body">
                  <h4 class="card-title">Add Category</h4>
                  <p class="card-description">
                    Add a new Category
                  </p>
                  <form action="{{route('addCategory.store')}}" method="post" class="forms-sample">
                    @csrf
                    <div class="form-group">
                      <label for="exampleInputcatname">Name</label>
                      <input type="text" name="category_name" class="form-control" id="exampleInputUsername1" placeholder="Category Name" required>
                      @error ('category_name')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Description</label>
                      <input type="text" name="category_details" class="form-control" id="exampleInputEmail1" placeholder="Description" required>
                      @error ('category_details')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
                    </div>
                    <!-- <label class="form-check-label">Status</label>
                    <div class="row">
                      <div class="col-md-1"></div>
                      <div class="col-md-5 status form-check form-check-flat form-check-primary">
                        <label class="form-check-label">
                          <input type="radio" name="cat_status" value="available">
                          Keep
                        </label>
                      </div>
                      <div class="col-md-6 form-check form-check-flat form-check-primary">
                        <label class="form-check-label">
                          <input type="radio" name="cat_status" value="unavailable">
                          Remove
                        </label>
                      </div> -->
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Add Category</button>
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