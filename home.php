<?php
require 'header.php';
require 'dbinfo.php';

?>
<div class="container">
    <form name="f" method="post" action="home.php">
    <h1 class="well" align="center">Home Profile Page</h1>
    <div class="col-lg-12 well">
	<div class="row">         
	<div class="col-sm-3">        		
   <button type="submit" name="submit" class="btn btn-default" value="ShowProfile">ShowProfile</button>
	</div>		
	<div class="col-sm-3">        	
   <button type="submit" name="submit" class="btn btn-default" value="Edit Profile">Edit Profile</button>
	</div>	
	<div class="col-sm-3">
	<button type="submit" name="submit" class="btn btn-default" value="changepassword">Change Password</button>
	</div>		
	<div class="col-sm-3">        	
   <button type="submit" name="submit" class="btn btn-default" value="Logout">Logout</button>
	</div>	 		

	</div>
   
    </form>
	</div>
<?php
//deletion records from the database
session_start();
if(!isset($_SESSION['username']))
   header("location:login1.php");

if(isset($_SESSION['username']))
{

if($_POST["submit"]=="changepassword")
{
	header("location:changepassword.php");
}
//Edit the profile
if($_POST["submit"]=="Edit Profile")
{
	header("location:edit.php");
}

//logout from the home page
if($_POST["submit"]=="Logout")
{
	header("location:logout.php");
}

//showing the all record from database
if($_POST["submit"]=="ShowProfile")
 {
	$username=$_SESSION['username'];
 	$s="SELECT * from registration where username='$username'";
	$resource=mysql_query($s);
	$count=mysql_num_rows($resource);
	$row=mysql_fetch_row($resource);
   
   //showing the personal result
   echo "<h3>";
    echo "<b>username:</b>".$row[0]."<br/>";
    echo "<b>Name:</b>".$row[3]."<br/>";
	echo "<b>Gender:</b>".$row[6]."<br/>";
	echo "<b>Marital:<b>".$row[7]."<br/>";
	echo "DOB:".$row[8];
	echo "<br>";
	echo "Street:".$row[9]."<br/>";
	echo "City:" .$row[10]."<br/>";
	echo "State:".$row[11]."<br/>";
	echo "Zip Code:".$row[12]."<br/>";
	echo "Phone:".$row[13]."<br/>";
	echo "Email:".$row[14]."<br/>";
	echo "OffStreet:".$row[15]."<br>";
	echo "OffCity:".$row[16]."<br/>";
	echo "OffState:".$row[17]."<br/>";
	echo "OffZip:".$row[18]."<br/>";
	echo "OffPhone:".$row[19]."<br/>";
	echo "OffEmail:".$row[20]."<br/>";
	echo "Company:".$row[21]."<br/>";
	echo "Website:".$row[22]."<br/>";
	
    echo "</h3>"  ;



	/*echo "<table  border='2' >";
	echo "<tr>";
	echo "<th>Id</th>";
	echo "<th>Name</th>";
	echo "<th>Gender</th>";
	echo "<th>Marital</th>";
	echo "<th>DOB</th>";
	echo "<th>Street</th>";
	echo "<th>City</th>";
	echo "<th>State</th>";
	echo "<th>Zip</th>";
	echo "<th>Phone</th>";
	echo "<th>Email</th>";
	echo "<th>OffStreet</th>";
	echo "<th>OffCity</th>";
	echo "<th>OffState</th>";
	echo "<th>OffZip</th>";
	echo "<th>OffPhone</th>";
	echo "<th>OffEmail</th>";
	echo "<th>Company</th>";
	echo "<th>Website</th>";
	
	echo "</tr>";
	
    
	while($row=mysql_fetch_row($resource))
       {
       	echo "<tr>";
       	echo "<td>".$row[0]."</td>";
        echo "<td>".$row[1]."</td>";
        echo "<td>".$row[6]."</td>";
        echo "<td>".$row[8]."</td>";
        echo "<td>".$row[9]."</td>";
        echo "<td>".$row[10]."</td>";
        echo "<td>".$row[11]."</td>";
        echo "<td>".$row[12]."</td>";
        echo "<td>".$row[13]."</td>";
        echo "<td>".$row[14]."</td>";
        echo "<td>".$row[15]."</td>";
        echo "<td>".$row[16]."</td>";
        echo "<td>".$row[17]."</td>";
        echo "<td>".$row[18]."</td>";
        echo "<td>".$row[19]."</td>";
        echo "<td>".$row[20]."</td>";
        echo "<td>".$row[21]."</td>";
        echo "<td>".$row[22]."</td>";
        echo "<td>".$row[23]."</td>";
        echo "<td>".$row[24]."</td>";
       }
       */
   }


}
?>

<?php
require 'footer.php';
?>
