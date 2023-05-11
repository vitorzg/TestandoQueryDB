<?php
    require_once("Conn.php");

    $db = new Database();
    $query = "SELECT * FROM itens WHERE status = 'PD'";
    $stmt = $db->conn->prepare($query);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($result as $row) {
    ?>

        <form>

            <label>ID : <?=$row['ID']?></label>

            <textarea cols="30" rows="5" style="resize: none;"><?=$row['item']?></textarea>

            <input type="submit" value="Accept">

            <input type="submit" value="Deny">

        </form>

    <?php
    }

    $stmt->closeCursor();
    $db->conn = null;
?>