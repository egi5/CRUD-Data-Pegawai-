<table class = "tabel tabel-sm tabel-striped" id= "datapegawai">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>ID Pegawai</th>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Tanggal Lahir</th>
                            <th>Alamat</th>
                            <th>Nomor Telepon</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php $nomor=0; foreach($tampildata as $row):
                            $nomor++;?>
                        <tr>
                            <td><?= $nomor ?></td>
                            <td><?= $row['idpegawai'] ?></td>
                            <td><?= $row['nama_pegawai'] ?></td>
                            <td><?= $row['jenkel'] ?></td>
                            <td><?= $row['tanggal_lahir'] ?></td>
                            <td><?= $row['alamat_pegawai'] ?></td>
                            <td><?= $row['telepon'] ?></td>
                            <td></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>