<?php 
include ("conectkarl.php");

switch($_POST['pedir']){
	case 'verRecientes': verRecientes($db); break;
}

function verRecientes($db){
	$filas = [];
	$sql = $db->prepare("SELECT * FROM `tours` where visible=1 and activo=1 and pais = 140 order by id DESC limit 10;");
	if($sql->execute()){
		while($row = $sql->fetch(PDO::FETCH_ASSOC))
			$filas[] = array( 
				//'todo'=>$row,
				'id' => $row['id'],
				'tipo' => $row['tipo'],
				'url' => $row['url'],
				'calificacion' => $row['calificacion'],
				'contenido' => json_decode($row['contenido'], true)
		 	);
	}else{
		echo 'error';
	}
	echo json_encode($filas);
}