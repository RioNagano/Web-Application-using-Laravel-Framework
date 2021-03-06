<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>@yield('title')</title>
    <style>
        #sidenav{
          padding-top: 60px;
          background-color: #003366;
          width: 10%;
          height: 100vh;
          left: 0;
          position: fixed;
        }
        #navDrop{
          padding-right: 100px;
        }
        #logreg{
          padding-right: 100px;
        }
        /*untuk menghilangkan arrow pada input number
        /* Chrome, Safari, Edge, Opera */
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
          -webkit-appearance: none;
          margin: 0;
        }

        /* Firefox */
        input[type=number] {
          -moz-appearance: textfield;
        }
        #formLR{
          margin: auto;
          width: 50%;
          padding: 10px;
          text-align: center;
        }
        #status{
          text-align: center;
        }
        #date{
          display: inline-block;
          vertical-align: middle;
          padding-left: 180px;
          padding-right: 180px;
        }
        #total{
          display: inline-block;
          vertical-align: middle;
          padding-left: 180px;
          padding-right: 180px;
        }
        #labels{
          display: inline-block;
          padding: 5px;
          width: 140px;
          text-align: right;
        }
        .fo{
          padding: 10px;
        }
    </style>
  </head>
  <body>
    <div id="topNav">
      <nav class="navbar navbar-light bg-light fixed-top">
        <a class="navbar-brand" href="{{Route('home')}}">Just Du It!</a>
          @section('search')
            <form action="{{Route('search')}}" method="post" form class="form-inline" style="margin: 0 auto;">
              @csrf
              <input class="form-control mr-sm-2" name="search" type="search" placeholder="Search" aria-label="Search" style="width: 500px;">
              <button class="btn btn-outline-primary" type="submit" value="search">Search</button>
            </form>
          @show
            @auth
              <div id="navDrop">
                <div class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{Auth::user()->username}}</a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="{{Route('logout')}}">Logout</a>
                  </div>
                </div>
              </div> 
            @else
              <div id="logreg">
                <a class="btn btn-link" href="{{Route('login')}}" role="button">Login</a>
                <a class="btn btn-link" href="{{Route('register')}}" role="button">Register</a>
              </div>
            @endauth
      </nav>
    </div>
    
    @section('sidenav')
    <div id="sidenav">
      @auth
        @if(auth()->user()->role == 'member')
          <nav class="nav flex-column">
            <a class="nav-link" href="{{Route('home')}}">View All Shoe</a>
            <a class="nav-link" href="{{Route('viewCart')}}">View Cart</a>
            <a class="nav-link" href="{{Route('viewTr')}}">View Transaction</a>
          </nav>
        @elseif(auth()->user()->role == 'admin')
          <nav class="nav flex-column">
            <a class="nav-link" href="{{Route('home')}}">View All Shoe</a>
            <a class="nav-link" href="{{Route('addShoe')}}">Add Shoe</a>
            <a class="nav-link" href="{{Route('viewTr')}}">View All Transaction</a>
          </nav>
        @endif
      @endauth
      @guest
        <nav class="nav flex-column">
          <a class="nav-link" href="{{Route('home')}}">View All Shoe</a>
        </nav>
      @endguest
    </div>
    @show
    
    
    
    @yield('content')
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>