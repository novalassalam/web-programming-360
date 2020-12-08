<?php
// Include config file
require_once "config.php";


// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
   
    $input_name = trim($_POST["nama"]);  
    $input_mail = trim($_POST["email"]);
    $input_kota = trim($_POST["kota"]);
       
    // Check input errors before inserting in database
    if(!empty($input_name) && !empty($input_mail ) && !empty($input_kota)){
        // Prepare an insert statement
        $sql = $mysqli->query("INSERT INTO user (nama_user, email_user, id_kota) VALUES ('".$input_name."','".$input_mail."','".$input_kota."')");
           
            
            if($sql){
                header("location: index.php");
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }

       
    }
    

?>

<?php include "header.php";?>
<div class="badan">
    <div class="content" style="width: 100%">
        <p class="subjudul">Create</p>
        <p>Please fill this form and submit to add employee record to the database.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            Nama:<br>
            <input type="text" name="nama" >
            <br>
            Email:<br>
            <input type="email" name="email" >
            <br><br>
            <select name="kota">
                <?php 
                require_once "config.php";
                $sql = "SELECT * FROM kota";
                $result = $mysqli->query($sql);
                while($key = $result->fetch_object()){
                    ?>
                    <option value="<?php echo $key->id_kota?>" ><?php echo $key->nama_kota?></option>
                <?php   }     ?>
            </select>
            <br>
            <input type="submit" value="Submit">
        </form>
    </div>
</div>
<?php include "footer.php";?>
