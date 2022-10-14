<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Registration Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="icon" href="img/registration.png" type="image/png">

</head>
<style>
    body{
        background-color: whitesmoke;
    }
    .mybody{
        margin: 3%;
        width: 50%;
    }
    .form-label{
        font-weight:bold;
    }
    .form-text{
        font-weight: 600;
        font-size: 9px;
        font-style: italic;
    }
    .card{
        box-shadow: 10px 10px 5px rgb(200,200,200);
    }
    .submit{
        float: right;
        width: 50%;
        font-weight:bold;

    }
</style>
<body>
    <div class="container">
        <div class="row">
            <div class="d-flex justify-content-center">
                <div class="mybody">
                    <div class="">
                        <h3><center>A Simple Registration Form</center></h3>
                        <p><center>The Form stores Users Data in a File .csv Format</center></p>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <form action="user_data.php" method="POST" autocomplete="off">
                                <div class="mb-3">
                                    <label for="names" class="form-label">Names</label>
                                    <input type="text" class="form-control" id="names" name="names" required>
                                    <div id="nameHelp" class="form-text">First Name and Lastname</div>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                    <div id="emailHelp" class="form-text">username@domain.com</div>
                                </div>
                                <div class="mb-3">
                                    <label for="dob" class="form-label">Date of Birth</label>
                                    <input type="date" class="form-control" id="dob" name="dob" required>
                                    <div id="dobHelp" class="form-text">Select Date of Birth - MM/DD/YYYY</div>
                                </div>
                                <div class="mb-3">
                                    <label for="gender" class="form-label">Gender</label>
                                    <select class="form-control" id="gender" name="gender" required>
                                        <option value="">--Select Gender--</option>
                                        <option value="Female">Female</option>
                                        <option value="Male">Male</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="country" class="form-label">Country</label>
                                    <input type="text" class="form-control" id="country" name="country" required>
                                </div>
                                <button type="submit" name="submit" class="btn btn-success submit">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>