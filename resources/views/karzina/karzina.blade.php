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
        .h44{
            position: relative;
            left: 33%;
        }
      
    </style>
</head>
<body>
    <br>
    <div class="container">
        <div class="row">          
                           
            </div>        
            <div class="col-12">
                <br>
                <form>
                <table class="table table-dark table-striped">                    
                                                 
                     @foreach ($karzin as $pro)
                     <tr>                           
                            <td><img src="{{ asset($pro['file'])}}" id="im"></td>    
                            <td>{{$pro['name']}}</td>
                            <td><input type="hidden" name="clent" value="{{$pro['clent']}}"></td>
                            <td><input type="hidden" name="idy" value="{{$pro['idy']}}"></td>
                            <td><input type="hidden" name="name" value="{{$pro['name']}}"></td>
                            <td><input type="number" name="soni" id="soni" value="{{$pro['son']}}"></td>
                            <td><input type="hidden" name="narx2" value="{{$pro['narx2']}}"></td>
                            <td>{{$pro['narx2']}}</td>
                            <td>    
                                <form method="post" class="delete_form" action="{{ route('delkarzin',$pro->id)}}">
                                    @csrf
                                    @method('DELETE')
                                <button type="submit" class="btn btn-danger">-</button>
                            
                            </form>
                        </td>
                     
                       </tr>  
                     @endforeach      
                   
                  </table>
                  <table class="table table-borderless">  
                
                  <tr>                           
                     <td></td>
                     <td></td>
                     <td></td>
                     <td></td>
                     <td></td>
                     <td></td>
                     <td></td>
                     <td></td>
                     <td><h4 class="h44">{{$k["summa"]}}</h4></td>
                 
                  
                    </tr>  
               
                     
                </table>

                  <button type="submit" class="btn btn-primary btn-submit">Sotip Olish</button>
                </form>
                <hr>
                <a href="/dashbord" id="dob" class="btn btn-success">Qo'shish</a>
            </div>
        </div>
   
        <script type="text/javascript">   
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });           
            $(".btn-submit").click(function(e){          
                e.preventDefault();           
                var clent = $("input[name=clent]").val();
                var idy = $("input[name=idy]").val();
                var name = $("input[name=name]").val();
                var soni = $("input[name=soni]").val();
                var narx2 = $("input[name=narx2]").val();           
                $.ajax({
                   type:'POST',
                   url:"{{ route('ketdi') }}",
                   data:{clent:clent, idy:idy, name:name, soni:soni, narx2:narx2},
                   success:function(data){
                      alert("Buyurtma Berasizmi");
                      location="/dashbord";
                   }
                });
          
            });
        </script>

</body>
</html>