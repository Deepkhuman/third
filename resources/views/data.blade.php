<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <table>
    <thead>
      <tr>
        <th>name</th>
      </tr>
    </thead>
    <tbody>
    @foreach($res as $data)
      <tr>
        <td>{{$data->name}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
  
</body>
</html>