<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Sistem Kepegawaian</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<link href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
<link href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="main_container">
	<div id="header">
	<h1>Data Personel</h1>
	</div>
	<div id="navigation">
	</div>
	<?php
	$page = (isset($_GET['page']))? $_GET['page'] : "main";
	switch ($page) {
		case 'input'  : include "input.php";  break;
		case 'edit'	  : include "edit.php";   break;
		case 'delete' : include "delete.php"; break;
		case 'main'   :
		default       : include 'tampil.php';	
	}
	?>
</div>
<script  src="https://code.jquery.com/jquery-3.3.1.min.js"
   integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
 crossorigin="anonymous"></script>
<script type="text/javascript"src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script type="text/javascript"src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
<script type="text/javascript"src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.flash.min.js"></script>
<script type="text/javascript"src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript"src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script type="text/javascript"src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script type="text/javascript"src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
<script type="text/javascript"src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>
<script>

$(document).ready( function () {
$('#tabel').DataTable({
	dom: 'Bfrtip',
	buttons: [
	{
	extend: 'copy',
	}, 
	{ 
	extend: 'csv'
	},
	{ 
	extend: 'excel'
	}, 
	{
	extend: 'pdfHtml5',
	orientation: 'landscape',
	pageSize: 'LEGAL',
	exportOptions: {
	modifier: {
	page: 'current'
	},
	columns: [0,1,2,3,4,5],
	alignment: 'right',
	modifier: {
	page: 'current'
	}

	},

	// customize: function (doc) {
	// doc.content[1].table.widths = 
	// Array(doc.content[1].table.body[0].length + 1).join('*').split('');
	// }

	customize : function(doc){ 
	doc.styles.tableHeader.alignment = 'left'
	doc.content[1].margin = [ 200, 100, 100, 100 ] 
	doc.content[1].table.widths = [90,90,90,90,90,90]; 
	}

	},
	{ 
	extend: 'print'
	}

	],
	// columnDefs: [
	// { "width": "20%", "targets": 0 }
	// ]
	});
	} );


</script> 
</body>
</html>