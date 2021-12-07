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
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offiset-4">
                <h1>Login</h1>
                <hr>
                <form action="{{route('login-user')}}" method="post">
                    @csrf
                    {{-- @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif --}}
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" placeholder="Emaile" name="email"  value="{{old('email')}}">
                        <span class="text-danger">@error('email') {{$message}}@enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="name">password</label>
                        <input type="password" class="form-control" placeholder="Password" name="password"  value="{{old('password')}}">
                        <span class="text-danger">@error('password') {{$message}}@enderror</span>
                    </div>
                        @if (Session::has('fail'))
                            <div class="alert alert-danger">
                                {{Session::get('fail')}}
                            </div>
                        @endif
                    <div class="form-group">
                     <input type="submit" name="" id="">
                    </div>
                    <a href="registration">Registration</a>
                </form>
            </div>
        </div>

    </div>
    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
 integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
 crossorigin="anonymous"></script>
</html>