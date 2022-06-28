

<?php $__env->startSection('content'); ?>
    <div class="table-responsive">
        <table class="table table-hover table-striped">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Surname</th>
                <th scope="col">Email</th>
                <th scope="col">Order Number</th>
                <th scope="col">Furniture</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $conn = new mysqli("localhost", "root", "Nfyrjvfysz123", "sparkler");
            if($conn->connect_error){
                die("Error: " . $conn->connect_error);
            }
            $sql = "SELECT * FROM Clients";
            if($result = $conn->query($sql)){
                $rowsCount = $result->num_rows;
                foreach($result as $row){
                    echo "<tr>";
                        echo "<td>" . $row["id"] . "</td>";
                        echo "<td>" . $row["name"] . "</td>";
                        echo "<td>" . $row["surname"] . "</td>";
                        echo "<td>" . $row["email"] . "</td>";
                        echo "<td>" . $row["order_num"] . "</td>";
                        echo "<td>" . $row["furniture_id"] . "</td>";
                    echo "</tr>";
                }
                echo "</table>";
                $result->free();
            } else{
                echo "Error: " . $conn->error;
            }
            $conn->close();
            ?>
            
            </tbody>
        </table>
    </div><!-- ./table-responsive-->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\WAMP\apache2\htdocs\sparkler\resources\views/home.blade.php ENDPATH**/ ?>