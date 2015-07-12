<!-- Codes by HTML.am -->

<!-- CSS Code -->

<html>
<head>
<title> detail view</title>
</head>
<body>
<center>
<h1>DETAIL VIEW</h1>
</center>
<style type="text/css" scoped>
table.GeneratedTable {
width:80%;
background-color:#FFFFFF;
border-collapse:collapse;border-width:1px;
border-color:#336600;
border-style:solid;
color:#009900;
}

table.GeneratedTable td, table.GeneratedTable th {
border-width:1px;
border-color:#336600;
border-style:solid;
padding:3px;
}

table.GeneratedTable thead {
background-color:#CCFF99;
}
</style>

<!-- HTML Code -->
<table align=center class="GeneratedTable">
<thead>
<tr>
<th>PROJECT </th>
<th>DONOR </th>

</tr>
</thead>
<tbody>
<?php

include 'connect.php';
$query_get="select * from donors,project where project.pid=donors.pid";
$query_exec = mysql_query($query_get) or die(mysql_error());

while($ans = mysql_fetch_assoc($query_exec))
   {
   $pn=$ans['pname'];
   $na=$ans['name'];
   $cp=$ans['contactperson'];
   $currentprogress=$ans['currentprogress'];
   $budget=$ans['budget'];
   $cnumber=$ans['cpmobile'];
	echo '<tr><td>';
	echo $pn;
	echo '<br>';
	
	echo 'budget: '.$budget;
	echo '<br>';
	echo 'contact person: '.$cp;
	echo '<br>';
	echo 'mobile: '.$cnumber;
	echo '<br>';
	echo 'currentprogress: '.$currentprogress.' %';
	
	
echo '</td> <td>';
	echo $na ;
	echo '</td>
	</tr>';
   }


?>
</tbody>
</table>
</body>
</html>