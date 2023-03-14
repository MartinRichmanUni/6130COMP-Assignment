<!DOCTYPE html>
<html>
<head>
  <title>Runners Crisps UK</title>
</head>
<body>
  <h2>Welcome to Runners Crisps Competition!</h2>
  <form action="http://nginx-back:86/backend.php" method="post">
    <label for="hexcode">Please enter the 10 digit code found in your Runners Crisp packet</label><br>
    <input type="text" id="hexcode" name="hexcode"><br>
    <label for="fname">First Name</label><br>
    <input type="text" id="fname" name="fname"><br>
    <label for="email">E-mail</label><br>
    <input type="text" id="email" name="email"><br>
    <label for="address">Please enter your home address</label><br>
    <input type="text" id="address" name="address"><br>
    <label for="bestplayer">Who is the best player in the game? Enter their last name below</label><br>
    <input type="text" id="bestplayer" name="bestplayer"><br>
    <input type="submit" value="Submit Details">
  </form>
</body>
</html>
