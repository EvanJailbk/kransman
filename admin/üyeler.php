<?php
require '../server/baglan.php';

$customCSS = array('<link href="../assets/plugins/DataTables/datatables.min.css" rel="stylesheet">');
$customJAVA = array(
    '<script src="../assets/plugins/DataTables/datatables.min.js"></script>',
    '<script src="../assets/js/pages/datatables.js"></script>'
);

$page_title = 'Üyeler';

include('inc/header_main.php');
include('inc/header_sidebar.php');
include('inc/header_native.php');
?>
<!--BAŞLANGIC-->
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Üyeler</h5>
                <p></p>
                <p>İyi Günler, <?php echo $_SESSION['k_adi'] ?></p>
                <table id="zero-conf" class="display" style="width:100%">
                    <thead>
                        <tr>
							<th>Kullanıcı Adı</th>
                            <th></th>
                            <th>Üyelik</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $query = mysqli_query($conn, "SELECT * FROM `ahmetkayakaya`");
                        while ($getvar = mysqli_fetch_assoc($query)) { ?>
                            <tr>
								<td><?php echo $getvar['k_adi']; ?></td>
                                <td>
                                </td>
                                <td>
Gizlenmiş
                                </td>
                                <td>
                                
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