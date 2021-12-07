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
        #im{
            width: 50%;
            height: 50%;
        }
     input{
         border: none
     }
    </style>
 
</head>
<body>
    <div class="container">
        <h1>Internet Magazin</h1>
        <hr>
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
        
              
                
                                                 
                     @foreach ($prode as $pro)
                     <div class="col-4">
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
 
    
</body>
</html>