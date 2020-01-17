<?php
session_start();
?>
<html>
  <body>
   <h1>Change Password</h1>
   <form action="includes/changePwd.inc.php" method="post">
      <input type="text" name="uid" placeholder="username">
      <input type="text" name="maill" placeholder="email">
      <input type="password" name="oldPwd" placeholder="Old Password">
      <input type="password" name="newPwd" placeholder="new Password">
      <input type="password" name="rePwd" placeholder="repeat Password">
      <button type="submit" name="submit-change">Save Change</button>
   </form>
   <br>
   <a href="logout.php" >logout</a>
 </body>
</html>