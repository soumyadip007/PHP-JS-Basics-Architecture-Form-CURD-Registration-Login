<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "cat";
echo "Session variables are set.<br>";
echo $_SESSION['favcolor']."<br>";
 
echo $_SESSION['favanimal']."<br>";
  //header('Location: 13-session-II.php');
 // exit();
// echo "<script>location.href='hello.php';</script>";
?>

</body>
</html>