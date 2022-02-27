<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title></title>
        
    </head>
    <body style="margin-top: 50px; margin-left: 70px;">
        <div style="text-align:center">
            <h3><u>Surat Keterangan Orang Hilang</u></h3>
        </div>
        <p>Hari ini <b> <?= date("d/m/Y"); ?> </b>, telah datang ke Sentra Pelayanan Kepolisia Terpadu Polresta Padang </p>
        
        <table>
            <tbody>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><?= $laporan['nama']; ?></td>
                </tr>
                <tr>
                    <td>Tempat / Tanggal Lahir</td>
                    <td>:</td>
                    <td><?= $laporan['ttl']; ?></td>
                </tr>
                <tr>
                    <td>Agama</td>
                    <td>:</td>
                    <td><?= $laporan['agama']; ?></td>
                </tr>
                <tr>
                    <td>Kewarganegaraan</td>
                    <td>:</td>
                    <td><?= $laporan['kewarganegaraan']; ?></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><?= $laporan['alamat']; ?></td>
                </tr>
            </tbody>
        </table>

        <p>Melaporkan bahwa telah kehilangan keluarga dengan ciri – ciri sebagai berikut :</p>
        <table>
            <tbody>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><?= $laporan['dnama']; ?></td>
                </tr>
                <tr>
                    <td>Tempat / Tanggal Lahir</td>
                    <td>:</td>
                    <td><?= $laporan['dttl']; ?></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td><?= $laporan['djekel']; ?></td>
                </tr>
                <tr>
                    <td><i>Ciri - Ciri</i></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>  Tinggi Badan</td>
                    <td>:</td>
                    <td><?= $laporan['dtb']; ?> cm</td>
                </tr>
                <tr>
                    <td>  Rambut</td>
                    <td>:</td>
                    <td><?= $laporan['drambut']; ?></td>
                </tr>
                <tr>
                    <td>  Kulit</td>
                    <td>:</td>
                    <td><?= $laporan['dkulit']; ?></td>
                </tr>
                <tr>
                    <td>  Mata</td>
                    <td>:</td>
                    <td><?= $laporan['dmata']; ?></td>
                </tr>
                <tr>
                    <td>  Ciri Khusus</td>
                    <td>:</td>
                    <td><?= $laporan['dcirik']; ?></td>
                </tr>
            </tbody>
        </table>

        <p>Info terakhir dari nama diatas yakni <i> <?= $laporan['dinfot']; ?> </i></p>
        <p>Dengan segala hormat / kerendahan hati memohon bantuan bapak/ibu/saudara/I yang melihat serta menemukan untuk menghubungi </p>
        <table>
            <tbody>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><?= $laporan['nama']; ?></td>
                </tr>
                <tr>
                    <td>No. Kontak</td>
                    <td>:</td>
                    <td><?= $laporan['nohp']; ?></td>
                </tr>
            </tbody>
        </table>
        <br><br>

        <p>Demikianlah surat tanda bukti laporan ini dibuat dengan sebenarnya</p>
        <table>
            <tbody>
                <tr>
                    <td width="300px"></td>
                    <td width="300px">Padang, tanggal </td>
                </tr>
                <tr>
                    <td>Yang Melapor</td>
                    <td>An Kepala Kepolisian Kota Padang</td>
                </tr>
                <tr>
                    <td height="70"></td>
                    <td height="70"></td>
                </tr>
                <tr>
                    <td><?= $laporan['nama']; ?></td>
                    <td>Nama kanan</td>
                </tr>
            </tbody>
        </table>        
    </body>
</html>