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
            padding: 20px;
            margin: 15px;
        }

      
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <form method="POST" action="/upda" enctype="multipart/form-data">    
                    @csrf
                    <input type="hidden" name="id" value="{{$pr->id}}">
                    <input type="text" name="name" value="{{$pr->name}}"><br>
                    <input type="number" name="soni" value="{{$pr->soni}}"><br>
                    <input type="file" name="file" value="{{$pr->file}}"><br>
                    <input type="number" name="narx" value="{{$pr->narx}}"><br>
                    <input type="number" name="narx2" value="{{$pr->narx2}}"><br>
                    <input type="submit" name="s1">
                </form>
                
            </div>
                     
        </div>
        
 
     
</body>
</html>