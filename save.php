<?php

include('db.php');

if (isset($_POST['save_task'])) {
    $title = $_POST['title'];
    $description = $_POST['description'];

    // Asegurar con los metodos correspondientes 
    $query = "INSERT INTO tasks (title,description) VALUES ('$title', '$description')";
    $resultado = mysqli_query($connection, $query);

    if (!$resultado) {
        die("Query failled"); //termina la aplicacion
    }

    $_SESSION['message'] = 'Task Saved succefully';
    $_SESSION['message_type'] = 'success';
    
    header('Location: index.php'); //redireccionar
}
