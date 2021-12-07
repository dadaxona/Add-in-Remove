<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU"
     crossorigin="anonymous">
    <title>Admin</title>

</head>
<body>
    
    <h1>Admin</h1>
    <hr>
    <table class="table table-dark table-hover">
        <thead>
            <th>Name</th>
            <th>Email</th>
            <th>Login</th>
        </thead>
        <tbody>
            <tr>
                <td>{{$data->name}}</td>
                <td>{{$data->email}}</td>
                <td><a href="/logau">Login</a></td>
            </tr>
        </tbody>
    </table>
</body>
</html>