<script>
    document.addEventListener('contextmenu', event => event.preventDefault());
    çok zekisin f12 basıp farklı bir siteden giriyorsun
    document.onkeydown = function (e) {
 
        if(e.keyCode == 123) {
            return false;
        }
 
        if(e.ctrlKey && e.shiftKey && e.keyCode == 73){
            return false;
        }
 
        if(e.ctrlKey && e.shiftKey && e.keyCode == 74) {
            return false;
        }
 
        if(e.ctrlKey && e.keyCode == 85) {
            return false;
        }
    }
 
</script>
<?php

$customJAVA = array(
    '<script src="https://google.com/recaptcha/api.js"></script>',
);
error_reporting(0);
session_start();

if ($_SESSION['id']) {
    header("location: /panel");
}
$page_title = 'Giriş Yap';
?>

    <style>
            body{
                margin: 0;
                padding: 0;
            }

            .overlay{
                position: fixed;
                width: 100%;
                height: 100%;
                overflow: hidden;
                top: 0;
                left: 0;
                z-index: -100;
            }


        .card {
            box-shadow: 20px 20px 50px rgba(0, 0, 0, 0.5);
            border-radius: 15px;
            background: rgba(255, 255, 255, 0.1);
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
            border-top: 1px solid rgba(255, 255, 255, 0.5);
            border-left: 1px solid rgba(255, 255, 255, 0.5);
            backdrop-filter: blur(5px);
        }

        .MatrixLogo {
            margin-right: 0;
            width: auto;
            height: 70px;
            margin: 25px auto;
            display: block;
            text-align: center;
            font-size: 20px;
            font-weight: 500;
        }

        #key:focus {
            background-color: red;
        }
    </style>
</head>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="KRANSMAN EKİP">
    <!-- <meta content="https://media.discordapp.net/attachments/1059460066991947877/1061439374748811375/image.png" property="og:image" /> -->
    <meta name="keywords" content="worlwide,automation">
    <meta name="author" content="KRANSMAN">

    <title><?php echo $page_title ?> - KRANSMAN</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/plugins/font-awesome/css/all.min.css" rel="stylesheet">
    <link href="../assets/plugins/perfectscroll/perfect-scrollbar.css" rel="stylesheet">
    <link href="../assets/plugins/pace/pace.css" rel="stylesheet">
    <link rel="shortcur icon" href="../assets/images/siber.png">


    <link href="../assets/css/main.min.css" rel="stylesheet">
    <link href="../assets/css/custom.css" rel="stylesheet">
</head>

<body class="login-page">
    <!--BAŞLANGIC-->
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-12 col-lg-4">
                <div class="card login-box-container">
                    <div class="card-body">
                
                        <div style="margin-top: 30px;" class="authent-text">
                        <p>KRANSMAN Check'e Hoş geldiniz!</p>
                            <p>Lütfen hesabınıza giriş yapınız!</p>
                        </div>
                        <?php if (htmlspecialchars($_GET["alert"]) == 'wrong') { ?>
                            <div class="alert alert-danger" role="alert">
                                Yanlış anahtar girdiniz!
                            </div>
                        <?php } else if (htmlspecialchars($_GET["alert"]) == 'blocked') { ?>
                            <div class="alert alert-danger" role="alert">
                                Girdiğiniz anahtar yasaklanmıştır!
                            </div>
                        <?php } else if (htmlspecialchars($_GET["alert"]) == 'error') { ?>
                            <div class="alert alert-danger" role="alert">
                                Giriş hatası! Lütfen yönetici ile iletişime geçiniz.
                            </div>
                        <?php } else if (htmlspecialchars($_GET["alert"]) == 'captchaerr') { ?>
                            <div class="alert alert-danger" role="alert">
                                Captcha hatalı girildi!
                            </div>
                        <?php } else if (htmlspecialchars($_GET["alert"]) == 'banned') { ?>
                            <div class="alert alert-danger" role="alert">
                                Hesabınıza başka bir yer veya tarayıcıdan girildiği için anahtarınız yasaklanmıştır!
                            </div>
                        <?php } ?>
                        <form action="../server/kontrol.php" method="POST">
                            <div class="mb-3">
                                <div class="form-floating">
                                    <input name="k_key" type="password" class="form-control" id="floatingPassword" placeholder="Anahtar">
                                    <label for="floatingPassword">Anahtar</label>
                                </div>
                            </div>
                            <div class="mb-3 form-check">
                                <input name="rememberMe" type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Beni Hatırla</label>
                            </div>
                            <center style="margin-bottom: 10px;">
                                <div class="g-recaptcha" data-sitekey="6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI"></div>
                            </center>
                            <div class="d-grid">
                                <button name="loginForm" type="submit" class="btn btn-success m-b-xs">Giriş Yap</button>
                            </div>
                        </form>
                        <br>
                        <center style="margin-top: -20; display: flex; flex-direction: row; justify-content: center; align-items: center;">
                        <div class="d-grid" style="width: 350px; height: 35px;">
                                <button onclick="window.open('https://discord.gg/dz6xGs2zzb');" class="btn btn-primary">Discord</button>
                            </div>
                        <br>
                       
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--BİTİŞ-->
    <?php include('inc/footer_main.php'); ?>
    