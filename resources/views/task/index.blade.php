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

@foreach($tasks as $task)
    <h1 style="<?= ($task->is_done==1) ? "background-color : green ;" : "background-color : yellow ;" ?>>">{{$task->title}}</h1>
    @if($task->dead_line)
        <h6>{{$task->dead_line}}</h6>
    @endif
    @if(!$task->is_done)
    <form method="post" action="task/{{$task->id}}/done">
       @csrf
        <button> done</button>
    </form>
    @endif
    <form method="post" action="task/{{$task->id}}">
        @csrf
        @method('DELETE')
        <button>delete</button>
    </form>
    <a href="task/{{$task->id}}/edit"> edit</a>

@endforeach

</body>
</html>
