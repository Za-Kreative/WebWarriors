<?php
// Variables pour les messages de retour
$message = "";
// Traitement de la modification de la description d'une tâche
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['action']) && $_POST['action'] == 'update') {
    $id = $_POST['id'];
    $description = $_POST['description'];

    $sql = "UPDATE taches SET description=? WHERE id=?";
    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("si", $description, $id);
        if ($stmt->execute()) {
            $message = "La description de la tâche a été mise à jour avec succès.";
        } else {
            $message = "Erreur lors de la mise à jour de la description de la tâche : " . $stmt->error;
        }
        $stmt->close();
    } else {
        $message = "Erreur de préparation de la requête : " . $conn->error;
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
