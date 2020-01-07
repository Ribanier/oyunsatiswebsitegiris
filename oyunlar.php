<html>

<head>
    <meta charset="UTF-8">

    <title>Oyunlar</title>
    <link href="style.css" type="text/css" rel="stylesheet" />
    <link rel = "icon" href =  "logo.ico" > 
</head>

<body bgcolor="#191919">
    <!-- BAŞLIK KISMI-->
    <table border="0" height="15%" width="100%" align="center">
        <tr>
            <td width="27%">
                <a href="index.php">
                    <img src="logo1.png" style="width:100%;">
                </a>
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

    <form action="oyun.php" method="POST">
        <?php
        $dir = opendir("oyunresimleri");
        $sayac = 0;
        while ($dosya = readdir($dir)) {

            if (!is_dir($dosya)) {
                $resimler[$sayac] = $dosya;
                // mkdir(substr($dosya,0,strlen($dosya)-4));
                // touch("oyunresimleri/$dosya.txt");
                $sayac++;
            }
        }
        closedir($dir);

        echo
            '<table border="1" width="100%">';
        for ($i = 0; $i < count($resimler); $i++) {
            echo
                '<tr >
            <td  width="45%">
                <marquee behavior="alternate" bgcolor="#000000 ">
                   
                        <img src="oyunresimleri/' . $resimler[$i] . '/1.jpg" align="center">
                        <img src="oyunresimleri/' . $resimler[$i] . '/2.jpg" align="center">
                        <img src="oyunresimleri/' . $resimler[$i] . '/3.jpg" align="center"> 
                        
                </marquee>
        
            </td>
            <td valign="top">
            <font color="white" size="5" >    ';

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
               </font>
            </td>
        </tr>
        
        <tr height="85px">
        <td width="100%" colspan=2>

        <p>' . $resimler[$i] . '</p><nav class="submitstl2"><input type="submit"  value="Satın Al" name="btn' . $i . '"> ' . rand(25, 120) . 'TL</nav>
        </td>
        </tr>';
        }
        /*   for($i=0;$i<9;$i++):
// Dosya yoksa oluşur ve eklemek üzere aç...
$dosya = fopen("$resimler[$i].txt","a");
// Gelen mesajı dosyaya yaz...
fwrite($dosya,"mesaj");
// Veriler dosyada yanyana yapışmasın ve okunduğunda düzgün görüntülenebilsin diye
// mesajın ardından <br> etiketini ve satır sonu karakterlerini
// (\r\n karakterleri) yaz...
fwrite($dosya,"<br>\r\n");
// Dosyayı kapat. Başkaları da kullanabilsin...
fclose($dosya);
endfor;*/
        ?>

    </form>
    </table>
</body>

</html>