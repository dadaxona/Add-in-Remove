<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU"
     crossorigin="anonymous">
    <title>Profil</title>

</head>
<body>
   
    <div class="container">
        <div class="row">
            <div class="col-3">
                <h1>Profil</h1>
            </div>
            <div class="col-7">
                <h4>{{$data->email}}</h4>
            </div>
            <div class="col-2">
                <a href="/logau" class="btn btn-success">Login</a>
            </div>
        </div>
    </div>
  
 
</body>
</html>