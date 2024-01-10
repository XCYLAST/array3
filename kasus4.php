<!DOCTYPE html>
<html>
    <head>
        <title>latihan pengulangan</title>
        <style>
            div{
                width: 50px;
                height: 50px;
                background-color: cyan;
                text-align: center;
                line-height: 50px;
                margin: 3px;
                float: left;
            }
            body{
                max-width: 200px;
            }
        </style>
    </head>
    <body>
<?php
$angka =[
    [1,2,3],
    [4,5,6],
    [7,8,9]
];
?>
    <?php foreach ( $angka as $a) : ?>
<?php foreach ($a as $b) : ?>
    <div class="kontak"><?php echo $b; ?></div>
<?php endforeach; ?>
<?php endforeach; ?>
</body>
    </html>