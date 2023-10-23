<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
</head>
<body>
    <?php
    function tampil_ganjil(){
        for ($i =1; $i<=10; $i++){
            if ($i % 2 == 1){
                echo "$i ";
             }

         }
    }
    //pemanggil fungsi

    echo "Bilanggan ganjil 
        dari 1-10 :<br/>"; 
        tampil_ganjil();
    ?>
</body>
</html>