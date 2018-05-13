<html>

<center>
  <body>
    <h1>Edit Program Kerja</h1>
    <form method='post' action=''>
      <table>
        <tr><td>Nomor Program    </td><td>: <input type='text' name='nomorProgram'   value=<?php echo $data['nomorProgram'] ?>></td></tr>
        <tr><td>Nama Program    </td><td>: <input type='text' name='namaProgram'   value=<?php echo $data['namaProgram'] ?>></td></tr>
        <tr><td>Surat Keterangan  </td><td>: <input type='text' name='suratKeterangan' value=<?php echo $data['suratKeterangan'] ?>></td></tr>
        <tr><td><input type='submit' name='Edit' value='Simpan'></td></tr>
      </table>
    </form>
    <table>
    </table>
  </body>
</html>
