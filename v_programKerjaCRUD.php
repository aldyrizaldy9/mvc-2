<html>

<head>
</head>
  <body>
    <br>
    <br>
    <center>
    <h2> Daftar Program Kerja BEM </h2>
    <table class="tabel">
      <th class="th">Nomor</th>
      <th class="th">Nama Program Kerja</th>
      <th class="th">Surat Keterangan</th>
      <th class="th"></th>
<?php
    foreach($proker as $hasil)
      echo "  <tr>
            <td class='td'>$hasil[nomorProgram]</td>
            <td class='td'>$hasil[namaProgram]</td>
            <td class='td'>$hasil[suratKeterangan]</td>
            <td><a href=\"index.php?nomorProgram=$hasil[nomorProgram]&edit=edit\">Edit</a>
            <a href=\"index.php?nomorProgram=$hasil[nomorProgram]&delete=delete\">Delete</a></td>
          </tr>";
    echo "</table>";
  ?>
    <br><br>
    <form method='get' action='index.php'>
    <table width="200" border="0">
  <tr>
    <td>&nbsp;</td>
    <td><input type='submit' name='Logout' value='Logout'></td>
    <td>&nbsp;</td>
    <td><input type='submit' name='tambah' value='Tambah Program Kerja'></td>
    <td>&nbsp;</td>
  </tr>
</table></form>
  </body>
</html>