<div class="container">
    <h3 class="mt-3">List Of People</h3>

    <div class="row">
        <div class="col-md-6">
            <form action="" method="post">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search Keyword" name="keyword" autocomplete="off" autofocus>
                    <div class="input-group-append">
                        <input class="btn btn-info" type="submit" name="submit" value="Search">
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-md-10">
        <h5>Result : <?= $total_rows; ?></h5>
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php if(empty($peoples)) :?>
                <tr>                
                    <td colspan="4">
                        <div class="alert alert-danger" role="alert">
                            <strong>Data Not Found</strong>
                        </div>
                    </td>
                </tr>
                <?php endif ; ?>
                <?php foreach ($peoples as $people) : ?>
                    <tr>
                        <td scope="row"><?= ++$start; ?></td>
                        <td><?= $people['name']; ?></td>
                        <td><?= $people['email']; ?></td>
                        <td>
                            <a href="" class="badge badge-warning">Detail</a>
                            <a href="" class="badge badge-success">Edit</a>
                            <a href="" class="badge badge-danger">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>

            <?= $this->pagination->create_links(); ?>

        </div>        
    </div>
</div>