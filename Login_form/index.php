


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register and Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container" id="signup" style="display: none;">
        <h1 class="form-title">Register</h1>
        <form action="register.php" method="post" >
            <div class="input-group">
                <i class="fas fa-user"></i>
                <input type="text" name="fName" id="fName" placeholder="First Name" required>
                <Label for="fName">First Name</Label>
            </div>
            <div class="input-group">
                <i class="fas fa-user"></i>
                <input type="text" name="lName" id="lName" placeholder="Last Name" required>
                <Label for="lName">Last Name</Label>
            </div>
            <div class="input-group">
                <i class="fas fa-envelope"></i>
                <input type="email" name="email" id="email" placeholder="Email" required>
                <Label for="email">Email Name</Label>
            </div>
            <div class="input-group" >
                <i class="fas fa-lock"></i>
                <input type="password" id="password" name="password" placeholder="password" required>
                <label for="password">Password</label>
            </div>
            <!--<input type="submit" class="btn" value="Signup">  -->
            <input type="submit" class="btn" name="signUp" value="Signup">

        </form>
        <p class="or">
            --------or--------
        </p>
        <div class="icons">
            <i class="fab fa-google" ></i>
            <i class="fab fa-facebook" ></i>
        </div>
        <div class="links">
            <p>Already Have Accounts?</p>
            <button id="signInButton">Sign In</button>
            
        </div>
    </div>


    <div class="container" id="signIn">
        <h1 class="form-title">Login</h1>
        <form action="register.php" method="post" >
            
            <div class="input-group">
                <i class="fas fa-envelope"></i>
                <input type="email" name="email" id="email" placeholder="Email" required>
                <Label for="email">Email</Label>
            </div>
            <div class="input-group" >
                <i class="fas fa-lock"></i>
                <input type="password" id="password" name="password" placeholder="password" required>
                <label for="password">Password</label>
            </div>
            <p class="recover">
                <a href="#">Recover Password</a>
            </p>
            
            <input type="submit" class="btn" name="signIn" value="Sign In">

        </form>
        <p class="or">
            --------or--------
        </p>
        <div class="icons">
            <i class="fab fa-google" ></i>
            <i class="fab fa-facebook" ></i>
        </div>
        <div class="links">
            <p>Don't have account yet?</p>
            <button id="signUpButton">Sign up</button>
            
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>