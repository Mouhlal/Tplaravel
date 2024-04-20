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
    <div class="relative flex flex-col mt-6 text-gray-700 bg-white shadow-md bg-clip-border rounded-xl w-96">
        <div
          class="relative h-56 mx-4 -mt-6 overflow-hidden text-white shadow-lg bg-clip-border rounded-xl bg-blue-gray-500 shadow-blue-gray-500/40">
          <img
            src="{{ asset('storage/'.auth()->user()->image) }}"
            alt="card-image"
            width="250px"
            height="300px"
            />
        </div>
        <div class="p-6">
          <h4 class="text-center">
            {{$clients->name}}
          </h4>
          <h4 class="text-center">
            {{$clients->email}}
          </h4>
          <h4 class="text-center">
            {{$clients->created_at}}
          </h4>
        </div>
      </div>
</body>
</html>
