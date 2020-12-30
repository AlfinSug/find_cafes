<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title><?= $title ?> - Find Cafe's</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="asset/logo_3.ico">
    <!-- Pignose Calender -->
    <link href="quixlab/plugins/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet">
    <!-- themify icons -->
    <link rel="stylesheet" href="quixlab/icons/themify-icons/themify-icons.css">
    <!-- Chartist -->
    <link rel="stylesheet" href="quixlab/plugins/chartist/css/chartist.min.css">
    <link rel="stylesheet" href="quixlab/plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css">
    <!-- Custom Stylesheet -->
    <link href="quixlab/css/style.css" rel="stylesheet">
    <!-- Custom Stylesheet -->
    <link href="quixlab/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet">
    <!-- Page plugins css -->
    <link href="quixlab/plugins/clockpicker/dist/jquery-clockpicker.min.css" rel="stylesheet">
    <!-- Color picker plugins css -->
    <link href="quixlab/plugins/jquery-asColorPicker-master/css/asColorPicker.css" rel="stylesheet">
    <!-- Date picker plugins css -->
    <link href="quixlab/plugins/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet">
    <!-- Daterange picker plugins css -->
    <link href="quixlab/plugins/timepicker/bootstrap-timepicker.min.css" rel="stylesheet">
    <link href="quixlab/plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <link href="quixlab/plugins/sweetalert/css/sweetalert.css" rel="stylesheet">
    <link rel="stylesheet" href="quixlab/icons/font-awesome/css/font-awesome.min.css">
    <link href="quixlab/plugins/jquery-steps/css/jquery.steps.css" rel="stylesheet">

</head>

<body onload="initClock()">

    <!--*******************
        Preloader start
    ********************-->
    <!-- <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div> -->
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header bg-warning ">
            <div class="brand-logo bg-warning">
                <a href="<?= base_url(); ?>dashboard" class="mt--3">
                    <b class="logo-abbr bg-info"><img src="asset/logo_3.ico" alt=""> </b>
                    <span class="brand-title mb-5 bg-info">
                        <img src="asset/logo_nav.png" class="mt--2" alt="" width="50" height="40">
                    </span>
                </a>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content clearfix">

                <div class="nav-control">
                    <div class="hamburger">
                        <span class="toggle-icon"><i class="icon-menu"></i></span>
                    </div>
                </div>
                <div class="header-left">
                    <div class="input-group icons">
                        <div class="input-group-prepend">
                            <img src="asset/logo_nav.png" class="mt--2" alt="" width="22%" height="50">
                        </div>
                    </div>
                </div>
                <div class="header-right">
                    <ul class="clearfix">
                        <li class="icons dropdown"><a href="javascript:void(0)" data-toggle="dropdown">
                                <i class="mdi mdi-bell-outline"></i>
                                <span class="badge badge-pill gradient-2">1</span>
                            </a>
                            <div class="drop-down animated fadeIn dropdown-menu dropdown-notfication">
                                <div class="dropdown-content-heading d-flex justify-content-between">
                                    <span class="">Pemberitahuan</span>
                                    <a href="javascript:void()" class="d-inline-block">
                                        <span class="badge badge-pill gradient-2">1</span>
                                    </a>
                                </div>
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li>
                                            <a href="javascript:void()" data-toggle="modal" data-target="#detail-reservasi">
                                                <span class="mr-3 avatar-icon bg-success"><i class="ti-face-smile"></i></span>
                                                <div class="notification-content">
                                                    <h6 class="notification-heading">Reservasi Diterima</h6>
                                                    <span class="notification-text">Silahkan buka untuk melihat detail reservasi</span>
                                                </div>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="javascript:void()" data-toggle="modal" data-target="#detail-reservasi-tolak">
                                                <span class="mr-3 avatar-icon bg-danger"><i class="ti-face-sad"></i></span>
                                                <div class="notification-content">
                                                    <h6 class="notification-heading">Reservasi Ditolak</h6>
                                                    <span class="notification-text">Silahkan buka untuk melihat detail reservasi dan catatn dari owner</span>
                                                </div>
                                            </a>
                                        </li>

                                    </ul>

                                </div>
                            </div>
                        </li>

                        <li class="icons dropdown">
                            <!--digital clock start-->
                            <div class="datetime btn btn-gray10 text-dark">
                                <div class="date">
                                    <span id="dayname">Day</span>,
                                    <span id="daynum">00</span>
                                    <span id="month">Month</span>
                                    <span id="year">Year</span>
                                </div>
                                <div class="time">
                                    <span id="hour">00</span>:
                                    <span id="minutes">00</span>:
                                    <span id="seconds">00</span>
                                    <span id="period">AM</span>
                                </div>
                            </div>
                            <!--digital clock end-->

                            <div class="user-img c-pointer position-relative" data-toggle="dropdown">
                                <span class="activity active"></span>

                                <img src="asset/img_user/picture.png" height="50" width="100%" alt="">
                            </div>
                            <div class="drop-down dropdown-profile animated fadeIn dropdown-menu">
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li>
                                            <a href="<?= base_url(); ?>profil_user"><i class="icon-user"></i> <span>Profil Saya</span></a>
                                        </li>

                                        <li><a href="<?= base_url(); ?>auth_loginuser/logout_user"><i class="ti-share-alt"></i> <span>Keluar</span></a></li>
                                    </ul>
                                </div>
                            </div>

                        </li>

                    </ul>
                </div>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="nk-sidebar">
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label">Main</li>
                    <li>
                        <a href="<?= base_url(); ?>get_cafe" class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="ti-map-alt"></i><span class="nav-text">All Cafe's</span>
                        </a>

                    </li>

                    <li class="nav-label">Master</li>
                    <li>
                        <a href="<?= base_url(); ?>user_reserv" class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="ti-receipt"></i> <span class="nav-text">Reservation</span>
                        </a>

                    </li>
                    <li>
                        <a href="<?= base_url(); ?>profil_user" class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="ti-user"></i> <span class="nav-text">Profil</span>
                        </a>

                    </li>
                </ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!-- Argon Scripts -->
        <script type="text/javascript">
            function updateClock() {
                var now = new Date();
                var dname = now.getDay(),
                    mo = now.getMonth(),
                    dnum = now.getDate(),
                    yr = now.getFullYear(),
                    hou = now.getHours(),
                    min = now.getMinutes(),
                    sec = now.getSeconds(),
                    pe = "AM";

                if (hou >= 12) {
                    pe = "PM";
                }
                if (hou == 0) {
                    hou = 12;
                }
                if (hou > 12) {
                    hou = hou - 12;
                }

                Number.prototype.pad = function(digits) {
                    for (var n = this.toString(); n.length < digits; n = 0 + n);
                    return n;
                }

                var months = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
                var week = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jum'at", "Sabtu"];
                var ids = ["dayname", "month", "daynum", "year", "hour", "minutes", "seconds", "period"];
                var values = [week[dname], months[mo], dnum.pad(2), yr, hou.pad(2), min.pad(2), sec.pad(2), pe];
                for (var i = 0; i < ids.length; i++)
                    document.getElementById(ids[i]).firstChild.nodeValue = values[i];
            }

            function initClock() {
                updateClock();
                window.setInterval("updateClock()", 1);
            }
        </script>