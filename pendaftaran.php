<?php include("inc_header.php")?>
<?php 
if(isset($_SESSION['members_email']) != ''){ //sudah dalam keadaan login
    header("location:index.php");
    exit();
}
?>
<h3>Pendaftaran</h3>
<?php 
$nama_lengkap   = "";
$kelas            = "";
$nis            = "";
$gender         = "";
$alamat         = "";
$nomor        = "";

if(isset($_POST['simpan'])){
    $nama_lengkap           = $_POST['nama_lengkap'];
    $kelas               = $_POST['kelas'];
    $nis               = $_POST['nis'];
    $gender    = $_POST['gender'];
    $alamat   = $_POST['alamat'];
    $nomor    = $_POST['nomor'];

    if($nama_lengkap == '' or $kelas == '' or $nis =='' or $gender == '' or $alamat == '' or $nomor == ''){
        $err .= "<li>Silakan masukkan semua isian.</li>";
    }

}
?>
<?php if($err) {echo "<div class='error'><ul>$err</ul></div>";} ?>
<?php if($sukses) {echo "<div class='sukses'>$sukses</div>";} ?>

<form action="" method="POST">
    <table>
        <tr>
            <td class="label">Nama Lengkap</td>
            <td>
                <input type="text" name="nama_lengkap" class="input" value="<?php echo $nama_lengkap?>"/>
            </td>
        </tr>
        <tr>
            <td class="label">Kelas</td>
            <td>
                <input type="text" name="kelas" class="input" value="<?php echo $kelas?>"/>
            </td>
        </tr>
        <tr>
            <td class="label">NIS</td>
            <td>
                <input type="number" name="nis" class="input" value="<?php echo $nis?>" />
            </td>
        </tr>
        <select name="gender" class="input" value=""></select>
        <tr>
            <td></td>
            <td>
                <input type="submit" name="simpan" value="simpan" class="tbl-biru"/>
            </td>
        </tr>
    </table>
</form>

<?php include("inc_footer.php")?>
