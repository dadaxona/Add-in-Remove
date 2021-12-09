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
         .contain{
            width: 75%;
            margin: auto;
         }
        .hhh{
            text-align: center;
            padding-block: 55px;

            font-size: 49px;
            background-color: black;
            color: #ced3de;
         }
        #im{
            width: 86%;
            height: 50%;
        }
        
        .na{
            border: none;
            margin-top: 6px;
            font-size: 16px;
            background: white;
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
     #claar{
        background-color: black;
        padding-block: 89px;
        color: #757575;
     }
     .buute{
         margin-right: 5px;
     }
    </style>
</head>
<body>
    <h1 class="hhh">Magazin</h1>
    <div class="contain">
   
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          
                       
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">               
            
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled">Disabled</a>
              </li>
            </ul>
            <form class="d-flex">
                {{-- <input class="inpu" disabled value="{{$data['email']}}"> --}}
                <a href="{{ route('login') }}" class="btn btn-primary buute">Login</a>
                <a href="{{ route('registration') }}" class="btn btn-success">Registration</a>
              </form>
          </div>
        </div>
      </nav>
     
    </div><br>
  
	{{-- .col-	.col-sm-	.col-md-	.col-lg-	.col-xl-	.col-xxl- --}}
    <div class="contain">
             <br>
        <div class="row">
                
            @foreach ($prode as $pro)
            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
               <td><img src="{{ asset($pro['file'])}}" id="im"></td>                       
                   <div class="form">
                       @csrf
                       <input type="hidden" name="id" value="{{$pro['id']}}"><br>
                       <span>{{$pro['name']}}</span>
                       <input type="hidden" name="name" value="{{$pro['name']}}"><br>                                
                       <input type="hidden" name="narx" value="{{$pro['narx']}}">
                       <span>{{$pro['narx2']}}$</span>
                       <input type="hidden" name="narx2" value="{{$pro['narx2']}}"><br>
                       {{-- <input type="number" name="soni" required placeholder="Qancha olasiz"><br> --}}
                       <a href="{{ route('registration') }}" class="btn btn-primary">Sotib olish</a>
                   </div>      
                </div>                         
              
            @endforeach      
             
        </div>
    </div>
    <div id="claar">
        <div class="contain">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <ol>
                        <li>Contact</li>
                        <li>Description</li>
                        <li>Servis</li>
                        <li>Tel...</li>
                    </ol>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
               <ul>
                    <li>Contact</li>
                    <li>Description</li>
                    <li>Servis</li>
                    <li>Tel...</li>
                </ul>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <ul>
                        <li>Contact</li>
                        <li>Description</li>
                        <li>Servis</li>
                        <li>Tel...</li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <ol>
                        <li>Contact</li>
                        <li>Description</li>
                        <li>Servis</li>
                        <li>Tel...</li>
                    </ol>
                </div>
            </div>

        </div>
      
      
    </div>
   
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
 integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
 crossorigin="anonymous"></script>
</html>