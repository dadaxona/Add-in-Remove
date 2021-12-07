<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU"
     crossorigin="anonymous">
    <title>Tek</title>
    <style>
      #t{
        width: 50%;
      }
    </style>
</head>
<body>
  <div class="container">
      <div class="row">
          <div class="col-6">
            <form action="" method="GET">
                <input type="name" name="name" id=""><br>
                <input type="email" name="email" id=""><br>
                <input type="password" name="password" id=""><br>
                <input type="submit" name="s1" id="">
        
            </form>
          </div>
      </div>
  </div>
  <?php 
  $con1 = mysqli_connect("localhost","root","","laravel");
  $sql1 = "SELECT * FROM `ttek` WHERE id";
  $r1=mysqli_query($con1,$sql1);

  echo "<table class='table table-dark table-striped' id='t'>";
  while ($rw=mysqli_fetch_assoc($r1)) {
     
        echo "<tr>";
          echo "<td>".$rw['id']."</td>";
          echo "<td>".$rw['name']."</td>";
          echo "<td>".$rw['email']."</td>";         
        echo "</tr>";
    
  }
  echo "</table>";

    if (isset($_GET["s1"])) {
       $con = mysqli_connect("localhost","root","","laravel");
       $name = $_GET["name"];
       $email = $_GET["email"];
       $password = md5($_GET["password"]);
       $sql ="insert into ttek(name, email, password) values ('{$name}','{$email}','{$password}')";
       $r=mysqli_query($con, $sql);
       if ($r) {
         ?>
          <script>
            window.location.href="/tek";
          </script>
         <?
       }
    }
  
  ?>
</body>
</html>