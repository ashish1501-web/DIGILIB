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
  body{
    /* background-image: url({{asset('assets/images/lib_card_back.jpg')}}); */
    background-size: cover;
    background-attachment: fixed;
  }
</style>
<div class="login-wrapper">

          <form  action="{{route('updateuserProfile')}}"   class="form" id="signupForm" method="post">
          @csrf
           @method('PUT')
                
                    
            
             <h2>Update User details</h2>
            <div class="alert alert-success fade in" id="form-success">
              <a href="#" class="close" data-dismiss="alert">&times;</a>
              <strong>Success! Account Created.</strong>
            </div>
            <div class="alert alert-danger fade in" id="form-error">                                   
              <strong id="err-msg"></strong>
            </div>
            <!-- <input type="hidden" name="id" value="{{$user->id}}"> -->
            <div class="input-group">
              <input type="text" name="userName" id="signupUser" value="{{$user->userName}}" placeholder=" " required>
              <label for="signupUser">User Name</label>
              @error ('userName')
            <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="input-group">
              <input type="email" name="email" id="signupEmail" value="{{$user->email}}" placeholder=" " required>
              <label for="signupUser">Email Id</label>
              @error ('email')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
            </div>
            <div class="input-group">
              <input type="number" name="phoneNumber" id="signupNumber" value="{{$user->phoneNumber}}" placeholder=" " required>
              <label for="signupUser">Phone number</label>
              @error ('phoneNumber')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
            </div>
            <!-- <div class="input-group">
              <input type="password" name="password" id="signupPassword" placeholder=" " required>
              <label for="signupPassword">Password</label>
              @error ('password')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
            </div>
            <div class="input-group">
              <input type="password" name="password_confirmation" id="signupCPassword" placeholder=" " required>
              <label for="signupPassword">Confirm Password</label>
              @error ('password_confirmation')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
            </div> -->
            <!-- <input type="submit" value="update" class="submit-btn log_sign"> -->
           <button type="submit" class="submit-btn log_sign">Update</button>
            <!-- <p>Do you already have an account?</p>
            <p>Click on Login.</p>
            <a href="{{route('login')}}" class="btn submit-btn log_in">Login</a> -->
            
    </form>
  
  </div>
