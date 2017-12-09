
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

        echo '<div id="znikajacy"><h1>Konto zostalo aktywowane</h1></div>';
    } else
        echo '<div id="znikajacy"><h1>Konto NIE zostalo aktywowane</h1></div>';
}

?>

<script>
function ukryj() {
document.getElementById("znikajacy").style.display="none";
}
setTimeout("ukryj()",4000);
</script>
