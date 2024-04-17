<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body class="m-2">
    <style>
        button[type="submit"] {
            width: 100%;
        }
    </style>
    @include('books.nav')


<h2 class="m-2 text-center  "> Authentification </h2>
@foreach($errors->all() as $error)
    <div class="alert alert-danger m-4">
        {{ $error }}
    </div>
@endforeach

@if (session('sign'))
    <div class="alert alert-warning m-3">
            {{session( 'sign' )}}
    </div>
    @endif

    @if (session('no'))
    <div class="alert alert-warning m-3">
            {{session( 'no' )}}
    </div>
    @endif
<form action="{{route('login')}}" method="POST">
    @csrf
    <table border="" class="table m-3">
        <tr>
            <th>Email</th>
            <td><input type="email" name="email" value="{{ old('email') }}" required></td>

        </tr>
        <tr>
            <th>Password</th>
            <td><input type="password" name="password" value="{{ old('password') }}" required></td>
        </tr>
        <tr>
            <td colspan="2"><button type="submit" class="btn btn-primary">Login</button></td>
        </tr>
    </table>

    <a href="{{route('signup')}}">
        Don't Have account
        ?
        Sign Up
    </a>

</form>


</body>
</html>
