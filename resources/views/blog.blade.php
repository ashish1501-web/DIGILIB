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

    
    
    
    
       
    
        <div class=" container ">
            <div class="row ">
            @foreach($blogs as $blog)
                <div style="" class="col-3">
                    <div class="blog2">
                    <div class="blog2-img"><img  style=" width:350px; height:200px;" src="{{asset('storage/uploads/blogimages/'.$blog->blog_image)}}" alt=""></div>
                    <div class="blog2-txt-box">
                        <p class="blog2-txt1">{{$blog->blog_name}}</p>
                        <p class="blog2-txt2">New Books</p>                
                        <div class="blog2-txt">
                        {{$blog->blog_details}}
                        <div>
                        <a href="#" class="blog-learn">Learn More <i class="glyphicon glyphicon-arrow-right"></i></a>
                        </div>
                    </div>
                    </div>
                    </div>
                </div>
            @endforeach
            </div>
           
        </div>
    
    </div>



    <!-- <div class="blog2-img"><img  style=" width:350px; height:200px;" src="{{asset('storage/uploads/blogimages/'.$blog->blog_image)}}" alt=""></div>
                    <div class="blog2-txt-box">
                        <p class="blog2-txt1">{{$blog->blog_name}}</p>
                        <p class="blog2-txt2">New Books</p>                
                        <div class="blog2-txt">
                        {{$blog->blog_details}}
                        <div>
                        <a href="#" class="blog-learn">Learn More <i class="glyphicon glyphicon-arrow-right"></i></a>
                        </div>
                    </div>
                    </div> -->
    
        <!-- <div class="blog2">
            <div class="blog2-img"><img src="{{asset('assets/images/blog_digitalize.jfif')}}" alt=""></div>
            <div class="blog2-txt-box">
                <p class="blog2-txt1">Digitalize</p>
                <p class="blog2-txt2">Open Source</p>
                <div class="blog2-txt">
                    Building the Internet’s library is no easy task, and it can’t be done alone. Thankfully, we’re not alone in wanting to provide access to knowledge, books, and reading — which is why we’re excited to introduce
                    DIGILIB into open library.Open Library patrons easy access to more trusted sources for digital books.
                </div> <br>
                <a href="#" class="blog-learn">Learn More <i class="glyphicon glyphicon-arrow-right"></i></a>
            </div>
        </div>
        <div class="blog2">
            <div class="blog2-img"><img src="{{asset('assets/images/blog_levelup.jpg')}}" alt=""></div>
            <div class="blog2-txt-box">
                <p class="blog2-txt1">The Modern Way</p>
                <p class="blog2-txt2">Level Up</p>
                <div class="blog2-txt">
                    Traditional libraries lack the flexibility to include a diverse range of content due to physical space constraints. Digital libraries, store a wide variety of content in a virtual environment, including eBooks, magazines, articles, blogs, papers, videos, podcasts, and audiobooks. 
                </div> <br>
                <a href="#" class="blog-learn">Learn More <i class="glyphicon glyphicon-arrow-right"></i></a>
            </div>
        </div>
    </div>


    <div class="blogs">
        <div class="blog2">
            <div class="blog2-img"><img src="{{asset('assets/images/blog_art.png')}}" alt=""></div>
            <div class="blog2-txt-box">
                <p class="blog2-txt1">Share Your Thoughts</p>
                <p class="blog2-txt2">User Interactive</p>                
                <div class="blog2-txt">
                    When visiting a traditional library, readers must devote both time and effort to finding the right book. Furthermore, locating pertinent information in a physical book takes time. Digital libraries, on the other hand, are designed with built-in search capabilities. 
                </div> <br>
                <a href="#" class="blog-learn">Learn More <i class="glyphicon glyphicon-arrow-right"></i></a>
            </div>
        </div>
        <div class="blog2">
            <div class="blog2-img"><img src="{{asset('assets/images/blog_libraryday.jpg')}}" alt=""></div>
            <div class="blog2-txt-box">
                <p class="blog2-txt1">International Library Day</p>
                <p class="blog2-txt2">12-Aug-2020</p>
                <div class="blog2-txt">
                    Traditional libraries have their working hours, limiting users to use library resources at their leisure. Digital libraries, on the other hand, allow readers to read eBooks, listen to audiobooks, and watch videos 24/7 without changing their location
                </div> <br>
                <a href="#" class="blog-learn">Learn More <i class="glyphicon glyphicon-arrow-right"></i></a>
            </div>
        </div>
        <div class="blog2">
            <div class="blog2-img"><img src="{{asset('assets/images/blog_welcome.png')}}" alt=""></div>
            <div class="blog2-txt-box">
                <p class="blog2-txt1">The Fastest Growing Digital Library</p>
                <p class="blog2-txt2">Welcome....</p>
                <div class="blog2-txt">
                    By automating routine library services such as indexing, issuing, tracking, and preservation, librarians are slowly becoming obsolete. The library management software has features that automate library management from beginning to end. 
                </div> <br>
                <a href="#" class="blog-learn">Learn More <i class="glyphicon glyphicon-arrow-right"></i></a>
            </div>
        </div>-->
   

  
</body>
@include('layouts.footer')
</html>