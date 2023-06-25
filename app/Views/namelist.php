<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.datatables.net/v/dt/dt-1.13.4/datatables.min.css" rel="stylesheet"/>
    <title>Namelist</title>
</head>
<body>
    <div class="container mt-4">
        <h1>CodeIgniter CRUD</h1>
        <hr>
        <div class="d-flex justify-content-end">
            <a href="<?php echo site_url('/addname'); ?>" class="btn btn-primary">Add a name & email</a>
        </div>

        <div class="mt-3">
            <table class="table table-bordered" id="users-list">
                <thead>
                    <tr>
                        <th>User Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                    <tbody>
                        <?php if($users):?>
                            <?php foreach($users as $user):?>
                                <tr>
                                    <td><?php echo $user['id']; ?></td>
                                    <td><?php echo $user['name']; ?></td>
                                    <td><?php echo $user['email']; ?></td>
                                    <td>
                                        <a href="<?php echo base_url('editname/'.$user['id']); ?>" class="btn btn-warning">Edit</a>
                                        <a href="<?php echo base_url('delete/'.$user['id']); ?>" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            <?php endforeach;?>
                        <?php endif; ?>
                    </tbody>
            </table>
        </div>
    </div>
   
   <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   <script src="https://cdn.datatables.net/v/dt/dt-1.13.4/datatables.min.js"></script>
   <script>
    $(document).ready(function(){
        $('#users-list').DataTable();
    });
   </script>
</body>
</html>