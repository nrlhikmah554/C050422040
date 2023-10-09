<!DOCTYPE html>
<html>
 <head>
  <title>Biodata</title>
 </head>

 <body>
   <?php
   $nim=$_POST['NIM'];
   $Nama=$_POST['Nama'];
   $jurusan=$_POST['jurusan'];
   $Tempat=$_POST['Tempat'];
   $Tgl=$_POST['Tgl'];
   $Bln=$_POST['Bln'];
   $Thn=$_POST['Thn'];
   $JK=$_POST['JK'];
   $alamat=$_POST['alamat'];
   $tentang=$_POST['tentang'];
   ?>
   <table border="1" cellpadding="5" cellspacing="0">
   <tr>
      <td>NIM</td>
      <td> <?php echo $nim ?> </td>
   </tr>
   <tr>
      <td>Nama Lengkap</td>
      <td> <?php echo $Nama ?> </td>
   </tr>
   <tr>
      <td>Jurusan</td>
      <td> <?php echo $jurusan ?> </td>
   </tr>
   <tr>
      <td>TTL</td>
      <td> <?php echo $Tempat ?>,<?php echo $Tgl ?>/<?php echo $Bln ?>/<?php echo $Thn ?> </td>
   </tr>
   <tr>
      <td>Jenis Kelamin</td>
      <td> <?php echo $JK ?> </td>
   </tr>
   <tr>
      <td>Alamat</td>
      <td> <?php echo $alamat ?> </td>
   </tr>
   <tr>
      <td>Tentang Anda</td>
      <td> <?php echo $tentang ?> </td>
   </tr>
 </table>
 </body>
</html>
