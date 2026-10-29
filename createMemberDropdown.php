<?php
$sql = "SELECT id, firstname, surname FROM member";
$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($result)) {
    echo '<option value="' . $row['id'] . '">'
        . htmlspecialchars($row['firstname'] . ' ' . $row['surname'])
        . '</option>';
}
?>