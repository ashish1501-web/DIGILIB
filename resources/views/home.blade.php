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
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@600&family=Spline+Sans&display=swap" rel="stylesheet">
    <link rel="icon" href="{{asset('assets/images/favicon (1).ico')}}">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
    <link href="https://fonts.googleapis.com/css2?family=Martel+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Domine:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Spectral:ital,wght@1,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/style.css')}}">
    <title>digiLib | Home</title>
</head>
<body>
    @php
    $page="home";
    
    @endphp
   @include('layouts.navbar')

    <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner">
            <div class="item active" id="item1">
                <div class="car-flex">
                    <div class="empty1"></div>
                    <div class="cont">
                        <h1 class="e-lib">E-Library</h1>
                        <hr class="e-lib-under">
                        <h1 class="top-line">"Get The Books You Need With A Click Of A Button"</h1>
                        <div class="input-group search">
                            <input type="text" class="form-control search-inp" placeholder="Book name, author....">
                            <span class="input-group-btn search-span">
                                <button class="btn btn-default search-btn" type="submit">
                                    <span class="glyphicon glyphicon-search"></span>&nbsp; Search                                    
                                </button>
                            </span>
                        </div>
                    </div>
                    <div class="empty2"></div>
                    <img src="{{asset('assets/images/carousel-1.jpg')}}" class="carousel-img" alt="">
                    <div class="xyz">
                        <span class="emoji1">&#128525;</span>
                        <span class="emoji2">&#11088;</span>
                        <span class="emoji3">&#9889;</span>
                        <div class="arc">
                            <div class="semi-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item" id="item2">
                <div class="car-flex">
                    <div class="empty1"></div>
                    <div class="cont">
                        <h1 class="e-lib">E-Library</h1>
                        <hr class="e-lib-under">
                        <h1 class="top-line">"Dive Deeper And Deeper Into The Sea Of Knowledge"</h1>
                        <div class="input-group search">
                            <input type="text" class="form-control search-inp" placeholder="Book name, author....">
                            <span class="input-group-btn search-span">
                                <button class="btn btn-default search-btn" type="submit">
                                    <span class="glyphicon glyphicon-search"></span>&nbsp; Search                                    
                                </button>
                            </span>
                        </div>
                    </div>      
                    <div class="empty2"></div>              
                    <img src="{{asset('assets/images/carousel-2.jpg')}}" class="carousel-img" alt="">
                    <div class="xyz">
                        <span class="emoji1">&#127752;</span>
                        <span class="emoji2">&#127881;</span>
                        <span class="emoji3">&#127919;</span>
                        <div class="arc">
                            <div class="semi-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a href="#myCarousel" class="left carousel-control" id="larrow" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        </a>

        <a href="#myCarousel" class="right carousel-control" id="rarrow" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        </a>
    </div>


    <h1 class="cat-name" id="popular">Most Popular</h1>

    <div id="popular-books" class="books-slider">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
            <div class="swiper-slide"><a href="./books/Pythonbook.pdf"><img src="{{asset('assets/images/img1.webp')}}" alt=""></a></div>
            <div class="swiper-slide"><a href=""><img src="{{asset('assets/images/img19.webp')}}" alt=""></a></div>
            <div class="swiper-slide"><a href=""><img src="{{asset('assets/images/img80.webp')}}" alt=""></a></div>
            <div class="swiper-slide"><a href=""><img src="{{asset('assets/images/img69.webp')}}" alt=""></a></div>
            <div class="swiper-slide"><a href=""><img src="{{asset('assets/images/img55.webp')}}" alt=""></a></div>
            <div class="swiper-slide"><a href=""><img src="{{asset('assets/images/img31.webp')}}" alt=""></a></div>
            <div class="swiper-slide"><a href=""><img src="{{asset('assets/images/img94.webp')}}" alt=""></a></div>
            <div class="swiper-slide"><a href=""><img src="{{asset('assets/images/img9.webp')}}" alt=""></a></div>
            <div class="swiper-slide"><a href=""><img src="{{asset('assets/images/img74.webp')}}" alt=""></a></div>
            <div class="swiper-slide"><a href=""><img src="{{asset('assets/images/img50.webp')}}" alt=""></a></div>
            <div class="swiper-slide"><a href=""><img src="{{asset('assets/images/img24.webp')}}" alt=""></a></div>
            <div class="swiper-slide"><a href=""><img src="{{asset('assets/images/img77.jfif')}}" alt=""></a></div>
            <div class="swiper-slide"><a href=""><img src="{{asset('assets/images/img101.web')}}p" alt=""></a></div>
            <div class="swiper-slide"><a href=""><img src="{{asset('assets/images/img66.webp')}}" alt=""></a></div>
            <div class="swiper-slide"><a href=""><img src="{{asset('assets/images/img33.webp')}}" alt=""></a></div>
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>

    <!-- <div class="book-numbers">
        <div class="row">
            <div></div>
            <div style=" width: 10.9vw;" class=" info" align="center"><font size="10">72</font> <br> Mathematics Books</div>  
            <div style=" width: 11.2vw;" class=" info" align="center"><font size="10">106</font> <br> Programming Books</div>
            <div style=" width: 10vw;" class=" info" align="center"><font size="10">34</font> <br> Physics Books</div>
            <div style=" width: 11.55vw;" class=" info" align="center"><font size="10">48</font> <br> Manga/Comic Books</div>
            <div style=" width: 10vw;" class=" info" align="center"><font size="10">8</font> <br> Blog Posts</div>
            <div></div>
        </div>
    </div> -->

    <div class="subscription">
        <p class="subscrb_h">Subscription</p>
        <div class="subscription-offers">
            <div></div>
            <div class="basic">
                <p class="plan_h">Basic</p>
                <hr class="plan_underline">
                <div>
                    <p class="money">&#8377;0</p>
                    <p>Per Year</p>
                </div>
                <hr>
                <div class="features">
                    <p>☑Get by signing up to Library Card</p>
                    <p>☑View all Free books</p>
                </div>
                <p style="text-align: left;">*You <b>cannot</b> download books</p>
                <button class="buy-plan">Select Plan</button>
            </div>
            <div class="standard">
                <p class="plan_h">Standard</p>
                <hr class="plan_underline">
                <div>
                    <p class="money">&#8377;800</p>
                    <p>Per Year</p>
                </div>
                <hr>
                <div class="features">
                    <p>☑Get by paying &#8377;800 per year</p>
                    <p>☑View all <b>blogs</b></p>
                    <p>☑View popular books</p>
                    <p>☑Download speed medium</p>
                </div>
                <button class="buy-plan">Select Plan</button>
            </div>
            <div class="gold">
                <p class="plan_h">Gold</p>
                <hr class="plan_underline">
                <div>
                    <p class="money">&#8377;1500</p>
                    <p>Per Year</p>
                </div>
                <hr>
                <div class="features">
                    <p>☑Get by paying &#8377;1500 per year</p>
                    <p>☑View all blogs</p>
                    <p>☑View the <b>best-seller</b> books</p>
                    <p>☑Download <b>instantly</b></p>
                </div>
                <button class="buy-plan">Select Plan</button>
            </div>
            <div></div>
        </div>
    </div>


    <div class="join-us">
        <div class="top-line join-us-text">
            COME JOIN US AND BECOME <br> ONE AMONG US <br>
            @if(!Auth::check())
            <a class="join-us-btn" href="{{route('register')}}" id="join-btn">Join Us</a>
            @endif
        </div>
        <div class="group-study"><img src="{{asset('assets/images/group-study.jpg')}}" alt=""></div>
    </div>


    @include('layouts.footer')

    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <script>
        var swiper = new Swiper(".mySwiper", {
          slidesPerView: 5,
          spaceBetween: 10,
          slidesPerGroup: 4,
          navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
          },
        });
    </script>


</body>
</html>

