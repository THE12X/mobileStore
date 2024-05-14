<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>

        body {
            background: #e3e3e3;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
        .container {
            margin-top: 50px;
        }

        .login {
            color: #000;
            text-transform: uppercase;
            letter-spacing: 2px;
            display: block;
            font-weight: bold;
            font-size: x-large;
        }

        .card {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 350px;
            width: 330px;
            flex-direction: column;
            gap: 35px;
            background: #e3e3e3;
            box-shadow: 16px 16px 32px #c8c8c8,
                -16px -16px 32px #fefefe;
            border-radius: 8px;
        }

        .inputBox {
            position: relative;
            width: 250px;
        }

        .inputBox input {
            width: 100%;
            padding: 10px;
            outline: none;
            border: none;
            color: #000;
            font-size: 1em;
            background: transparent;
            border-left: 2px solid #000;
            border-bottom: 2px solid #000;
            transition: 0.1s;
            border-bottom-left-radius: 8px;
        }

        .inputBox span {
            margin-top: 5px;
            position: absolute;
            left: 0;
            transform: translateY(-4px);
            margin-left: 10px;
            padding: 10px;
            pointer-events: none;
            font-size: 12px;
            color: #000;
            text-transform: uppercase;
            transition: 0.5s;
            letter-spacing: 3px;
            border-radius: 8px;
        }

        .inputBox input:valid~span,
        .inputBox input:focus~span {
            transform: translateX(113px) translateY(-15px);
            font-size: 0.8em;
            padding: 5px 10px;
            background: #000;
            letter-spacing: 0.2em;
            color: #fff;
            border: 2px;
        }

        .inputBox input:valid,
        .inputBox input:focus {
            border: 2px solid #000;
            border-radius: 8px;
        }

        .enter {
            height: 45px;
            width: 100px;
            border-radius: 5px;
            border: 2px solid #000;
            cursor: pointer;
            background-color: transparent;
            transition: 0.5s;
            text-transform: uppercase;
            font-size: 10px;
            letter-spacing: 2px;
            margin-bottom: 1em;
        }

        .enter:hover {
            background-color: rgb(0, 0, 0);
            color: white;
        }
        a{
            text-decoration: none;
            color: rgb(255, 217, 0);
            transition: 0.3s;
            font-weight: bolder;
        }
        a:hover{
            color: rgb(94, 255, 0);
        }

    </style>

    <body>
        <form action="/add" method="post" enctype="multipart/form-data" class="container">
            <?php echo csrf_field(); ?>
            <div class="card">
                <a class="login">ADD PRODUCT</a>
                <div class="inputBox">
                    <input type="text" required="required" name="title">
                    <span class="user">Title</span>
                </div>
                <div class="inputBox">
                    <input type="text" required="required" name="price">
                    <span>Price</span>
                </div>
                <div class="inputBox">
                    <input type="file" name="image" required>
                </div>
                <button type="submit" class="enter">Submit</button>
            </div>
        </form>
        <br>
        <a href="/show">SHOW ITEMS</a>
        <form action="<?php echo e(route('logout')); ?>" method="POST" class="d-flex" role="search">
            <?php echo csrf_field(); ?> <?php echo method_field('DELETE'); ?><button type="submit"  class="link logout">Logout <i class="fa-solid fa-right-from-bracket"></i></button>
        </form>
    </div>
</body>
</html>
<?php /**PATH C:\Users\THE X\Desktop\PFE\resources\views/admin/admin.blade.php ENDPATH**/ ?>