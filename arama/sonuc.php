<?php require_once 'baglan.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>PHP ile Arama Motoru</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="huseyin.png">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

  <div class="container">
    <br><br><br>
    <?php
    $searchkeyword = $_POST['searchkeyword'];

    $verisor = $db->prepare("SELECT count(*) as total FROM kayitlar where kayit_ad like '$searchkeyword'");
    $verisor->execute();
    $vericek = $verisor->fetch(PDO::FETCH_ASSOC);

    ?>
    <h2><?php echo "'" . $_POST['searchkeyword'] . "'" ?> İçin <?php echo $vericek['total'] ?> Arama Sonucu </h2>
    <br><br>
    <table class="table">
      <thead>
        <tr>
          <th>Ad</th>
          <th>Soyad</th>
        </tr>
      </thead>
      <tbody>



        <?php if (isset($_POST['searchsayfa'])) {




          $kayitsor = $db->prepare("SELECT * FROM kayitlar where kayit_ad like '$searchkeyword' or  
          kayit_ad_iki like '$searchkeyword' or
          kayit_soyad like '$searchkeyword' or
          CONCAT(kayit_ad, ' ', kayit_soyad) like '$searchkeyword' or
          CONCAT(kayit_ad, ' ',  kayit_ad_iki, '', kayit_soyad) like '$searchkeyword' 
          
          ");
          $kayitsor->execute();
        }

        while ($kayitcek = $kayitsor->fetch(PDO::FETCH_ASSOC)) {



        ?>
          
          <tr>
            <td><?php echo mb_strtoupper($kayitcek['kayit_ad'] . " " . $kayitcek['kayit_ad_iki']) ?></td>
            <td><?php echo mb_strtoupper($kayitcek['kayit_soyad']) ?></td>
          </tr>

        <?php  } ?>

      </tbody>
    </table>
  </div>

</body>

</html>