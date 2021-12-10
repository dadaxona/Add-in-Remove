<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
     rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
    crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Document</title>
    <style>
        #im{
            height: 30px;
            width: 30px;
        }
        input{
            width: 100%;
        }
        #soni{
            background-color: black;
            color: white;
            width: 118px;
            padding-left: 53px;
        }
        #dob{
            position: relative;
            left: 43%;
        }
        .h44{
            position: relative;
            left: 33%;
        }
      
    </style>
</head>
<body>
    <br>
    <div class="container">
        <h1>Istoriya</h1>
        <div class="row">          
                           
            </div>        
            <div class="col-12">
                <br>
            
                <table class="table table-dark table-striped">                    
                    <tr>                           
                            <td><h4>Rasmi</h4></td>       
                            <td><h4>Name</h4></td>
                            <td><h4>Soni</h4></td>
                            <td><h4>Narxi</h4></td>
                            <td><h4>Olingan Vaqti</h4></td>
                      
                       </tr>                               
                     @foreach ($karzin as $pro)
                     <tr>                           
                        <td><img src="{{ asset($pro['file'])}}" id="im"></td>       
                            <td>{{$pro['name']}}</td>
                            <td>{{$pro['son']}}</td>
                            <td>{{$pro['narx2']}}</td>
                            <td>{{$pro['created_at']}}</td>
                      
                       </tr>  
                     @endforeach      
                   
                  </table>
                  <table class="table table-dark table-striped">
                                     
                  <tr>                           
                     <td><h4>Jami summa</h4></td>        
                     <td><h4>{{$k["istorisumma"]}}$</h4></td>                  
                    </tr>                                    
                </table>

            </div>
        </div>  


</body>
</html>