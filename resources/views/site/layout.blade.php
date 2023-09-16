<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <title>@yield('title')</title>
</head>
<body>

    <!-- Dropdown Structure -->
        <ul id='dropdown1' class='dropdown-content'>
            @foreach ($categoryMenu as $categoryM)
            <li><a href="{{route('site.category',$categoryM->id)}}">{{$categoryM->name}}</a></li>
            @endforeach

        </ul>

        <ul id='dropdown2' class='dropdown-content'>
            <li><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
            <li><a href="{{route('login.logout')}}">Sair</a></li>

        </ul>

    <nav class="red">
        <div class="nav-wrapper container">
          <a href="#" class="brand-logo center">PauloCode</a>
          <ul id="nav-mobile" class="left">
            <li><a href="{{route('site.index')}}">Home</a></li>
            <li><a href="#" class="dropdown-trigger" data-target='dropdown1'>Category<i class="material-icons right">expand_more</i></a></li>
            <li><a href="#">Carrossel</a></li>
          </ul>

          @auth
          <ul id="nav-mobile" class="right">
            <li>
                <a href="#" class="dropdown-trigger" data-target='dropdown2'>
                    Olá {{auth()->user()->firstName}}<i class="material-icons right">expand_more</i>
                </a>
            </li>
          </ul>

            @else
            <ul id="nav-mobile" class="right">
                <li>
                    <a href="{{route('login.form')}}">
                      Login<i class="material-icons right">lock</i>
                    </a>
                </li>
              </ul>
          @endauth


        </div>
      </nav>
      <br>
    @yield('content')

        <!-- Compiled and minified JavaScript -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
     <script>
        document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.dropdown-trigger');
        var instances = M.Dropdown.init(elems, {
            coverTrigger: false,
            constrainWidth: false
        });
      });
     </script>
</body>
</html>
