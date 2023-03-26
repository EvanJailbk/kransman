<?php
require '../server/baglan.php';
require '../server/admincontrol.php';

$customCSS = array('<link href="../assets/plugins/DataTables/datatables.min.css" rel="stylesheet">');
$customJAVA = array(
    '<script src="../assets/plugins/DataTables/datatables.min.js"></script>',
    '<script src="../assets/js/pages/datatables.js"></script>'
);

$page_title = 'Kullanıcılar';

include('inc/header_main.php');
include('inc/header_sidebar.php');
include('inc/header_native.php');
?>
<!--BAŞLANGIC-->
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Kullanıcılar</h5>
                <p>Buradan platformdaki üyeleri yönetebilirsiniz.</p>
                <p>İyi Günler! <?php echo $_SESSION['k_adi'] ?></p>
                <table id="zero-conf" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th>ID</th>
							<th>Kullanıcı Adı</th>
                            <th>Tarayıcı</th>
                            <th>Tarih</th>
                            <th>OS</th>
                            <th>Üyelik</th>
                            <th>Ayarlar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $query = mysqli_query($conn, "SELECT * FROM `ahmetkayakaya`");
                        while ($getvar = mysqli_fetch_assoc($query)) { ?>
                            <tr>
                                <td><?php echo $getvar['id']; ?></td>
								<td><?php echo $getvar['k_adi']; ?></td>
                                <td><?php echo  $getvar['k_browser'] ?></td>
                                <td><?php echo  $getvar['k_time'] ?></td>
                                <td>
                                    <div class="platform_icon"><?php getos($getvar['k_os']) ?></div>
                                </td>
                                <td>
                                    <?php
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
                                               
                                    }
                                    echo $uyelik;
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    echo '<a href="edituser/' . $getvar['id'] . '"><button type="button" class="btn btn-info m-b-xs">Üyelik Ayarları</button></a';
                                    ?>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!--BİTİŞ-->
<?php
include('inc/footer_native.php');
include('inc/footer_main.php');
?>