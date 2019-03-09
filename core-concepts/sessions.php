<?php 
  if(isset($_POST['submit'])){
    session_start();
    $_SESSION['name'] = $_POST['name'];
    $name = $_SESSION['name'];
    echo $_SESSION['name'];
    header('Location: sessions.php');
  }


  // now use this in header and then u can call $name in any page that is calling header
  // session_start();
  // $name = $_SESSION['name'];
  // 
  // unset session
  // unset($_SESSION['name']);

?>

<!DOCTYPE html>
<html>
<head>
  <title>php session</title>
</head>
<body>
  
  <?php echo htmlspecialchars($name); ?>
  <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
    <input type="text" name="name">
    <input type="submit" name="submit" value="submit">
  </form>

</body>
</html>