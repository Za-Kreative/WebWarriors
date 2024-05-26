<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: sign_in.php');
    exit();
}

include 'php/db.php';
$user_id = $_SESSION['user_id'];

if (!isset($_GET['id'])) {
    header('Location: index.php');
    exit();
}

$task_id = $_GET['id'];
$sql = "SELECT * FROM tasks WHERE id=$task_id AND user_id=$user_id";
$result = $conn->query($sql);

if ($result->num_rows == 0) {
    header('Location: index.php');
    exit();
}

$task = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Task</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="navbar">
        <h1>WebWarriors</h1>
        <div class="navbar-buttons">
            <a href="completed_tasks.php">Completed</a>
            <a href="removed_tasks.php">Removed</a>
            <a href="php/sign_out.php">Sign Out</a>
        </div>
    </div>
    <div class="container">
        <div class="card">
            <div class="card_title mt-6">
                <h1>Edit Task</h1>
            </div>
            <div class="form">
                <form action="php/edit_task.php" method="POST" id="edit-task-form">
                    <input type="hidden" name="id" value="<?php echo $task_id; ?>">
                    <label for="task-name">Name:</label>
                    <input type="text" name="name" id="task-name" placeholder="Task name" value="<?php echo htmlspecialchars($task['name']); ?>" required>
                    <label for="task-description">Description:</label>
                    <textarea name="description" id="task-description" placeholder="Task description" required><?php echo htmlspecialchars($task['description']); ?></textarea>
                    <button type="submit">Update Task</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
