<?php
error_reporting(E_ALL);

$title = 'TAMBAH PESANAN';
include_once 'koneksi.php';

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $waktu = $_POST['waktu'];
    $banyak = $_POST['banyak'];
    $ket = $_POST['ket'];
    $sql = 'INSERT INTO tmakan (nama, waktu, banyak, ket,)';
    $sql .= "VALUE ('{$nama}', '{$waktu}', '{$banyak}', '{$ket}')";
    $result = mysqli_query($conn, $sql);

    header("location: tmakan.php");
}
include_once('header.php'); ?>
<div id="content">
  <div align="center">
   <h3>selamat datang di yeni bakery</h3>
   
  </div>
<fieldset>
   <legend>hallo</legend>
  
   </table>
  </fieldset>
 </div>

<?php include_once('sidebar.php'); ?>
