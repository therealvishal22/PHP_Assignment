 <?php
 error_reporting(0);

$target_dir = "upload/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

$_SESSION['target_file']=$_FILES["fileToUpload"]["name"];
$uploadok = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
if(isset($_POST["submit"])) 
   {
	$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
		if($check !== false) 
		{
			echo "File is an image - " . $check["mime"] .".";
			$uploadok = 1;
			
		} 
		else
		{
			echo " FILE IS NOT AN IMAGE.";
			$uploadok = 0;
		}
    }
if (file_exists($target_file)) 
    {
    	$target_file = $target_dir ."101_". basename($_FILES["fileToUpload"]["name"]);
    }  

	if($_FILES["fileToUpload"]["size"] > 5000000000)
     {
	    echo "SORRY,YOUR FILE IS TO LARGE.";
	    $uploadok = 0;
     }

if($imageFileType != "xlsx" && $imageFileType != "pdf" && $imageFileType != "docx" && $imageFileType != "ppt") 
    {
    	echo "can not uplod image";
	    exit();
	    $uploadok = 0;
    }	
if ($uploadok == 0) 
    {
        echo "sorry ,Your file was not uploaded.";
    }
    else
    {
	  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file))
	   {
		  echo "The file". basename( $_FILES["fileToUpload"]["name"]). "is uploded.";
	   } 
	   else 
	   {
		  echo "SORRY,THERE WAS AN ERROR TO UPLOAD YOUR FILE.";
	    }
	    
    }
?> 