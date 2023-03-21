<! html DOCTYPE>
  <html lang="en">

  <Head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <Basic>
      </title>
  </Head>

  <body>
    <?php
    $Gaji = 1000000;
    $Pajak = 0.1;
    $thp = $Pajak - ($Gaji *  $Pajak);
    echo "Gaji sebelum pajak = Rp.  $Gaji <br>";
    echo "Gaji yang dibawa pulang = Rp.  $thp";
    ?>
  </body>

  </html>