<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $relation = $_POST['relation'];
        if (empty($relation)) {
                echo "Relation is empty";
                echo '<br>';
        }
}
?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $passphrase = $_POST['pass'];
        if (empty($passphrase)) {
                echo "Passphrase is empty";
                echo '<br>';
        }
}
?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $relation = $_POST['relation'];
        $passphrase = $_POST['pass'];
        if ($relation == "family" && $passphrase == "guidrycharles") {
                include_once ("home.php");
                exit();
        } else {
                echo "Access Denied";
        }
}
?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
Relation
</br>
<input type="text" name="relation">
</br>
Passphrase
</br>
<input type="text" name="pass">
</br>
<input type="submit">
</form>