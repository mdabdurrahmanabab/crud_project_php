<?php require 'assets/commonFile/header.php'?>
    <div class="container-fluid">

        <?php
    require "assets/auth/connect.php";

            $updateId = $_REQUEST['id'];
            $updateQuery = "SELECT * FROM user_info WHERE id= $updateId";

            $connectQuery = mysqli_query($connection,$updateQuery);
            while($row = mysqli_fetch_assoc($connectQuery)){
        ?>

        <form action="update.php" class="form form-control" method="post">
            <table class="table">
            <thead>
                <tr class="table-secondary">
                    <th>ID</th>
                    <td><input type="text" name="id" value="<?php echo $row['id'];?>"></td>
                </tr>
                <tr class="table-info">
                    <th>User name</th>
                    <td><input type="text" name="username" value="<?php echo $row['username'];?>"></td>
                </tr>
                <tr class="table-primary">
                    <th>E-mail</th>
                    <td><input type="email" name="email" value="<?php echo $row['email'];?>"></td>
                </tr>   
                <tr class="table-secondary">   
                    <th>Password</th>
                    <td><input type="text" name="password" value="<?php echo $row['password'];?>"></td>
                </tr>    
                <tr class="table-danger">    
                    <td></td>
                    <td><input type="submit" name="submit" value="Update Data" class="btn btn-glow"></td>
                    <input type="hidden" name="update_hidden" value="<?php echo $updateId?>">
                </tr>
            </table>
        </form> 

        <?php
            }
        ?>
    </div>
    <?php require 'assets/commonFile/footer.php';?>