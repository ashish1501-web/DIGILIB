<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin-Dashboard</title>
</head>
<style>
  * {
    margin: 0;
    padding: 0
}

body {
    background-color: #000
}

.card {
    width: 350px;
    background-color: #efefef;
    border: none;
    cursor: pointer;
    transition: all 0.5s;
}

.image img {
    transition: all 0.5s
}

.card:hover .image img {
    transform: scale(1.5)
}

.btn {
    height: 140px;
    width: 140px;
    border-radius: 50%
}

.name {
    font-size: 22px;
    font-weight: bold
}

.idd {
    font-size: 14px;
    font-weight: 600
}

.idd1 {
    font-size: 12px
}

.number {
    font-size: 22px;
    font-weight: bold
}

.follow {
    font-size: 12px;
    font-weight: 500;
    color: #444444
}

.btn1 {
    height: 40px;
    width: 150px;
    border: none;
    background-color: #000;
    color: #aeaeae;
    font-size: 15px
}

.text span {
    font-size: 13px;
    color: #545454;
    font-weight: 500
}

.icons i {
    font-size: 19px
}

hr .new1 {
    border: 1px solid
}

.join {
    font-size: 14px;
    color: #a0a0a0;
    font-weight: bold
}

.date {
    background-color: #ccc
}
.outbox{

  
  margin-left:500px;
  
}
.box{
  border: 1px solid white;
  box-sizing: border-box;
  box-shadow:0 1px 3px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.06);
}
</style>
<body>
  @include('layouts.adminHeader')

  <!-- <div class="container">
  <h1>Your profile</h1>
        <div style="margin:100px;" class="row">
        <td><h3><b>Id:</b></h3></td>

        <td><h3><b>Name: </b></h3></td>
        <td><h3><b>Email: </b>{</h3></td>
        <td><h3><b>Phone Number: </b></h3></td>

        @if($book->role=='1')
        <td><h3>"User"</h3></td>
        @else
        <td><h3>"Admin"</h3></td>
        @endif
        </div>
                        
                         
                          
 
  </div> -->
  <div class="outbox">
  <div class=" container mt-4 mb-4 p-3 d-flex justify-content-center">
     <div class="box  card p-4"> 
      <div class=" image d-flex flex-column justify-content-center align-items-center">
        <h2>  <b>Your Profile</b> </h2>
         <button class="btn btn-secondary"> 
          <img src="https://bootdey.com/img/Content/avatar/avatar7.png" height="100" width="100" />
        </button> 
        <span class="name mt-3">{{$book->userName}}</span> 
        <span class="idd">{{$book->email}}</span> 
        <div class="d-flex flex-row justify-content-center align-items-center gap-2"> 
          <span class="idd1">AdminId:{{$book->id}}</span>
           <span><i class="fa fa-copy"></i></span> 
          </div> 
          <div class="d-flex flex-row justify-content-center align-items-center mt-3">
             <span class="number">Contact:{{$book->phoneNumber}} </span> 
            </div> 
            <div class=" d-flex mt-2"> 
              <a href="{{route('editUser',['id'=>$book->id])}}"> <button class="btn1 btn-dark"> Edit Profile </button> </a>
            </div> <div class="text mt-3"> 
              <span><strong>{{$book->userName}}</strong> is a creator of minimalistic x bold graphics and digital artwork.<br><br> </span>
             </div> 
             <div class="gap-3 mt-3 icons d-flex flex-row justify-content-center align-items-center"> 
              <span><i class="fa fa-twitter"></i></span> 
              <span><i class="fa fa-facebook-f"></i></span> 
              <span><i class="fa fa-instagram"></i></span> 
              <span><i class="fa fa-linkedin"></i></span> </div> 
              <div class=" px-2 rounded mt-4 date "> 
                <span class="join">Joining Information: <br>{{date('$book->created_at')}}</span> 
              </div> 
            </div> 
          </div>
          </div>

  </div>
  



</body>
</html>