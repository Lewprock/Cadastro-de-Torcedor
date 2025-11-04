<?php 

echo "<h1> Dados Enviados </h1>";

echo "<p>Torcedor " . $_POST['name'] . "</p>";
echo "===============================================================";
// echo "<p>Torcedor: ${$_POST['nome]} </p>'"
echo "<p>Cpf " . $_POST['cpf'] . "</p>";
echo "<p>Frequência no estádio: " . $_POST['estadio'] . "</p>";
echo "<p>É sócio torcedor? " . $_POST['socio'] . "</p>";
echo "<p>Possui camiseta oficial do time? " . $_POST['camisinha'] . "</p>";
echo "<p>Time do coração: " . $_POST['heart'] . "</p>";




// var_dump(value: $_POST);
// var_dump(value: $_GET); 

?>



