<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
    rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
   crossorigin="anonymous">
    <title>Document</title>
    <style>
        .td{
            position: relative;
    right: -86%;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">       
            <h1>Daromad bolimi</h1>
            <div class="col-12">
                <table class="table table-dark table-striped">
                    <tr>
                        <td>Abyom</td>
                        <td>Olgan narx</td>                        
                        <td>Tavar Sotgan narx</td>                        
                        <td>Daromad</td>
                        <td>Jamidaromad</td>
                       
                        
                    </tr>      
                                                 
                     @foreach ($pro2 as $pro)
                     <tr>                        
                        <td>{{$pro['abyom']}}</td>
                        <td>{{$pro['olinish']}}</td>
                        <td>{{$pro['sotilish']}}</td>
                        <td>{{$pro['pribl']}}</td>
                        <td>{{$pro['jami']}}</td>

                     </tr>
                     @endforeach

                     @foreach ($date as $da)
                     <tr>                        
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>                        
                        <td><h4>{{$da['narx2']}}</h4></td>
                     </tr>
                 @endforeach
                     
                </table>
                  <a href="w1" class="btn btn-success">Istoriya</a><br><br>                 
                  <a href="p2" class="btn btn-primary">Menu</a><br><br>
            </div>
     
        </div>
    </div>
 
    
</body>
</html>