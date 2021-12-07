<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Registration</h1>
    <form method="POST" action="{{route('user.login')}}">
     @csrf
     <div>
         <input type="email" name="email" id="email" placeholder="Email"><br><br>
         @error('email')
             <div>{{$massage}}</div>
         
         @enderror
     </div>
     <div>
         <input type="password" name="password" id="password" placeholder="Password"><br><br>
         @error('password')
             <div>{{$massage}}</div>
         
         @enderror
     </div>
     <div>
         <button type="submit" name="sendMe" value="1">Kirish</button>
     </div>
     
     </form>
 
</body>
</html>