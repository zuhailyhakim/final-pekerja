<?php
 include('config.php');
 $nokp = $_GET['id'];
 $sql = "DELETE FROM users WHERE id= '$nokp'";
 $result = mysqli_query($conn, $sql);
 if ($result)
     echo "<script>alert('Berjaya dipadam')</script>";
else 
   echo "<script>alert('Tidak berjaya padam rekod')</script>";
echo "<script>window.location='senarai.php'</script>";
?>