
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
     <title>Malumot Qoshish</title>
    <style>
        form{
            width: 50%;
            margin: auto;
        }
        h1{
            text-align: center;
            margin-bottom: 82px;
        }
    </style>

   <h1> Malumotlarni Qoshish </h1>
   <a href="list"><button id="aaa" class="btn btn-primary" type="button">Qaytish</button></a>
    <form action="create" method="POST">
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
     
            <label>Email address</label> <br>
            <input type="email" name="email"><br>
            <label>Password</label><br>
            <input type="password" name="password"> 
        <br>
        <button type="submit">Submit</button>
    </form>
