<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div class="container-fluid" style="margin-top:2cm;">
  <h3 style="margin-left:4cm">Pending Tasks</h3>
  <table class="table" style="width:13cm; margin-left:1cm;">
  <thead class="table-dark">
    <th>No</th>
    <th>Activity</th>
    <th>done</th>
  </thead>
  <tbody>
@foreach ($tasks as $task)
<tr>
    
    <td >{{ $task -> activity }}</td>
    <td>{{ $task -> time }}</td>
    <td><button type="button" class="btn btn-secondary"><ion-icon name="bicycle-outline"></ion-icon></button></td>
</tr>
@endforeach
</tbody>

</table>
</div>
</body>
</html>