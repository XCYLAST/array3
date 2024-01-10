<?php
$angka =[
    [1,2,3],
    [4,5,6],
    [7,8,9]
];
?>
<!DOCTYPE html>
<html>
    <head>
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
        </style>
    </head>
    <body>
    <?php foreach ( $angka as $a) : ?>
<?php foreach ($a as $b) : ?>
    <div class="kontak"><?php echo $b; ?></div>
<?php endforeach; ?>
<?php endforeach; ?>
</body>
    </html>