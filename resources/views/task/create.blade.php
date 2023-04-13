<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
@if($errors->any())
    @foreach($errors->all() as $error)

        <li class="text-red"> {{$error}}</li>
    @endforeach
@endif

<form method="post" action="{{route('task.store')}}">
@csrf
    <label>title</label>
    <input name="title" type="text">
    <label>description</label>
    <input name="description" type="text">
    <label>deadline</label>
    <input name="dead_line" type="datetime-local">

    <button type="submit">submit</button>



</form>

</body>
</html>
