@auth
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        @include('books.nav')

        @if (session('Changement'))
        <div class="alert alert-success m-3">
            {{ session('Changement') }}
        </div>
        @endif

       {{--  @if (session( 'success' ))
                <div class="alert alert-danger">
                    {{session( 'success' )}}
                </div>
        @endif --}}
        @if (session('edit'))
        <div class="alert alert-success m-3">
            {{ session('edit') }}
        </div>
        @endif
        @if (session()->has('succes'))
        <div class="alert alert-success m-3">
            Ajoutation with succes
        </div>
        @endif

        @if (session()->has('yes'))
        <div class="alert alert-success m-3">
            Bienvenue {{ auth()->user()->email }}
        </div>
         @endif

        @if (session()->has('good'))
        <div class="alert alert-warning m-3">
            Suppression with succes
        </div>
        @endif

        <table class="table table-hover m-3">
            <tr>
                <th> #</th>
                <th>image</th>
                <th> Nom </th>
                <th> Prix </th>
                <th> Description </th>
               @auth
                 <th> Action </th>
               @endauth
            </tr>

            @foreach ($book as $item)
                <tr>
                    <td> <img src={{ asset('storage/'.$item->image) }} alt="" width="100px" height="80px"> </td>
                    <td> {{$item->id}} </td>
                    <td> {{$item->nom}} </td>
                    <td> {{$item->prix}} </td>
                    <td> {{$item->description}} </td>
                    @auth
                    <td>
                        <a href="{{route('delete' , $item->id)}}">Delete</a>
                        <a href="{{route('edit' ,$item->id)}}">Modifier</a>
                    </td>
                </tr>
                @endauth
            @endforeach

        </table>
        <div class="d-flex justify-content-center">
            {{ $book->links() }}
        </div>

    </body>
    </html>


@endauth
{{-- Pour les personnes n'est pas connnecter : cette page qui va s'affichera --}}
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
