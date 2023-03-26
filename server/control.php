<?php
error_reporting(0);
ini_set('display_errors', 0);

require '../server/baglan.php';

$uid = $_SESSION['id'];

$query = mysqli_query($conn, "SELECT * FROM `ahmetkayakaya` WHERE id='$uid'");
while ($getvar = mysqli_fetch_assoc($query)) {
    $roll = $getvar['k_rol'];
    switch ($roll) {
        case '0':
            $uyelik = "Free";
            break;
        case '1':
            $uyelik = "Admin";
            break;
        case '2':
            $uyelik = "Premium+";
            break;
        case '3':
             $uyelik = "Premium";
                break;
                case '4':
                    $nuyelik = "Premium++";
                       break;
    }
    $bitis_tarihi = $getvar['u_time'];
    if (empty($bitis_tarihi)) {
        $bitis_tarihi = 1;
    }
    if ($bitis_tarihi !== "1") {
        function kontrol($kayit, $bitis)
        {
            $ilk = strtotime($kayit);
            $son = strtotime($bitis);
            if ($ilk - $son > 0) {
                return 1;
            } else {
                return 0;
            }
        }
        date_default_timezone_set('Europe/Istanbul');
        $bugun_tarih = date('Y-m-d'); // Bugünün tarihini çekiyoruz
        if (kontrol($bugun_tarih, $bitis_tarihi)) { // Kontrol ediliyor.
            $null = 1;
            $yetki = 0;
            $query = "UPDATE `ahmetkayakaya` SET k_rol='$yetki',u_time='$null' WHERE id=$uid";
            if ($conn->query($query) !== TRUE) {
                echo $conn->error;
            }
            // Üyelik bitirme işlemleri.

        }
    }
}
