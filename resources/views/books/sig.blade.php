<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2> Create Account </h2>
    <form action="{{route('register')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <label>Nom :</label>
        <input type="text" name="name" value="{{old('nom')}}"><br>
        @error('name')
        <b>{{$message}} </b> <br>
        @enderror

        <label>Image;</label>
        <input type="file" name="image"> <br>
        @error('image')
        <b> {{$message}} </b>
        @enderror
        
        <label>Email :</label>
        <input type="email" name="email" value="{{old('email')}}"><br>
        @error('email')
        <b>{{$message}}</b>  <br>
        @enderror

        <label>Password :</label>
        <input type="password" name="password" value="{{old('password')}}"><br>
        @error('password')
        <b>{{$message}}</b>  <br>
        @enderror

        <label>Confirm Password :</label>
        <input type="password" name="password_confirmation" value="{{old('password_confirmation')}}"><br>
        @error('password')
        <b>{{$message}}</b>  <br>
        @enderror
        <button type="submit">
            Sign Up
        </button>
    </form>
</body>
</html>
