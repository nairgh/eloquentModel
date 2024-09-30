<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Eloquent Model</title>
    <link href="{{ asset('assets/styles.css') }}" rel="stylesheet" />  
</head>
<body>
<div>
   <h1>Students List</h1>
   <table>
    <thead>
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Email</td>
        <td>Batch</td>
    </tr>
    </thead>
    <tbody>
    @foreach ($data as $student)
       <tr>
        <td>{{$student ->id}}</td>
        <td>{{$student ->name}}</td>
        <td>{{$student ->email}}</td>
        <td>{{$student ->batch}}</td>
        </tr>
    @endforeach
    </tbody>
   </table>
</div>
</body>
</html>