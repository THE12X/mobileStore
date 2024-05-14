<?php $__env->startSection('content'); ?>
<?php $__env->startSection('title', 'Games'); ?>
<style>
    .container {
        width: 50%;
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        grid-gap: 0.75rem;
    }

    .box {
        position: relative;
        width: auto;
        height: 75px;
        background: #fff;
        border-radius: 5px;
        cursor: pointer;
        box-shadow: 10px 10px 15px rgba(59, 38, 38, 0.25);
    }

    .box::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 6px;
        height: 100%;
        background: var(--color);
        transition: 0.5s ease-in-out;
    }

    .box:hover::before {
        width: 100%;
        border-top-right-radius: 5px;
        border-bottom-right-radius: 5px;
    }

    .box .content {
        position: relative;
        display: flex;
        align-items: center;
        height: 100%;
    }

    .box .content .icon {
        position: relative;
        min-width: 70px;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 1.5em;
        color: var(--color);
        transition: 0.5s ease-in-out;
    }

    .box:hover .content .icon {
        color: #ffffff;
    }

    .box .content .text h3 {
        font-weight: 500;
        color: var(--color);
        transition: 0.5s ease-in-out;
    }

    .box .content .text p {
        font-size: 0.9em;
        color: #999;
        transition: 0.5s ease-in-out;
    }

    .box:hover .content .text h3,
    .box:hover .content .text p {
        color: #fff;
    }

    .body {
        display: flex;
        justify-content: center;
        align-items: center;

    }

    .tit{
        width: 100%;
        color: rgb(58, 58, 58);
        text-align: center;
        height: 20vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .body {
        display: flex;
        flex-direction: column;
    }
    a{
        text-decoration: none;
    }
</style>
<div class="body">
    <div class="tit">
        <h1>OUR GAMES</h1>
    </div>
    <div class="container">
        <a href="/tictactoe" class="box" style="--color:rgb(255, 217, 0)">
            <div class="content">
                <div class="icon">
                    <i class="fa fa-laptop"></i>
                </div>
                <div class="text">
                    <h3>TIC TAC TOE</h3>
                </div>
            </div>
        </a>
        <a href="/stick" class="box" style="--color: rgb(208, 255, 0)">
            <div class="content">
                <div class="icon">
                    <i class="fa fa-laptop"></i>
                </div>
                <div class="text">
                    <h3>STICK HERO</h3>
                </div>
            </div>
        </a>
        <a href="/maze" class="box" style="--color: rgb(94, 255, 0)">
            <div class="content">
                <div class="icon">
                    <i class="fa fa-laptop"></i>
                </div>
                <div class="text">
                    <h3>THE MAZE</h3>
                </div>
            </div>
        </a>
        <a href="/stack" class="box" style="--color: rgb(255, 217, 0)">
            <div class="content">
                <div class="icon">
                    <i class="fa fa-laptop"></i>
                </div>
                <div class="text">
                    <h3>STACKS</h3>
                </div>
            </div>
        </a>
        <a href="/runner" class="box" style="--color: rgb(208, 255, 0)">
            <div class="content">
                <div class="icon">
                    <i class="fa fa-laptop"></i>
                </div>
                <div class="text">
                    <h3>RUNNER</h3>
                </div>
            </div>
        </a>
        <a href="/pin" class="box" style="--color: rgb(94, 255, 0)">
            <div class="content">
                <div class="icon">
                    <i class="fa fa-laptop"></i>
                </div>
                <div class="text">
                    <h3>PING PONG</h3>
                </div>
            </div>
        </a>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\THE X\Desktop\PFE\resources\views/Games.blade.php ENDPATH**/ ?>