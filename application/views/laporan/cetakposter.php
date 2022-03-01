<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title></title>
        <style>
        .centertabel {
            margin-left: auto;
            margin-right: auto;
        }
        </style>
        
    </head>
    <body">
        <div style="text-align:center">
            <h2>POLRESTA PADANG</h2>
            <h3>Sentra Pelayanan Kepolisian Terpadu</h3>
            <h3>SPKT</h3>
            <hr>
            <h2>DPO</h2>
            <h3>(Daftar Pencarian Orang)</h3>
            <hr>
            <!-- http://192.168.1.10:8000/images/1645002385profile.png -->
            <?php if(url_exists("http://54.175.111.193/images/".$laporan["dphoto"])){ ?>
                        <img src="http://54.175.111.193/images/<?= $laporan["dphoto"] ?>" class="img-thumbnail" height="350">
             <?php }else{ ?>
            <img src="<?php echo base_url() ?>assets/images/<?= $laporan["dphoto"] ?>" class="img-thumbnail" height="350">
            <?php }?>
   
            
            <!-- http://localhost/dpobe/ -->
            <!-- http://localhost/dpobe//file/164555763520220120_121021.jpg -->

            <!-- <img src="http://asset.kompas.com/crops/6BXN3gptG_3vm30oB384jf6OVVo=/0x0:540x540/340x340/data/photo/2019/09/06/5d71ed90dea84.jpg" height="350"> -->
           
        </div>
        <br> <br>
        <table class="centertabel">
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
        <br><br>
        <div style="text-align:center">
            <p>Jika menemukan keberadaan orang ini hubungi : <?= $laporan['nohp']; ?> </p>    
        </div> 
    </body>
</html>

<?php 

function url_exists($url) {
    $hdrs = @get_headers($url);

    // echo @$hdrs[1]."\n";

    return is_array($hdrs) ? preg_match('/^HTTP\\/\\d+\\.\\d+\\s+2\\d\\d\\s+.*$/',$hdrs[0]) : false;
}

?>