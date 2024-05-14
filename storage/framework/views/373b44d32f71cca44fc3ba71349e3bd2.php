<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    * {
        font-family: comfortaa;
    }

    img {
        width: 100px;
        height: 100px;
    }

    body {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 96%;
        flex-direction: column;

        background: #e0e0e0;
        box-shadow: 15px 15px 30px #bebebe, -15px -15px 30px #ffffff;
        border-radius: 40px;
    }

    table {
        border: 2px solid rgb(73, 73, 73);
        margin-top: 20px;
        margin-bottom: 20px;
    }

    button {
        border: none;
        background: rgb(255, 208, 0);
        width: 120px;
        height: 40px;
        border-radius: 20px;
    }

    button:hover {
        background: rgb(145, 255, 0);
    }

    a {
        text-decoration: none;
        color: rgb(255, 255, 255);
        font-size: 20px;
    }
    .add{
        color: yellow;
        font-weight: bolder;
        transition: .3s
    }
    .add:hover{
        color: #88ff00;
    }
    .success{
            color: #3cff00;
            margin-top: 20px;
            font-size: 20px;
            font-weight: bold;
        }

</style>

<body>
    <div class="success">
    <?php if(session()->has('success')): ?>
        <?php echo e(session('success')); ?>

    <?php endif; ?>
</div>
    <table>

        <?php $__currentLoopData = $car; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $car): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($car->title); ?></td>
                <td><?php echo e($car->price); ?></td>
                <td><img src="/phones/<?php echo e($car->image); ?>" alt="" srcset=""></td>
                <td><button> <a href="/delete/<?php echo e($car->id); ?>"> delete</a></button></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
<br>
<a class="add" href="/add">ADD ITEM</a>
<br>
</body>

</html>
<?php /**PATH C:\Users\THE X\Desktop\PFE\resources\views/admin/show.blade.php ENDPATH**/ ?>