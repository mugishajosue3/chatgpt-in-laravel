<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body style="background-color:gray">

<div class="container-fluid" style="margin-top:2cm;">
  <h3 style="margin-left:4cm">Pending Tasks</h3>
@foreach ($tasks as $task)

<form action="/tasks/{{ $task->id }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="activity" value="{{ $task->id }}" style="width:1cm;">
    <input type="text" name="activity" value="{{ $task->activity }}">
    <input type="text" name="time" value="{{ $task->time }}">
    <button type="submit">Update</button>
</form>
<form action="/tasks/{{ $task->id }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">Delete</button>
</form>
@endforeach
</div>
</body>
</html>