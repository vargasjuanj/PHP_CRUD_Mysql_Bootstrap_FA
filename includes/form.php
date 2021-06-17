<div class="col-md-4">

<?php if (isset($_SESSION['message'])) { ?>
    <div class="alert alert-<?= $_SESSION['message_type'] ?> alert-dismissible fade show" role="alert">
        <?= $_SESSION['message'] ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php session_unset();
} ?>
<div class="card card-body">
    <form action="save.php" method="POST">

        <div class="form-group">
            <input type="text" name="title" class="form-control" placeholder="Task title" autofocus required>

        </div>

        <div class="form-group">
            <textarea name="description" id="" rows="2" class="form-control" placeholder="Task Description" required></textarea>
        </div>
        <input type="submit" class="btn btn-success btn-block" name="save_task" value="Save Task">
    </form>

</div>

</div>