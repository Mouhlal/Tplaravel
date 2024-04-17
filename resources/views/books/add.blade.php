@auth
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

        <title>Document</title>
    </head>
    <body>
    @include('books.nav')


    <form action={{route('store')}} method="POST" class="m-4" enctype="multipart/form-data">
        @csrf

        image : <input type="file" name="image" value="{{old('image')}}">
        @error('image')
            {{$message}}
        @enderror
        <br><br>

        Email : <input type="text" name="email" value="{{old('email')}}">
        @error('email')
            {{$message}}
        @enderror
        <br><br>

        Password : <input type="password" name="password" value="{{old('password')}}">
        @error('password')
            {{$message}}
        @enderror
        <br><br>

        Confirmation Password : <input type="password"  name="password_confirmation" value="{{old('password_confirmation')}}">
        @error('password_confirmation')
        {{$message}}
    @enderror
         <br><br>

        Titre de Book : <input type="text" name="nom" value="{{old('nom')}}">
        @error('nom')
                {{$message}}
        @enderror
        <br><br>

        Prix : <input type="number" name="prix" value="{{old('prix')}}">
        @error('prix')
                {{$message}}
        @enderror
        <br><br>

        Bio : <input type="text" name="description" value="{{old('description')}}">
        @error('description')
                {{$message}}
        @enderror
        <br><br>
        <button type="submit" class="btn btn-danger">Ajouter</button>
    </form>

    </body>
    </html>

@endauth

@guest
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
@include('books.add')
</body>
</html>
@endguest
