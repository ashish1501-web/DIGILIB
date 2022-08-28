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
    background-image: url({{asset('assets/images/lib_card_back.jpg')}});
    background-size: cover;
    background-attachment: fixed;
  }
</style>




<body id="lib_card_body">

    @php
      $page="librarycard";
    @endphp
    
    @include('layouts.navbar')
    
    <div class="login-wrapper">
      <form method="post" action="{{route('login.store')}}" class="form" id="loginForm">
        @csrf

         <div id="log-remove">
          <h2>SIGN IN</h2>
          <div class="alert alert-success fade in" id="login-success">
            <a href="#" class="close" data-dismiss="alert">&times;</a>
            <strong>Successfully logged out!.</strong>
          </div>
          <div class="alert alert-danger fade in" id="login-error">                                   
            <a href="#" class="close" data-dismiss="alert">&times;</a>             
            <strong id="log-err-msg"></strong>
          </div>
          <div class="input-group">
            <input type="email" name="email">
            
            <label for="loginUser">Email-id </label>
            @error('email')
              <p>{{$message}}</p>
            @enderror
          </div>
          <div class="input-group">
            <input type="password" name="password" id="loginPassword" placeholder=" " required>

            <label for="loginPassword">Password</label>
            @error('password')
              <p>{{$message}}</p>
            @enderror
          </div>
          <a href="#forgot-pw" class="forgot-pw" data-toggle="modal" data-target="#forgot-pw">Forgot Password?</a> <br><br>
          <input type="submit" value="Log-in" class="submit-btn log_sign">
          
    
          <p id="frgt-log"> Don't have an account? </p>
          <p>Click on Sign-Up.</p>
          <a href="{{route('register')}}" class="btn submit-btn log_in">Sign-Up</a>
        </div>
        <div class="login-invisible" id="log-success-name">
          <img src="./images/tickmark.png" class="tick" alt="">
          <h3></h3>
          <button id="log-out-btn" class="submit-btn log_sign">Log-out</button>
        </div>
      </form>
    </div>
    <div class="modal fade" id="forgot-pw">
      <div class="modal-dialog" id="modal-box">
        <form action="" class="form" id="frgt">
          <div class="modal-header">
            <a href="#" class="close" data-dismiss="modal">&times;</a>
            <h2>Reset Password</h2>
          </div>
          <div class="modal-body" id="modal-body ">
            <div class="input-group">
              <input type="email" name="email" id="frgt-email" placeholder=" " required>
              <label for="email">Email</label>
            </div>
            <div class="input-group">
              <input type="text" name="name" id="fav-book" placeholder=" " required>
              <label for="email">Favourite Book</label>
            </div>
            <div class="input-group">
              <input type="password" name="newPassword" id="newPassword" placeholder=" " required>
              <label for="frgtPassword">New Password</label>
            </div>
          </div>
          <div class="modal-footer">
            <input type="submit" value="Submit" class="submit-btn log_sign">
          </div>

    </form>
      </div>
    </div>
  
    
  <script src="{{asset('assets/script.js')}}"></script>
  


  @include('layouts.footer')
</body>

