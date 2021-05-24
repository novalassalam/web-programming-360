<table>
    <thead>
        <tr>
            <th>
                nama
            </th>
            <th>
                email
            </th>
            <th>aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($isi as $hasil) { ?>
            <tr>
                <td>
                    <?php echo $hasil->nama_user; ?>
                </td>
                <td> <?php echo $hasil->email_user; ?>
                </td>
                <td>
                    <a href="<?php echo base_url('Cek/hapus?id=' . $hasil->id_user); ?>">hapus</a>
                    <a href="<?php echo base_url('Cek/detail?id=' . $hasil->id_user); ?>">detail</a>
                    <a href="<?php echo base_url('Cek/edit?id=' . $hasil->id_user); ?>">edit</a>
                </td>
            </tr>
        <?php } ?>

    </tbody>

</table>