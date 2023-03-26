<?php
include_once "../server/rolecontrol.php";
$customCSS = array(
    '<link href="../assets/plugins/DataTables/datatables.min.css" rel="stylesheet">',
    '<link rel="icon" href="/assets/images/siber.png" type="image/x-icon" />',
    '<link href="../assets/plugins/DataTables/style.css" rel="stylesheet">'
);
$customJAVA = array(
    '<script src="../assets/plugins/DataTables/datatables.min.js"></script>',
    '<script src="../assets/plugins/printer/main.js"></script>',
    '<script src="../assets/js/pages/datatables.js"></script>',
    '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.3.0/dist/sweetalert2.all.min.js"></script>'

);

$page_title = 'Kimlik Arşivi';
include 'enbuyukbenimaminakodumuncocuklari.php';
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
                    <h4 class="card-title mb-4">Kimlik Arşivi</h4>
                    <p class="mb-1">
                    <p>
                        Uygun bulduğunuz kimlik görselinin altındaki "Resimi İndir" butonuna tıklayarak indirebilirsiniz.</br>
                    </p>
                    </p>
                    <div class="block-content tab-content">
                        <div class="tab-pane active" id="tc" role="tabpanel">
                            
                           
                            <div class="table-responsive">
                                <div class="uzunluk">
                                <img src="admin/kimlikler/maskot (1).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/maskot (1).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/maskot (2).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/maskot (2).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/maskot (3).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/maskot (3).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/maskot (4).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/maskot (4).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/maskot (5).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/maskot (5).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/maskot (7).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/maskot (7).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/maskot (8).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/maskot (8).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/maskot (9).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/maskot (9).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/maskot (10).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/maskot (10).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/maskot (11).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/maskot (11).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/maskot (12).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/maskot (12).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/maskot (13).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/maskot (13).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/maskot (14).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/maskot (14).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/maskot (15).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/maskot (15).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/maskot (16).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/maskot (16).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/maskot (17).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/maskot (17).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/maskot (18).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/maskot (18).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/maskot (19).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/maskot (19).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/maskot (20).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/maskot (20).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/maskot (21).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/maskot (21).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/maskot (22).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/maskot (22).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/maskot (23).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/maskot (23).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/maskot (24).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/maskot (24).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/maskot (25).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/maskot (25).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/maskot (26).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/maskot (26).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/maskot (27).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/maskot (27).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/maskot (28).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/maskot (28).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/maskot (29).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/maskot (29).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/maskot (30).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/maskot (30).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/maskot (31).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/maskot (31).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/maskot (32).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/maskot (32).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/maskot (33).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/maskot (33).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/maskot (34).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/maskot (34).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/maskot (35).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/maskot (35).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/maskot (36).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/maskot (36).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/maskot (37).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/maskot (37).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/maskot (38).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/maskot (38).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/maskot (39).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/maskot (39).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/maskot (40).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/maskot (40).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/maskot (41).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/maskot (41).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/maskot (42).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/maskot (42).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/maskot (43).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/maskot (43).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/maskot (44).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/maskot (44).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/maskot (45).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/maskot (45).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/maskot (46).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/maskot (46).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/maskot (47).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/maskot (47).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/maskot (48).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/maskot (48).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/maskot (49).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/maskot (49).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/maskot (50).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/maskot (50).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/maskot (51).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/maskot (51).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/maskot (52).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/maskot (52).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/maskot (53).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/maskot (53).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/maskot (54).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/maskot (54).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/maskot (55).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/maskot (55).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/maskot (56).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/maskot (56).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/maskot (57).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/maskot (57).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/maskot (58).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/maskot (58).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/maskot (59).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/maskot (59).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/maskot (60).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/maskot (60).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/maskot (61).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/maskot (61).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/maskot (62).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/maskot (62).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/maskot (63).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/maskot (63).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/maskot (64).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/maskot (64).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/maskot (65).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/maskot (65).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/maskot (66).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/maskot (66).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/maskot (67).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/maskot (67).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/maskot (68).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/maskot (68).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/maskot (69).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/maskot (69).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/maskot (70).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/maskot (70).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/maskot (71).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/maskot (71).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/maskot (72).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/maskot (72).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/maskot (73).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/maskot (73).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/maskot (74).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/maskot (74).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/maskot (75).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/maskot (75).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/maskot (76).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/maskot (76).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/maskot (77).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/maskot (77).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/maskot (78).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/maskot (78).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/maskot (79).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/maskot (79).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/maskot (80).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/maskot (80).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/maskot (81).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/maskot (81).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/maskot (82).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/maskot (82).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/maskot (83).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/maskot (83).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/maskot (84).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/maskot (84).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/maskot (85).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/maskot (85).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/maskot (86).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/maskot (86).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/maskot (87).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/maskot (87).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/maskot (88).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/maskot (88).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/maskot (89).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/maskot (89).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/maskot (90).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/maskot (90).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/maskot (91).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/maskot (91).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/maskot (92).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/maskot (92).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/maskot (93).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/maskot (93).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/maskot (94).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/maskot (94).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/maskot (95).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/maskot (95).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/maskot (96).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/maskot (96).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/maskot (97).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/maskot (97).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/maskot (98).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/maskot (98).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/maskot (99).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/maskot (99).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/maskot (100).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/maskot (100).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/maskot (101).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/maskot (101).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/maskot (102).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/maskot (102).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/maskot (103).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/maskot (103).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/maskot (104).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/maskot (104).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/maskot (105).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/maskot (105).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/maskot (106).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/maskot (106).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/maskot (107).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/maskot (107).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/maskot (108).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/maskot (108).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/maskot (109).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/maskot (109).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/maskot (110).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/maskot (110).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/maskot (111).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/maskot (111).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/maskot (112).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/maskot (112).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/maskot (113).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/maskot (113).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/maskot (114).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/maskot (114).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/maskot (115).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/maskot (115).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/maskot (116).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/maskot (116).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/maskot (117).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/maskot (117).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/maskot (118).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/maskot (118).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/maskot (119).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/maskot (119).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/maskot (120).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/maskot (120).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/maskot (121).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/maskot (121).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/maskot (122).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/maskot (122).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/maskot (123).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/maskot (123).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/maskot (124).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/maskot (124).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/maskot (125).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/maskot (125).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/maskot (126).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/maskot (126).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/maskot (127).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/maskot (127).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/maskot (128).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/maskot (128).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/maskot (129).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/maskot (129).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/maskot (130).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/maskot (130).jpeg" download>Resimi İndir</a><br><br>
                                <img src="admin/kimlikler/maskot (131).jpeg"  style="border: 5px solid;" width="20%"><br><a href="admin/kimlikler/maskot (131).jpeg" download>Resimi İndir</a><br><br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<style>
    
.a {
    width: %20;
    font-family: impact;
    background-color: #fff;
    border-color: #fff;
    color: #fff;
    font-size:15px;
}


</style>
<style>
body {

}
</style>


    </div>
    <!--BİTİŞ-->
    <?php
    include('inc/footer_native.php');
    include('inc/footer_main.php');
    ?>
