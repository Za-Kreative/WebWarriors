<?php

// Vérifier si le formulaire est soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer et échapper les données du formulaire
    $task_id = intval($_POST['task_id']);
    $description = escape_string($conn, $_POST['description']);

    // Requête de mise à jour
    $sql = "UPDATE tasks SET description='$description' WHERE id=$task_id";

    if ($conn->query($sql) === TRUE) {
        echo "La description de la tâche a été mise à jour avec succès.";
    } else {
        echo "Erreur lors de la mise à jour de la description de la tâche : " . $conn->error;
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Modifier la Description d'une Tâche</title>
</head>
<body>
    <h2>Modifier la Description d'une Tâche</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="task_id">ID de la Tâche :</label>
        <input type="text" id="task_id" name="task_id" required><br><br>
        
        <label for="description">Nouvelle Description :</label>
        <textarea id="description" name="description" required></textarea><br><br>
        
        <input type="submit" value="Modifier la Description">
    </form>
</body>
</html>
