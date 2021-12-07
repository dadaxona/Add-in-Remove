<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token()}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src=" https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-heder bg-primary text-white">Add new praduct </div>
                        <div class="card-body">
                            <form action="{{ route('saveproduct')}}" method="post" enctype="multipart/form-data" id="form">
                               @csrf
                                <div class="form-group">
                                    <label for="">Praduct-Name</label>
                                    <input type="text" name="praductname" class="form-control" placeholder="Enter Praduct Name">
                                    <span class="text-danger">@error('praductname') {{ $message }} @enderror</span>
                                </div>
                                <div class="form-group">
                                    <label for="">Praduct-Img</label>
                                    <input type="file" name="praductimg" class="form-control" placeholder="Enter Praduct Name">
                                    <span class="text-danger">@error('praductimg') {{ $message }} @enderror</span>
                                </div>
                               
                                <button type="submit" class="btn btn-primary">Save Praduct</button>
                            </form>
                        </div>
                   
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-heder bg-primary text-white">All Product </div>
                        <div class="card-body">

                        </div>

                   
                </div>

            </div>
        </div>
    </div>
    <script>
        $(function(){
           $('#form').on('submit', function(e){
               e.preventDefault();

               var form =this;
               $.ajax({
                   url:$(from).attr('action'),
                   method:$(form).attr('method'),
                   data:new FormData(form),
                   processData:'false',
                   datatype:false,
                   beforeSend:function(){
                    $(form).find('span.error-text').text('');
                   }
                   success:function(data){
                    if (data.code == 0) {
                        $.each(data.error, function(prefix,val){
                        $(form).find('span.'+prefix+'_error').text(val[0]);
                    });
                    }else{
                        $(form)[].reset();
                        alert(dada.msg);
                    }
                   }

               });
           });
        })
    </script>
</body>

</html>