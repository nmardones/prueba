<?php
	
	include_once 'controllerPrueba.php';

	$user = new controllerPrueba();

	$users = $user->getUser();

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php foreach($users as $row):?>
		
		<table>
			<th>
				<td>Id</td>
				<td>Nombre</td>
				<td>Apellido</td>
			</th>
			<tr>
				<td><?php echo $row['id'];?></td>
				<td><?php echo $row['nombre']; ?></td>
				<td><?php echo $row['apellido'];?></td>
			</tr>

		</table>

	<?php endforeach;?>	
</body>
</html>

<?php
	
	include_once 'controllerPrueba.php';

	$users = new controllerPrueba();

	if(isset($_POST['enviar'])){

		$nombre = $_POST['nombre'];

		$sql = "insert into tabla(nombre) values('$nombre'); "

		$user =$users->getId($sql);

		return $user;
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<table>
		<form action="post">
			<input type="text" name="nombre">
			<input type="submit" name="buttom" value="Enviar">
		</form>


	</table>
</body>
</html>
