@auth

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
        <title>Modifier le livre</title>
    </head>
    <body>

    @include('books.nav')

    <div class="container">
        <h2>Modifier Un books :</h2>
        <form action="{{ route('update', $book->id) }}" method="POST" enctype="multipart/form-data" class="m-4">
            @csrf
            <label>Nom :</label>
            <input type="text" name="nom" value="{{ $book->nom }}"><br><br>
            <label>image :</label>
            <input type="file" name="image"><br><br>
            <label>Prix :</label>
            <input type="text" name="prix" value="{{ $book->prix }}"> <br><br>
            <label>Description :</label>
            <input type="text" name="description" value="{{ $book->description }}"> <br><br>
            <button type="submit" class="btn btn-primary">
                Enregistrer
            </button>
        </form>
    </div>

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
@include('books.login')
    </body>
    </html>
@endguest
