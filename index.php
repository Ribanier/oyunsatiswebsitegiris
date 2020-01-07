<html lang="tr">

<head>
    <meta charset="UTF-8">  
    <title>ANASAYFA</title>
    <link rel = "icon" href =  "logo.ico" > 
   <link href="style.css"  type="text/css" rel="stylesheet"/>
</head>

<body bgcolor="#191919">
    <!--ANA TABLO-->
    <!-- <header>

    </header>-->

    <!-- BAŞLIK KISMI-->
    <table border="0" height="15%" width="100%" align="center">
        <tr>
            <td width="27%">
                <img src="logo1.png" style="width:100%;">
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

    <!--GÖVDE KISMI-->

    <table border="0" height="100%" width="100%">
        <tr>
            <!--KATEGORİ KISMI-->
            <td width="17%" bgcolor="#191919" align="center" valign="top">
                <h2 style="color:aliceblue">KATEGORİLER</h2>
                <font size="5">
                    <nav class="link">
                        <?php
                        $dizi = [
                            'Aksiyon', 'Macera', 'Hack and Slash', 'Gerilim', 'Bagımsız', 'Basit Eğlence', 'RYO',
                            'Strateji', 'Yarış', 'Spor', 'Simülasyon', 'Co-op', 'Çok Oyunculu', 'Ücretsiz', 'Zor',
                            'Korku', 'Bulmaca', 'Bilim Kurgu', 'Açık Dünya', 'Platform', 'FPS', 'Hayatta Kalma',
                            'Komedi', 'Arcade', 'Keşif', 'Klasik', 'Başyapıt', 'Eğitici', 'Gercekci', 'Gizem', 'Kısa',
                            'Yönetim', 'RPG'
                        ];
                        for ($i = 0; $i < count($dizi); $i++) {
                            echo '<a href="">' . $dizi[$i] . '</a><br>';
                        }

                        ?>
                        </nav>
                </font>
            </td>
            <!--OYUN KISMI-->
            <td bgcolor="#3f3f3f">
                <table border="0" height="100%" width="100%" cellspacing=10>
                <tr>
                <td colspan="3">
                <h1>
                    Yeni Çıkanlar ve Popülerler <a href="oyunlar.php" style="text-decoration: none;"><sup><font color="red" size =1 >(Tümü)</font></sup></a>
                </h1>
                </td>
                </tr>
                    <form action="oyun.php" method="POST">
                        <?php
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
                        $a = 0;
                        $sayac2 = 0;

                        for ($i = 0; $i < 3; $i++) {
                            echo '<tr>';
                            for ($j = 0; $j < 3; $j++) {
                                echo @'
                            <td width="30%">
                            <table border="1" height="100%" width="100%">
                                <tr height="70px" >
                                    <td>
                                    <img src="oyunresimleri/' . $resimler[$a] . '/1.jpg" style="width:100%;">
                                    </td>
                                </tr>
                                <tr >
                                    <td>
                                    <p>' . $resimler[$a] . '</p><nav class="submitstl1"><input type="submit" name ="btn' . $a . '" value="İncele"> ' . rand(25, 120) . 'TL</nav>';
                                $a++;
                                echo @'     </td>
                                </tr>
                            </table>
                        </td>
                            ';
                            }

                            echo "</tr>";
                        }
                        ?>
                        <tr height="7%">
                            <td colspan="3" align="center">
                                <nav class="link">
                                    <a href="">
                                        <</a> <a href="">1
                                    </a>
                                    <a href="">2</a>
                                    <a href="">3</a>
                                    <a href="">></a>
                                </nav>
                            </td>
                        </tr>
                </table>
            </td>
        </tr>

    </table>

    <!--ALT KISMI-->

    <table border="0" height="30%" width="100%" bgcolor="#191919">
        <tr>
            <td align="center" valign="bottom">
                <p>
                    <h2>Boolean Oyun</h2>
                </p>
            </td>
            <td align="center" valign="bottom">
                <p>
                    <h2>İletişim</h2>
            </td>
            <td align="center" valign="bottom">
                <p>
                    <h2>Öne Çıkanlar</h2>
                </p>
            </td>
            <td align="center" valign="bottom">
                <p>
                    <h2>Sponsorlarımız</h2>
                </p>
            </td>
        </tr>
        <tr align="center" valign="top">

            <td>
                <font color="white" size=4>

                    <nav class="link">
                        <a href="">Hakkımızda</a>
                        <br>
                        <a href="">Kullanıcı Sözleşmesi</a>
                        <br>
                        <a href="">Nasıl Etkinleştiririm</a>
                    </nav>
                </font>
            </td>
            <td>

                </p>
                <font color="white" size=4>
                    <nav class="link">
                        E-posta: sadik_yildirim@outlook.com
                        <br>
                        Tel: 05XX XXX XX XX
                        <br>
                        Adres: dsad


                    </nav>
                </font>
            </td>
            <td>
                <font color="white" size=4>

                    <nav class="link">
                        <a href="">Gun Metal</a>
                        <br>
                        <a href="">Minecraft</a>
                        <br>
                        <a href="">Tomb Raider</a>
                        <br>
                        <a href="">Wİtcher</a>
                    </nav>
                </font>
            </td>
            <td>
                <font color="white" size=4>

                    <nav class="link">
                        <a href="https://about.google/" target="_blank">Google</a>
                        <br>
                        <a href="https://www.microsoft.com/tr-tr" target="_blank">Microsoft</a>
                        <br>
                        <a href="https://www.apple.com/tr/" target="_blank">Apple</a>
                        <br>
                        <a href="https://www.nvidia.com/" target="_blank">Nvidia</a>
                    </nav>
                </font>
            </td>
        </tr>

    </table>
</body>

</html>