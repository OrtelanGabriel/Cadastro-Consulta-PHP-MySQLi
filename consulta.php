<?php 

//Conexao com o banco - IP/Usuario/Senha/Banco
$conn = new mysqli("localhost", "root", "", "dbphp7");

//Tratamento de erro
if($conn->connect_error){

	echo "Error: " . $conn->connect_error;
}

$result = $conn->query("SELECT * FROM tb_usuarios ORDER BY deslogin");

$data = array();

//While enquanto olhar pro banco e Retorna um dado se ele exister (fetch_array) assoc - associative array
while ($row = $result->fetch_assoc()){

	array_push($data, $row);

}

echo json_encode($data);


 ?>