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
    <title>digiLib | Blog</title>
</head>
<body>
    @php
        $page="blog";
    @endphp
    @include('layouts.navbar')
    
    <div class="blog1">
        <div class="blog1-img"><img src="{{asset('assets/images/blog_bulb.jpg')}}" alt=""></div>
        <div class="blog1-txt">
            <p class="blog1-txt1">Innovation DigiLab</p>
            <p class="blog1-txt2">Now Open</p>
            <div>
                The digital libraries emerging from "information societies" no longer concern only digital technodocumentary devices that are patrimonial, cultural or scientific. Social networks and high-audience merchant sites share the same technologies, heterogeneous digital resources, offer identical user experience (UX) capabilities, and are born within the same communities of designers and engineers.
                <!-- These technology-induced recoveries nourish a usage fantasy that irrigates a transformation movement of innovation where use and user occupy a central place. -->
                <!-- The evolution of digital libraries does not constitute a disjointed set of singular innovations. They are the result of an innovation movement that gives them a specific dynamic and produces two major effects: empowering users and increasing their number. -->
            </div>
                <br>
            <a href="{{route('blog.post')}}" class="blog-learn"> Learn More <i class="glyphicon glyphicon-arrow-right"></i></a>
        </div>
    </div>
    <div class="blogs">

    
    
    
    
       
    
        <div class=" container-fluid ">
            <div class="row ">
            @if($blogs)
            @foreach($blogs as $blog)
                <div style="margin:5vw;" class="col-4">
                    <div class="blog2">
                    <div class="blog2-img"><img  style=" width:350px; height:200px;" src="{{asset('storage/uploads/blogimages/'.$blog->blog_image)}}" alt=""></div>
                    <div class="blog2-txt-box">
                        <p class="blog2-txt1">{{$blog->blog_name}}</p>
                        <!-- <p class="blog2-txt2">New Books</p>                 -->
                        <div class="blog2-txt">
                        {{$blog->blog_details}}
                        <div>
                        <a href="{{$blog->blog_video_link}}" target="_blank" class="blog-learn">Learn More <i class="glyphicon glyphicon-arrow-right"></i></a>
                        </div>
                    </div>
                    </div>
                    </div>
                </div>
            @endforeach
            </div>
            @else
            <div><h1>No blogs</h1></div>
            @endif
           
        </div>
    
    </div>



   
  
</body>
@include('layouts.footer')
</html>