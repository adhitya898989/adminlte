<?php
include('./conf/connect.php');
include('./conf/edit_proses.php');
?>
<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="card card-info text-center">
            <div class="card-header">
                <h3 class="card-title">Inventori Data</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name stuff</th>
                            <th>Nick stuff</th>
                            <th>Price</th>
                            <th>Stock</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include('./conf/connect.php');
                        $sql = "SELECT * from $table order by id desc";
                        $query = mysqli_query($connect, $sql);
                        if (mysqli_num_rows($query) == 0) {
                            echo "<tr><td colspan='5'>There is no data</td></tr>";

                        } else {
                            $count = 1;
                            while ($data = mysqli_fetch_assoc($query)) {
                                echo "<tr>";
                                echo "<td>" . $count . "</td>";
                                echo "<td>" . $data['name_thing'] . "</td>";
                                echo "<td>" . $data['nick_thing'] . "</td>";
                                echo "<td>" . $data['price'] . "</td>";
                                echo "<td>" . $data['stock'] . "</td>";
                                echo "<td> <a href='./edit.php?id=$data[id]' class='btn btn-warning'><i class='fas fa-edit'></i>Edit</a> | 
                                    <a href='./conf/delete_proses.php?id=$data[id]' class='btn btn-danger'><i class='fas fa-trash'></i>Delete</a></td>";
                                echo "</tr>";
                                $count++;
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>