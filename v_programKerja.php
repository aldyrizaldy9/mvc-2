<html>

<head>
</head>
  <body>
    <center>
    <br><br>
    <h2> Daftar Program Kerja BEM </h2>
    <table class="tabel">
      <th class="th" >Nomor</th>
      <th class="th">Nama Program Kerja</th>
      <th class="th">Surat Keterangan</th>
  <?php
    foreach($proker as $hasil)
      echo "  <tr>
            <td class='td'>$hasil[nomorProgram]</td>
            <td class='td'>$hasil[namaProgram]</td>
            <td class='td'>$hasil[suratKeterangan]</td>
          </tr>";
    echo "</table>";
  ?><br>
    <form method='get' action='index.php'>
      <input type='submit' name='Logout' value='Logout'>
    </form>
  </body>
</html>
