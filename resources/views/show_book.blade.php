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
    <title> digiLib | book </title>

</head>
    @php
        $page="categories";
    @endphp
@include('layouts.navbar')


    <h1 style="margin-top: 3%; margin-left: 18%; padding-left: 4%; font-family: consolas; font-size: 50px;">About the book</h1>
    <div class="container">        
        <img style="margin-right:100px;" class="bookpic" src="{{asset('storage/uploads/books/'.$book->book_image)}}" height="370" width="300" alt="image">
        <p class="booktitle">{{$book->book_name}}</p>
        <button class="button-1" role="button" style="float: left; margin-right: 5px;"><a class="book-link" href="{{asset('storage/uploads/books_pdf/'.$book->book_file)}}">Read now</a></button>

        
        <form action="{{route('add_comments',['id'=>$book->id])}}" method="post">
            @csrf
        <input type="hidden" name="userId" value="{{Auth::user()->id}}">
            <input type="hidden" name="bookId" value="{{$book->id}}">

            <button type="submit" class="button-2" role="button"  name="submit" value="1" >Add to favorites</button>
        </form>

        <table class="tabledetails" >
            <tr>
                <td>Title: </td>
                <td>&nbsp;&nbsp;&nbsp; {{$book->book_name}}</td>
            </tr>
            <tr>
                <td>Authors: </td>
                <td>&nbsp;&nbsp;&nbsp;{{$book->author_name}} </td>
            </tr>
            <tr>
                <td>Categories: </td>
                <td>&nbsp;&nbsp;&nbsp; {{$book->category}}</td>
            </tr>
            <tr>
                <td>Publisher: </td>
                <td>&nbsp;&nbsp;&nbsp; {{$book->publisher}}</td>
            </tr>
            <tr>
                <td>Year: </td>
                <td>&nbsp;&nbsp;&nbsp;  {{$book->created_at}}</td>
            </tr>
            <tr>
                <td>Pages: </td>
                <td>&nbsp;&nbsp;&nbsp;{{$book->pages}}</td>
            </tr>
        </table>
        <hr>
    </div>
    <div class="container">
        <form action="{{route('add_comments',['id'=>$book->id])}}" method="post">
            @csrf
            <input type="hidden" name="userId" value="{{Auth::user()->id}}">
            <input type="hidden" name="bookId" value="{{$book->id}}">
            Comment:<input type="longtext" name="comment">
           <button type="submit" name="submit" value="2" >Submit</button>
        </form>
    </div>

    <div class="container">
        @foreach($comments as $c)

            <div>
                <h2>
                    @if($c->bookId==$book->id)
                    {{$c->comment}}
                    @endif
                </h2>
            </div>

        @endforeach
    </div>
    <div class="morebooks">
        <p>More books from the same category:</p>
        <div class="books-slider">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
        @foreach($b2 as $b2)
            @if($b2->category==$book->category)
            
           
                    
                    <div class="swiper-slide"><a style="height:390px;" href="{{route('book.show',['id'=>$b2->id])}}"><img style="margin:30px; width:200px; height:250px;" width="20px" height="30px" src="{{asset('storage/uploads/books/'.$b2->book_image)}}" alt="">{{$b2->book_name}}</a></div>
                    
                   
                    
            @endif
        @endforeach
        <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
        </div>
                </div>
            </div>
    </div>

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

    <script src="{{asset('assets/script.js')}}"></script>
</body>
</html>