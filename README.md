#Web-Programming | QRCode Generate untuk username - Tris

Berikut Project Studi Kasus Member Card
\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
Generator ID Uniq dan QR Code Uniq. Biasanya diperlukan untuk CRUD pada ID.

========================================================
PHP Uniq : 
========================================================
    <?php
    echo uniqid();
    ?>
========================================================


Source : https://github.com/t0k4rt/phpqrcode
========================================================
PHPQRCode : include plugin/phpqrcode-master
========================================================
                <?php
                    include "plugin/phpqrcode-master/phpqrcode-master/qrlib.php";
                        QRcode::png("ID_ANDA", "qrcode.png");
                ?>