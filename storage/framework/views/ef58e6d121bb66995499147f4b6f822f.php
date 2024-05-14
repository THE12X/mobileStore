<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo e(url('Font awsome MRX/css/font-awesome.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(url('Font awsome MRX/css/font-awesome.css')); ?>">

    <title>Signup/Login </title>
    <style>
        * {
            font-family: comfortaa, sans-serif;
            border-radius: 40px;
        }

        h1 {
            color: #464646
        }

        html {
            background: #e0e0e0;
            display: flex;
            justify-content: center;
        }

        body {
            display: flex;
            width: 96%;
            height: 96vh;
            background: #e0e0e0;
            box-shadow: 15px 15px 30px #bebebe, -15px -15px 30px #ffffff;
            justify-content: space-around;

        }

        .body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 90vh;
            background: #e0e0e0;
        }

        .main {
            width: 350px;
            height: 500px;
            overflow: hidden;
            background: url("./yy.jpg") no-repeat center/ cover;
            border-radius: 10px;
            box-shadow: 15px 15px 30px #bebebe,
                -15px -15px 30px #ffffff;
        }

        #chk {
            display: none;
        }

        .signup {
            position: relative;
            width: 100%;
            height: 100%;
        }

        label {
            color: #fff;
            font-size: 2.3em;
            justify-content: center;
            display: flex;
            margin: 60px;
            font-weight: bold;
            cursor: pointer;
            transition: 0.5s ease-in-out;
        }

        input {
            width: 60%;
            height: 20px;
            background: #e0dede;
            justify-content: center;
            display: flex;
            margin: 20px auto;
            padding: 10px;
            border: none;
            outline: none;
            border-radius: 5px;
        }

        .inp {
            box-shadow: 6px 6px 12px #ffffff, -6px -6px 12px #c5c5c5;
        }

        .inp:focus {
            outline-color: white;
        }

        button {
            width: 60%;
            height: 40px;
            margin: 10px auto;
            justify-content: center;
            display: block;
            color: #fff;
            background: #ff8800e3;
            font-size: 1em;
            font-weight: bold;
            margin-top: 20px;
            outline: none;
            border: none;
            border-radius: 5px;
            transition: 0.2s ease-in;
            cursor: pointer;
        }

        button:hover {
            background: #ff6600;
        }

        .login {
            height: 460px;
            background: #eee;
            border-radius: 60% / 10%;
            transform: translateY(-180px);
            transition: 0.8s ease-in-out;
        }

        .login label {
            color: #ff7300;
            transform: scale(0.6);
        }

        #chk:checked~.login {
            transform: translateY(-500px);
        }

        #chk:checked~.login label {
            transform: scale(1);
        }

        #chk:checked~.signup label {
            transform: scale(0.6);
        }

        .des {
            max-width: 600px;
        }

        span {
            color: #ff7300
        }
        .success{
            color: #3cff00
        }
        .alert {
            color: red
        }
    </style>
</head>

<body>
    <div class="body">
        <div class="container">
            <div class="des">
                <img src="/logoo.png" alt="img">
                <h1>
                    WELCOME TO X MOBILE MARKET <span> [XMM]</span>, FIND YOUR PREFERABLE PHONE TO BUY, FOR CASUAL USAGE,
                    GAMING AND HARD <br> USAGE.
                </h1>
                <?php if(Session::has('error')): ?>
                <div class="alert">
                    <?php echo e(Session::get('error')); ?>

                </div>
            <?php endif; ?>

            <?php if(Session::has('success')): ?>
                <div class="success">
                    <?php echo e(Session::get('success')); ?>

                </div>
            <?php endif; ?>
            </div>
        </div>
        <div class="main">
            <input type="checkbox" id="chk" aria-hidden="true">
            <div class="signup">
                <form action="<?php echo e(route('register')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <label for="chk" aria-hidden="true">Sign up</label>
                    <input type="text" name="name" placeholder="User name" required="">
                    <input type="email" name="email" placeholder="Email" required="">
                    <input type="password" name="password" placeholder="Password" required="">
                    <button type="submit">Sign up</button>
                </form>
            </div>
            <div class="login">
                <form action="/loginn" method="POST">
                    <?php echo csrf_field(); ?>
                    <label for="chk" aria-hidden="true">Login</label>
                    <input type="email" name="email" placeholder="Email" required="" class="inp">
                    <input type="password" name="password" placeholder="Password" required="" class="inp">
                    <button type="submit" class="input">Login</button>
                </form>
            </div>

        </div>
    </div>
</body>

</html>
<?php /**PATH C:\Users\THE X\Desktop\PFE\resources\views/loginP.blade.php ENDPATH**/ ?>