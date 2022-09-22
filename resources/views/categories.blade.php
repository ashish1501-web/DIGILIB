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
    <link href="https://fonts.googleapis.com/css2?family=Spline+Sans&display=swap" rel="stylesheet">
    <link rel="icon" href="{{asset('assets/images/favicon (1).ico')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>

    <link rel="stylesheet" href="{{asset('assets/style.css')}}">
    <title>digiLib | Categories</title>

</head>
<body class="categories">

        @php
            $page="categories";
        @endphp
   
<header>
      <div class="logo-container">
        <div class="logo-img">
           <a href="{{route('home')}}"> <img class="logo" src="{{asset('assets/images/logo_grad blue.png')}}" alt="logo"> </a>
        </div>
        <div class="logo-text-div">
            <h4 class="logo-text"><a href="{{route('home')}}">digiLib</a></h4>
        </div>
      </div>
  
      <div class="nav-links">
              <div class="adiv"><a href="{{route('home')}}" class="nav-link {{ $page === 'home'  ? 'lactive' : ''}}" id="home">Home</a></div>
              <div class="adiv">
                  <div class="dropdown">
                      <a href="{{route('categories.index')}}" class="nav-link {{ $page === 'categories'  ? 'lactive' : ''}}" id="categories">
                      Categories<span class="caret"></span></a>
                      <div class="drp-dwn">
                          <div class="drp-dwn-clm">
                              <ul class="dropdown-menu">
                                @foreach($cat as $c)
                                <li><a href="{{route('categories.index')}}#{{$c->category_name}}">{{$c->category_name}}</a></li>
                                @endforeach
                              </ul>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="adiv"><a href="{{route('register')}}" class="nav-link {{ $page === 'librarycard'  ? 'lactive' : ''}}" id="card">Library Card</a></div>
              <div class="adiv"><a href="{{route('blogs.index')}}" class="nav-link {{ $page === 'blog'  ? 'lactive' : ''}}" id="blog">Blog</a></div>
              <div class="adiv"><a href="{{route('contact.page')}}" class="nav-link {{ $page === 'contact'  ? 'lactive' : ''}}" id="contact">Contact</a></div>
      </div>
  
      <div class="search-user">            
          <li>
            <button style="" class="btn btn-default">
                <span  class="glyphicon glyphicon-search"></span> Search
            </button>
          </li>
          
          @if(Auth::check())
          <!-- <li>
            <button class="btn btn-default">
                <span class="glyphicon glyphicon-star-empty"></span> Favourites
            </button>
          </li> -->
          <li>
            <div class="dropdown">
  
              <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown" id="subscribe-btn" type="button">
                  <span class="" id="user-dp">
                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" height="40" width="40" alt="">
                  </span>
              </button>                    
  
              <ul class="dropdown-menu" id="user-drpdwn">
                  <li class="dropdown-header"></li>
                  <li><a href="{{route('userProfile')}}"> My profile <span class="glyphicon glyphicon-user"></span></a></li>
                  
                  <li><a href="{{route('logout')}}"> Log Out &nbsp; <span class="glyphicon glyphicon-log-out"></span></a></li>
                      
              </ul>
          </div> 
          </li>
  
          @endif
            
    </div>
  
    
    </header>

    @foreach($cat as $category)
        <h1 id="{{$category->category_name}}"style="margin:30px;">
        {{$category->category_name}}
        </h1>
        <div class="books-slider">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
        @foreach($examples as $book)
            @if($category->id==$book->category)
            
           
                    
                    <div class="swiper-slide"><a style="height:390px;" href="{{route('book.show',['id'=>$book->id])}}"><img style="margin:30px; width:200px; height:250px;" width="20px" height="30px" src="{{asset('storage/uploads/books/'.$book->book_image)}}" alt="">{{$book->book_name}}</a></div>
                    
                   
                    
            @endif
        @endforeach
        <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
        </div>
                </div>
            </div>
    @endforeach

    
    
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <script>
        var swiper = new Swiper(".mySwiper", {
          slidesPerView: 6,
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

<!-- <div id="cat-car1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="item active">
                <div class="books">
                    <a href="#" class="book-link fchild"><img src="./images/blog_bulb2.jpg" alt=""></a>
                    <a href="#" class="book-link"><img src="./images/blog_bulb2.jpg" alt=""></a>
                    <a href="#" class="book-link"><img src="./images/blog_bulb2.jpg" alt=""></a>
                    <a href="#" class="book-link"><img src="./images/blog_bulb2.jpg" alt=""></a>
                    <a href="#" class="book-link lchild"><img src="./images/blog_bulb2.jpg" alt=""></a>
                </div>
            </div>
            <div class="item">
                <div class="books">
                    <a href="#" class="book-link fchild"><img src="./images/blog_bulb2.jpg" alt=""></a>
                    <a href="#" class="book-link"><img src="./images/blog_bulb2.jpg" alt=""></a>
                    <a href="#" class="book-link"><img src="./images/blog_bulb2.jpg" alt=""></a>
                    <a href="#" class="book-link"><img src="./images/blog_bulb2.jpg" alt=""></a>
                    <a href="#" class="book-link lchild"><img src="./images/blog_bulb2.jpg" alt=""></a>
                </div>
        </div>
        <a href="#cat-car1" data-target="#cat-car1" class="left carousel-control" id="cat1-larrow" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        </a>

        <a href="#cat-car1" data-target="#cat-car1" class="right carousel-control" id="cat1-rarrow" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        </a>
    </div>

    <h1>Physics</h1>

    <div id="cat-car2" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="item active">
                <div class="books">
                    <a href="#" class="book-link fchild"><img src="./images/blog_bulb2.jpg" alt=""></a>
                    <a href="#" class="book-link"><img src="./images/blog_bulb2.jpg" alt=""></a>
                    <a href="#" class="book-link"><img src="./images/blog_bulb2.jpg" alt=""></a>
                    <a href="#" class="book-link"><img src="./images/blog_bulb2.jpg" alt=""></a>
                    <a href="#" class="book-link lchild"><img src="./images/blog_bulb2.jpg" alt=""></a>
                </div>
            </div>
            <div class="item">
                <div class="books">
                    <a href="#" class="book-link fchild"><img src="./images/blog_bulb2.jpg" alt=""></a>
                    <a href="#" class="book-link"><img src="./images/blog_bulb2.jpg" alt=""></a>
                    <a href="#" class="book-link"><img src="./images/blog_bulb2.jpg" alt=""></a>
                    <a href="#" class="book-link"><img src="./images/blog_bulb2.jpg" alt=""></a>
                    <a href="#" class="book-link lchild"><img src="./images/blog_bulb2.jpg" alt=""></a>
                </div>
        </div>
        <a href="#cat-car2" data-target="#cat-car2" class="left carousel-control" id="cat2-larrow" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        </a>

        <a href="#cat-car2" data-target="#cat-car2" class="right carousel-control" id="cat2-rarrow" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        </a>
    </div>


    <h1>Chemistry</h1>

    <div id="cat-car3" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="item active">
                <div class="books">
                    <a href="#" class="book-link fchild"><img src="./images/blog_bulb2.jpg" alt=""></a>
                    <a href="#" class="book-link"><img src="./images/blog_bulb2.jpg" alt=""></a>
                    <a href="#" class="book-link"><img src="./images/blog_bulb2.jpg" alt=""></a>
                    <a href="#" class="book-link"><img src="./images/blog_bulb2.jpg" alt=""></a>
                    <a href="#" class="book-link lchild"><img src="./images/blog_bulb2.jpg" alt=""></a>
                </div>
            </div>
            <div class="item">
                <div class="books">
                    <a href="#" class="book-link fchild"><img src="./images/blog_bulb2.jpg" alt=""></a>
                    <a href="#" class="book-link"><img src="./images/blog_bulb2.jpg" alt=""></a>
                    <a href="#" class="book-link"><img src="./images/blog_bulb2.jpg" alt=""></a>
                    <a href="#" class="book-link"><img src="./images/blog_bulb2.jpg" alt=""></a>
                    <a href="#" class="book-link lchild"><img src="./images/blog_bulb2.jpg" alt=""></a>
                </div>
        </div>
        <a href="#cat-car3" data-target="#cat-car3" class="left carousel-control" id="cat2-larrow" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        </a>

        <a href="#cat-car3" data-target="#cat-car3" class="right carousel-control" id="cat2-rarrow" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        </a>
    </div> -->