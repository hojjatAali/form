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
@if(session()->has ('success'))
    {{session()->get('success')}}
    @endif


<form method="post" action="register" class="form-control">
    @csrf
    <lable>name</lable>
    <input name="name" type="text">
    <lable>Last name</lable>
    <input name="last_name" type="text">
    <lable>Email</lable>
    <input name="email" type="email">
    <lable> Gender</lable>
    <select name="gender">
        <option value="">select</option>
        <option value="male">male</option>
        <option value="female">female</option>
    </select>
    <lable> Birth DAy</lable>
    <input type="date" name="birth_day">
    <lable> Mobile</lable>
    <input type="text" name="mobile">
    <lable> password</lable>
    <input type="password" name="password">
    <button type="submit">submit</button>
</form>

</body>
</html>
