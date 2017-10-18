<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                text-align: right;
                padding: 20px 10px;
            }

            .content {
                text-align: center;
            }

            .title {
                padding-bottom: 2%;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            .alert {
                text-align: center;
            }
            .m-b-md {
                margin-bottom: 30px;
            }
            .text {
                text-align: justify;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height" id="app">
            <?php if(Route::has('login')): ?>
                <div class="top-right links">
                    <?php if(Auth::check()): ?>
                        <a href="<?php echo e(url('/home')); ?>">Home</a>
                    <?php else: ?>
                        <a href="<?php echo e(url('/login')); ?>">Login</a>
                    <?php endif; ?>
                </div>
            <?php endif; ?>

            <div class="content">
                <posts></posts>
            </div>
            <div class="container">
                <div class="row">
                    <div class="alert">
                        <?php if(Auth::check()): ?>
                        <?php else: ?>
                            <h3>To publish post <a href="<?php echo e(url('/register')); ?>">sign up</a></h3>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <script src="<?php echo e(asset('js/app.js')); ?>"></script>
</html>

