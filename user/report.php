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

        <!-- Readonly -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>READ-ONLY</h2>
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
                        <div class="row clearfix">
                            <div class="col-md-2">
                                <input type="text" class="knob" value="42" data-width="125" data-height="125" data-thickness="0.25" data-fgColor="#F44336"
                                       readonly>
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="knob" value="42" data-width="125" data-height="125" data-thickness="0.25" data-fgColor="#F44336"
                                       readonly>
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="knob" value="42" data-width="125" data-height="125" data-thickness="0.25" data-fgColor="#F44336"
                                       readonly>
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="knob" value="42" data-width="125" data-height="125" data-thickness="0.25" data-fgColor="#F44336"
                                       readonly>
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="knob" value="42" data-width="125" data-height="125" data-thickness="0.25" data-fgColor="#F44336"
                                       readonly>
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="knob" value="42" data-width="125" data-height="125" data-thickness="0.25" data-fgColor="#F44336"
                                       readonly>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Readonly -->

    </div>
</section>

<?php require_once "../htmlParts/scripts.php"; ?>

<!-- Jquery Knob Plugin Js -->
<script src="../plugins/jquery-knob/jquery.knob.min.js"></script>

<!-- Custom Js -->
<script src="../js/pages/charts/jquery-knob.js"></script>

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

