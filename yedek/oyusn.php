
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <?php

    /*   $dir = opendir("oyunresimleri");
    $sayac = 0;
    while ($dosya = readdir($dir)) {

        if (!is_dir($dosya)) {
            $btnad[$sayac] = $dosya;
            // mkdir(substr($dosya,0,strlen($dosya)-4));
            $sayac++;
        }
    }
    closedir($dir);
   // print_r($btnad);
   */
    for ($i = 0; $i < 9; $i++) {
        if (isset($_POST['btn' . $i])) {
            echo 'btn' . $i;
            break;
        }
    }

    ?>
</body>

</html>