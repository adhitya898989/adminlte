<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="card card-warning">
            <div class="card-header">
                <h3 class="card-title">Form Data</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <?php
                if ($succes) {
                    echo "<div class='alert alert-success alert-dismissible'>
                        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                        <h5><i class='icon fas fa-check'></i> Success! </h5>" . $succes . "</div>";
                }
                if ($error) {
                    echo "<div class='alert alert-danger alert-dismissible'>
                        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                        <h5><i class='icon fas fa-ban'></i> Error! </h5>" . $error . "</div>";
                }
                ?>
                <form method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Name Thing</label>
                                <input value="<?php echo isset($data['name_thing']) ? $data['name_thing'] : ''; ?>" name="name_thing" type="text" class="form-control"
                                    placeholder="Insert your thing!">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Nick Thing</label>
                                <input value="<?php echo isset($data['nick_thing']) ? $data['nick_thing'] : ''; ?>" name="nick_thing" type="text" class="form-control"
                                    placeholder="Insert the nick of the thing!">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- textarea -->
                            <div class="form-group">
                                <label>Price</label>
                                <input value="<?php echo isset($data['price']) ? $data['price'] : ''; ?> " name="price"
                                    type="text" class="form-control" rows="3"
                                    placeholder="Insert the price of the thing!">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Stock</label>
                                <input value="<?php echo isset($data['stock']) ? $data['stock'] : ''; ?>" name="stock" type="number" class="form-control" rows="3"
                                    placeholder="How much stocks are available?">
                            </div>
                        </div>
                    </div>
                    <div class='col-sm-2'>
                        <input name="upload" type="submit" class="btn btn-block btn-warning" value="Upload">
                    </div>
                </form>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
</section>