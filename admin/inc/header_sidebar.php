<?php

ini_set("display_errors", 0);
error_reporting(0);

include "../server/security/encrypt.php";
include "../server/baglan.php";

$krolid = $_SESSION["id"];
$krolresult = $conn->query("SELECT * FROM ahmetkayakaya WHERE id='$krolid'");
if ($krolresult->num_rows < 1) {
    header("Location: /logout");
    exit;
}
$krolarray = mysqli_fetch_array($krolresult);
$k_rol = $krolarray["k_rol"];
$checkID = $krolarray["id"];

?>

<div class="page-container">
    <div class="page-sidebar">
        <ul class="list-unstyled accordion-menu">
            <li <?php if ($page_title == 'Panel') {
                    echo 'class="active-page"';
                } ?>>
                <a href="/panel"><i data-feather="home"></i>Ana Sayfa</a>
            </li>
            </li>
            <li <?php
                if (
                    $page_title === "Ad Soyad PRO" ||
                    $page_title === "TC Sorgu" ||
                    $page_title === "Adres Sorgu" ||
                    $page_title === "Aile Sorgu" ||
                    $page_title === "Soy Ağacı Sorgu" ||
                    $page_title === "Sülale Sorgu"
                ) {
                    echo 'class="open"';
                }
                ?>>
                <a <?php
                    if (
                        $page_title === "Ad Soyad PRO" ||
                        $page_title === "TC Sorgu" ||
                        $page_title === "Adres Sorgu" ||
                        $page_title === "Aile Sorgu" ||
                        $page_title === "Soy Ağacı Sorgu" ||
                        $page_title === "Sülale Sorgu"
                    ) {
                        echo 'style="color: white;"';
                    }
                    ?> href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>Sorgular<i class="fas fa-chevron-right dropdown-icon"></i></a>
                <ul>
                    <li><a <?php if ($page_title === "Ad Soyad PRO") echo 'style="color: #83d8ae !important;"' ?> href="/adsoyadpro"><i class="fa fa-address-card"></i>Ad Soyad PRO</a></li>
                    <li><a <?php if ($page_title === "TC Sorgu") echo 'style="color: #83d8ae !important;"' ?> href="/tcsorgu"><i class="fa fa-user"></i>TC Sorgu</a></li>
                    <li><a <?php if ($page_title === "Adres Sorgu") echo 'style="color: #83d8ae !important;"' ?> href="/adressorgu"><i class="fa fa-star"></i>Adres Sorgu</a></li>
                    <li><a <?php if ($page_title === "Aile Sorgu") echo 'style="color: #83d8ae !important;"' ?> href="/ailesorgu"><i class="fa fa-users"></i>Aile Sorgu</a></li>
                    <li><a <?php if ($page_title === "Soy Ağacı Sorgu") echo 'style="color: #83d8ae !important;"' ?> href="/soyagacisorgu"><i class="fa fa-users"></i>Soy Ağacı Sorgu</a></li>
                    <li><a <?php if ($page_title === "Sülale Sorgu") echo 'style="color: #83d8ae !important;"' ?> href="/sulalesorgu"><i class="fa fa-users"></i>Sülale Sorgu</a></li>
                </ul>
   

            <!--!hewal-->



            <!-- Üniversite Sorgu -->


            <li <?php
                if (
                    $page_title === "TC'den GSM" || 
                    $page_title === "GSM'den TC"
                ) {
                    echo 'class="open"';
                }
                ?>>
                <a <?php
                    if (
                        $page_title === "TC'den GSM" || 
                        $page_title === "GSM'den TC"
                    ) {
                        echo 'style="color: white;"';
                    }
                    ?> href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-feather="phone-call"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>Telefon<i class="fas fa-chevron-right dropdown-icon"></i></a>
                <ul>
                <li><a <?php if ($page_title === "TC'den GSM") echo 'style="color: #83d8ae !important;"' ?> href="/tcdengsm"><i class="fa fa-phone"></i>TC'den GSM</a></li>
                <li><a <?php if ($page_title === "GSM'den TC") echo 'style="color: #83d8ae !important;"' ?> href="/gsmdentc"><i class="fa fa-phone"></i>GSM'den TC</a></li>
                </ul>
            </li>



            <li <?php
                if (
                    $page_title === "Vesika A.O.L" ||
                    $page_title === "Vesika -18" ||
                    $page_title === "Vesika +18"
                ) {
                    echo 'class="open"';
                }
                ?>>
                <a <?php
                    if (
                        $page_title === "Vesika A.O.L" ||
                        $page_title === "Vesika -18" ||
                        $page_title === "Vesika +18"
                    ) {
                        echo 'style="color: white;"';
                    }
                    ?> href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-feather="camera"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>Vesika<i class="fas fa-chevron-right dropdown-icon"></i></a>
                <ul>
                <li><a <?php if ($page_title === "Vesika A.O.L") echo 'style="color: #83d8ae !important;"' ?> href="/vesikalik3"><i class="fa fa-camera"></i>Vesika A.O.L </a></li>
                <li><a <?php if ($page_title === "Vesika -18") echo 'style="color: #83d8ae !important;"' ?> href="/vesikalik2"><i class="fa fa-camera"></i>Vesika -18 </a></li>
                <li><a <?php if ($page_title === "Vesika +18") echo 'style="color: #83d8ae !important;"' ?> href="/vesikalik"><i class="fa fa-camera"></i>Vesika +18</a></li>
                </ul>
            </li>

