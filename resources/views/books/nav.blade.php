<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Books Web</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              @auth {{-- Si l'utilisateur connecter  --}}

              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('index')}}">Home</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="{{route('logout')}}" >Deconnexion</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="{{route('add')}}">Add Books</a>
              </li>


              <li class="nav-item">
                <a href="#" class="nav-link"> {{ auth()->user()->name }} </a>
              </li>
              <li class="nav-item" >
                <a href="{{route('details',auth()->user()->id)}}" class="nav-link"> <img src="{{ asset('storage/'.auth()->user()->image) }}" width="50px" height="60px" alt=""></a>
              </li>

              @endauth

              @guest {{-- Si l'utulisateur n'est pas connecter --}}
              <li class="nav-item">
                <a class="nav-link" href="{{route('show')}}">Se Connecter</a>
              </li>

              <li class="nav-item">
                <a href="#" class="nav-link">Sign Up</a>
              </li>

              @endguest

            </ul>
          </div>
        </div>
      </nav>

</body>
</html>
