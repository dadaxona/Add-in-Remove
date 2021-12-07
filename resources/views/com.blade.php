<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Com</title>
</head>
<body>
    <h1 style="text-align: center">ADMIN</h1>
    <a href="/cre"><button type="button" class="btn btn-success">Malumot Joylash</button></a>
    <table class="table table-dark table-hover">
        Дата саздания
            <tr>
                <td>ID</td>
                <td>Name</td>
                <td>Email</td>
              
                <td>Yangilash</td>
                <td>Ochirish</td>
            </tr>  

        @foreach ($company as $comp)
        <tr>
            <td>{{$comp['id']}}</td>
            <td>{{$comp['name']}}</td>
            <td>{{$comp['email']}}</td>
         
            <td><a href="qwe/{{$comp['id']}}"><button type="button" class="btn btn-success">Update</button></a></td>
            <td><a href={{"del/".$comp['id']}}><button type="button" class="btn btn-danger">Delete</button></a></td>

          
        </tr>
        @endforeach

    </table>
</body>
</html>