<?php
$customCSS = array('<link href="../assets/plugins/DataTables/datatables.min.css" rel="stylesheet">');
$customJAVA = array(
    '<script src="../assets/plugins/DataTables/datatables.min.js"></script>',
    '<script src="../assets/plugins/printer/main.js"></script>',
    '<script src="../assets/js/pages/datatables.js"></script>',
    '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.3.0/dist/sweetalert2.all.min.js"></script>',
    '<script src="../assets/plugins/jquery.toast/jquery.toast.js"></script>'

);

$page_title = 'Ad Soyad PRO';
include('inc/header_main.php');
include('inc/header_sidebar.php');
include('inc/header_native.php');

error_reporting(0);

?>
<!--<div class="page-content">-->
<!--BAŞLANGIC-->
<div class="row">
    <div class="col-xl-12 col-md-6">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">
                      Ad Soyad PRO
					</h4>
                    <p>Sorgulanacak kişinin adını ve soyadını giriniz.</p>
                    <div class="block-content tab-content">
                    <input require maxlength="30" class="form-control" type="text" name="first" id="first" placeholder="Ad"><br>
                            <input require maxlength="30" class="form-control" type="text" name="last" id="last" placeholder="Soyad"><br>
                            <input require maxlength="30" class="form-control" type="text" name="adresil" id="adresil" placeholder="İl"><br>
                            <input require maxlength="30" class="form-control" type="text" name="adresilce" id="adresilce" placeholder="İlçe"><br>
                                <center>
                                <button onclick="checkNumber()" id="sorgula" name="yolla"  class="btn btn-outline-success btn-border" style="width: 180px; height: 45px; outline: none; margin-left: 5px;"><i class="fas fa-search"></i> Sorgula <span id="sorgulanumber"></span></button>
                            <button onclick="clearResults()" id="durdurButon" type="button" class="btn btn-outline-danger btn-border" style="width: 180px; height: 45px; outline: none; margin-left: 5px;"><i class="fas fa-trash-alt"></i> Sıfırla </button>
                            <button onclick="printTable()" id="yazdirTable" type="button" class="btn btn-outline-warning btn-border" style="width: 180px; height: 45px; outline: none; margin-left: 5px;"><i class="fas fa-print"></i> Yazdır Detay </button><br><br>
                        </center>
                            <div class="table-responsive">
                                <table id="zero-conf" class="table table-hover" style="width:100%">
                                <thead>
                                        <tr>
                                        <th>TC</th>
                                        <th>Ad</th>
                                        <th>Soyad</th>
                                        <th>Doğum Tarihi</th>
                                        <th>Anne Adı</th>
                                        <th>Anne TC</th>
                                        <th>Baba Adı</th>
                                        <th>Baba TC</th>
                                        <th>Nüfus İl</th>
                                        <th>Nüfus İlçe</th>
                                        <th>Uyruk</th>
                                        </tr>
                                    </thead>
                                    <tbody id="jojjoojj">
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    document.getElementById('first').addEventListener("keyup", function() {
        this.value = this.value.toLocaleUpperCase("tr-TR");
    });

    document.getElementById('last').addEventListener("keyup", function() {
        this.value = this.value.toLocaleUpperCase("tr-TR");
    });
    document.getElementById('adresil').addEventListener("keyup", function() {
        this.value = this.value.toLocaleUpperCase("tr-TR");
    });

    document.getElementById('adresilce').addEventListener("keyup", function() {
        this.value = this.value.toLocaleUpperCase("tr-TR");
    });
</script>
<script type="text/javascript">
    function clearResults() {

        $("#jojjoojj").html(
            '<tr class="odd"><td valign="top" colspan="21" class="dataTables_empty">No data available in table</td></tr>'
        );

        $("#first").val("");
        $("#last").val("");
        $("#adresil").val("");
        $("#adresilce").val("");
    }

    function checkNumber() {
        /*
        return Swal.fire({
            icon: "warning",
            title: "Oooooopss...",
            text: "Bu çözüm şu an bakımdadır!"
        });
        */

        var roleNumber = "<?= $k_rol ?>";

        if (parseInt(roleNumber) == 1 || parseInt(roleNumber) == 2 || parseInt(roleNumber) == 3 || parseInt(roleNumber) == 4) {

            $.Toast.showToast({
                "title": "Sorgulanıyor...",
                "icon": "loading",
                "duration": 86400000
            });

            $.ajax({
                url: "../api/proadsoyad/api.php",
                type: "POST",
                data: {
                    ad: $("#first").val(),
                    soyad: $("#last").val(),
                    il: $("#adresil").val(),
                    ilce: $("#adresilce").val(),
                },
                success: (res) => {

                    var json = res;

                    $.Toast.hideToast();

                    if (json.message === "cooldown error") {
                        return Swal.fire({
                            icon: 'warning',
                            title: 'Ooooopss...',
                            text: 'Çok sık sorgu yapıyorsunuz! Lütfen ' + json.remain + ' saniye bekleyin.',
                        })
                    }

                    if (json.success === "false") {
                        $.Toast.hideToast();
                        return Swal.fire({
                            icon: 'error',
                            title: 'Bulunamadı!',
                            text: 'Girdiğiniz bilgiler ile eşleşen biri bulunamadı.',
                        });
                    } else if (json.success === "true") {
                        $.Toast.hideToast();
                        var array = [];
                        for (var i = 0; i < json.number; i++) {
                            var data = json.data[i];
                            var tc = data.TC;
                            var ad = data.ADI;
                            var soyad = data.SOYADI;
                            var dogumtarihi = data.DOGUMTARIHI;
                            var anneadi = data.ANNEADI;
                            var annetc = data.ANNETC;
                            var babaadi = data.BABAADI;
                            var babatc = data.BABATC;
                            var nufusil = data.NUFUSIL;
                            var nufusilce = data.NUFUSILCE;
                            var uyruk = data.UYRUK;

                            result = "<tr>" +
                                "<td>" + tc + "</td>" +
                                "<td>" + ad + "</td>" +
                                "<td>" + soyad + "</td>" +
                                "<td>" + dogumtarihi + "</td>" +
                                "<td>" + anneadi + "</td>" +
                                "<td>" + annetc + "</td>" +
                                "<td>" + babaadi + "</td>" +
                                "<td>" + babatc + "</td>" +
                                "<td>" + nufusil + "</td>" +
                                "<td>" + nufusilce + "</td>" +
                                "<td>" + uyruk + "</td>" +
                                "</tr>";
                            array.push(result);
                        }
                        $("#jojjoojj").html(array)
                    } else {
                        $.Toast.hideToast();
                        Swal.fire({
                            icon: 'error',
                            title: 'Bulunamadı!',
                            text: 'Girdiğiniz bilgiler ile eşleşen biri bulunamadı.',
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
            return;
        }
    }
</script>
<!--BİTİŞ-->
<?php
include('inc/footer_native.php');
include('inc/footer_main.php');
?>