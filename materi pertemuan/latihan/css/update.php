<?php
require_once "config.php";
$email = $kota = $id = $nama = '';

if (isset($_POST["id"])) {
    if (!empty($_POST["name"]) && !empty($_POST["mail"]) && !empty($_POST["kota"])) {
        $input_name = $_POST["name"];
        $input_mail = $_POST["mail"];
        $input_kota = $_POST["kota"];

        $id    = $_POST["id"];
        $q= "UPDATE user SET nama_user = '".$input_name."', email_user = '".$input_mail."', id_kota = $input_kota WHERE id_user = $id";
        $sql = $mysqli->query($q);
        
        if ($sql) {
            header('Location: http://localhost/github/PW_phb/css/index.php');
           

        /* close connection */
        
        } else {
            // echo "Something went wrong. Please try again later.";
           printf("Errormessage: %s\n", $mysqli->error);
        }

    }

} else {

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
}

?>
<?php include "header.php";?>
<div class="badan">
    <div class="content" style="width: 100%">
        <p class="subjudul">Update</p>
        <p>Please update this form and submit to add employee record to the database.</p>
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
            <input type="submit" value="Submit">
        </form>
    </div>
</div>
<?php include "footer.php";?>
