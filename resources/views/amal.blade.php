<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
   

    <title>amal</title>
</head>
<body>
    <h1>Amaliyot</h1>

    {{-- <table class="table table-dark table-hover">
      
            <tr>
                <td>ID</td>
                <td>Name</td>
                <td>Email</td>
              
                <td>Yangilash</td>
                <td>Ochirish</td>
            </tr>  

        @foreach ($a as $comp)
        <tr>
            <td>{{$comp['id']}}</td>
            <td>{{$comp['name']}}</td>
            <td>{{$comp['email']}}</td>
         
            <td><a href="qwe/{{$comp['id']}}"><button type="button" class="btn btn-success">Update</button></a></td>
            <td><a href={{"del/".$comp['id']}}><button type="button" class="btn btn-danger">Delete</button></a></td>

          
        </tr>
        @endforeach

    </table> --}}

    <form action="/jonat" method="POST">

          @csrf
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
    
        <input type="text" name="name" id="" required><br>
        <input type="email" name="email" id="" required><br>
        <input type="password" name="password" id="" required><br>
        <input type="submit" name="s1">
    </form>
</body>
</html>