<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Sistem Kepegawaian</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<link href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="main_container">
<div id="header">
<h1>CRUD Data Pegawai</h1>
</div>
<div id="navigation">
</div>
<?php
$page = (isset($_GET['page']))? $_GET['page'] : "main";
switch ($page) {
	case 'input': include "input.php"; break;
	case 'edit'	: include "edit.php"; break;
	case 'delete' : include "delete.php"; break;
	case 'main' :
	default : include 'tampil.php';	
}
?>
</div>
<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
<script type="text/javascript"src= "//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

<script>

	$(document).ready( function () {
    	$('#tabel').DataTable();
} );

</script>
</body>
</html>