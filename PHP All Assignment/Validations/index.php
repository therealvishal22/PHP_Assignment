<?php

include 'dbconnect.php';

$qry="SELECT * FROM emp";

$rs=mysqli_query($conn,$qry);
 session_start();
   
    //  if (!isset($_SESSION['email'])) {
    //      # code...
    //       header("location:login.php");
    //       exit();
    //   }

?>

<!DOCTYPE html>
<html>
<head>
	<title>View User</title>
</head>
<body>
<table border="1" width="100%">
	<td>Id</td>
	<td>Name</td>
	<td>Email</td>
	<td>Address</td>
	<td>Mobile</td>
	<td>Password</td>
	<td>Designation</td>
	<td>Gender</td>
	<td>Files</td>
	<td>EDIT</td>
	<td>DELETE</td>
	<td>AJEX DELETE</td>
	<?php

		if(mysqli_num_rows($rs)>0)
		{
			echo "true..";
			while ($row=mysqli_fetch_assoc($rs)) {
				# code...
	?>
	<tr>
		<td><?php echo $row['id']?></td>
		<td><?php echo $row['fname']?> <?php echo $row['lname']?></td>
		
		<td><?php echo $row['email']?></td>
		<td><?php echo $row['address']?></td>
		<td><?php echo $row['mobile']?></td>
		<td><?php echo $row['password']?></td>
		<td><?php echo $row['designation']?></td>
		<td><?php echo $row['gender']?></td>
		<td><a href="upload/<?php echo $row['file'];?>"> <?php echo $row['file'];?></td>
		<?php echo $row['file'];?>"> resume</td> 
		<td><a href="editjs.php?id=<?php echo $row['id']; ?>"  title="Edit">EDIT</a></td>
		<td><a href="delete.php?id=<?php echo $row['id']; ?>"  title="delete">Delete</a></td>
		<td><a onclick="deletere(<?php echo $row['id']; ?>)"  title="delete" >ADelete</a></td>

	</tr>
	<?php
		}
	}
	else
	{
		echo "0 row found...";
	}
	?>
</table>
<center><h1><a href="jsform.php">New Regitration</a></h1>
		<h3><a href="logout.php"> Logout</a></h3>
</center>


<script>
function deletere(id) {
  if (id.length == 0) {
    document.getElementById("txtHint").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        if(this.responseText==1)
        { 
			
			alert("Record Deleted Suceesfully ");
            setInterval('window.location.reload()', 400);
			
        }
        else
        {
            document.getElementById("txtHint").innerHTML = this.responseText;
        }

      }
    };
    xmlhttp.open("GET", "delete.php?id=" + id, true);
    xmlhttp.send();
  }
}
</script>

</body>
</html>