<?php 
session_start();
include_once("inc/inc_koneksi.php");
include_once("inc/inc_fungsi.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ekstrakurikuler PMR</title>
    <link rel="stylesheet" href="<?php echo url_dasar()?>/css/style.css">
</head>
<body>
    <nav>
        <div class="wrapper">
            <div class="logo"><a href='<?php echo url_dasar()?>'>PMR WIRA SKANSA</a></div>
            <div class="menu">
                <ul>
                    <li><a href="<?php echo url_dasar()?>#beranda">Beranda</a></li>
                    <li><a href="<?php echo url_dasar()?>#profil">Profil</a></li>
                    <li><a href="<?php echo url_dasar()?>#sejarah">Sejarah</a></li>
                    <li><a href="<?php echo url_dasar()?>#visimisi">Visi Misi</a></li>
                    <li><a href="<?php echo url_dasar()?>#kontak">Kontak</a></li>
                    <li>
                    <?php if(isset($_SESSION['members_nama_lengkap'])){
                        echo "<a href='".url_dasar()."/ganti_profile.php'>".$_SESSION['members_nama_lengkap']."</a> | <a href='".url_dasar()."/logout.php'>Logout</a>";
                    }else{?>
                        <a href="pendaftaran.php" class="tbl-biru">Sign Up</a>
                    <?php } ?>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="wrapper">