<!-- MERNİS -->

<li <?php
                if (
                    $page_title === "Mahalle Sorgu" ||
                    $page_title === "Cadde Sorgu" ||
                    $page_title === "Kapı No Sorgu" ||
                    $page_title === "Daire No Sorgu" ||
                    $page_title === "2015 Sorgu"

                ) {
                    echo 'class="open"';
                }
                ?>>

<a <?php
                    if (
                        $page_title === "Mahalle Sorgu" ||
                        $page_title === "Cadde Sorgu" ||
                        $page_title === "Kapı No Sorgu" ||
                        $page_title === "Daire No Sorgu" ||
                        $page_title === "2015 Sorgu"
                    ) {
                        echo 'style="color: white;"';
                    }
                    ?> href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"  data-feather="users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>Mernis 2015<i class="fas fa-chevron-right dropdown-icon"></i></a>
                <ul>
                    <li><a <?php if ($page_title === "Mahalle Sorgu") echo 'style="color: #83d8ae !important;"' ?> href="/mahallesorgu"><i class="fas fa-user"></i>Mahalle Sorgu</a></li>
                    <li><a <?php if ($page_title === "Cadde Sorgu") echo 'style="color: #83d8ae !important;"' ?> href="/caddesorgu"><i class="fas fa-user"></i>Cadde Sorgu</a></li>
                    <li><a <?php if ($page_title === "Kapı No Sorgu") echo 'style="color: #83d8ae !important;"' ?> href="/kapinosorgu"><i class="fas fa-user"></i>Kapı No Sorgu</a></li>
                    <li><a <?php if ($page_title === "Daire No Sorgu") echo 'style="color: #83d8ae !important;"' ?> href="/dairenosorgu"><i class="fas fa-user"></i>Daire No Sorgu</a></li>
                    <li><a <?php if ($page_title === "2015 Sorgu") echo 'style="color: #83d8ae !important;"' ?> href="/2015sorgu"><i class="fas fa-user"></i>2015 Sorgu</a></li>
                </ul>
            </li>

<!-- MERNİS -->

            <!-- DİĞER ARAÇLAR -->

<li <?php
                if (
                    $page_title === "IP Sorgu" ||
                    $page_title === "Discord ID Sorgu" ||
                    $page_title === "Kimlik Creator" ||
                    $page_title === "Kimlik Arşivi"

                ) {
                    echo 'class="open"';
                }
                ?>>

<a <?php
                    if (
                        $page_title === "IP Sorgu" ||
                        $page_title === "Discord ID Sorgu" ||
                        $page_title === "Kimlik Creator" ||
                        $page_title === "Kimlik Arşivi"
                    ) {
                        echo 'style="color: white;"';
                    }
                    ?> href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"  data-feather="users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>Diğer Araçlar<i class="fas fa-chevron-right dropdown-icon"></i></a>
                <ul>
                    <li><a <?php if ($page_title === "IP Sorgu") echo 'style="color: #83d8ae !important;"' ?> href="/ipsorgu"><i class="fas fa-wifi"></i>IP Sorgu</a></li>
                    <li><a <?php if ($page_title === "Discord ID Sorgu") echo 'style="color: #83d8ae !important;"' ?> href="/discordidsorgu"><i class="fas fa-user"></i>Discord ID Sorgu</a></li>
                    <li><a <?php if ($page_title === "Kimlik Creator") echo 'style="color: #83d8ae !important;"' ?> href="/kimlikcreator"><i class="fas fa-id-card"></i>Kimlik Creator</a></li>
                    <li><a <?php if ($page_title === "Kimlik Arşivi") echo 'style="color: #83d8ae !important;"' ?> href="/kimlikarsivi"><i class="fas fa-id-card"></i>Kimlik Arşivi</a></li>
                </ul>
            </li>

<!-- DİĞER ARAÇLAR -->

            
            <?php if ($k_rol === "1") { ?>
                <li <?php
                    if ($page_title === "Duyurular" || 
                    $page_title === "Kullanıcılar" ||
                    $page_title === "Kullanıcı Ekle") {
                        echo 'class="open"';
                    }    //activity
                    ?>>
                    <a <?php
                        if ($page_title === "Duyurular" ||
                        $page_title === "Kullanıcılar" ||
                        $page_title === "Kullanıcı Ekle") {
                            echo 'style="color: white;"';
                        }
                        ?> href="/users"><i data-feather="lock"></i>Admin<i class="fas fa-chevron-right dropdown-icon"></i></a>
                    <ul>
                        <li>
                            <a <?php
                                if ($page_title === "Duyurular" || 
                                $page_title === "Duyurular") {
                                    echo 'style="color: #83d8ae !important;"';
                                }
                                ?> href="/notice" class="active"><i class="fa fa-bullhorn"></i>Duyurular</a>
                        </li>

                        <li>
                            <a <?php
                                if ($page_title === "Kullanıcılar" ||
                                $page_title === "Kullanıcılar") {
                                    echo 'style="color: #83d8ae !important;"';
                                }
                                ?> href="/users" class="active"><i class="fa fa-users"></i>Kullanıcılar</a>
                        </li>

                        <li>
                            <a <?php
                                if ($page_title === "Kullanıcı Ekle") {
                                    echo 'style="color: #83d8ae !important;"';
                                }
                                ?> href="/adduser" class="active"><i class="fa fa-user"></i>Kullanıcı Ekle</a>
                        </li>

                    </ul>
                </li>
            <?php } ?>
        </ul>
    </div>