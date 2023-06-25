<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.datatables.net/v/dt/dt-1.13.4/datatables.min.css" rel="stylesheet" />
    <title>Add name</title>

    <style>
        .error{
            display: block;
            padding-top: 5px;
            font-size: 14px;
            color: red;
        }
    </style>
</head>

<body>
    <div class="container mt-4">
        <h1>CodeIgniter CRUD - Add</h1>
        <hr>
        <div class="d-flex justify-content-end">
            <a href="<?php echo site_url('/namelist'); ?>" class="btn btn-primary">Back to Name list</a>
        </div>

        <div class="mt-3">
            <form action="<?= site_url('/submit-form'); ?>" method="post" name="addname" id="add-form">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-success mt-2" value="Add Data">
                </div>
            </form>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/v/dt/dt-1.13.4/datatables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.js"></script>
    <script>
        $(document).ready(function() {
           if ($('#add-form').length > 0) {
                $('#add-form').validate({
                    rules: {
                        name:{
                            required:true
                        },
                        email: {
                            required: true,
                            maxlength: 60,
                            email:true
                        }
                    },
                    messages: {
                        name:{
                            required: 'Name is required.',
                        },
                        email:{
                            required: 'Email is required.',
                            email: 'It does not seem to be a valid email.',
                            maxlength: 'The email should be or equal to 60 chars.'
                        }
                    }
                });
           }
        })
    </script>
</body>

</html>