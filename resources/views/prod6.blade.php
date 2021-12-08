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
</head>
<body>
    <div class="container">
        <div class="row">
            {{-- <div class="col-4">
                    <h1>Kiritish</h1>
                    <form method="POST" action="/prod" enctype="multipart/form-data">
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        @csrf
                            <div>
                                <input type="text" name="name" ><br><br>
                            
                            </div>
                            <div>
                                <input type="file" name="file"><br><br>
                            
                            </div>
                            <div>
                                <input type="number" name="soni"><br><br>
                            
                            </div>
                            <div>
                                <input type="number" name="narx"><br><br>
                            
                            </div>
                            <div>
                                <button type="submit" name="Save" class="btn btn-primary">Jonatish</button>
                            </div>
                        
                        </form>

                     
            </div> --}}
        
            <h1>Sotilgan payti</h1>
            <div class="col-12">
                <table class="table table-dark table-striped">
                    <tr>
                        <td>ID</td>
                        <td>Data</td>                        
                        <td>Tavar nomi</td>                        
                        <td>Qansha sotilgan</td>
                        <td>Sotilish narx</td>
                        
                    </tr>      
                                                 
                     @foreach ($pro2 as $pro)
                     <tr>    
                            
                            <td>{{$pro['id']}}</td>
                            <td>{{$pro['updated_at']}}</td>
                            <td>{{$pro['name']}}</td>                           
                            <td>{{$pro['soni']}}</td>
                            <td>{{$pro['narx2']}}</td>
                           
                            
                       </tr>  
                     @endforeach
                     
                  </table>
                  <a href="w1" class="btn btn-success">Istoriya</a>
                  <a href="www" class="btn btn-success">Jami yigim</a>
                  <a href="p2" class="btn btn-primary">Menu</a>
            </div>
            
        </div>
    </div>
 
    
</body>
</html>