<?php
require_once('config.php');
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Registration</title>
</head>

<body>

    <div>
        <?php
        if (isset($_POST['create'])) {
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $cname = $_POST['cname'];
            $email = $_POST['email'];
            $number = $_POST['number'];
            $address = $_POST['address'];
            $country = $_POST['country'];
            $city = $_POST['city'];
            $state = $_POST['state'];
            $zip = $_POST['zip'];
            $password = $_POST['password'];


            $sql = "INSERT INTO users(firstname, lastname, cname, email, number, address, country, city, state, zip, password) VALUES(?,?,?,?,?,?,?,?,?,?,?)";
            $stmtinsert = $db->prepare($sql);
            $result = $stmtinsert->execute([$firstname, $lastname, $cname, $email, $number,  $address, $country,  $city,  $state, $zip,  $password]);

            // if ($result) {
            //     echo 'Successfully saved.';
            // } else {
            //     echo 'There were errors while saving the data.';
            // }



            // echo $firstname . $lastname . $cname . $email . $number .  $address . $country .  $city .  $state . $zip .  $password;
        }
        ?>
    </div>

    <div>
        <form action="registration.php" method="post">
            <div class="container">


                <div class="row g-2">

                    <h1>Artist Registration</h1>
                    <p>Fill up the form with correct values.</p>
                    <div class="col-md-6">
                        <label class="form-label" for="firstname"><b>First Name</b></label>
                        <input class="form-control" type="text" name="firstname" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="lastname"><b>Last Name</b></label>
                        <input class="form-control" type="text" name="lastname" required>
                    </div>
                    <label class="form-label" for="cname"><b>Company Name</b></label>
                    <input class="form-control" type="text" name="cname" required>
                    <div class="col-md-6">
                        <label class="form-label" for="email"><b>Email Address</b></label>
                        <input class="form-control" type="email" name="email" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="number"><b>Phone Number</b></label>
                        <input class="form-control" type="number" name="number" required>
                    </div>

                    <label class="form-label" for="address"><b>Address</b></label>
                    <textarea class="form-control" name="address" rows="4" cols="50"></textarea>

                    <label class="form-label" for="country"><b>Country</b></label>
                    <select class="form-select" name="country" required>
                        <option value="bangladesh">Bangladesh</option>
                        <option value="india">India</option>
                        <option value="canada">Canada</option>
                        <option value="australia">Australia</option>
                    </select>
                    <div class="col-md-6">
                        <label class="form-label" for="city"><b>City</b></label>
                        <input class="form-select" type="text" name="city" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="state"><b>State</b></label>
                        <input class="form-select" type="text" name="state" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="zip"><b>Zip Code</b></label>
                        <input class="form-select" type="number" name="zip" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="password"><b>Password</b></label>
                        <input class="form-select" type="password" name="password" required>
                    </div>

                    <input class="btn btn-primary" type="submit" id="register" name="create" value="Sign Up">

                </div>

            </div>




        </form>
    </div>

    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type='text/javascript'>
        $(function() {
            // $('#register').click(function() {
            //     var firstname = $('#firstname').val();
            //     var lastname = $('#lastname').val();
            //     var cname = $('#cname').val();
            //     var email = $('#email').val();
            //     var number = $('#number').val();
            //     var address = $('#address').val();
            //     var country = $('#country').val();
            //     var city = $('#city').val();
            //     var state = $('#state').val();
            //     var zip = $('#zip').val();
            //     var password = $('#password').val();

            // });
            // alert('hello.');
            Swal.fire({
                'title': 'Suessfully',
                'text': 'Successfully Created',
                'type': 'Success'

            })
        })
    </script> -->





    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>