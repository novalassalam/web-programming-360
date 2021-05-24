<title><?php echo $judul; ?></title>
<table>
    <thead>
        <tr>
            <th>
                nama
            </th>
            <th>
                kota
            </th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($isi as $hasil) { ?>
            <tr>
                <td>
                    <?php echo $hasil->nama_user; ?>
                </td>
                <td> <?php echo $hasil->nama_kota; ?>
                </td>
            </tr>
        <?php } ?>

    </tbody>

</table>