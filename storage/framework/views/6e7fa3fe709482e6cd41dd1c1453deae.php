<?php $__env->startSection('content'); ?>
<?php $__env->startSection('title', 'Products'); ?>
<style>

    body {
        height: auto;
        background: #e0e0e0;
        user-select: none;
        margin-bottom: 20px;
    }

    .card {
        min-width: 190px;
        height: 254px;
        border-radius: 30px;
        background: #e0e0e0;
        box-shadow: 15px 15px 30px #bebebe, -15px -15px 30px #ffffff;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: row;
        margin-top: 30px;

    }

    .img {
        background:transparent;
        width: 70%;
        height: 140px;
        border-radius: 20px;
    }

    .content {
        height: 90%;
        width: 90%;
        border-radius: 30px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        align-items: center;
    }

    .container {
        display: flex;
        flex-direction: row;
            flex-wrap: wrap;
        justify-content: space-around;
        align-items: center;
        margin: 10px;

    }


    input {
        display: none;
    }

    #slider {
        height: 35vw;
        position: relative;
        perspective: 1000px;
        transform-style: preserve-3d;
    }

    #slider label {
        margin: auto;
        width: 60%;
        height: 100%;
        border-radius: 4px;
        position: absolute;
        left: 0;
        right: 0;
        cursor: pointer;
        transition: all 0.4s ease-in;
    }

    #s1:checked~#slider4,
    #s2:checked~#slider5,
    #s3:checked~#slider1,
    #s4:checked~#slider2,
    #s5:checked~#slider3 {
        box-shadow: 0 10px 20px 0 rgba(0, 0, 0, 0.37);
        transform: translate3d(-30%, 0, -200px);
    }

    #s1:checked~#slider5,
    #s2:checked~#slider1,
    #s3:checked~#slider2,
    #s4:checked~#slider3,
    #s5:checked~#slider4 {
        box-shadow: 0 10px 20px 0 rgba(255, 255, 255, 0.1), 0 10px 20px 0 rgba(0, 0, 0, .8);
        transform: translate3d(-15%, 0, -100px);
    }

    #s1:checked~#slider1,
    #s2:checked~#slider2,
    #s3:checked~#slider3,
    #s4:checked~#slider4,
    #s5:checked~#slider5 {
        box-shadow: 0px 20px 20px 0px rgba(255, 255, 255, 0.1),
            0px 20px 20px 0px rgba(0, 0, 0, .7);
        transform: translate3d(0, 0, 0);
    }

    #s1:checked~#slider2,
    #s2:checked~#slider3,
    #s3:checked~#slider4,
    #s4:checked~#slider5,
    #s5:checked~#slider1 {
        box-shadow: 0 10px 20px 0 rgba(255, 255, 255, 0.1),
            0 10px 20px 0 rgba(0, 0, 0, 8);
        transform: translate3d(15%, 0, -100px);
    }

    #s1:checked~#slider3,
    #s2:checked~#slider4,
    #s3:checked~#slider5,
    #s4:checked~#slider1,
    #s5:checked~#slider2 {
        box-shadow: 0 10px 20px 0 rgba(0, 0, 0, 0.37);
        transform: translate3d(30%, 0, -200px);
    }
    .tit{
        color: #3a3a3a;
    }
    .all{
        margin-bottom: 30px;
    }
    .is{
        text-align: center !important;
    }
    ::-webkit-scrollbar{
    width: 7px;
}
::-webkit-scrollbar-track{
    background: #ffffff;
    border-radius: 50px;
}
::-webkit-scrollbar-thumb{
    background: rgb(77, 77, 77);
    border-radius: 50px;
}
</style>
<div class="body">
    <div>
        <center>
            <h1 class="tit">OUR BRODUCTS</h1>
        </center>
        <br><br>
        <section id="slider">
            <input type="radio" name="slider" id="si" />
            <input type="radio" name="slider" id="s2">
            <input type="radio" name="slider" id="s3" checked>
            <input type="radio" name="slider" id="s4">
            <input type="radio" name="slider" id="s5">
            <label for="s1" id="slider1">
                <img src="/images/p2.png" alt="slider image" width="100%" height="100%">
            </label>
            <label for="s2" id="slider2">
                <img src="/images/p3.jpg" alt="slider image" width="100%" height="100%">
            </label>
            <label for="s3" id="slider3">
                <img src="/images/p2.png" alt="slider image" width="100%" height="100%">
            </label>
            <label for="s4" id="slider4">
                <img src="/images/p1.jpg" alt="slider image" width="100%" height="100%">
            </label>
            <label for="s5" id="slider5">
                <img src="/images/p44.jpg" alt="slider image" width="100%" height="100%">
            </label>
        </section>
        <br><br><br>
    </div>
    <div class="all">
        <div class="container">
            <?php $__currentLoopData = $car; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cars): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="card">
                    <div class="content">
                        <img src="/phones/<?php echo e($cars->image); ?>" class="img">
                        <div class="is">
                            <h2><?php echo e($cars->title); ?></h2>
                            <h4><?php echo e($cars->price); ?>$</h4>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\THE X\Desktop\PFE\resources\views/Products.blade.php ENDPATH**/ ?>