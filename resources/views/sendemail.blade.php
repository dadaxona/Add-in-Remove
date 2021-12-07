<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    {{-- @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif     --}}
    
    <form action="{{ url('/sendemail/send')}}" method="post">
        {{ csrf_field() }}
        <input type="text" name="name" id=""><br>
        @error('name')
        <div>{{$massage}}</div>
    
    @enderror
        <input type="email" name="email" id=""><br>
        @error('email')
        <div>{{$massage}}</div>
    
    @enderror
        <textarea name="message" id="" cols="30" rows="10">
        </textarea><br>
        @error('message')
        <div>{{$massage}}</div>
    
    @enderror
        <input type="submit" name="s1" id="" value="Send email">
    </form>
</body>
</html>