<?php

if (!isset($_SESSION['admin_email'])) {

	echo "<script>window.open('login.php','_self')</script>";

} else {

	?>

	<?php

	if (isset($_GET['cliente_delete'])) {

		$delete_id = $_GET['cliente_delete'];

		$delete_cliente = "delete from cliente where cliente_id='$delete_id'";

		$run_delete = mysqli_query($con, $delete_cliente);

		if ($run_delete) {

			echo "<script>alert('Cliente ha sido Eliminado')</script>";

			echo "<script>window.open('index.php?ver_clientes','_self')</script>";

		}

	}

	?>




	<?php }?>