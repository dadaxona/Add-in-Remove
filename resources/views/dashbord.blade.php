<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU"
     crossorigin="anonymous">
     <title>Custom Login</title>
     <style>
        #im{
            width: 50%;
            height: 50%;
        }
     input{
         border: none
     }
     #btn{
        position: relative;
        left: 103px;
        top: -145px;
     }
   

     #id{
        position: relative;
        top: -38px;
        left: 80px;
     }
     #dd{
         
        margin-top: 11px;
     }
     .aaaaa{
       
        position: relative;
        top: -181px;

     }
     #spa{
        margin-top: 31px;
     }
     #span{
        position: absolute;
     }
    </style>
</head>
<body>


    <div class="container">
        <h1>Internet Magazin</h1>
        <hr>
        <h4>{{$data['email']}}</h4>
        <a href="logaut" class="btn btn-success">Logaut</a>
        <br>
    
        <form id="for" action="indexkarzin/{{$data['id']}}" method="GET">
            @csrf
            <input type="hidden" name="clent" value="{{$data['id']}}">
            <button type="submit" id="id" class="btn btn-info">Karzina</button>
        </form>
        <hr>  
        <div class="row">
                                               
                     @foreach ($prod as $pro)
                     <div class="col-4">
                        <td><img src="{{ asset($pro['file'])}}" id="im"></td>                       
                            <div class="form">
                                <form action="" method="POST">
                                    @csrf
                               <div id="spa">
                                <input type="hidden" name="clent" value="{{$data['id']}}"><br>
                                <input type="hidden" name="idy" value="{{$pro['id']}}"><br>
                                <span>{{$pro['name']}}</span>
                                <input type="hidden" name="name" value="{{$pro['name']}}"><br>                                
                                <input type="hidden" name="narx" value="{{$pro['narx']}}">
                                <span>{{$pro['narx2']}}$</span>
                                <input type="hidden" name="narx2" value="{{$pro['narx2']}}"><br>
                               </div>
                               
                                {{-- <input type="number" name="soni" required placeholder="Qancha olasiz"><br> --}}
                            
                                <button id="dd" type="submit" class="btn btn-primary">Sotib olish</button>
                                </form>
                                <form action="{{ route('showkarzina') }}" method="POST">
                                    @csrf
                                    <div class="aaaaa">
                                        <input type="number" name="son" id="" placeholder="Qancha olasiz" class="form-control"><br>
                                        <span id="span" class="text-danger">@error('son') {{$message}}@enderror</span>
                                    </div>
                                    <input type="hidden" name="clent" value="{{$data['id']}}"><br>
                                    <input type="hidden" name="idy" value="{{$pro['id']}}"><br>
                                    <button type="submit" id="btn" class="btn btn-success">Karzina</button>
                                </form>
                            </div>
                        </div>                             
                       
                     @endforeach        
             
        </div>
    </div>
    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
 integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
 crossorigin="anonymous"></script>
</html>