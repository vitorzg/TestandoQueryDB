<?php
    require_once("Conn.php");

    $db = new Database();
    $query = "SELECT * FROM itens WHERE status = 'PD'";
    $stmt = $db->conn->prepare($query);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($result as $row) {
    ?>

        <form method="post" action="./src/validate.php">

            <label>ID :</label>
            <input type="number" name="id" id="id" value="<?=$row['ID']?>">

            <input type="text" name="msg" id="msg" value="<?=$row['item']?>">

            <button type="submit" value="Accept">Aceitar</button>

        </form>

    <?php
    }

    $stmt->closeCursor();
    $db->conn = null;
?>