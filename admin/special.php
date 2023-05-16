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
<li><a href="order_list2.php">Back</a></li>
</ol>
</div>
<div class="graph-visual tables-main">
<h2 class="inner-tittle">Details</h2>
<div class="graph" style="height:1000px">
<div class="block-page">
<p>
<h3 class="inner-tittle two" style="font-weight:bold">Details</h3>
<div class="form-body">
<?php 
  $result=select("SELECT * FROM event where id='".$_REQUEST['id']."' ");
  $n=1;
  while($r=mysqli_fetch_array($result))
  {  extract($r);
  ?>
<form   method="POST" role="form" >
									.
									
									
										
										
										<div class="form-group">
										<label>Title
										</label>
										<input type="text" value="<?=$title?>" required   class="form-control" id="mobile" placeholder="Title"  />
										<div class="validation"></div>
									
									
										
									</div>
									
									
									<div class="form-row">
									<div class="col-lg-6">
									
										
										
										<div class="form-group">
										<label>Date To
										</label>
										<input type="date" name="date_to" value="<?=$date_to?>" class="form-control" id="mobile" placeholder="Your Mobile"  data-validation="length" data-validation-length="min2"/>
										<div class="validation"></div>
									</div>
									</div>
									<div class="col-lg-6">
									
									<div class="form-group">
<label>Date From		
</label>		
		<input type="date" name="date_from" class="form-control" value="<?=$date_from?>" id="email" placeholder="Your Email"  data-validation="length" data-validation-length="min2"/>
										<div class="validation"></div>
									</div>
									</div>
										
									</div>
									<div class="form-row">
									<div class="col-lg-6">
									
										
										
										<div class="form-group">
										<label>Time To</label>
										<input type="time" name="time_to" value="<?=$time_to?>"class="form-control" id="mobile" placeholder="Your Mobile"  data-validation="length" data-validation-length="min2"/>
										<div class="validation"></div>
									</div>
									</div>
									<div class="col-lg-6">
									
									<div class="form-group">
									<label>Time From
									</label>
										<input type="time" name="time_from" value="<?=$time_from?>" class="form-control" id="email" placeholder="Your Email"  data-validation="length" data-validation-length="min2"/>
										<div class="validation"></div>
									</div>
									</div>
										
									</div>
									<div class="form-group">
									<label>Entertainments:-</label></br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										<input type="checkbox" name="music" <?php if($music=='yes'){echo "checked";}?> value="yes" />Music&nbsp;&nbsp;
										<input type="checkbox" name="dance"  <?php if($dance=='yes'){echo "checked";}?> value="yes" />Dance&nbsp;&nbsp;
										<input type="checkbox" name="cartoon"  <?php if($cartoons=='yes'){echo "checked";}?> value="yes" />Cartoons
										<div class="validation"></div>
									</div>
<div class="form-group">
									<label>Decoration:-</label></br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										<input type="checkbox" name="light" <?php if($light=='yes'){echo "checked";}?>  value="yes" />Light&nbsp;&nbsp;
										<input type="checkbox" name="chair" <?php if($chair=='yes'){echo "checked";}?>  value="yes" />Chair&nbsp;&nbsp;
										<input type="checkbox" name="stage"  <?php if($stage=='yes'){echo "checked";}?> value="yes" />Stage&nbsp;&nbsp;
										<input type="checkbox" name="flower" <?php if($flower=='yes'){echo "checked";}?>  value="yes" />Flowers
										<div class="validation"></div>
									</div>
<div class="form-group">
									<label>Food:-</label></br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										<input type="checkbox" name="veg"  <?php if($veg=='yes'){echo "checked";}?> value="yes" />Veg&nbsp;&nbsp;
										<input type="checkbox" name="nonveg"  <?php if($nonveg=='yes'){echo "checked";}?> value="yes" />Non-Veg&nbsp;&nbsp;
										<input type="checkbox" name="veg_nonveg" <?php if($veg_nonveg=='yes'){echo "checked";}?>  value="yes" />Veg + Non-Veg&nbsp;&nbsp;
										<div class="validation"></div>
									</div>
									<div class="form-group">
											<label>No of Chairs
										</label>
										<input type="text" name="no_of_chair" value="<?=$no_of_chair?>" class="form-control" required  id="mobile" placeholder="No. Of Chairs"  />
										<div class="validation"></div>
									
									
										
									</div>
									
									<div class="form-group">
											<label>Address
										</label>
										<input type="text" name="address" value="<?=$address?>" class="form-control" required  id="mobile" placeholder="Address"  />
										<div class="validation"></div>
									
									
										
									</div>
									<div class="form-group">
										<label>Incharge Mobile Number
										</label>
										<input type="mobile" name="mobile" value="<?=$mobile?>" class="form-control" required  id="mobile" placeholder="Mobile"  />
										<div class="validation"></div>
									
									
										
									</div>
									<div class="form-group">
										<label>Email Id
										</label>
										<input type="email" name="email" class="form-control" value="<?=$email?>" required id="mobile" placeholder="E-mail "  />
										<div class="validation"></div>
									
									
										
									</div>
									<!--
									<div class="form-group">
										<input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
										<div class="validation"></div>
									</div>
									<div class="form-group">
										<textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
										<div class="validation"></div>
									</div>
									-->
									
								</form>
								<?php
  }
								?>
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