<?php
@session_start();
@setcookie("k_mail", "");
@setcookie("k_adi", "");
@setcookie("k_profil", "");
@setcookie(session_name(), '', 0, '/');
@session_unset();
@session_write_close();
@session_regenerate_id(true);
@session_destroy();
header('location: /login/');
