<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
     rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
    crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        #im{
            height: 20px;
            width: 20px;
        }
        input{
            width: 100%;
        }
      
    </style>
</head>
<body>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-12">
                    <h1>Kiritish</h1>
                    <form method="POST" action="/prod" enctype="multipart/form-data" class="form-control" >
                        @if (Session::has('success'))

                        <div class="alert alert-success text-center">              
            
                            <p>{{ Session::get('success') }}</p>
            
                        </div>
            
                    @endif  
                        @csrf
                            <div>
                                <input type="text" name="name" placeholder="Tavar nomi" value="{{ old('name')}}" class="form-control" >
                                <span class="text-danger">@error('name') {{$message}}@enderror</span><br>
                            </div>
                            <div >
                                <input type="file" name="file" value="{{ old('file')}}" class="form-control" >
                                <span class="text-danger">@error('file') {{$message}}@enderror</span><br>
                            </div>
                            <div>
                                <input type="number" name="soni" placeholder="Tavar soni" value="{{ old('soni')}}" class="form-control" >
                                <span class="text-danger">@error('soni') {{$message}}@enderror</span><br>
                            </div>
                            <div>
                                <input type="number" name="narx" placeholder="Olinish narxi" value="{{ old('narx')}}" class="form-control" >
                                <span class="text-danger">@error('narx') {{$message}}@enderror</span><br>
                            </div>
                            <div>
                                <input type="number" name="narx2" placeholder="Sotilish narxi" value="{{ old('narx2')}}" class="form-control" >
                                <span class="text-danger">@error('narx2') {{$message}}@enderror</span><br>
                            </div>
                            <div>
                                <button type="submit" name="Save" class="btn btn-primary">Jonatish</button>
                            </div>
                        </form>                     
            </div>
        
            <div class="col-12">
            
                <table class="table table-dark table-striped">
                         
                                                 
                     @foreach ($prode as $pro)
                     <tr>    
                            <td>{{$pro['id']}}</td>
                            <td>{{$pro['name']}}</td>
                            <td><img src="{{ asset($pro['file'])}}" id="im"></td>
                            <td>{{$pro['soni']}}</td>
                            <td>{{$pro['narx']}}$</td>
                            <td>{{$pro['narx2']}}$</td>
                            <td>{{$pro['created_at']}}</td>
                            <td><a href="{{'ed/'.$pro['id']}}" class="btn btn-success">Yangilash</a><td>
                            <td><a href="{{'ddeel/'.$pro['id']}}" class="btn btn-danger">Ocirish</a><td>
                       </tr>  
                     @endforeach
                     
                  </table>     
           
                    <a href="w1" class="btn btn-primary">Istoriya</a>            
                    <a href="ww" class="btn btn-success">Sotilsh</a>          
                    <a href="www" class="btn btn-success">Jami yigim</a>
                    <a href="ww2" class="btn btn-info">Bozor</a>
                    <a href="{{ route('karz') }}" class="btn btn-primary">Karzina</a>
      
            </div>
        </div>
    </div>
 
     
</body>
</html>