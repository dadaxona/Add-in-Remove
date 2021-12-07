<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-10">
            <h1>Обратная связь</h1>
            @if (session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif
         
            <form action="{{ route('cr-us')}}" method="post">
                @csrf
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" name="name" class="form-control" placeholder="Enter Name" value="{{ old('name')}}">
                  <span class="text-danger">@error('name') {{ $message }} @enderror</span>
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" name="email" class="form-control" placeholder="Enter email" value="{{ old('email')}}">
                  <span class="text-danger">@error('email') {{ $message }} @enderror</span>
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" name="password" class="form-control" placeholder="Enter password" value="{{ old('password')}}">
                  <span class="text-danger">@error('password') {{ $message }} @enderror</span>
                </div><br>
                <div class="form-group">      
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Отправить</button>
                </div>
            </form>
            <a href="/test2">Login</a>
        </div>
    </div>

</div>
</body>
</html>


