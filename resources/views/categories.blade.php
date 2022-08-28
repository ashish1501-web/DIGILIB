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
    @include('layouts.navbar')

    @foreach($cat as $category)
        <h1 style="margin:30px;">
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

    <!-- <h1 class="cat-name" id="maths">Mathematics</h1>

    <div class="books-slider">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
            <div class="swiper-slide"><a href="./book-details.html"><img src="./images/img106.jfif" alt=""></a></div>
            <div class="swiper-slide"><a href=""><img src="./images/img2.webp" alt=""></a></div>
            <div class="swiper-slide"><a href=""><img src="./images/img1.webp" alt=""></a></div>
            <div class="swiper-slide"><a href=""><img src="./images/img4.webp" alt=""></a></div>
            <div class="swiper-slide"><a href=""><img src="./images/img5.webp" alt=""></a></div>
            <div class="swiper-slide"><a href=""><img src="./images/img6.webp" alt=""></a></div>
            <div class="swiper-slide"><a href=""><img src="./images/img7.webp" alt=""></a></div>
            <div class="swiper-slide"><a href=""><img src="./images/img8.webp" alt=""></a></div>
            <div class="swiper-slide"><a href=""><img src="./images/img9.webp" alt=""></a></div>
            <div class="swiper-slide"><a href=""><img src="./images/img10.webp" alt=""></a></div>
            <div class="swiper-slide"><a href=""><img src="./images/img11.webp" alt=""></a></div>
            <div class="swiper-slide"><a href=""><img src="./images/img12.webp" alt=""></a></div>
            <div class="swiper-slide"><a href=""><img src="./images/img13.webp" alt=""></a></div>
            <div class="swiper-slide"><a href=""><img src="./images/img14.webp" alt=""></a></div>
            <div class="swiper-slide"><a href=""><img src="./images/img15.webp" alt=""></a></div>
            
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
            </div>
        </div>
    </div>

    <h1 class="cat-name" id="physics">Physics</h1>

    <div class="books-slider">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
            <div class="swiper-slide"><a href=""><img src="./images/img16.webp" alt=""></a></div>
            <div class="swiper-slide"><a href=""><img src="./images/img17.webp" alt=""></a></div>
            <div class="swiper-slide"><a href=""><img src="./images/img18.webp" alt=""></a></div>
            <div class="swiper-slide"><a href=""><img src="./images/img19.webp" alt=""></a></div>
            <div class="swiper-slide"><a href=""><img src="./images/img20.webp" alt=""></a></div>
            <div class="swiper-slide"><a href=""><img src="./images/img21.webp" alt=""></a></div>
            <div class="swiper-slide"><a href=""><img src="./images/img22.webp" alt=""></a></div>
            <div class="swiper-slide"><a href=""><img src="./images/img23.webp" alt=""></a></div>
            <div class="swiper-slide"><a href=""><img src="./images/img24.webp" alt=""></a></div>
            <div class="swiper-slide"><a href=""><img src="./images/img25.webp" alt=""></a></div>
            <div class="swiper-slide"><a href=""><img src="./images/img26.webp" alt=""></a></div>
            <div class="swiper-slide"><a href=""><img src="./images/img27.webp" alt=""></a></div>
            <div class="swiper-slide"><a href=""><img src="./images/img28.webp" alt=""></a></div>
            <div class="swiper-slide"><a href=""><img src="./images/img29.webp" alt=""></a></div>
            <div class="swiper-slide"><a href=""><img src="./images/img30.webp" alt=""></a></div>
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>

    <h1 class="cat-name" id="chemistry" >Chemistry</h1>

    <div class="books-slider">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><a href=""><img src="./images/img31.webp" alt=""></a></div>
                <div class="swiper-slide"><a href=""><img src="./images/img32.webp" alt=""></a></div>
                <div class="swiper-slide"><a href=""><img src="./images/img33.webp" alt=""></a></div>
                <div class="swiper-slide"><a href=""><img src="./images/img34.webp" alt=""></a></div>
                <div class="swiper-slide"><a href=""><img src="./images/img35.webp" alt=""></a></div>
                <div class="swiper-slide"><a href=""><img src="./images/img36.webp" alt=""></a></div>
                <div class="swiper-slide"><a href=""><img src="./images/img37.webp" alt=""></a></div>
                <div class="swiper-slide"><a href=""><img src="./images/img38.webp" alt=""></a></div>
                <div class="swiper-slide"><a href=""><img src="./images/img39.webp" alt=""></a></div>
                <div class="swiper-slide"><a href=""><img src="./images/img40.webp" alt=""></a></div>
                <div class="swiper-slide"><a href=""><img src="./images/img41.webp" alt=""></a></div>
                <div class="swiper-slide"><a href=""><img src="./images/img42.webp" alt=""></a></div>
                <div class="swiper-slide"><a href=""><img src="./images/img43.webp" alt=""></a></div>
                <div class="swiper-slide"><a href=""><img src="./images/img44.webp" alt=""></a></div>
                <div class="swiper-slide"><a href=""><img src="./images/img45.webp" alt=""></a></div>
                
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>

    <h1 class="cat-name" id="biology">Biology</h1>

    <div class="books-slider">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><a href=""><img src="./images/img48.webp" alt=""></a></div>
                <div class="swiper-slide"><a href=""><img src="./images/img46.webp" alt=""></a></div>
                <div class="swiper-slide"><a href=""><img src="./images/img47.webp" alt=""></a></div>
                <div class="swiper-slide"><a href=""><img src="./images/img49.webp" alt=""></a></div>
                <div class="swiper-slide"><a href=""><img src="./images/img50.webp" alt=""></a></div>
                <div class="swiper-slide"><a href=""><img src="./images/img51.webp" alt=""></a></div>
                <div class="swiper-slide"><a href=""><img src="./images/img52.webp" alt=""></a></div>
                <div class="swiper-slide"><a href=""><img src="./images/img53.webp" alt=""></a></div>
                <div class="swiper-slide"><a href=""><img src="./images/img54.webp" alt=""></a></div>
                <div class="swiper-slide"><a href=""><img src="./images/img55.webp" alt=""></a></div>
                <div class="swiper-slide"><a href=""><img src="./images/img56.webp" alt=""></a></div>
                <div class="swiper-slide"><a href=""><img src="./images/img57.webp" alt=""></a></div>
                <div class="swiper-slide"><a href=""><img src="./images/img58.webp" alt=""></a></div>
                <div class="swiper-slide"><a href=""><img src="./images/img59.webp" alt=""></a></div>
                <div class="swiper-slide"><a href=""><img src="./images/img60.webp" alt=""></a></div>
                
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>


    <h1 class="cat-name" id="comics">Comics</h1>

    <div class="books-slider">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><a href=""><img src="./images/img61.webp" alt=""></a></div>
                <div class="swiper-slide"><a href=""><img src="./images/img62.webp" alt=""></a></div>
                <div class="swiper-slide"><a href=""><img src="./images/img63.webp" alt=""></a></div>
                <div class="swiper-slide"><a href=""><img src="./images/img64.webp" alt=""></a></div>
                <div class="swiper-slide"><a href=""><img src="./images/img65.webp" alt=""></a></div>
                <div class="swiper-slide"><a href=""><img src="./images/img66.webp" alt=""></a></div>
                <div class="swiper-slide"><a href=""><img src="./images/img67.webp" alt=""></a></div>
                <div class="swiper-slide"><a href=""><img src="./images/img68.webp" alt=""></a></div>
                <div class="swiper-slide"><a href=""><img src="./images/img69.webp" alt=""></a></div>
                <div class="swiper-slide"><a href=""><img src="./images/img70.webp" alt=""></a></div>
                <div class="swiper-slide"><a href=""><img src="./images/img71.webp" alt=""></a></div>
                <div class="swiper-slide"><a href=""><img src="./images/img72.webp" alt=""></a></div>
                <div class="swiper-slide"><a href=""><img src="./images/img73.webp" alt=""></a></div>
                <div class="swiper-slide"><a href=""><img src="./images/img74.webp" alt=""></a></div>
                <div class="swiper-slide"><a href=""><img src="./images/img75.webp" alt=""></a></div>
                
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>


    <h1 class="cat-name" id="cs">Computer Science</h1>

    <div class="books-slider">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><a href=""><img src="./images/img76.webp" alt=""></a></div>
                <div class="swiper-slide"><a href=""><img src="./images/img77.jfif" alt=""></a></div>
                <div class="swiper-slide"><a href=""><img src="./images/img78.webp" alt=""></a></div>
                <div class="swiper-slide"><a href=""><img src="./images/img79.webp" alt=""></a></div>
                <div class="swiper-slide"><a href=""><img src="./images/img80.webp" alt=""></a></div>
                <div class="swiper-slide"><a href=""><img src="./images/img81.webp" alt=""></a></div>
                <div class="swiper-slide"><a href=""><img src="./images/img82.webp" alt=""></a></div>
                <div class="swiper-slide"><a href=""><img src="./images/img83.webp" alt=""></a></div>
                <div class="swiper-slide"><a href=""><img src="./images/img84.webp" alt=""></a></div>
                <div class="swiper-slide"><a href=""><img src="./images/img85.webp" alt=""></a></div>
                <div class="swiper-slide"><a href=""><img src="./images/img86.webp" alt=""></a></div>
                <div class="swiper-slide"><a href=""><img src="./images/img87.webp" alt=""></a></div>
                <div class="swiper-slide"><a href=""><img src="./images/img88.webp" alt=""></a></div>
                <div class="swiper-slide"><a href=""><img src="./images/img89.webp" alt=""></a></div>
                <div class="swiper-slide"><a href=""><img src="./images/img90.webp" alt=""></a></div>
                
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>



    <h1 class="cat-name" id="civil">Civil Engineering</h1>

    <div class="books-slider">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><a href=""><img src="./images/img91.webp" alt=""></a></div>
                <div class="swiper-slide"><a href=""><img src="./images/img92.webp" alt=""></a></div>
                <div class="swiper-slide"><a href=""><img src="./images/img93.webp" alt=""></a></div>
                <div class="swiper-slide"><a href=""><img src="./images/img94.webp" alt=""></a></div>
                <div class="swiper-slide"><a href=""><img src="./images/img95.webp" alt=""></a></div>
                <div class="swiper-slide"><a href=""><img src="./images/img96.webp" alt=""></a></div>
                <div class="swiper-slide"><a href=""><img src="./images/img97.webp" alt=""></a></div>
                <div class="swiper-slide"><a href=""><img src="./images/img98.webp" alt=""></a></div>
                <div class="swiper-slide"><a href=""><img src="./images/img99.webp" alt=""></a></div>
                <div class="swiper-slide"><a href=""><img src="./images/img100.webp" alt=""></a></div>
                <div class="swiper-slide"><a href=""><img src="./images/img101.webp" alt=""></a></div>
                <div class="swiper-slide"><a href=""><img src="./images/img102.webp" alt=""></a></div>
                <div class="swiper-slide"><a href=""><img src="./images/img103.webp" alt=""></a></div>
                <div class="swiper-slide"><a href=""><img src="./images/img104.webp" alt=""></a></div>
                <div class="swiper-slide"><a href=""><img src="./images/img105.webp" alt=""></a></div>
                
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div> -->

    

    
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <script>
        var swiper = new Swiper(".mySwiper", {
          slidesPerView: 7,
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