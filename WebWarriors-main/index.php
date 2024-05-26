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
    <title>To-Do List</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="navbar">
        <h1>WebWarriors's To Do List </h1>
        <div class="navbar-buttons">
            <a href="completed_tasks.php">Completed</a>
            <a href="removed_tasks.php">Removed</a>
            <a href="php/sign_out.php">Sign Out</a>
        </div>
    </div>
    <div class="container">
        <div class="card">
            <div class="card_title mt-6">
                <h1>To-Do List</h1>
            </div>
            <div class="form">
                <form action="php/add_task.php" method="POST" id="task-form">
                    <input type="text" name="name" id="task-input" placeholder="New task" required>
                    <input type="text" name="description" id="task-input" placeholder="Description" required>
					<button type="submit">Add Task</button>
                </form>
            </div>
            <ul id="task-list">
                <?php
                $sql = "SELECT * FROM tasks WHERE user_id=$user_id AND removed=0 ORDER BY created_at DESC";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<li" . ($row['status'] === 'completed' ? " class='completed'" : "") . ">";
						echo htmlspecialchars($row['name']);
						echo "<br />";
						echo htmlspecialchars($row['description']);
                        echo " <a href='php/complete_task.php?id=" . $row['id'] . "'>Complete</a>";
                        echo " <a href='php/remove_task.php?id=" . $row['id'] . "'>Remove</a>";
                        echo "</li>";
                    }
                } else {
                    echo "<li>No tasks yet!</li>";
                }
                ?>
            </ul>
        </div>
    </div>
</body>
</html>
