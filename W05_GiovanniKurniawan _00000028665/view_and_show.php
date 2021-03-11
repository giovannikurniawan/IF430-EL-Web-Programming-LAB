<!DOCTYPE html>
<html>
<head>
	<title>Challenge</title>
	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>

	<!-- Bootstrap -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>

    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
	<style>
	 i{
		 cursor: pointer;

	 }
	</style>
</head>
<body>
<script>

$(document).ready(function() {
	<?php if(!$login): ?>
		console.log("fffff");
		$('#myModal').modal({
 			keyboard: false,
	 		show: true,
 			backdrop: 'static'
 		});

	<?php endif ?>

    var table = $('#example').DataTable( {
        data: <?= json_encode($output,JSON_PRETTY_PRINT)?>,
		"columnDefs": [ 
		{   "searchable": false, "orderable": false, "targets": 0 },
		{"targets" : 1 ,"data": "gambar",
			"render" : function (data, type, row, meta ) {
				if(data == '')
					return   '<img height="20px" width="20px" src="img.jpg"/>';
				else
					return   '<img height="20px" width="20px" src="'+data+'"/>';
		}
		}
		],
        "columns" : [
		    { "title": "#", "data":null, "width":'5%', "searchable": false, "orderable": false},            
			{ "title": "No"},
            { "title": "NIM", "data" : "nim"  },
            {  "title": "NamaDepan", "data" : "namaDepan" },
            { "title": "NamaBelakang", "data" : "namabelakang" },
            { "title": "Prodi", "data" : "prodi"},
			{ "title": "Action",  "defaultContent": `<i class='glyphicon glyphicon-remove-sign'></i><br>\
			<i class='glyphicon glyphicon-wrench'></i>  `},

        ],
        "order": [[1, 'asc']]
    } );
	table.on( 'order.dt search.dt', function () {
        table.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
            cell.innerHTML = i+1;
        } );
    } ).draw();
     	$('#example').append(
  '<tfoot>'+
    '<tr>'+
		'<th>#</th>'+
		'<th>No</th>'+
       '<th>NIM</th>'+
       '<th>NamaDepan</th>'+
       '<th>NamaBelakang</th>'+
       '<th>Prodi</th>'+
	   '<th>Action</th>'+
    '<tr>'+
  '</tfoot>'
	);
	 $('#example tbody').on( 'click', 'i.glyphicon-remove-sign', function () {
        var r = confirm("Do you sure you want to delete this data?");
		if (r == true) {
 

		var data = table.row( $(this).parents('tr') ).data();
    	var theForm, newInput1, newInput2,newInput3;
  
		theForm = document.createElement('form');
		theForm.action = 'hapus.php';
		theForm.method = 'post';
		newInput1 = document.createElement('input');
		newInput1.type = 'hidden';
		newInput1.name = 'namaDepan';
		newInput1.value = data["namaDepan"];
		newInput2 = document.createElement('input');
		newInput2.type = 'hidden';
		newInput2.name = 'namaBelakang';
		newInput2.value = data["namaBelakang"];
		newInput3 = document.createElement('input');
		newInput3.type = 'hidden';
		newInput3.name = 'nim';
		newInput3.value = data["nim"];
		newInput 4 = document.createElement('input');
		newInput4.type = 'hidden';
		newInput4.name = 'prodi';
		newInput4.value = data["prodi"];
		theForm.appendChild(newInput1);
		theForm.appendChild(newInput2);
		theForm.appendChild(newInput3);
		theForm.appendChild(newInput4);
		console.log(theForm);

		document.getElementById('hidden_form_container').appendChild(theForm);
		theForm.submit()
		
		} else {
				txt = "You pressed Cancel!";
			}
		// alert( data["nim"] +"'s salary is: "+ data["namabelakang"] );
    } );
	$('#example tbody').on( 'click', 'i.glyphicon-wrench', function () {
        var data = table.row( $(this).parents('tr') ).data();
		var theForm, newInput1, newInput2,newInput3;
  
		theForm = document.createElement('form');
		theForm.action = 'ubah.php';
		theForm.method = 'post';
		newInput1 = document.createElement('input');
		newInput1.type = 'hidden';
		newInput1.name = 'namaDepan';
		newInput1.value = data["namaDepan"];
		newInput2 = document.createElement('input');
		newInput2.type = 'hidden';
		newInput2.name = 'namaBelakang';
		newInput2.value = data["namaBelakang"];
		newInput3 = document.createElement('input');
		newInput3.type = 'hidden';
		newInput3.name = 'nim';
		newInput3.value = data["nim"];
		newInput4 = document.createElement('input');
		newInput4 = document.createElement('input');
		newInput4.type = 'hidden';
		newInput4.name = 'prodi';
		newInput4.value = data["prodi"];
		
		theForm.appendChild(newInput1);
		theForm.appendChild(newInput2);
		theForm.appendChild(newInput3);
		theForm.appendChild(newInput4);
		document.getElementById('hidden_form_container').appendChild(theForm);
		theForm.submit();
    } );
} );



</script>
	<header>
	
        <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header">
       <h4 style="color:grey">[IF635] Web Programming </h4>
    </div>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Employees</a></li>
    </ul>
  </div>
</nav>
	</header>
	<button id="myBtn" class="btn btn-primary pull-right glyphicon glyphicon-plus">Student</button>
	<br><br>
	<table id="example" class="display" style="width:100%">
    </table>
	<div id="hidden_form_container" style="display:none;"></div>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Sign In</h4>
      </div>
	  <form action="" method="post">

      <div class="modal-body">
  		<div class="form-group">
   		 	<label for="email">Email</label>
    		<input type="text" class="form-control" id="email" name="email" placeholder="Masukkan email">
 		 </div>
  		<div class="form-group">
    		<label for="pwd">Password</label>
    		<input type="password" class="form-control" id="pwd" name="pwd" placeholder="Masukkan password">
  		</div>
		<?php if($invalid ): ?>
			<span class="error text-danger">Email tidak terdaftar atau password salah, silahkan coba lagi</span><br><br>
		<?php endif ?>
		<button type="submit" class="btn btn-primary">Submit</button>

      </div>
	  </form>

    </div>

  </div>
</div>
<script>
	var btn = document.getElementById('myBtn');
	btn.addEventListener('click', function() {
	document.location.href = 'tambah.php';
});
</script>
</body>
</html>