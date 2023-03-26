<?php
include_once "../server/rolecontrol.php";

$customCSS = array('<link href="../assets/plugins/DataTables/datatables.min.css" rel="stylesheet">');
$customJAVA = array(
    '<script src="../assets/plugins/DataTables/datatables.min.js"></script>',
    '<script src="../assets/plugins/printer/main.js"></script>',
    '<script src="../assets/js/pages/datatables.js"></script>',
    '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.3.0/dist/sweetalert2.all.min.js"></script>'
);

$page_title = 'Vesika +18';
include('inc/header_main.php');
include('inc/header_sidebar.php');
include('inc/header_native.php');

?>
<!--<div class="page-content">-->
<!--BAŞLANGIC-->
<div class="row">
    <div class="col-xl-12 col-md-6">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Vesika +18</h4>
                    <p class="mb-1">
                    <p>Sorgulanacak kişinin TC kimlik numarasını giriniz.</p>
                    <div class="block-content tab-content">
                        <div class="tab-pane active" id="tc" role="tabpanel">

                            <input require maxlength="11" class="form-control" type="text" name="tcno" id="tcno"
                                placeholder="TC"><br>
                            <center>
                                <center>
                                <button onclick="checkNumber()" id="sorgula" name="yolla"  class="btn btn-outline-success btn-border" style="width: 180px; height: 45px; outline: none; margin-left: 5px;"><i class="fas fa-search"></i> Sorgula <span id="sorgulanumber"></span></button>
                            <button onclick="clearResults()" id="durdurButon" type="button" class="btn btn-outline-danger btn-border" style="width: 180px; height: 45px; outline: none; margin-left: 5px;"><i class="fas fa-trash-alt"></i> Sıfırla </button>
                            <button onclick="printTable()" id="yazdirTable" type="button" class="btn btn-outline-warning btn-border" style="width: 180px; height: 45px; outline: none; margin-left: 5px;"><i class="fas fa-print"></i> Yazdır Detay </button><br><br>
                      </center>
                            </center>
                            <center>
                                <div class="col-xl-2 col-md-6">
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <h4 &nbsp;="" class="card-title mb-4"><i class="fas fa-camera"></i>
                                                    Vesikalık Fotoğraf</h4>
                                                <img id="KimlikFotograf" src="../upload/profile/default.gif"
                                                    style="border-radius: 12px;" width="140" height="140" class="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </center>
                            <!-- <div class="table-responsive">
                                <table id="zero-conf" class="table table-hover" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>TC</th>
                                            <th>Ad</th>
                                            <th>Soyad</th>
                                            <th>Anne Adı</th>
                                            <th>Baba Adı</th>
                                            <th>ADRES</th>
                                            <th>E-POSTA</th>
                                        </tr>
                                    </thead>
                                    <tbody id="jojjoojj">
                                    </tbody>
                                </table>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function clearAll() {
        $("#jojjoojj").html('<tr class="odd"><td valign="top" colspan="21" class="dataTables_empty">No data available in table</td></tr>');
        $("#tcno").val("");
        $("#KimlikFotograf").attr("src", "../assets/images/user.png")
    }

    function checkNumber() {
        // return Swal.fire({
        //     icon: "warning",
        //     title: "Oooooopss...",
        //     text: "Bu çözüm şu an bakımdadır!"
        // });

        var roleNumber = "<?= $k_rol ?>";

        if (parseInt(roleNumber) == 1 || parseInt(roleNumber) == 2 || parseInt(roleNumber) == 3) {

            var tc = $("#tcno").val();
            var captcha = $("#captcha").val();
            $.Toast.showToast({
                "title": "Sorgulanıyor...",
                "icon": "loading",
                "duration": 60000
            });
            $.ajax({
                url: "../api/vesikalik/+18.php",
                data: {
                    tc: tc,
                    auth_key: "zweqallah",
                },
                type: "GET",
                success: (res) => {
                    // var json = JSON.parse(res)['KimlikBilgiViewModel']["KimlikBilgi"]
                    if (res.Status == true) {
                        $.Toast.hideToast();
                        var vesika = res.IdenityPicture;
                        $("#KimlikFotograf").attr("src", "data:image/png;base64," + vesika);
                    } else {
                        $.Toast.hideToast();
                        Swal.fire({
                            icon: 'error',
                            title: 'Bulunamadı!',
                            text: 'Girdiğiniz TC kimlik numarası ile eşleşen bir bilgi bulunamadı.',
                        })
                        return;
                    }
                },
                error: () => {
                    $.Toast.hideToast();
                    Swal.fire({
                        icon: 'error',
                        title: "Sunucu hatası!",
                        text: 'Lütfen yönetici ile iletişime geçin.'
                    })
                    return;
                }
            })
        } else {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Bu çözümü kullanman için yeterli yetkin bulunmuyor!',
            })
        }
    }
</script>
</div>
<!--BİTİŞ-->
<?php
include('inc/footer_native.php');
include('inc/footer_main.php');
?>