<?php require_once "../session/checkSession.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once "../htmlParts/header.php"; ?>

</head>
<body class="theme-green" ng-app="myApp" ng-controller="myController">

<?php require_once"../htmlParts/preloader.php"; ?>

<!-- Overlay For Sidebars -->
<div class="overlay"></div>
<!-- #END# Overlay For Sidebars -->

<?php require_once"../htmlParts/topBar.php"; ?>

<?php require_once "../htmlParts/sideBarStudent.php"; ?>

<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Your Profile</h2>
        </div>

        <!-- Basic Example -->
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>BASIC EXAMPLE</h2>
                    <ul class="header-dropdown m-r--5">
                        <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                <i class="material-icons">more_vert</i>
                            </a>
                            <ul class="dropdown-menu pull-right">
                                <li><a href="javascript:void(0);">Action</a></li>
                                <li><a href="javascript:void(0);">Another action</a></li>
                                <li><a href="javascript:void(0);">Something else here</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="body">
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <img src="data:image/jpeg;base64,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" />
                            </div>
                            <div class="item">
                                <img src="../../images/image-gallery/12.jpg" />
                            </div>
                            <div class="item">
                                <img src="../../images/image-gallery/19.jpg" />
                            </div>
                        </div>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Basic Example -->

    </div>
</section>

<?php require_once "../htmlParts/scripts.php"; ?>

<script>

    var app = angular.module('myApp', []);
    app.controller('myController', function($scope,$http,$window) {

        $scope.logout = function () {
            let setting = {
                "url": "../session/logout.php",
                "method": "POST",
                "timeout": 0,
                "headers": {},
                "data": {},
            };
            $.ajax(setting).done(function (result) {
                $window.location.href = '../login.php';
            }).fail(function (error) {});
        }

    });

</script>

</body>
</html>

