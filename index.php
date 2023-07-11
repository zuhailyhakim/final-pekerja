<?php
include 'config.php';
if (isset($_POST['nokp'])){
    $id=$_POST['id'];
    $nama=$_POST['nama'];
    $nokp=$_POST['nokp'];
    $nohp=$_POST['nohp'];
    $jantina=$_POST['jantina'];

    $sql="insert into users (id,nama,nokp,nohp,jantina) 
    values('$id','$nama','$nokp','$nohp','$jantina')";
    $result=mysqli_query($conn,$sql);
    if($result){
       echo "<script>alert('Data inserted sucsessfully');
       window.location='senarai.php'</script>";
       
    }else{
        die(mysqli_error($conn));
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>

    <style>
    body{background-color: pink};
    button{color: black};
    </style>
</head>
<body>
<center><h2>LOGIN</h2></center>

<div class= "container my-5">
    <form method="post">

<div class="form-group">  

<div class="form-group">  
    <label>id</label>
    <input type="text" class="form-control" 
    placeholder="Enter your id" name="id" autocomplete="off">
  </div>  

  <div class="form-group">
    <label>nama</label>
    <input type="text" class="form-control" 
    placeholder="Enter your nama" name="nama">
  </div>
  
  <div class="form-group">
    <label>nokp</label>
    <input type="text" class="form-control" 
    placeholder="Enter your nokp" name="nokp">
  </div>

  <div class="form-group">
    <label>nohp</label>
    <input type="text" class="form-control" 
    placeholder="Enter your nohp" name="nohp">
  </div>

  <div class="form-group">
    <label>jantina</label>
    <input type="text" class="form-control" 
    placeholder="Enter your jantina" name="jantina">
  </div><br>

  <button type="submit" class="btn btn-primary" name="submit" value="submit"> <a href="index.php"></a>Submit</button>
</form> 
</body>
</html>