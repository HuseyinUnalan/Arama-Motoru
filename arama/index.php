<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PHP ile Arama Motoru</title>
  <link rel="icon" href="huseyin.png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    body {
      font-family: Arial;
    }

    * {
      box-sizing: border-box;
    }

    form.example input[type=text] {
      padding: 10px;
      font-size: 17px;
      border: 1px solid grey;
      float: left;
      width: 80%;
      background: #f1f1f1;
    }

    form.example button {
      float: left;
      width: 20%;
      padding: 10px;
      background: #2196F3;
      color: white;
      font-size: 17px;
      border: 1px solid grey;
      border-left: none;
      cursor: pointer;
    }

    form.example button:hover {
      background: #0b7dda;
    }

    form.example::after {
      content: "";
      clear: both;
      display: table;
    }
  </style>
</head>

<body>

  <div class="container">
    <br><br><br>
    <h2>Arama Motoru</h2>


    <form class="example" action="sonuc.php" method="POST">
      <input type="text" name="searchkeyword" placeholder="Ara.." name="search">
      <button type="submit" name="searchsayfa"><i class="fa fa-search"></i></button>
    </form>


    <hr>
    <a href="https://www.linkedin.com/in/h%C3%BCseyin-%C3%BCnalan-571143234/" target="_blank"><img width="25" src="https://play-lh.googleusercontent.com/kMofEFLjobZy_bCuaiDogzBcUT-dz3BBbOrIEjJ-hqOabjK8ieuevGe6wlTD15QzOqw" alt=""></a>
  </div>



</body>

</html>