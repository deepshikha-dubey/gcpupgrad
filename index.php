<?php
include 'db_connect.php';

// Ensure the connection is still open
if (!isset($conn) || $conn->connect_error) {
    die("Database connection failed.");
}

// Fetch users from the database
$result = $conn->query("SELECT * FROM users");

if (!$result) {
    die("Query failed: " . $conn->error);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Users List</title>
</head>
<body>
    <h2>Users</h2>
    <table border="1">
        <tr><th>ID</th><th>Name</th><th>Email</th><th>Actions</th></tr>
        <?php while ($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?= htmlspecialchars($row['id']) ?></td>
            <td><?= htmlspecialchars($row['name']) ?></td>
            <td><?= htmlspecialchars($row['email']) ?></td>
            <td>
                <a href="edit.php?id=<?= $row['id'] ?>">Edit</a> |
                <a href="delete.php?id=<?= $row['id'] ?>" onclick="return confirm('Are you sure?')">Delete</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
    <a href="add.php">Add User</a>
</body>
</html>

<?php
// Close connection
$conn->close();
?>
