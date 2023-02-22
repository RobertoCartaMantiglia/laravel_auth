<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>edit</title>
    @vite(['resources/js/app.js'])
</head>
<body>

  @extends('layouts.app')
  @section('content')
  <div class="container">
    <div class="row">
        <div class="col-12">
            @include('layouts.formEditCreate', ['method' =>'PUT', 'route'=>'admin.projects.update'])
         
        </div>
    </div>
</div>
  @endsection
</body>
</html>