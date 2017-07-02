<?php
/*********************************************************************************** *
* MIT License
*
* Copyright (c) 2017 Raphael "rGunti" Guntersweiler
*
* Permission is hereby granted, free of charge, to any person obtaining a copy
* of this software and associated documentation files (the "Software"), to deal
* in the Software without restriction, including without limitation the rights
* to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
* copies of the Software, and to permit persons to whom the Software is
* furnished to do so, subject to the following conditions:
*
* The above copyright notice and this permission notice shall be included in all
* copies or substantial portions of the Software.
*
* THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
* IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
* FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
* AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
* LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
* OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
* SOFTWARE.
* ********************************************************************************* */
require_once 'config.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>RGUNTI.CAR</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">

    <link rel="apple-touch-icon" href="/img/unknown-album.png">

    <link rel="stylesheet" href="/css/font-roboto.css" />
    <link rel="stylesheet" href="/css/iconfont/material-icons.css" />
    <link rel="stylesheet" href="/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/css/material-kit.css" />
    <link rel="stylesheet" href="/css/custom.css" />

    <script src="/js/jquery-3.2.1.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/material.min.js"></script>
    <script src="/js/material-kit.js"></script>
    <script src="/js/custom/_general.js"></script>
</head>
<body>

<div class="main main-raised">
    <div class="container">
        <h3 class="text-center">
            <i class="material-icons">directions_car</i>
            RGUNTI.CAR
        </h3>
        <p>Select an application to launch.</p>
    </div>
        <div class="list-group">
            <?php foreach (StartMenuConfig::APPS as $app) {
                if (StartMenuConfig::SHOW_DISABLED || $app['enabled']) {
                    ?>
                    <a class="list-group-item <?= ($app['enabled'] ? '' : 'disabled') ?>"
                       href="<?= ($app['enabled'] ? $app['url'] : '#') ?>"
                       target="_blank">
                        <div class="media">
                            <div class="media-left">
                                <img class="media-object" src="<?= $app['icon'] ?>">
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">
                                    <?= $app['name'] ?>
                                </h4>
                                <p><?= $app['description'] ?></p>
                            </div>
                        </div>
                    </a>
                <?php }
            } ?>
        </div>
</div>

<footer class="container text-muted">
    &COPY; <?php echo date("Y") ?>, rGunti
    &ndash; App Icons by
    <a href="http://icons8.com">icons8.com</a>
</footer>

</body>
</html>
