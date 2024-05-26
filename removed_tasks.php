<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: sign_in.php');
    exit();
}

include 'php/db.php';
$user_id = $_SESSION['user_id'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Removed Tasks</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="navbar">
        <h1>WebWarriors</h1>
        <div class="navbar-buttons">
            <a href="index.php">Home</a>
            <a href="completed_tasks.php">Completed</a>
            <a href="php/sign_out.php">Sign Out</a>
        </div>
    </div>
    <div class="main-container">
        <div class="card">
            <div class="card_title mt-6">
                <h1>Removed Tasks</h1>
            </div>
            <ul id="task-list" class="flex-container">
                <?php
                $sql = "SELECT * FROM tasks WHERE user_id=$user_id AND removed=1 ORDER BY created_at DESC";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<li class='flex-item'>";
                        echo "<div class='task-content'>";
                        echo "<h2>" . htmlspecialchars($row['name']) . "</h2>";
                        echo "<p>" . htmlspecialchars($row['description']) . "</p>";
                        echo "<div class='task-actions'>";
                        echo " <a href='php/recover_task.php?id=" . $row['id'] . "' class='task-button recover-button'>Recover</a>";
                        echo " <a href='php/delete_task.php?id=" . $row['id'] . "' class='task-button remove-button'>Delete</a>";
                        echo "</div>";
                        echo "</div>";
                        echo "</li>";
                    }
                } else {
                    echo "<li>No removed tasks yet!</li>";
                }
                ?>
            </ul>
        </div>
    </div>
</body>
</html>
