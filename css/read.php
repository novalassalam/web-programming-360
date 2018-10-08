<?php
require_once "config.php";

    $id     = $_GET["id"];
    $sql    = "SELECT * FROM user WHERE id_user = $id";
    $result = $mysqli->query($sql);

    if ($result) {
        $row   = $result->fetch_array(MYSQLI_ASSOC);
        $nama  = $row["nama_user"];
        $email = $row["email_user"];
        $kota  = $row["id_kota"];
        $id    = $row["id_user"];

    }


?>
<?php include "header.php";?>
<div class="badan">
    <div class="content" style="width: 100%">
        <p class="subjudul">lihat data</p>
        <p>Please lihat  this form and submit to add employee record to the database.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            Nama:<br>
            <input type="text" name="name" value="<?php echo $nama; ?>">
            <br>
            Email:<br>
            <input type="email" name="mail" value="<?php echo $email; ?>">
            <input type="text" name="id" value="<?php echo $id; ?>" style="display: none;">
            <br>
            <br><br>
            kota
            <select name="kota">

                <?php
                require_once "config.php";
                $sql    = "SELECT * FROM kota";
                $result = $mysqli->query($sql);

                while ($key = $result->fetch_object()) {
                    $selected = ($key->id_kota == $kota) ? 'selected' : '';
                    ?>
                    <option value="<?php echo $key->id_kota ?>" <?php echo $selected; ?> ><?php echo $key->nama_kota ?></option>
                <?php }?>

            </select>
            <br>
            <!-- <input type="submit" value="Submit"> -->
        </form>
    </div>
</div>
<?php include "footer.php";?>
