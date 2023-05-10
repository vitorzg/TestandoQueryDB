<?php
require_once("Conn.php");

$db = new Database();
$query = "SELECT * FROM items";
$stmt = $db->conn->prepare($query);
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($result as $row) {
?>

    <form>

        <label>ID : <?=$row['ID']?></label>

        <input type="text" value="<?=$row['desc']?>">

        <input type="submit" value="Accept">

        <input type="submit" value="Deny">

    </form>

<?php
}

$stmt->closeCursor();
$db->conn = null;
?>