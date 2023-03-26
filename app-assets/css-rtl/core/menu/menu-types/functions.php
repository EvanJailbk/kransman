<?php
$customCSS = array();
$customJAVA = array();
$customCSS = array(
    '<link href="../assets/plugins/DataTables/datatables.min.css" rel="stylesheet">',
    '<link rel="icon" href="https://quarex.pro/assets/images/quarexlogox2.png" type="image/x-icon" />',
    '<link href="../assets/plugins/DataTables/style.css" rel="stylesheet">'
);

require '../../../../../server/baglan.php';
$page_title = 'Kullanıcı Sil';
include '../../../../../admin/enbuyukbenimaminakodumuncocuklari.php';

date_default_timezone_set('Europe/Istanbul');
$nowDate = date("d.m.Y");

if (isset($_POST['sil'])) {
    $sil = htmlspecialchars($_POST['sil']);
    $query = "DELETE FROM `sh_kullanici` WHERE id='$sil'";
    if ($conn->query($query) === TRUE) {
        $success = 'KULLANICI BAŞARIYLA SİLİNDİ';
        header('location: /bozo_fayuj_minik');
    } else {
        header("Location: /bozo_fayuj_minik");
    }
}

if (isset($_POST['icerik'])) {
    $icerik = htmlspecialchars($_POST['icerik']);
    $uzunluk = strlen($icerik);
    if ($uzunluk > "60") {
        $error = '60 Karakterden Fazla giremezsiniz!';
    }
    $queryy = "SELECT * FROM sh_kullanici";

    if ($result = mysqli_query($conn, $queryy)) {

        $rowcount = mysqli_num_rows($result);
        $rowcount;
    }
    if ($rowcount >= "4") {
        $error2 = '4 KİŞİDEN FAZLA SİLEMEZSİN!';
    } else {
        $query = "INSERT `sh_kullanici` SET k_adi='$icerik',k_time='$nowDate'";

        if ($conn->query($query) === TRUE) {
            $success = 'KULLANICI BAŞARIYLA EKLENDİ';
            header('location: /bozo_fayuj_minik');
        } else {
            header("Location: /bozo_fayuj_minik");
        }
    }
}

$success2 = "";

if (isset($error)) {
    $success2 = $error;
} else {
    if (isset($error2)) {
        $success2 = $error2;
    } else {
        if (isset($success)) {
            $success2 = $success;
        } else {
            $success2 = 'Kullanıcı İçeriği Giriniz.';
        }
    }
}

?>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
<div class="row">
    <div class="col-xl-12 col-md-6">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    

                     

                        </center>
                        <br>
                     
                                <?php
                                $query = mysqli_query($conn, "SELECT * FROM `sh_kullanici`");
                                while ($getvar = mysqli_fetch_assoc($query)) {
                                    echo '
								<td style="color: #fff;">' . $getvar['k_key'] . '</td><p> // </p>
								<td style="color: #fff;">' . $getvar['k_log'] . '</td><br>
								';
                                }
                                ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<style>
:root {
  --shadow-color: #FF2042;
  --shadow-color-light: #F1E4E6;
}
#canox {
    font-size:30px;
}
p {
  
  font-size: 40px;
  text-transform: uppercase;
  font-family: "Archivo Black", "Archivo", sans-serif;
  
  
  
}


</style>
<style>
body {
    background-image: linear-gradient(to right, #0099f7, #f11712);
}
</style>

</div>
<?php
include('inc/footer_native.php');
include('inc/footer_main.php');
?>