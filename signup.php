<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Bootstrap Tags -->
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>


    <title>SignUp - TimeFinds</title>
</head>
<body>
    <div class="container">
        <br/>
        <h3 class="text-center">SignUp - TimeFinds</h3>
        <div class="row">
            <!--Image Column -->
            <div class="col-sm-4">
                <br/>
                <br/>
                <img src="./img/stamps.jpg" class="img-fluid"/>
            </div>

            <!-- Form Column -->
            <div class="col-sm-8">
                <br/>
                <form>
                <div class="mb-3">
                        <label for="InputName" class="form-label">Full Name</label>
                        <input type="email" class="form-control" id="InputName" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="InputEmail" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="InputEmail" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text text-danger">*We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="InputPassword" class="form-label">Password</label>
                        <input type="password" class="form-control" id="InputPassword">
                        <div id="passwordHelpBlock" class="form-text text-danger">
                            *Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="InputConfirmPassword" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" id="InputConfirmPassword">
                    </div>
                    <div class="col-auto">
                        <label for="InputPhoneNumber" class="col-form-label">Phone Number: +91-</label>
                        <input type="tel" id="InputPhoneNumber" aria-describedby="passwordHelpInline">
                    </div>
                    <br/>
                    <div class="d-grid gap-2 col-4 mx-auto">
                        <button type="submit" class="btn btn-primary btn-block">Submit</button>
                        <input class="btn btn-outline-primary" type="reset" value="Reset">
                    </div>
                </form>
                <br/>
                <p class="text-center">Already have an account? <a href="./signin.php">Sign In</a></p>
            </div>
        </div>
    </div>
</body>
</html>