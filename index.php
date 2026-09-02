<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $nama = 'Budi';
        $umur = 30;
        $sudahmenikah = false;

        echo "nama saya $nama, umur saya $umur tahun";

        if ($sudahmenikah == false) {
            echo "Belum menikah";
        } else {
            echo "Sudah menikah"; 
        }

        for ($i=1; $i < 10; $i+=2) {
            echo $i;
        }
    ?>

</body>
</html>