<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU"
     crossorigin="anonymous">
    <title>Test2</title>
</head>
<body>
    <div class="container">
        <div class="row" style="margin-top: 25px">
            <div class="col-md-4">
                <h1>Login</h1>
                <hr>
                <form action="{{ route('log-us')}}" method="post">
                    @if (Session::has('fail2'))
                    <div class="alert alert-danger">
                        {{Session::get('fail2')}}
                    </div>
                @endif
                    @csrf
                   <div class="form-group">
                     <label for="email">Email</label>
                     <input type="email" name="email" class="form-control" placeholder="Enter email" value="{{ old('email')}}">
                     <span class="text-danger">@error('email') {{ $message }}   @enderror</span>
                   </div>
                   <div class="form-group">
                     <label for="password">Password</label>
                     <input type="password" name="password" class="form-control" placeholder="Enter password" value="{{ old('password')}}">
                     <span class="text-danger">@error('password') {{ $message }}   @enderror</span>                 
                   </div>
                   @if (Session::has('fail'))
                   <p class="alert alert-danger">
                       {{Session::get('fail')}}
                   </p>
                  @endif
                   <div class="form-group">
                     
                     <input type="submit" value=" Sing_up">
                     
                   </div>
                   <a href="/test">Registration</a>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>