<?php

require_once('../Conn.php');

if($_SERVER['REQUEST_METHOD'] === 'POST'){

  $item = $_POST['item'];

  $db = new Database();

  $query = "INSERT INTO itens(item) VALUES(:item)";

  $stmt = $db->conn->prepare($query);

  $stmt->bindParam(':item', $item);

  if ($stmt->execute()) {
      echo "Deu bom";
  } else {
      echo "Erro ao inserir item";
  }

  $stmt->closeCursor();
  $db->conn = null;

}


?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Cadastrar</title>
  </head>
  <body>
    <form method="POST">
      <label for="item">Item:</label>
      <input type="text" id="item" name="item" required><br><br>
      <button type="submit">Enviar</button>
    </form>
  </body>
</html>