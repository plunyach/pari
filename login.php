<html>

<?php
error_reporting();
$mysqli = new mysqli("localhost", "root", "", "parishkar");

$user=$_POST['email'];
$pass=$_POST['password'];
$cl=$_POST['class'];
/******************************************Query for Administrator*********************************************** */
		if($cl=="Administrator")
		{

			if($user!=Null)
				{

						$que="select pasword from staff_login where email='$user'";
					$result=$mysqli->Query($que);

						$row =mysqli_fetch_array($result,MYSQLI_ASSOC);
						//echo $user;
					
								if($row["pasword"]==$pass)
						{
							header("location: ./modern_admin_panel/report.php");	
								
						}
						else
						{
							?>
							<script language="javascript">
				alert("Password is Wrong");
				history.back();
				</script>
				<?php
								
						}
				}
				else
						{
								
								?>
							<script language="javascript">
				alert("User Name is Empty");
				history.back();
				</script>
				<?php
						
				}
		}
/**************************************************Query for Lab Assistant*****************************************/
if($cl=="lab")
		{

			if($user!=Null)
				{

						$que="select pasword from staff_login where email='$user'";
					$result=$mysqli->Query($que);

						$row =mysqli_fetch_array($result,MYSQLI_ASSOC);
						//echo $user;
					
								if($row["pasword"]==$pass)
						{
							header("location: ./modern/new_student.php");	
								
						}
						else
						{
							?>
							<script language="javascript">
				alert("Password is Wrong");
				history.back();
				</script>
				<?php
								
						}
				}
				else
						{
								
								?>
							<script language="javascript">
				alert("User Name is Empty");
				history.back();
				</script>
				<?php
						
				}
		}
/****************************************************Student Name Query******************************************************************/
if($cl=="Student")
		{

			if($user!=Null)
				{

						$que="select pasword from staff_login where email='$user'";
					$result=$mysqli->Query($que);

						$row =mysqli_fetch_array($result,MYSQLI_ASSOC);
						//echo $user;
					
								if($row["pasword"]==$pass)
						{
							header("location: ./modern/index.php");	
								
						}
						else
						{
							?>
							<script language="javascript">
				alert("Password is Wrong");
				history.back();
				</script>
				<?php
								
						}
				}
				else
						{
								
								?>
							<script language="javascript">
				alert("User Name is Empty");
				history.back();
				</script>
				<?php
						
				}
		}

/***************************************************User Name Empty Query****************************************************************/
		else
						{
								
								?>
							<script language="javascript">
				alert("User Name is Not Correct");
				history.back();
				</script>
				<?php
						
				}
				?>
				
</html>