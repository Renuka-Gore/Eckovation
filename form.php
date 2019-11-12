<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript">
		alert("Plese be authenticate about your information entered")
	</script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<h2>Registration form for students</h2>
	<title>Form1</title>
	<style type="text/css">
	th,td{
		padding: 8px;
		width: 100px;
	}
	th{
		text-align: left;
	}
		h2{
			background-color: yellow;
			color: red;
			text-align: center;
		}
	</style>
	<h3>Note-</h3>
	Enter your information needed below-<br/> 
	*Please enter the right information*<br/></br>
</head>
<body>
	<fieldset>
	<legend>Fill appropriates</legend>
	<p>	
		<form action="" method="post">
	<table style="width: 200%">
<tr>
 <th><span style="color: blue"><b>Enter your name</span></th>
<th><input type="text" name="username" required><br/></th>
</tr>
<tr>
<th><span style="color: blue">Click on your course</span></th>
<th><select id="select" name="select" required>
 	           <option value = "8">Course</option>
               <option value = "B.A.">B.A.</option>
               <option value = "B.Sc">B.Sc</option>
               <option value = "B.Ed">B.Ed</option>
               <option value = "BAJMC">BAJMC</option>
               <option value = "M.Sc">M.Sc</option>
               <option value = "M.A.">M.A.</option>
               <option value = "MAJMC">MAJMC</option>
             </select><br/></br></th>
  </tr> 
  <tr>         
<th><span style="color: blue"><b>Enter the subject choosen by you</b></span></th>
<th><textarea name="massage" required></textarea></th>
</tr>
</table>
</p>
</fieldset>
<input type="submit" value="submit" name="submit"><br/></br>
   </form>
   <?php
     echo "The information you entered are as follows :";

      $name = $_POST["username"];
      $course = $_POST["select"];
      $massage = $_POST["massage"];
   ?>
   <table class="table">
   	    <tr>
   	    	<th>Students Name</th>
   	    	<th>Students Course</th>
   	    	<th>Students subject</th>
   	    </tr>
   	    <tr>
   	    	<td>
   	    		<?php
                  echo "$name";
   	    		?>
   	    	</td>
   	    	<td>
   	    		<?php
                  echo"$course";
   	    		?>
   	    	</td>
   	    	<td>
   	    		<?php
                   echo"$massage";
   	    		?>
   	    	</td>
   	    </tr>
   </table>
 </body>
</html>