<html> 
    <head> 
        <title>Form Input data siswa</title> 
    </head> 
    <body> <center> 
    <form action="<?= base_url('form_inputan/cetak'); ?>" method="post">
        <table> <tr> <th colspan="3"> Form Input Data Siswa

        </th> 
    </tr> 
    <tr> 
        <td colspan="3">
            <hr>
</td> 
</tr> 
<tr> 
    <th>Nama</th> 
    <th>:</th> 
    <td> 
        <input type="text" name="nama" id="nama"> 
    </td>
 </tr> <tr> 
        <th>NIS</th> 
        <td>:</td> <td> 
            <input type="text" name="nis" id="nis"> 
        </td> </tr> <tr> 
        <th>Kelas</th> 
        <td>:</td> <td> 
            <input type="text" name="kelas" id="kelas"> 
            </td> </tr> <tr>
            <th>Tempat & tanggal lahir</th> 
        <td>:</td> <td> 
            <input type="text" name="ttl" id="ttl">
            </td> </tr> <tr>
            <th>Alamat</th> 
        <td>:</td> <td> 
            <input type="text" name="alamat" id="alamat">
            </td> </tr> <tr>
            <th>Jenis Kelamin</th> 
        <td>:</td> <td> 
        <label><input type="radio" name="jenis_kelamin" value="L">L</label>
        <label><input type="radio" name="jenis_kelamin" value="P">P</label>
        </td> </tr> <tr>
        <th>Agama</th>
             <td>:</td> <td>
                  <select name="agama" id="agama">
                       <option value="">Pilih agama</option> 
                       <option value="Islam">Islam</option> 
                       <option value="Kristen">Kristen</option> 
                       <option value="Hindu">Hindu</option>
                       <option value="Buddha">Buddha</option>
                       <option value="Konghucu">Konghucu</option> </select> 
                    </td> </tr> <tr> <td colspan="3" align="center"> 
                        <input type="submit" value="Submit"> </td> 
                    </tr> 
                </table> 
            </form> 
                </center> 
            </body>
             </html>