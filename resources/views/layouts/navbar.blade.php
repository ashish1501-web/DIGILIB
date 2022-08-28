
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
                                <li><a href="{{route('categories.index')}}#maths">Mathematics</a></li>
                                <li><a href="{{route('categories.index')}}#physics">Physics</a></li>
                                <li><a href="{{route('categories.index')}}#chemistry">Chemistry</a></li>
                                <li><a href="{{route('categories.index')}}#biology">Biology</a></li>
                                <li><a href="{{route('categories.index')}}#comics">Comics</a></li>
                                <li><a href="{{route('categories.index')}}#cs">Computer Science</a></li>
                                <li><a href="{{route('categories.index')}}#civil">Civil Engineering</a></li>
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
                  <span class="glyphicon glyphicon-user" id="user-dp"></span>
              </button>                    
  
              <ul class="dropdown-menu" id="user-drpdwn">
                  <li class="dropdown-header"></li>
                  <li><a href="#">My profile <span class="glyphicon glyphicon-user"></span></a></li>
                  
                  <li><a href="{{route('logout')}}">Log Out &nbsp; <span class="glyphicon glyphicon-log-out"></span></a></li>
                      
              </ul>
          </div> 
          </li>
  
          @endif
            
    </div>
  
    
    </header>