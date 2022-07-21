<!DOCTYPE html>
<html>

<head>
    <title>DATA RENTAL</title>
    <style>
        body {
            background-image: url('lionair.webp');
            background-repeat: no-repeat;
            background-size: cover;
        }

        h2 {
            color: white;
        }
    </style>
</head>

<body>
    <b>
        <h2 align=center>Input Data Rental</h2>
    </b>
    <form method="POST" action="execinput.php">
        <table border="0" width=800 height=400 align=center>
            <tr>
                <td colspan="3" align="center" bgcolor="red">
                    <h3>Data Rental</h3>
                </td>
            </tr>
            <tr>
                <td width=230 bgcolor="aqua">Nik</td>
                <td>:</td>
                <td><input type="text" name="nik" size="40"></td>
            </tr>
            <tr>
                <td width=230 bgcolor="aqua">Nama</td>
                <td>:</td>
                <td><input type="text" name="nama" size="40"></td>
            </tr>
            <tr>
                <td bgcolor="aqua">Alamat</td>
                <td>:</td>
                <td><input type="text" name="alamat" size="40"></td>
            </tr>
            <tr>
            <td bgcolor="aqua">Jenis Mobil</td>
<td>:</td>
<td><select name="Jns_mbl">
<option>Innova</option>
<option>Avanza</option>
<option>Xenia</option>
<option>Mobilio</option>
</select></td>
            </tr>
            <tr>
                <td bgcolor="aqua">Harga Sewa</td>
                <td>:</td>
                <td><input type="text" name="hrg_sewa" size="40"></td>
            </tr>
            <tr>
                <td bgcolor="aqua">Pembayaran Awal</td>
                <td>:</td>
                <td><input type="text" name="p_awal" size="40"></td>
            </tr>
            <tr>
            <td bgcolor="aqua">Jumlah Hari</td>
                <td>:</td>
                <td><input type="text" name="jml_hari" size="40"></td>
    </tr>
            <tr bgcolor="aqua">
                <td colspan="3" align="right" bgcolor="aqua">
                <button onclick="location.href='view.php'" type="button">
         Lihat Data</button>
                    <button type="submit">Simpan</button>
    </form>
    </tr>
    </table>
</body>

</html>