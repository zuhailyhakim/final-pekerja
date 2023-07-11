<?php 
include "config.php";
$sql = "SELECT * FROM users";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <!-- Required meta tags -->
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
     
	<title>Measurement Conversion</title>
    <style>
    body{background-color: pink;}
    
    table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
    </style>
</head>
<body>
<div class="container">
        <h2>SENARAI PEKERJA</h2>
<table class="table">
    <thead>
        <tr>
       
        <th>id</th>
        <th>nama</th>
        <th>nokp</th>
        <th>nohp</th>
        <th>jantina</th>

    </tr>
    </thead>
    <tbody> 
        <?php
            if ($result->num_rows ) {
                while ($row = $result->fetch_assoc()) {
        ?>
                    <tr>
                    
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['nama']; ?></td>
                    <td><?php echo $row['nokp']; ?></td>
                    <td><?php echo $row['nohp']; ?></td>
                    <td><?php echo $row['jantina']; ?></td>
                    <td><button type="edit" class="btn btn-primary" name="edit" value="edit"> <a href="kemaskini.php">edit</a></button></td>
                    <td><a class="btn btn-danger" href="senarai.php?id=<?php echo $row['nokp']; ?>">Delete</a></td>                  
                    </tr>

                    
        <?php       }

            }
        ?><td><button type="edit" class="btn btn-primary" name="create" value="create"> <a href="index.php">create</a></button></td>                
    </tbody>
</table>
    </div> 
</body>
</html>