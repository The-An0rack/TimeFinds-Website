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


    <title>SignIn - TimeFinds</title>
</head>
<body>
    <br/>
    <h1 class="text-center">SignIn - TimeFinds</h1>
    <div class="text-center"> 
        <img src="./img/coin.jpg" class="img-fluid"/>
    </div>
    <div class="container">
        <form>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text text-danger">*We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
                <div id="passwordHelpBlock" class="form-text text-danger">
                    *Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
                </div>
            </div>
            <div class="d-grid gap-2 col-4 mx-auto">
                <button type="submit" class="btn btn-primary btn-block">Submit</button>
                <input class="btn btn-outline-primary" type="reset" value="Reset">
            </div>
        </form>
    </div>
    <br/>

    <p class="text-center">Do not have an account? <a href="./signup.php">Sign Up</a></p>
</body>
</html>