<html><head></head><body>
<?php
$key = $_GET['key'];
if ($_GET['key'])
{	$conn = new mysqli('localhost', 'root', '', 'aukcjoner');
    $query = "SELECT * FROM users WHERE `klucz`='$key' LIMIT 1";
    $result = mysqli_query($conn,$query);


    if (mysqli_num_rows($result))
    {
        $query = "UPDATE users SET `zablokowany`= 'false' WHERE `klucz`='$key'";
        $result = mysqli_query($conn,$query);

        echo '<div class="zolty">Konto zostało aktywowane. Mozesz sie juz zalogowac</div>';
    } else
        echo '<div class="czerwony">Konto nie zostalo aktywowane </div>';
}

?>
</body></html>
