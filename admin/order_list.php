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
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>


  <script type="text/javascript">
  $(document).ready(function () {
$('#dtBasicExample').DataTable();
$('.dataTables_length').addClass('bs-select');
});

  </script>
  <style>
  table.dataTable thead>tr>td.sorting,
table.dataTable thead>tr>td.sorting_asc,
table.dataTable thead>tr>td.sorting_desc,
table.dataTable thead>tr>th.sorting,
table.dataTable thead>tr>th.sorting_asc,
table.dataTable thead>tr>th.sorting_desc {
  padding-right: 30px
}

table.dataTable thead .sorting,
table.dataTable thead .sorting_asc,
table.dataTable thead .sorting_asc_disabled,
table.dataTable thead .sorting_desc,
table.dataTable thead .sorting_desc_disabled {
  cursor: pointer;
  position: relative
}

table.dataTable thead .sorting:after,
table.dataTable thead .sorting:before,
table.dataTable thead .sorting_asc:after,
table.dataTable thead .sorting_asc:before,
table.dataTable thead .sorting_asc_disabled:after,
table.dataTable thead .sorting_asc_disabled:before,
table.dataTable thead .sorting_desc:after,
table.dataTable thead .sorting_desc:before,
table.dataTable thead .sorting_desc_disabled:after,
table.dataTable thead .sorting_desc_disabled:before {
  position: absolute;
  bottom: .9em;
  display: block;
  opacity: .3
}

table.dataTable thead .sorting:before,
table.dataTable thead .sorting_asc:before,
table.dataTable thead .sorting_asc_disabled:before,
table.dataTable thead .sorting_desc:before,
table.dataTable thead .sorting_desc_disabled:before {
  right: 1em;
  content: "\f0de";
  font-family: FontAwesome;
  font-size: 1rem
}

table.dataTable thead .sorting:after,
table.dataTable thead .sorting_asc:after,
table.dataTable thead .sorting_asc_disabled:after,
table.dataTable thead .sorting_desc:after,
table.dataTable thead .sorting_desc_disabled:after {
  content: "\f0dd";
  font-family: FontAwesome;
  right: 16px;
  font-size: 1rem
}

table.dataTable thead .sorting_asc:before,
table.dataTable thead .sorting_desc:after {
  opacity: 1
}

table.dataTable thead .sorting_asc_disabled:before,
table.dataTable thead .sorting_desc_disabled:after {
  opacity: 0
}
  </style>
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

<div class="graph">
<div class="block-page">
<p>
<h3 class="inner-tittle two">Project List</h3>

<div class="form-body">
<table id="dtBasicExample" class="table table-striped table-responsive table-bordered">
  <thead>
    <tr>
	<th class="th-sm">S.no.
      </th>
      <th class="th-sm">Event Title
      </th>
      <th class="th-sm">Date
      </th>
      <th class="th-sm">Time
      </th>
	  <th class="th-sm">Mobile
      </th>
       <th class="th-sm">Venue Address
      </th>
	   <th class="th-sm">Allot</th>
	 
    </tr>
  </thead>
  <tbody>
  <?php 
  $result=select("SELECT * FROM `event` where status='0' ");
  $n=1;
  while($r=mysqli_fetch_array($result))
  {  extract($r);
  ?>
    <tr>
	<form method="post">
      <td><?=$n?></td>
      <td><input type="hidden" name="userid" value="<?=$r['userid']?>"><?=ucwords($title)?></td>
      <td><?=$date_to?> To <?=$date_from?></td>
       <td><?=$time_to?> To <?=$time_from?></td>
     
	  <td><?=$mobile?>  </td>
      <td><?=ucwords($address)?></td>
      
      <td><select name="team" ><option>SELECT</option>
	  <option value="11">Team A</option>
	  <option value="22">Team B</option>
	  <option value="33">Team C</option>
</select>
	  <button name="allot" class="bg-danger">Allot</button>
	  </td>
</form>
      
    </tr>
    
    <?php
	$n++;
  }
	?>
   
    
    </tbody>

</table>
<?php
if(isset($_REQUEST['allot']))
{
	extract($_REQUEST);
	$n=iud("INSERT INTO `allot`( `useid`, `ownerid`) VALUES ('$userid','$team')");
	if($n==1)
	{
		$t=iud("update event set status='$team' where userid='$userid'");
		if($t==1)
		{
			
				echo"<script>alert('Alloted');
				window.location='order_list.php';
				</script>";
			
		}
		else
			{
				
				echo"<script>alert('Something Wrong2');
				window.location='order_list.php';
				</script>";
			}
	
}
}
?>
</div>


</p>
</div>

</div>

</div>
</div>
<?php include"footer.php";?>

</div>
</div>
<?php include"side_bar.php";?>
</div>
<?php include"footer_script.php";?>

</body>
</html>