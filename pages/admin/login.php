<!-- <!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link href="assets/img/movie.png" rel="icon">
    <link href="assets/img/movie.png" rel="apple-touch-icon">

</head>

<style>
.form-bg {
    background-image: url('background-image.jpg');
    background-size: cover;
    background-position: center center;
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
}

.form-container {
    background: #00014a;
    font-family: 'Roboto', sans-serif;
    font-size: 0;
    padding: 0 15px;
    border: 1px solid #00014a;
    border-radius: 15px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
}

.form-container .form-icon {
    color: #fff;
    font-size: 13px;
    text-align: center;
    text-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
    width: 50%;
    padding: 70px 0;
    vertical-align: top;
    display: inline-block;
}

.form-container .form-icon i {
    font-size: 124px;
    margin: 0 0 15px;
    display: block;
}

.form-container .form-icon .signup a {
    color: #fff;
    text-transform: capitalize;
    transition: all 0.3s ease;
}

.form-container .form-icon .signup a:hover {
    text-decoration: underline;
}

.form-container .form-horizontal {
    background: rgba(255, 255, 255, 0.99);
    width: 50%;
    padding: 60px 30px;
    margin: -20px 0;
    border-radius: 15px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
    display: inline-block;
}

.form-container .title {
    color: #454545;
    font-size: 23px;
    font-weight: 900;
    text-align: center;
    text-transform: capitalize;
    letter-spacing: 0.5px;
    margin: 0 0 30px 0;
}

.form-horizontal .form-group {
    background-color: rgba(255, 255, 255, 0.15);
    margin: 0 0 15px;
    border: 1px solid #b5b5b5;
    border-radius: 20px;
}

.form-horizontal .input-icon {
    color: #b5b5b5;
    font-size: 15px;
    text-align: center;
    line-height: 38px;
    height: 35px;
    width: 40px;
    vertical-align: top;
    display: inline-block;
}

.form-horizontal .form-control {
    color: #b5b5b5;
    background-color: transparent;
    font-size: 14px;
    letter-spacing: 1px;
    width: calc(100% - 55px);
    height: 33px;
    padding: 2px 10px 0 0;
    box-shadow: none;
    border: none;
    border-radius: 0;
    display: inline-block;
    transition: all 0.3s;
}

.form-horizontal .form-control:focus {
    box-shadow: none;
    border: none;
}

.form-horizontal .form-control::placeholder {
    color: #b5b5b5;
    font-size: 13px;
    text-transform: capitalize;
}

.form-horizontal .btn {
    color: rgba(255, 255, 255, 0.8);
    background: #00014a;
    font-size: 15px;
    font-weight: 500;
    text-transform: uppercase;
    letter-spacing: 1px;
    width: 100%;
    margin: 0 0 10px 0;
    border: none;
    border-radius: 20px;
    transition: all 0.3s ease;
}

.form-horizontal .btn:hover,
.form-horizontal .btn:focus {
    color: #fff;
    background-color: #00014a;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.5);
}

.form-horizontal .forgot-pass {
    font-size: 12px;
    text-align: center;
    display: block;
}

.form-horizontal .forgot-pass a {
    color: #999;
    transition: all 0.3s ease;
}

.form-horizontal .forgot-pass a:hover {
    color: #777;
    text-decoration: underline;
}

@media only screen and (max-width:576px) {
    .form-container {
        padding-bottom: 15px;
    }

    .form-container .form-icon {
        width: 100%;
        padding: 20px 0;
    }

    .form-container .form-horizontal {
        width: 100%;
        margin: 0;
    }
}
</style>

<body>

    <div class="form-bg">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-offset-5 col-lg-6 col-md-offset-2 col-md-8">
                    <div class="form-container">
                        <div class="form-icon">
                            <i class="fa fa-user-circle"></i>
                            <img src="../img/lumiere logo.png" alt="">
                        </div>
                        <form class="form-horizontal" action="proses_login.php" method="post">
                            <h3 class="title">Sign In</h3>
                            <div class="form-group">
                                <span class="input-icon"><i class="fa fa-envelope"></i></span>
                                <input class="form-control" type="text" name="username" placeholder="Username">
                            </div>
                            <div class="form-group">
                                <span class="input-icon"><i class="fa fa-lock"></i></span>
                                <input class="form-control" type="password" name="password" placeholder="Password">
                            </div>
                            <button class="btn signin" type="submit">Login</button>
                            <span class="forgot-pass"><a href="signup.php">Don't have account? Signup</a></span>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>




</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in || Sign up</title>
     <!-- font awesome icons -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- css stylesheet -->
    <!-- <link rel="stylesheet" href="style.css"> -->
</head>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap');

