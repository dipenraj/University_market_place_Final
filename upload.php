<?php
if (isset($_POST['submit']) && isset($_FILES['my_image'])) {
	

	echo"</pre>";
    print_r($_FILES['my_image']);
	echo "</pre>";

	$img_name = $_FILES['my_image']['name'];
	$img_size = $_FILES['my_image']['size'];
	$tmp_name = $_FILES['my_image']['tmp_name'];
	$error = $_FILES['my_image']['error'];

}

else {

	header("location:index.html");
     
     }
?>