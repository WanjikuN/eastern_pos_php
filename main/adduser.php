<link href="../style.css" media="screen" rel="stylesheet" type="text/css" />
<form action="saveuser.php" method="post">
<center><h4><i class="icon-plus-sign icon-large"></i> Add User</h4></center>
<hr>
<div id="ac">
<span>User Name : </span><input type="text" style="width:265px; height:30px;" name="username" ><br>
<span>Password : </span><input type="text" style="width:265px; height:30px;" name="password" Required/><br>
<span>privileges : </span>
<select name="name"  style="width:265px; height:30px; margin-left:-5px;" >

	<?php
	include('../connect.php');
	$result = $db->prepare("SELECT name FROM user WHERE id <'4'");
		$result->bindParam(':userid', $res);
		$result->execute();
		for($i=0; $row = $result->fetch(); $i++){
	?>
		<option><?php echo $row['name']; ?></option>
	<?php
	}
	?>
</select><br>
<span>Position : </span>
<select name="position"  style="width:265px; height:30px; margin-left:-5px;" >

	<?php
	include('../connect.php');
	$result = $db->prepare("SELECT position FROM user WHERE id<'3'");
		$result->bindParam(':userid', $res);
		$result->execute();
		for($i=0; $row = $result->fetch(); $i++){
	?>
		<option><?php echo $row['position']; ?></option>
	<?php
	}
	?>
</select><br>
<!-- <span>Position : </span><input type="text" id="txt1" style="width:265px; height:30px;" name="price" onkeyup="sum();" Required><br> -->
<div style="float:right; margin-right:10px;">
<button class="btn btn-success btn-block btn-large" style="width:267px;"><i class="icon icon-save icon-large"></i> Save</button>
</div>
</div>
</form>
