<title><?php echo $judul; ?></title>
<table>
    <thead>
        <tr>
            <th>
                nama
            </th>
            <th>
                email
            </th>
        </tr>
    </thead>
    <tbody>
        <?php if ($isi) { ?>
            <tr>
                <td>

                    <?php
                    echo $isi->nama_user;
                    ?>
                </td>
                <td> <?php echo $isi->email_user; ?>
                </td>
            </tr>
        <?php } else {
            echo 'data tidak ditemukan';
        } ?>
    </tbody>

</table>