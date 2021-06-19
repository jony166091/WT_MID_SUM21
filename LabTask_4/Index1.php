<?php
	$name="";
	$err_name="";
	$uname="";
	$err_uname="";
	$pass="";
	$err_pass="";
	$confirmPass="";
	$err_confirmPass="";
	$email="";
	$err_email="";
	$Phone="";
	$err_phone="";
	$address="";
	$err_address="";
	$birth="";
	$err_birth="";
	$gender="";
	$err_gender="";
	$abouts=[];
	$err_about="";
	$bio="";
	$err_bio="";
	

	// All Function is Here !!! 
	// =========================

	

	//About validation is Here !!! 
	//--------------------------------

	$hasError=false;
	function aboutExist($h)
	{
		global $abouts;
		foreach($abouts as $about){
			if ($h == $about) 
				return true;
		}
		return false;
	}
	
	
	
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		// Name validate is Here !!! 
		//-------------------------------
		if(empty($_POST["name"])){
			$hasError=true;
			$err_name="Name Required";
		}
		else
		{
			$name = $_POST["name"];
		}
		 
		 // UserName Validate is Here !!! 
		 //  -----------------------------

		if(empty($_POST["uname"])){
			$hasError=true;
			$err_uname="User Name Required";
		}
		elseif (strlen($_POST["uname"]) <=6){
			$hasError = true;
			$err_uname = "Name must be greater than 6 characters";
		}
		elseif ( strpos(($_POST["uname"])," " )!== false){
			$hasError = true;
			$err_uname = "No space required";
		}
		else
		{
			$uname = $_POST["uname"];
		}
		
		// Password Validate is Here !!! 
		// ---------------------------------

		if(empty($_POST["pass"])){
			$hasError=true;
			$err_pass="password Required";
		}
		elseif (strlen($_POST["pass"]) <=8){
			$hasError = true;
			$err_pass = "Password must be greater than 8 characters";
		}
		elseif ( strpos(($_POST["pass"]),"#" )== false){
			$hasError = true;
			$err_pass = "#  required in password";
		}
		else
		{
			$pass = $_POST["pass"];
		}
		
		// Confirm Password is Here !!! 
		//------------------------------

		if(empty($_POST["confirmPass"])){
			$hasError=true;
			$err_confirmPass="Confirm password Required";
		}
		elseif(isset($_POST["confirmPass"]) == $pass)
		{
			$hasError = true;
			$err_confirmPass ="Password not match ! ";
		}
		else
		{

			$confirmPass = $_POST["confirmPass"];
		}
		
		// Email Validate is Here !!!! 
		//------------------------------

		if(empty($_POST["email"])){
			$hasError=true;
			$err_email="Email Required";
		}
		elseif(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL))
		{
             $hasError=true;
			$err_email ="invalid email";
        }
  
		else
		{
			$email = $_POST["email"];
		}
		
		// Phone Validate is Here !!! 
		//------------------------------

		if(empty($_POST["Phone"]))
		{
			$hasError=true;
			$err_phone="Phone number Required";
		}
		else
		{
			$Phone = $_POST["Phone"];
		}
		
		if(empty($_POST["address"])){
			$hasError=true;
			$err_address="address Required";
		}
		else
		{
			$address= $_POST["address"];
		}
		if(empty($_POST["city"])){
			$hasError=true;
			$err_address="City Required";
		}
		else
		{
			$city= $_POST["city"];
		}
		if(empty($_POST["street"])){
			$hasError=true;
			$err_address="Address Required/something empty";
		}
		else
		{
			$street= $_POST["street"];
		}
		if(empty($_POST["zip"])){
			$hasError=true;
			$err_address="Address Required/something empty";
		}
		else
		{
			$zip= $_POST["zip"];
		}
		// Gender Validate is Here !!!
		// -------------------------------

		
		if(!isset($_POST["gender"])){
			$hasError = true;
			$err_gender = "Gender Required";
		}
		else{
			$gender = $_POST["gender"];
		}


		// Abouts Validation is Here !!! 
		// -------------------------------
		
		if(!isset($_POST["abouts"])){
			$hasError = true;
			$err_about = "about Required";
		}else{
			$abouts = $_POST["abouts"];
		}
		
		// Bio Validation is Here !!!
		// ------------------------------

		if(empty($_POST["bio"])){
			$hasError = true;
			$err_bio = "Bio Required";
		}
		else
		{
			$bio = $_POST["bio"];
		}
		
		



		// Here is The Output 
		//---------------------------------------

		 
		echo $_POST["name"]."<br>";
		echo $_POST["uname"]."<br>";
		echo $_POST["pass"]."<br>";
		echo $_POST["confirmPass"]."<br>";
		echo $_POST["email"]."<br>";
		echo $_POST["Phone"]."<br>";
		echo $_POST["address"]."<br>";
		echo $_POST["date"]."<br>";
		echo $_POST["month"]."<br>";
		echo $_POST["Year"]."<br>";
		echo $_POST["gender"]."<br>";
		$arr = $_POST["abouts"];
			
		foreach($arr as $e)
		{
			echo "$e <br>";
		}
		echo $_POST[""];
		echo $_POST["bio"];
		
			
	}
	
