<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, intial-scale=1">
    <title>Pendaftaran Member Card Tris Studio</title>
    <link rel="stylesheet" href="css/style.css" media="screen">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</head>
    <body>
      <body bgcolor="#e5e5e5">
        <div class="wrapper">
            <div class="head">
            <p align="center">Pendaftaran Member Card Tris Studio</p>
            </div>    
        <div class="container">
                    <form method="POST" action="cetak.php">
                    <div class="row">
                      <div class="col-25">
                        <label for="memid">Member ID</label>
                    </div>
                      <div class="col-75">
                          <?php
                            $id=uniqid();
                            echo "<input type='text' name='memid' value='$id' readonly/>"
                          ?>
                        </div>
                    </div>
                    <div class="row">
                      <div class="col-25">
                        <label for="nama">Nama</label>
                      </div>
                      <div class="col-75">
                        <input type="text" id="nama" name="nama" placeholder="Masukan nama.." required autofocus>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-25">
                        <label for="alamat">Alamat</label>
                      </div>
                      <div class="col-75">
                        <input type="text" id="alamat" name="alamat" placeholder="Masukan alamat.." required autofocus>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-25">
                        <label for="jkel">Jenis Kelamin</label>
                      </div>
                      <div class="col-75">
                        <select id="jkelamin" name="jkelamin" required>
                          <option value="">-- Pilih Jenis Kelamin --</option>
                          <option value="Laki-laki">Laki-laki</option>
                          <option value="Perempuan">Perempuan</option>
                        </select>
                      </div>
                    </div>
                    <div class="row">
                        <br>
                    </div>
                    <div class="row">
                    <input type="button" id="btn-danger" value="Batalkan" index="0"/><input type="submit" value="Daftar" index="1">
                    </div>
                    </form>
                  </div>
        </div>
    </body>
</html>
    