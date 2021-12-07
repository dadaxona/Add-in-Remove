<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
<title>Kabimat</title>
<style>
  .h {
    text-align: center;
    font-size: 56px;
  
  }
  #aaa{
   margin-bottom: 10px;
   .w-5{
     display: none;
   }
 }
</style>
  
</head>
<body>
<h1 class="h"> Kabinet</h1>

<div class="container">
<div class="d-grid gap-2 d-md-flex justify-content-md-end">
<a href="add"><button id="aaa" class="btn btn-primary" type="button">Yangi malumot qoshish</button></a>
 
</div>
<table class="table table-dark table-striped">
  <tr>
    <td>ID</td>
    <td>email</td>
    <td>password</td>
    <td>Yangilash</td>
    <td>Ochirish</td>
   
  </tr>
  @foreach($binomo as $bino)
  <tr>
    <td><a href="{{'sho/'.$bino->id}}">{{$bino['id']}}</a></td>
    <td>{{$bino['email']}}</td>
    <td>{{$bino['password']}}</td>
    <td><a href="{{'edit/'.$bino->id}}"><button class="btn btn-success">Yangilash</button></a><td>
 <a href="{{'delete/'.$bino->id}}"><button type="submit" class="btn btn-danger">Delete</button></a>  
  </tr>
  @endforeach
</table>
{{$binomo -> links()}}
</div>

  


</body>
</html>