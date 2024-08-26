<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<form method="post">
    Name: <input type="text" name="a"><br>
    PASS: <input type="text" name="b"><br>
    <input type="submit" name="x">
</form>

<?php
if (isset($_POST['x'])) {
    $name = $_POST['a'];
    $pass = $_POST['b'];

    if (empty($name) || empty($pass)) {
        echo "Champ obligatoire !";
    } else {
        $_SESSION['user'] = $name;
        $it = $_SESSION['user'] ?? '';
        echo "Welcome: " . htmlspecialchars($it);
    }
}
?>

</body>
</html>
