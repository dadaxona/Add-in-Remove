<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
     rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
    crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    {{-- <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script> --}}
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
      
    </style>
</head>
<body>
    <br>
    <div class="container">
        <div class="row">   
                <table class="table table-dark table-striped">
                    <tr>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Clent_ID</th>
                        <th>Taver_ID</th>
                        <th>Miqdori</th>
                        <th>Narxi</th>
                        <th>Date</th>
                    </tr>
                     @foreach ($karz as $pro)
                        <tr>                           
                            <td><img src="{{ asset($pro['file'])}}" id="im"></td>    
                            <td>{{$pro['name']}}</td>
                            <td>{{$pro['clent']}}</td>
                            <td>{{$pro['idy']}}</td>
                            <td>{{$pro['son']}}</td>
                            <td>{{$pro['narx2']}}</td>
                            <td>{{$pro['created_at']}}</td>
                       </tr>  
                     @endforeach                     
                  </table>
          
             
            </div>
        </div>
   
  

</body>
</html>