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
<table class="table table-hover m-3">
<tr>
    <th>Reference</th>
    <th>Designation</th>
    <th> Prix Unitaire </th>
    <th> Stock </th>
</tr>
@foreach($art as $at)
<tr>
     <td> {{$at->reference}} </td>
     <td> {{$at->des}} </td>
     <td>  {{$at->prix}} </td>
     <td> {{$at->stock}} </td>
</tr>
@endforeach
</table>
<div class="d-flex justify-content-center">
    {{ $art->links() }}
</div>

</body>
</html>
