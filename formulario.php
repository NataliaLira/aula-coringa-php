<?php 
var_dump($_POST);
if(empty(!$_POST)){
  $nome = $_POST['nome'];

  if(strlen($nome) < 4){
    echo "Tamanho de nome insuficiente";
    //exit;
    header('Location: formulario.php');
 }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulário</title>
</head>
<body>
  <form action="" method="post">
    <label for="">Nome:</label>
      <input type="text" name="nome"> <br>
    <label for="">Idade:</label>
      <input type="number" name="idade" id=""><br>
    <label for="">Opinião:</label>
      <textarea name="opiniao" id="" cols="30" rows="10">
      </textarea><br>
    <label for="">Como foi seu atendimento?</label>
      <select name="avaliacao" id="">
        <option value="bom">Bom</option>
        <option value="indiferente">Indiferente</option>
        <option value="ruim">Ruim</option>
      </select><br>
      <button> Enviar Formulário</button>
  </form>
</body>
</html>