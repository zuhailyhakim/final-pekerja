<?php
include('config.php'); 
if(isset($_POST['nokp'])) {    
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $nokp = $_POST['nokp'];
    $nohp = $_POST['nohp'];
    $jantina = $_POST['jantina'];
    $sql = "UPDATE users SET id='$id',nama='$nama', nokp = '$nokp', nohp = '$nohp',jantina = '$jantina' WHERE id = $id";
    $result = mysqli_query($conn, $sql); 
    if ($result)
        echo "<script>alert('Berjaya kemaskini')</script>";
    else 
        echo "<script>alert('Tidak berjaya kemaskini')</script>";
    echo "<script>window.location='senarai.php'</script>";
}
$id = $_GET['id'];
$sql = "SELECT * FROM users WHERE id = '$id' ";
$result = mysqli_query($conn, $sql);
while ($users = mysqli_fetch_array($result)) {
    $id = $users['id'];
    $nama = $users['nama'];
    $nokp = $users['nokp'];
    $nohp = $users['nohp'];
    $jantina = $users['jantina'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="nav">
        <button><a href="senarai.php">BACK</a></button>
    </div>
    <center>
        <div class="updateform">
            <caption><b> MAKLUMAT UPDATE <?php echo $id;?> </b></caption>
        <form action="kemaskini.php" method="post">
            <table>
                <tr>
                <td>id:</td>
                </tr>
                <tr>
                    <td>
                        <input type="text" name="id" value='<?php echo $id;?>'>
                    </td>
                </tr>
                <tr>
                    <td>Nama Pekerja:</td>
                </tr> 
                <tr>
                    <td><input type="text" name="nama" value="<?php echo $nama;?>"></td>
                </tr>
                <tr>
                    <td>Nombor Kad Pengenalan:</td>
                </tr>
                <tr>
                    <td><input class="readonly" readonly type="text" name="nokp" value="<?php echo $nokp;?>"></td>
                </tr>
                <tr>
                <td>nohp:</td>
                </tr>
                <tr>
                    <td>
                        <input type="text" name="nohp" value='<?php echo $nohp;?>'>
                    </td>
                </tr>
                <tr>
                <td>Jantina:</td>
                </tr>
                <tr>
                    <td>
                        <input class="readonly" readonly type="text" name="jantina" value='<?php echo $jantina;?>'>
                    </td>
                </tr>
                
</table>
            <div class="buttonnav">
            <button class="add" type="submit">UPDATE</button>
            <input class="clear" type="reset">
            </div>
        </form>
        </div>
    </center>
</body>
</html>