* {
    padding: 0px;
    margin: 5px;
    box-sizing: border-box;
}
:root {
    --linear-grad: linear-gradient(to right, #141E30, #243B55);
    --grad-clr1: #141E30;
    --grad-clr2: #243B55;
}
body {
    height: 100vh;
    background: #f6f5f7;
    display: grid;
    place-content: center;
    font-family: 'Poppins', sans-serif;
}
.container {
    position: relative;
    width: 850px;
    height: 500px;
    background-color: #fff;
    box-shadow: 25px 30px 55px #5557;
    border-radius: 13px;
    overflow: hidden;
}
.form-container {
    position: absolute;
    width: 60%;
    height: 100%;
    padding: 0px 40px;
    transition: all 0.6s ease-in-out;
}
.sign-up-container {
    opacity: 0;
    z-index: 1;
}
.sign-in-container {
    z-index: 2;
}
form {
    height: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding: 0px 50px;
}
h1  {
    color: var(--grad-clr1);
}
.social-container {
    margin: 20px 0px;
}
.social-container a {
    border: 1px solid #ddd;
    border-raadius: 50%;
    display: inline-flex;
    justify-content: center;
    align-items: center;
    margin: 0px 5px;
    haight: 40px;
    width: 40px;
}
span {
    font-size: 12px;
}
.infield {
    position: relative;
    margin: 8px 0px;
    width: 100%;
}
input {
    width: 100%;
    padding: 12px 15px;
    background-color: $f3f3f3;
    border: none;
    outline: none;
}
label {
    position: absolute;
    left: 50%;
    top: 100%;
    transform: translteX(-50%);
    widthh: 0%;
    height: 2px;
    background: var(--linear-grad);
    transition: 0.3s;
}
input:focus ~ label {
    width: 100%;
}
a {
    color: #333;
    font-size: 14px;
    text-decoration: none;
    margin: 15px 0px;
}
a.forgot {
    padding-bottom: 3px;
    border-bottom: 2px solid #eee;
}
button {
    border-radius: 20px;
    border: 1px solid var(--grad-clr1);
    background: var(--grad-clr1);
    color: #fff;
    font-size: 12px;
    font-weight: bold;
    padding: 12px 45px;
    letter-spacing: 1px;
    text-transform: uppercase;
}
.form-container button {
    margin-top: 17px;
    transition: 80ms ease-in;
}
.form-container button:hover {
    background: #fff;
    color: var(--grad-clr1);
}
.overlay-container {
    position: absolute;
    top: -2%;
    left: 60%;
    width: 40%;
    height: 101%;
    overflow: hidden;
    transition: transform 0.6s ease-in-out;
    z-index: 9;
}
#overlayBtn {
    cursor: pointer;
    position: absolute;
    left: 50%;
    top: 304px;
    transform: translateX(-50%);
    width: 143.67px;
    height: 40px;
    border: 1px solid #fff;
    background: transparent;
    border-radius: 20px;
}
.overlay {
    position: relative;
    background: var(--linear-grad);
    color: #fff;
    left: -150%;
    height: 100%;
    width: 250%;
    transition: transform 0.6s ease-in-out;
}
.overlay-panel {
    position: absolute;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    padding: 0px 40px;
    text-align: center;
    height: 100%;
    width: 340%;
    transition: 0.6s ease-in-out;
}
.overlay-left {
    right: 60%;
    transform: translateX(62%);
}
.overlay-right {
    right: 19%;
    transform: translateX(0%);
}
.overlay-panel h1{
    color: #fff;
}
p {
    font-size: 14px;
    font-weight: 300;
    line-height: 20px;
    letter-spacing: 0.5px;
    margin: 25px 0px 35px;
}
.overlay-panel button {
    border: none;
    background-color: transparent;
}
.right-panel-active .overlay-container {
    transform: translateX(-150%);
}
.right-panel-active .overlay {
    transform: translateX(50%);
}
.right-panel-active .overlay-left {
    transform: translateX(25%);
}
.right-panel-active .overlay-right {
    transform: translateX(35%);
}
.right-panel-active .sign-in-container {
    transform: translateX(20%);
    opacity: 0;
}
.right-panel-active .sign-up-container {
    transform: translateX(66.7%);
    opacity: 1;
    z-index: 5;
    animation: show 0.6s;
}
@keyframes show {
    0%, 50% {
        opacity: 0;
        z-index: 1;
    }
    50.1%, 100% {
        opacity: 0;
        z-index: 5;
    }
}
.btnScaled {
    animation: scaleBtn 0.6s;
}
@keyframes scaleBtn {
    0% {
        width: 143.67px;
    }
    50% {
        width: 250px;
    }
    100% {
        width: 143.67px;
    }
}


</style>

<body>

    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form action="#">
                <h1>Create Account</h1>
                <h3>LUMIERE CINEMA</h3>
                <span>Use Your Email For Registration</span>
                <div class="infield">
                    <input type="text" placeholder="Name"  name="name"/>
                    <label></label>
                </div>
                <div class="infield">
                    <input type="email" placeholder="Username" name="username"/>
                    <label></label>
                </div>
                <div class="infield">
                    <input type="password" placeholder="Password" name="password" />
                    <label></label>
                </div>
                <button>Sign Up</button>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form action="#">
                <h1>Sign in</h1>
                <h3>LUMIERE CINEMA</h3>
                <span>Use Your Account</span>
                <div class="infield">
                    <input type="email" placeholder="Email" name="email"/>
                    <label></label>
                </div>
                <div class="infield">
                    <input type="password" placeholder="Password" />
                    <label></label>
                </div>
                <button>Sign In</button>
            </form>
        </div>
        <div class="overlay-container" id="overlayCon">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Hello, Friend!</h1>
                    <p>Start journey with us</p>
                    <button>Sign Up</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Welcome Back!</h1>
                    <p>Please login with your personal info</p>
                    <button>Sign In</button>
                </div>
            </div>
            <button id="overlayBtn"></button>
        </div>
    </div>
    
    <!-- js code -->
    <script>
        const container = document.getElementById('container');
        const overlayCon = document.getElementById('overlayCon');
        const overlayBtn = document.getElementById('overlayBtn');

        overlayBtn.addEventListener('click', () => {
            container.classList.toggle('right-panel-active');

            overlayBtn.classList.remove('btnScaled');
            window.requestAnimationFrame( ()=> {
                overlayBtn.classList.add('btnScaled');
            })
        });
    </script>

</body>
</html>