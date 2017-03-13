<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Response from Basic Form</title>
  </head>
  <body>
    <?php echo "The server have process the follow information:"; ?>
    <span>Mail:</span>
    <?php echo $_POST["mail"]; ?><br><span>Password:</span>
    <?php echo $_POST["pass"]; ?><br><span>Gender:</span>
    <?php echo $_POST["gender"]; ?><br><span>Age:</span>
    <?php echo $_POST["age"]; ?><br><span>Your favorite FF</span>
    <?php echo $_POST["game"]; ?><br><span>Your opinion</span>
    <?php echo $_POST["about"]; ?><br>
  </body>
</html>
