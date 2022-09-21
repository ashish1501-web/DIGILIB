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
<body class="blog-bdy">
    @php
        $page="blog";
    @endphp
    @include('layouts.navbar')

    <div class="container blog-post">
        <h1>Innovative Digilab</h1>
        <div id="blog-carousel" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
            </ol>
            <div class="carousel-inner">
                <div class="item active">
                    <img src="{{asset('assets/images/blog_lab2.png')}}" width="800" height="533" alt="">
                </div>
                <div class="item">
                    <img src="{{asset('assets/images/blog_lab.jpg')}}" width="800" height="533" alt="">
                </div>
            </div>
            <a href="#blog-carousel" class="left carousel-control" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            </a>
    
            <a href="#blog-carousel" class="right carousel-control" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            </a>
        </div>
        <div class="blog-more">
            The digital libraries emerging from "information societies" no longer concern only digital technodocumentary devices that are patrimonial, cultural or scientific. Social networks and high-audience merchant sites share the same technologies, heterogeneous digital resources, offer identical user experience (UX) capabilities, and are born within the same communities of designers and engineers.
            These technology-induced recoveries nourish a usage fantasy that irrigates a transformation movement of innovation where use and user occupy a central place.
            The evolution of digital libraries does not constitute a disjointed set of singular innovations. They are the result of an innovation movement that gives them a specific dynamic and produces two major effects: empowering users and increasing their number.
        </div>
    </div>

    @include('layouts.footer')
</body>
</html>