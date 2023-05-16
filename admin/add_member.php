<?php require_once"dbconfig.php";
if(isset($_SESSION['login']))
{

	
}
else
{
	header("location:login.php");
}

?>
<!DOCTYPE HTML>
<html>
<head>
<?php include"head.php";?> 
<script type="text/javascript" src="js/nicEdit-latest.js"></script>

</head>
<body>
<div class="page-container">
<div class="left-content">
<div class="inner-content">
<?php //include"header.php";?>
<div class="outter-wp">
<div class="sub-heard-part">
<ol class="breadcrumb m-b-0">
</ol>
</div>
<div class="graph-visual tables-main">
<h2 class="inner-tittle">Add Member</h2>
<div class="graph" style="height:1000px">
<div class="block-page">
<p>
<h3 class="inner-tittle two" style="font-weight:bold">Member</h3>
<div class="form-body">
<form class="form-horizontal"  method="post" enctype="multipart/form-data"> 

<div class="form-group">
<label for="inputPassword3" id="errortitle" class="col-sm-2 control-label">Name</label> 
<div class="col-xs-6"> 
<input type="text" class="form-control" id="title" name='name' placeholder="Name"> 
</div>
</div>
<div class="form-group">
<label for="inputPassword3" id="errortitle" class="col-sm-2 control-label">Team</label> 
<div class="col-xs-6"> 
<select class="form-control" name="team">
<option>Select Team</option>
<option value="Team_a">Team A</option>
<option value="Team_b">Team B</option>
<option value="Team_C">Team C</option>

</select>
</div>
</div>
<div class="form-group">
<label for="inputPassword3" id="errortitle" class="col-sm-2 control-label">Mobile</label> 
<div class="col-xs-6"> 
<input type="text" class="form-control" id="title" name='mobile' placeholder="Mobile"> 
</div>
</div>


<div class="col-xs-6"> 
<center><input type="submit" class="btn btn-info" name="submit" id="elec_submit" value="SUBMIT"></center> </div> </form> 
</div>

</p>
</div>
<?php
if(isset($_REQUEST['submit']))
{
	extract($_REQUEST);
	$n=iud("INSERT INTO `member`( `team`, `name`, `mobile`) VALUES ('$team','$name','$mobile') ");
	if($n==1)
	{
		echo"<script>alert('Successful');
		window.location='view_member.php';</script>";
		
	}
	else
	{
		echo"<script>alert('Something Wrong');
		window.location='view_member.php';</script>";
		
	}
}
?>
</div>

</div>
</div>
<?php include"footer.php";?>

</div>
</div>
<?php include"side_bar.php";?>
</div>
<?php include"footer_script.php";?>
<!--<script>

$(document).ready(function(){
	
$("#project_submit").click(function(){
	
var valid=true;
var title=$.trim($("#title").val());
var metakey=$.trim($("#metakey").val());
var metadis=$.trim($("#metadis").val());

if(title.length<6)
{
$("#errortitle").html('Invalid title');
$("#errortitle").css("color","red");
$("#title").css("border-color","red");
valid=false;
}
else
{
$("#errortitle").html('Title');
$("#errortitle").css("color","black");
$("#title").css("border-color","#ddd");
}
if(metakey.length<6)
{
$("#newpassworderror").html('Invalid New Password');
$("#newpassworderror").css("color","red");
$("#newpassword").css("border-color","red");
valid=false;
}
else
{
$("#newpassworderror").html('New Password');
$("#newpassworderror").css("color","black");
$("#newpassword").css("border-color","#ddd");
}
if(metadis.length<6)
{
$("#newpassworderror").html('Invalid New Password');
$("#newpassworderror").css("color","red");
$("#newpassword").css("border-color","red");
valid=false;
}
else
{
$("#newpassworderror").html('New Password');
$("#newpassworderror").css("color","black");
$("#newpassword").css("border-color","#ddd");
}



var mymethod="post";
var myurl="myphp.php";
var mydata="oldpassword="+oldpassword+"&newpassword="+newpassword+"&cpassword="+cpassword+"&change=yes";

$.ajax({
	
	method:mymethod,
	url:myurl,
	data:mydata,
	success:function(result)
	{
		if(result==1)
		{
	        alert("Password Changed Successfully");
			$("#oldpassword").val("");
			$("#newpassword").val("");
			$("#cpassword").val("");
		}
		else
		{
			alert(result);
		}
			
		
	}
});	






return false;
});
});














</script>-->
























</body>
</html>