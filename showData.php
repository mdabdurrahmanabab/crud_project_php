<?php require 'assets/commonFile/header.php';?>
    <div class="container">
        <div class="row mt-1">
            <div class="col-md-12">
                <a href="index.php" class="btn btn-info">Insurt user data</a>
                <a href="" class="btn btn-info">hello</a>
                <a href="" class="btn btn-info">hello</a>
                <a href="" class="btn btn-info">hello</a>
            </div>
        </div>
        <?php
        require "assets/auth/connect.php";
        $query = "SELECT * FROM `user_info` WHERE 1";
        $result = mysqli_query($connection, $query);
        $count = mysqli_num_rows($result);
        ?>


        <div class="row">
            <table class="table m-2">
                <thead>
                    <tr class="table-secondary">
                        <th>ID</th>
                        <th>User name</th>
                        <th>E-mail</th>
                        <th>Password</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr class="table-secondary">
                        <th>ID</th>
                        <th>User name</th>
                        <th>E-mail</th>
                        <th>Password</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <?php
                if ($count != 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['id'];
                        $name = $row['username'];
                        $email = $row['email'];
                        $password = $row['password'];
                ?>
                        <tbody>
                            <tr>
                                <td><?php echo $id; ?></td>
                                <td><?php echo $name; ?></td>
                                <td><?php echo $email; ?></td>
                                <td><?php echo $password; ?></td>
                                <td>
                                    <a href="delete.php?id=<?php echo $id; ?>" class="btn btn-danger">DELETE</a> 
                                    <a href="update_edit.php?id=<?php echo $id; ?>" class="btn btn-info">UPDATE</a>
                                </td>
                            </tr>
                        </tbody>
                    <?php

                    }
                } else {
                    echo "Please Insert a new user data in the database";
                }
                    ?>
            </table>                
        </div>
    </div>
    <?php require 'assets/commonFile/footer.php'; ?>