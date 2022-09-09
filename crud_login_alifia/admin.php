<?php
session_start();
if(isset($_SESSION['username'])){
    echo "<br />";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" 
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<?php

$db = new PDO("mysql:host=localhost;dbname=rumahsakit", 'root', '');
$query = $db->query("SELECT * FROM user");
?>
<div class="container">
    <div class="col">
    <?php echo "<h1> Selamat Datang Admin, </user>";?>
    <?php echo $_SESSION["username"];?>
    <br>
    <h1>Data Pengguna</h1>
<a href="tambah.php">Tambah User</a>
<table border="1" cellpadding="10" cellspacing="0" class="table table-dark table-striped">
    <tr>
        <th>Id</th>
        <th>Username</th>
        <th>Password</th>
        <th>Role</th>
        <th>Aksi</th>
    </tr>

<?php while($data = $query->fetch( )) :?>
   <tr>
    <td><?= $data['id']?></td>
    <td><?= $data['username']?></td>
    <td><?= $data['password']?></td>
    <td><?= $data['role']?></td>
    <td>
        <a href="edit.php?id=<?=$data['id']; ?>" class="btn btn-outline-primary">Update Siswa</a>

        <a href="proses_hapus.php?id=<?=$data['id']; ?>" class="btn btn-outline-danger">Hapus Siswa</a>

    </td>
   </tr>
    <?php endwhile ?>
    </div>
</div>
<form action="hapus_session.php">
        <button onclick="alert('Anda Telah Logout')"class="btn btn-outline-primary">Logout</button>
    </form>

</body>
</html>