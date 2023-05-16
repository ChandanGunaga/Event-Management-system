<div class="sidebar-menu">
<header class="logo">
<a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="index.html"> <span id="logo"> <h1>ADMIN</h1></span> 
<!--<img id="logo" src="" alt="Logo"/>--> 
</a> 
</header>
<div style="border-top:1px solid rgba(69, 74, 84, 0.7)"></div>
<!--/down-->
	<div class="down">



<img style='height:70px;width:70px;' src="images/admin2.jpg">
	
	
<a href="index.html"><span class=" name-caret">
<?php
if(isset($_SESSION['name']))
{
	$name=$_SESSION['name'];
	echo ucwords($name);
}


?>


</span></a>
<p></p>
<ul>
<li><a class="tooltips" href="change_password.php"><span>Settings</span><i class="lnr lnr-cog"></i></a></li>
</ul>
</div
<!--//down-->
<div class="menu">
<ul id="menu" >
<?php
if(isset($_SESSION['login']))
{
	?>
<li><a href="index.php"><i class="fa fa-tachometer"></i> <span>Account</span></a></li>
<li><a href="add_member.php"><i class="fa fa-tachometer"></i> <span>Add Team Member</span></a></li>
<li><a href="view_member.php"><i class="fa fa-tachometer"></i> <span>View Team Member</span></a></li>
<li><a href="order_list.php"><i class="fa fa-tachometer"></i> <span>Orders</span></a></li>
<li><a href="order_list2.php"><i class="fa fa-tachometer"></i> <span>alloted Work</span></a></li>

<li><a href="logout.php"><i class="fa fa-tachometer"></i> <span>Logout</span></a></li>
<?php }else{ ?>
<li><a href="login.php"><i class="fa fa-tachometer"></i> <span>Login</span></a></li>
<?php } ?>
</ul>
</div>
</div>