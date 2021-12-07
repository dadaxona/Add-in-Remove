<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
    rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
   crossorigin="anonymous">
    <title>jami</title>
</head>
<body>
    <h1>Daromad bolimi</h1>
    <div class="col-12">
        <table class="table table-dark table-striped">
       
                                         
             @foreach ($pro2 as $pro)
             <tr>                        
                <td>{{$pro['id']}}</td>
                <td>{{$pro['narx2']}}</td>
                <td><a href="{{'d/'.$pro['id']}}" class="btn btn-danger">Ocirish</a><td>
             </tr>
             @endforeach

        </table>
          <a href="w1" class="btn btn-success">Istoriya</a><br><br>                 
          <a href="p2" class="btn btn-primary">Menu</a><br><br>
    </div>
</body>
</html>