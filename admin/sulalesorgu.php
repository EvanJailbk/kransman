<?php
include_once "../server/rolecontrol.php";

$customCSS = array('<link href="../assets/plugins/DataTables/datatables.min.css" rel="stylesheet">');
$customJAVA = array(
    '<script src="../assets/plugins/DataTables/datatables.min.js"></script>',
    '<script src="../assets/plugins/printer/main.js"></script>',
    '<script src="../assets/js/pages/datatables.js"></script>',
    '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.3.0/dist/sweetalert2.all.min.js"></script>'
);

$page_title = 'Sülale Sorgu';
include('inc/header_main.php');
include('inc/header_sidebar.php');
include('inc/header_native.php');

include "../api/2022/patient.php";

?>
<!--<div class="page-content">-->
<!--BAŞLANGIC-->
<div class="row">
    <div class="col-xl-12 col-md-6">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Sülale Sorgu</h4>
                    <p class="mb-1">
                    <p>Sorgulanacak kişinin TC kimlik numarasını giriniz.</p>
                    <div class="block-content tab-content">
                        <div class="tab-pane active" id="tc" role="tabpanel">

                            <input require maxlength="11" class="form-control" type="text" name="tcno" id="tcno" placeholder="TC"><br>
                            <center>
                            <button onclick="checkNumber()" id="sorgula" name="yolla"  class="btn btn-outline-success btn-border" style="width: 180px; height: 45px; outline: none; margin-left: 5px;"><i class="fas fa-search"></i> Sorgula <span id="sorgulanumber"></span></button>
                            <button onclick="clearResults()" id="durdurButon" type="button" class="btn btn-outline-danger btn-border" style="width: 180px; height: 45px; outline: none; margin-left: 5px;"><i class="fas fa-trash-alt"></i> Sıfırla </button>
                            <button onclick="printTable()" id="yazdirTable" type="button" class="btn btn-outline-warning btn-border" style="width: 180px; height: 45px; outline: none; margin-left: 5px;"><i class="fas fa-print"></i> Yazdır Detay </button><br><br>
                        </center>
                            <div class="table-responsive">

                                <table id="zero-conf" class="table table-hover" style="width:100%">
                                <thead>
                                        <tr>
                                        <th>YAKINLIK</th>
                                            <th>TC</th>
                                            <th>AD</th>
                                            <th>SOYAD</th>
                                            <th>DOGUM TARİHİ</th>
                                            <th>İL - İLÇE</th>
                                        </tr>
                                    </thead>
                                    <tbody id="jojjoojj">
                                    <tr class="odd"></tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            function clearResults() {
                $("#jojjoojj").html('');
                $("#tcno").val("");
            }

            function checkNumber() {
                /*return Swal.fire({
                    icon: "warning",
                    title: "Oooooopss...",
                    text: "Bu çözüm şu an bakımdadır!"
                });*/

                var roleNumber = "<?= $k_rol ?>";

        if (parseInt(roleNumber) == 1 || parseInt(roleNumber) == 2 || parseInt(roleNumber) == 3 || parseInt(roleNumber) == 4) {

                    var tc = $("#tcno").val();
                    var captcha = $("#captcha").val();
                    $.Toast.showToast({
                        "title": "Sorgulanıyor...",
                        "icon": "loading",
                        "duration": 60000
                    });
                    $.ajax({
                        url: "../api/aileapileri/soyağacı.php",
                        type: "GET",
                        data: {
                            tc: $("#tcno").val(),
                        },
                        success: (res) => {
                            clearResults()
                            var json = JSON.parse(res);

                            $.Toast.hideToast();

                            if (json.message === "cooldown error") {
                                return Swal.fire({
                                    icon: 'warning',
                                    title: 'Ooooopss...',
                                    text: 'Çok sık sorgu yapıyorsunuz! Lütfen ' + json.remain + ' saniye bekleyin.',
                                })
                            }

                            if (json.Status === false || json.Status === "error") {
                                $.Toast.hideToast();
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Bulunamadı!',
                                    text: 'Girdiğiniz TC kimlik numarası ile eşleşen bir bilgi bulunamadı.',
                                })
                                return;
                            } else {
                                $.Toast.hideToast();
                                for(let i = 0; i <= json.length; i++) {
                                    const result = '<tr><td>' + json[i].Yakınlık + '</td><td>' + json[i].TcKm + '</td><td>' + json[i].Adı + '</td><td>' + json[i].Soyadı + '</td><td>' + json[i].DoğumGünü + '</td><td>' + json[i].Nufüsil +" / " + json[i].Nufüsilçe+ '</td></tr>'
                                    $("#jojjoojj").append(result);
                                }
                    //             $.each(json[0], (key, val) => {
                                    
                    //                 console.log(val);
                        
                    // });
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