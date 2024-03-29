<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in || Sign up</title>
     <!-- font awesome icons -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap');

* {
    padding: 0px;
    margin: 5px;
    box-sizing: border-box;
}
:root {
    --linear-grad: linear-gradient(to right, #1c2938, #1c2938);
    --grad-clr1: #1c2938;
    --grad-clr2: #1c2938;
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
            <form action="proses_signup.php" method="post">
                <h1>Create Account</h1>
                <h3>LUMIERE CINEMA</h3>
                <span>Use Your Email For Registration</span>
                <div class="infield">
                    <input type="text" placeholder="Name"  name="nama"/>
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
            <form action="proses_login.php" method="post">
                <h1>Sign in</h1>
                <h3>LUMIERE CINEMA</h3>
                <span>Use Your Account</span>
                <div class="infield">
                    <input type="email" placeholder="Username" name="username"/>
                    <label></label>
                </div>
                <div class="infield">
                    <input type="password" placeholder="Password" name="password"/>
                    <label></label>
                </div>
                <button>Sign In</button>
            </form>
        </div>
        <div class="overlay-container" id="overlayCon">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Hello, Admin!</h1>
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