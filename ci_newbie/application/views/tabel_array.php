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
        <?php foreach ($isi as $hasil) { ?>
            <tr>
                <td>
                    <?php echo $hasil['nama_user']; ?>
                </td>
                <td> <?php echo $hasil['email_user']; ?>
                </td>
            </tr>
        <?php } ?>

    </tbody>

</table>