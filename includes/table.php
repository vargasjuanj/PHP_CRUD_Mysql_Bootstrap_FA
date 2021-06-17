
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Created At</th>
                        <th>Actions</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    $query = "SELECT * FROM tasks";

                    $resultTask = mysqli_query($connection, $query);


                    while ($row = mysqli_fetch_array($resultTask)) { ?>

                        <tr>
                            <td> <?php echo $row['title']  ?> </td>
                            <td> <?php echo $row['description']  ?> </td>
                            <td> <?php echo $row['created_at']  ?> </td>
                            <td class="text-center">
                                <a href="edit.php?id=<?= $row['id'] ?>" title="edit">
                                    <span class="text-secondary mr-3">
                                        <i class="fas fa-marker"></i>
                                    </span>

                                </a>
                                <a href="delete.php?id=<?= $row['id'] ?>" title="delete">
                                    <span class="text-danger"><i class="far fa-trash-alt"></i></span>
                                </a>

                            </td>
                        </tr>

                    <?php   } ?>

                </tbody>
            </table>
