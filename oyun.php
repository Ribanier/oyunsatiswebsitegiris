<html lang="en">

<head>
    <meta charset="UTF-8">

    <title>Oyun</title>
    <link href="style.css" type="text/css" rel="stylesheet"/>
    <link rel = "icon" href =  "logo.ico" > 
</head>

<body bgcolor="#191919">
    <!-- BAŞLIK KISMI-->
    <table border="0" height="15%" width="100%" align="center">
        <tr>
            <td width="27%">
                <a href="index.php">
                    <img src="logo1.png" style="width:100%;"></a>
            </td>
            <td align="center">
                <H2>

                    <nav class="link">
                        <a href="oyunlar.php">Oyunlar</a>
                        <a href="">Haberler</a>
                        <a href="">Destek</a>
                        <a href="">Yazılım</a>
                        <a href="">Donanım</a>
                    </nav>
                </H2>
            </td>
            <td width="20%">

            </td>
        </tr>
    </table>
    <?php


    $deger;
    for ($i = 0; $i < 9; $i++) {
        if (isset($_POST['btn' . $i])) {
            //  echo 'btn' . $i;
            $deger = $i;
            break;
        }
    }
    $dir = opendir("oyunresimleri");
    $sayac = 0;
    while ($dosya = readdir($dir)) {

        if (!is_dir($dosya)) {
            $resimler[$sayac] = $dosya;
            // mkdir(substr($dosya,0,strlen($dosya)-4));
            $sayac++;
        }
    }
    closedir($dir);
    echo '<h1 style="margin:15px;">' . $resimler[$deger] . '</h1>';
    echo ' <table border="0" width="100%" height="70%" cellspacing=15> 
         <tr height="10%">
            <td width="70%" rowspan="2" valign="top">
            <marquee behavior="alternate" bgcolor="#000000" valign="top">
         
                <img src="oyunresimleri/' . $resimler[$deger] . '/1.jpg" align="center" style="width:100%;">
                <img src="oyunresimleri/' . $resimler[$deger] . '/2.jpg" align="center"  style="width:100%;">
                <img src="oyunresimleri/' . $resimler[$deger] . '/3.jpg" align="center" style="width:100%;"> 
               
        </marquee>
            </td>
            <td>
            <img src="oyunresimleri/' . $resimler[$deger] . '/1.jpg" style="width:100%;">
            </td>

        </tr >
        <tr height="45%" >
            <td valign="top">';
    if ($dosya = (fopen("oyunresimleri/$resimler[$i]/$resimler[$i].txt", 'r'))) {
        print("");
    } else {
        print("Dosya açılamadı!");
    }
    while (!feof($dosya)) {
        $satir = fgets($dosya, 1024);
        print("$satir<br>");
    }
    echo '
            </td>
        </tr>
        <tr >
            <td colspan="2"valign="top" >
            <form>
                <p><nav class="submitstl2"><input type="submit" value="Satın Al">   ' . rand(25, 150) . 'TL</nav></p>
                </form>
            </td>
        </tr>';
    ?>

    </table>
</body>

</html>