<?php include("inc_header.php")?>
<?php 
$judul = "";
$isi = "";
$kutipan = "";
$error = "";
$sukses = "";

if (isset($_POST['simpan'])) {
    $judul = $_POST['judul'];
    $isi = $_POST['isi'];
    $kutipan = $_POST['kutipan'];

    if ($judul == '' or $isi == '') {
        $error = "silahkan masukan semua data";
    }
   
    if (empty($error)) {
        $sql1 = "insert into halaman(judul,kutipan,isi) values ('$judul','$kutipan','$isi')";
        $q1 = mysqli_query($koneksi,$sql1);
        if ($q1){
            $sukses = "Berhasil memasukkan data";
         } else {
            $error = "Gagal memasukkan data"; 
        }
    }
}


?>
<h1>Halaman Admin input data</h1>
<div class="mb-3 row">
    <a href="halaman.php">Kembali ke Halaman Admin</a>
</div>
<?php
if ($error)
{
    ?>
    
    <div class="alert alert-danger" role="alert">
  <?php echo $error ?>
</div>
<?php
}
?>
<?php
if ($sukses)
{
    ?>
    
    <div class="alert alert-primary" role="alert">
  <?php echo $sukses ?>
</div>
<?php
}
?>
<form action="" method="post">
<div class="mb-3 row">
    <label for="judul" class="col-sm-2 col-form-label">Judul</label>
    <div class="col-sm-10">
    <label for="judul" class="visually-hidden">Judul</label>
    <input type="text" class="form-control" id="judul" value="<?php echo $judul ?>" name="judul">
  </div>
  </div>
<div class="mb-3 row">
    <label for="kutipan" class="col-sm-2 col-form-label">kutipan</label>
    <div class="col-sm-10">
    <label for="kutipan" class="visually-hidden">Kutipan</label>
    <input type="text" class="form-control" id="kutipan" value="<?php echo $kutipan ?>" name="kutipan">
  </div>
  </div>
<div class="mb-3 row">
    <label for="isi" class="col-sm-2 col-form-label">Isi</label>
    <div class="col-sm-10">
    <label for="isi" class="visually-hidden">Isi</label>
  <textarea name="isi" class="form-control" id="summernote"><?php echo $isi ?></textarea>
  </div>
  </div>
  <div class="mb-3 row">
    <div class="col-sm-10">
    <div class="col-sm-2">
   <input type="submit" name="simpan" value="Simpan Data" class="btn btn-primary">
  </div>
  </div>

  
</form>
</form>
<?php include("inc_footer.php")?>
