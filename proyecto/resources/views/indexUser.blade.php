<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Lista de usuarios</h1>
    
    
@forelse ($users as $user)
<table>
<ul>
    <li>{{$user->id}}</li>
    <li>{{$user->name}}</li>
    <li>{{$user->email}}</li>
    <li>{{$user->password}}</li>
</ul>
</table>
@empty
    <p>lista vacia</p>
@endforelse



</body>
</html>