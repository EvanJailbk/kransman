<?php
require '../server/baglan.php';
// $customCSS = array('<link href="../assets/plugins/apexcharts/apexcharts.css" rel="stylesheet">');
$customJAVA = array(
  '<script src="../assets/plugins/apexcharts/apexcharts.min.js"></script>',
  '<script src="../assets/plugins/sparkline/jquery.sparkline.min.js"></script>',
  '<script src="../assets/js/pages/dashboard.js"></script>'
);
$page_title = 'Ana Sayfa';
include('inc/header_main.php');
include('inc/header_sidebar.php');
include('inc/header_native.php');

$query = "SELECT * FROM ahmetkayakaya";

if ($result = mysqli_query($conn, $query)) {
  $rowcount = mysqli_num_rows($result);
  $rowcount;
} else {
  $rowcount = "0";
}
?>
<link href="../assets/css/scrollbar.css" type="text/css" rel="stylesheet"/>
<!--BAŞLANGIC-->
<div class="main-wrapper">
  <div class="row">
    <div class="col-md-3">
      <div class="card stats-card">
        <div class="card-body">
          <div class="stats-info">
          <h9 class="card-title" id="e" style="background-image: url(https://media.giphy.com/media/eYRGWfchREFUUlXT7P/giphy.gif); font-size:17px;"><b>Kullanıcılar</b><span class="stats-change stats-change-info"></span></h9>
            <h4 class="stats-text"><?php echo $rowcount; ?></h4>
          </div>
          <div class="stats-icon alert alert-warning">
            <i class="material-icons">account_circle</i>
          </div>
        </div>
      </div>
    </div>
    
    <div class="col-md-3">
      <div class="card stats-card">
        <div class="card-body">
          <div class="stats-info">
          <h9 class="card-title" id="e" style="background-image: url(https://media.giphy.com/media/eYRGWfchREFUUlXT7P/giphy.gif); font-size:17px;"><b>Aktif Sorgular</b><span class="stats-change stats-change-info"></span></h9>
            <h4 class="stats-text">14</h4>
          </div>
          <div class="stats-icon change-success">
            <i class="material-icons">check</i>
          </div>
        </div>
      </div>
    </div>

          <div class="col-md-3">
      <div class="card stats-card">
        <div class="card-body">
          <div class="stats-info">
          <h9 class="card-title" id="e" style="background-image: url(https://media.giphy.com/media/eYRGWfchREFUUlXT7P/giphy.gif); font-size:17px;"><b>Üyelik Durumu</b><span class="stats-change stats-change-info"></span></h9>
            <p class="stats-text"><?php echo $uyelik; ?></p>
          </div>
          <div class="stats-icon change-success">
            <i class="material-icons">verified_user</i>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card stats-card">
        <div class="card-body">
          <div class="stats-info">

          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-8">
      <div class="card card-bg">
        <div class="card-body">
          <p>
          <h5 class="card-title">Duyurular</h5>
          <table class="table crypto-table">
            <thead>
              <tr>
                <th scope="col">Duyuru İçeriği</th>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col">Yayın Tarihi</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $query = mysqli_query($conn, "SELECT * FROM `sh_duyuru`");
              while ($getvar = mysqli_fetch_assoc($query)) {
                echo '
                                <tr>
                                  <td><img src="" alt="">' . $getvar['d_icerik'] . '</td>
                                  <td></td>
                                  <td class="text-danger"></td>
                                  <td><button type="button" class="btn btn-link">' . $getvar['d_time'] . '</button></td>
                                </tr>
								';
              }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card card-bg">
        <div class="card-body">
          <h5 class="card-title">Üyelik Bilgileriniz</h5>
          <p>Hoş geldin! <?php echo $_SESSION['k_adi']?> 
          <table class="table">
            <thead>
              <tr>
                <th scope="col">Üyelik</th>
                <th scope="col">Bitiş Tarihi</th>
              </tr>
            </thead>
            <tbody>
              <?php
              switch ($uyelik) {
                case 'Freemium':
                  echo '                                          <tr>
                                        <td>Free</td>
                                        <td><span class="badge bg-success">Süresiz</span></td>
                                        </tr>';
                  break;
                case 'Premium+':
                  echo '                                          <tr>
                                        <td>Premium+</td>
                                        <td><span class="badge bg-success">' . $bitis_tarihi . '</span></td>
                                        </tr>';
                  break;
                  case 'Premium++':
                    echo '                                          <tr>
                                          <td>Premium++</td>
                                          <td><span class="badge bg-success">' . $bitis_tarihi . '</span></td>
                                          </tr>';
                    break;
                  case 'Premium':
                    echo '                                          <tr>
                                          <td>Premium</td>
                                          <td><span class="badge bg-success">' . $bitis_tarihi . '</span></td>
                                          </tr>';
                    break;
                case 'Admin':
                  echo '
                                        <td>Admin</td>
                                        <td><span class="badge bg-success">Süresiz</span></td>
                                        </tr>';
                  break;
              }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  

    <div class="card card-bg">
          <div class="card-body">
            <h5 style="font-size: 26px" class="card-title">Kurallar</h5>
            <ul class="kural">
              <li class="kural" style="text-shadow: #6495ed 1px 1px 25px; background-image: url(https://media.giphy.com/media/eYRGWfchREFUUlXT7P/giphy.gif);">Sorgu panelimizde <span style="color: #FF0000; font-weight: 500"><b>MULTİ ( ÇİFT HESAP ) ÜYELİK KULLANIMI</b></span>
                kesinlikle yasaktır, kullanmanız durumunda sistem otomatik algılayıp hesabınızı silecektir.</li>
              <li class="kural">Ünlülere ve Devlet yetkililerine sorgu atıldığı takdirde hesabınız otomatik olarak silinecektir.
              </li>
              <li class="kural">Panel üyeliğini farklı kişilere ucuz yoldan satmaya çalışan kişiler tespit edilirse siteden kalıcı ban yiyecektir.
              </li>
              <li class="kural">Kendisini Adminim veya Yetkiliyim diye tanıtan şahıslara itibar etmeyin.
              </li>
              
              <li class="kural">Üyelik satın alındıktan sonra iade kabul edilmez!</li>
               
               <li class="kural">Sitemizde ban atılan kişiler tekrardan üyelik satın alabilir.</li>
            </ul>
          </div>
        </div>
        </div>
        </div> 

<div class="content py-3">
  <div class="row fs-sm">
    <div class="col-sm-6 order-sm-2 py-1 text-center text-sm-end">
     <i class="fa fa-code text-primary"></i> Developed By <a class="fw-semibold" href="https://www.youtube.com/@MaskotYouTube" target="_blank">Maskot</a>
    </div>
    <div class="col-sm-6 order-sm-1 py-1 text-center text-sm-start">
      <a class="fw-semibold" href="https://discord.gg/kMVVPN3EmZ" target="_blank">Gladio Check</a> © <span data-toggle="year-copy" class="js-year-copy-enabled">2022-2023</span>
    </div>
  </div>
</div>

<!--BİTİŞ-->
<?php
include('inc/footer_native.php');
include('inc/footer_main.php');
?>