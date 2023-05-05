<?php
require_once("Conn.php");

$db = new Database();
$query = "SELECT * FROM itens";
$stmt = $db->conn->prepare($query);
$stmt->execute();
$result = $stmt->get_result();

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

$stmt->close();
$db->conn->close();
?>