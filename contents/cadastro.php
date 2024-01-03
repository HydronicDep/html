Cadastro Efetuado com Sucesso! <br>
<hr>

<?php
$iuse = isset($_POST['usu']) ? $_POST['usu'] : ''; 
$ipas = isset($_POST['pas']) ? $_POST['pas'] : ''; 

echo "Seu Usuário: " . $_POST["usu"] . "<br>";
echo "Sua Senha: " . $_POST["pas"] . "<br>";
?>