?>
<html>
	<body>
		<form action="" method="POST">
			<table align="center" style=" border:2px black solid;">
			
			<tr>
		  <td colspan="2" align="center"> <b>Club Member Registration </b></td>
		   </tr>
		   <tr>
		   <td> </td>
		   
		   </tr>
		   
				<tr>
					<td align="right">Name</td>
					<td>:<input name="name" value="<?php echo $name;?>" type="text"><br>
					<span><?php echo $err_name;?></span></td>
				</tr>
				<tr>
					<td align="right">Userame</td>
					<td>:<input name="uname" value="<?php echo $uname;?>" type="text"><br>
					<span><?php echo $err_uname;?></span></td>
				</tr>
				<tr>
					<td align="right">Password</td>
					<td>:<input name="pass"  value="<?php echo $pass;?>" type="password"><br>
					<span><?php echo $err_pass;?></span></td>
				</tr>
				<tr>
					<td align="right">Confirm Password</td>
					<td>:<input name="confirmPass" value="<?php echo $confirmPass;?>" type="password"><br>
					<span><?php echo $err_confirmPass;?> </span></td>
				</tr>
				<tr>
					<td align="right">Email</td>
					<td>:<input name="email" value="<?php echo $email;?>" type="text" ><br>
					<span><?php echo $err_email;?> </span></td>
				</tr>
				<tr>
					<td align="right">Phone</td>
					<td>:<input type="text" style="width:50px;"placeholder="Code" value="<?php echo $Phone;?>" >  
		               - <input type="text" style="width:112px;" placeholder="Number" ><br><span><?php echo $err_phone;?></span></td>
					<td><span></span></td>
				</tr>
				<tr>
					<td align="right">Address</td>
					<td> :<input name="address" type="text" value="<?php echo $address;?>"
						  placeholder="street Address" > <br>&nbsp;
					      <input name="city"type="text" value="<?php echo $city;?>" type="text"style="width:80px;"placeholder="City" >  
		               - <input name="street"type="text"value="<?php echo $street;?>" type="text" style="width:80px;" placeholder="State"><br> &nbsp;
					   <input name="zip" type="text" value="<?php echo $zip;?>" type="text"placeholder="Postal/ Zip Code" >
					   <br>
					<span><?php echo $err_address;?></span></td>
				</tr>
				<tr>
					<td align="right">Birth Date</td>
					<td>:
					<select class="" name="day">
						<?php
							for($i=0;$i<=31;++$i){
								$time=strtotime(sprintf('+%d days',$i));
								$day = date('d',$time);
								$days =date('d',$time);
								printf('<option value="%s">%s</option>',$day,$days);
							}

						?>
					</select>

					<select class="" name="month">
						<?php
							for($i=0;$i<=12;++$i){
								$time=strtotime(sprintf('--%d months',$i));
								$month = date('m',$time);
								$monthname =date('F',$time);
								printf('<option value="%s">%s</option>',$month,$monthname);
							}

						?>
					</select>
					<select class="" name="Year">
						<?php $y=(int)date("Y");?>
						<option value="<?php echo $y;?>"selected="true"><?php echo $y;?></option>
						<?php $y--;
						for(;$y>"2000";$y--){?>

							<option value="<?php echo $y;?>"><?php echo $y; ?></option>
						<?php }?>
						}
					</select>
						
						
					</td>
				</tr>
				<tr>
					<td align="right">Gender</td>
					<td>:<input type="radio" value="Male" <?php if($gender == "Male") echo "checked";?> name="gender"> Male <input type="radio" <?php if($gender == "Female") echo "checked";?> value="Female" name="gender"> Female <br>
					<span><?php echo $err_gender;?></span></td>
				</tr>
				
				<tr>
					<td align="right">Where did you hear <br> about us ?</td>
					<td>
						<input type="checkbox" value="A friend or colleaque" <?php if(aboutExist("A friend or colleaque")) echo "checked";?>  name="abouts[]">A friend or colleaque
						<br> 
						<input value="Google" name="abouts[]" <?php if(aboutExist("Google")) echo "checked";?> type="checkbox">Google
						<br>
						<input value="Blog post" name="abouts[]" <?php if(aboutExist("Blog post")) echo "checked";?>  type="checkbox">Blog post 
						<br> 
						<input value="News Artical" name="abouts[]" <?php if(aboutExist("News Artical")) echo "checked";?>  type="checkbox">News Artical
					<br>
					<span><?php echo $err_about;?></span></td>
				</tr>
				<tr>
					<td align="right">Bio :</td>
					<td> <textarea name="bio"><?php echo $bio;?></textarea>
						<br><span><?php echo $err_bio;?></span>
					</td>
					
				</tr>
				<tr>
				<td> </td>
					<td><input type="submit" value="Register"></td>
				</tr>
			</table>
		</form>
	</body>
</html>