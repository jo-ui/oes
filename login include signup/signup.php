
   <html>
      <div class="wrapper-main">
	     <section class="section-default">
		    <h1>signup</h1>
			<form class="form-signup" action="includes/signup.inc.php" method="post">
			   <input type="text" name="uid" placeholder="Username">
			   <input type="text" name="mail" placeholder="E-mail">
			   <input type="password"name="pwd" placeholder="Password">
			   <input type="password"name="pwd-repeat" placeholder="PasswordRepeat">
			   <select name="gender">
		          <option value="Male">Male</option>
			      <option value="Female">Female</option>
			   </select><br>
			   <label>Admin<input name="userType" type="radio"  value="admin"></label>
			   <br>
			   <label>Candidate<input name="userType" type="radio"  value="candidate"></label>
			   <br>
			   <label>voter<input name="userType" type="radio" value="voter"></label>
			   <br>
			   <button type="submit" name="signup-submit">Signup</button>
			</form>
			<a href="loginAdmin.php">Back</a>
		 </section>
	  </div>
   </html>
   