<?php
//pengulangan php

$mahasiswa = ["sugiono hartono","1234678","ilmu kehutanan","sugiono@jungleuniversity.ac.id"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Latihan Daftar mahasiswa</title>
</head>
<body>
    <h1>Daftar mahasiswa</h1>

    <ul>
        <?php foreach ($mahasiswa as $mhs) : ?>
        <li><?= $mhs; ?></li>
        <?php endforeach;?>
</ul>

</body>
</html>