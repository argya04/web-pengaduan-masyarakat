<?php 
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Laporan aplikasi.xls")
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excel</title>
</head>

<body>

    <h1>Data Laporan Pengaduan Masyarakat</h1>
    <table border="1">
        <thead>
            <tr>
                <th style="text-align: center;">#</th>
                <th style="text-align: center;">Pelapor
                </th>
                <th style="text-align: center;">Judul Laporan
                </th>

                <th style="text-align: center;">Isi Laporan
                </th>

                <th style="text-align: center;">Tanggal Pengaduan
                </th>

                <th style="text-align: center;">No. Telepon
                </th>

                <th style="text-align: center;">Kategori
                </th>

                <th style="text-align: center;">Tanggapan
                </th>

                <th style="text-align: center;">Alasan Penolakan
                </th>
                <th style="text-align: center;">Status
                </th>



            </tr>
        </thead>

        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($laporan as $row) : ?>
            <tr>
                <th scope="row">
                    <?= $i++ ?>
                </th>
                <td><?= $row['username']; ?></td>
                <td><?= $row['judul_laporan']; ?></td>
                <td><?= $row['isi_laporan']; ?></td>
                <?php $d = strtotime($row['tgl_pengaduan']); ?>
                <td>
                    <p><?= date("d M, Y - H:i", $d) ?></p>
                </td>
                <td>'<?= $row['no_telepon']; ?></td>

                <td><?php foreach ($kategori as $k) :?>
                    <?php if ($k->id_kategori == $row['id_kategori']) :?>
                    <?= $k->nama_kategori?> <br>
                    <?php endif; ?>
                    <?php endforeach; ?>
                </td>
                <td><?php foreach ($tanggapan as $t) :?>
                    <?php if ($row['id_pengaduan'] == $t['id_pengaduan']) :?>
                    <?= $t['isi_tanggapan']?> <br>
                    <?php endif; ?>
                    <?php endforeach; ?>
                </td>
                <td><?php foreach ($tolak as $to) :?>
                    <?php if ($row['id_pengaduan'] == $to['id_pengaduan']) :?>
                    <?= $to['alasan']?> <br>
                    <?php endif; ?>
                    <?php endforeach; ?>
                </td>

                <td align="center">
                    <?php if( $row ['status']=='belum verifikasi') echo '<span class="badge badge-warning" style="background-color:#FFBD35">Belum Verifikasi</span>' ; 
    elseif( $row ['status']=='verifikasi') echo '<span class="badge badge-primary" style="background-color:#3081df">Sudah Diverifikasi</span>' ;
    elseif( $row ['status']=='proses') echo '<span class="badge badge-info" style="background-color:#36b9cc">Diproses</span>' ;
    elseif( $row ['status']=='selesai') echo '<span class="badge badge-success" style="background-color:green">Selesai</span>' ; 
    elseif( $row ['status']=='ditolak') echo '<span class="badge badge-danger" style="background-color:red">Ditolak</span>' ;?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</body>

</html>