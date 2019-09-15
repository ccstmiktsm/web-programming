<!DOCTYPE html>
<html>
<head>
    <title>Print Member</title>
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
    <script>
        function printer(){
            window.print();
        }
    </script>
</head>
        <body>
    <div class="wrapper">
        <div class="member">
            <div class="cover">
                <div class="row">
                    <br>
                    <center>
                    <b class="white">-- Member Card of Tris Studio --</b>
                    </center>
                    <br>
                    <?php
                    include "plugin/phpqrcode-master/phpqrcode-master/qrlib.php";
                        QRcode::png("$_POST[memid]", "qrcode.png");

                        echo"
                            <div class='col-40'>&nbsp;&nbsp;&nbsp;<img src='qrcode.png' width='118px' height='120px'/></div>
                            <p class='white col-25'>ID Member </p>
                            <p class='white col-35'>: $_POST[memid]</p>    
                        ";
                        echo"
                            <div class='col-40'></div>
                            <p class='white col-25'>Nama </p>
                            <p class='white col-35'>: $_POST[nama]</p>    
                        ";
                        echo"
                            <div class='col-40'></div>
                            <p class='white col-25'>Alamat </p>
                            <p class='white col-35'>: $_POST[alamat]</p>    
                        ";
                    ?>
                </div>
            </div>
        </div>
    </div>
        </body>
        <br><br>
        <div style="margin-left:20px;">
            <a href="javascript:void(0);" onclick="printer();" class="btnq greenize">Print</a>
            <a href="index.php" class="btnq redize">Kembali</a>
        </div>
</html>