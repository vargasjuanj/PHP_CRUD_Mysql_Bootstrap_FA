<?php

include('db.php');

$id = $_GET['id'];


if (isset($id)) {
// Si aparece este error -> Warning: mysqli_num_rows() expects parameter 1 to be mysqli_result,
// Es probable que haya errores de nomenclatura como la tabla o las variables no están entre comillas simples  
$query = "SELECT * FROM tasks WHERE id= '$id'";
    $result = mysqli_query($connection, $query);

    // num_rows comprueba cuantas filas tiene el resultado
    //cuantos resultados me ha devuelto, alguna tarea que haya coincidido con el id
    if (mysqli_num_rows($result) == 1) {

        //toma el dato final, el resultado real
        $row = mysqli_fetch_array($result);

        //Accedemos a las propiedades 
        $title = $row['title'];
        $description = $row['description'];
    }

}

if(isset($_POST['update'])){

    echo "el id es $id";
  $title = $_POST['title'];
  $description = $_POST['description'];

  // Tener cuidado con las variables que se envian, deben ir entre comillas simples, sino no va actualizar o pueden a ver problemas. Si no le pongo nada al id , no ocurre error pero...
// y tambien al nombre de la tabla o  campos
  $query = "UPDATE tasks set title = '$title', description = '$description' WHERE id = '$id'";    
mysqli_query($connection, $query);

// Esto da error en este caso, osea no devuelve nada result
// if (!$result) {
//     die('Query edit failled');
// }
$_SESSION['message'] = "Task edit Successfully";
$_SESSION['message_type'] = "primary";

header('Location: index.php');

}


?>

<?php
include('includes/header.php')
?>

<div class="container p-4">

    <div class="row">
        <div class="col md-4 mx-auto">
            <div class="card-body">
                <form action="edit.php?id=<?php echo $_GET['id']?>" method="POST">

                    <div class="form-group">
                        <input type="text" name="title" class="form-control" placeholder="Task title" autofocus required value ="<?php echo $title; ?>">

                    </div>

                    <div class="form-group">
                        <textarea name="description" id="" rows="2" class="form-control" placeholder="Task Description" required><?php echo $description; ?></textarea>
                    </div>
                    <input type="submit" class="btn btn-success btn-block" name="update" value="Update Task">
                </form>
            </div>
        </div>
    </div>
</div>

<?php
include('includes/footer.php')
?>