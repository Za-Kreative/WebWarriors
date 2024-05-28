<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: sign_in.php');
    exit();
}

include 'php/db.php';
$user_id = $_SESSION['user_id'];

$task_id = $_GET['id'];
$sql = "SELECT * FROM tasks WHERE id = $task_id AND user_id = $user_id";
$result = $conn->query($sql);
$task = $result->fetch_assoc();

if (!$task) {
    
    header('Location: index.php');
    exit();
}
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
            <a href="index.php">Home</a>
            <a href="completed_tasks.php">Completed</a>
            <a href="removed_tasks.php">Removed</a>
            <a href="php/sign_out.php">Sign Out</a>
        </div>
    </div>
    <div class="center-container">
        <div class="edit-card">
            <div class="card_title mt-6">
                <h1>Edit Task</h1>
            </div>
            <form action="php/edit_task.php" method="POST" class="task-form">
                <input type="hidden" name="id" value="<?php echo $task['id']; ?>">
                <div class="input-group">
                    <label for="task-name">Name:</label>
                    <input type="text" name="name" id="task-name" value="<?php echo htmlspecialchars($task['name']); ?>" required>
                </div>
                <div class="input-group">
                    <label for="task-description" class="description-label">Description:</label>
                    <textarea name="description" id="task-description" required><?php echo htmlspecialchars($task['description']); ?></textarea>
                </div>
                <button type="submit">Update Task</button>
            </form>
        </div>
    </div>
</body>
</html>
