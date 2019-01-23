<?php
/**
 * Created by PhpStorm.
 * User: DamarPermadany
 * Date: 1/23/2019
 * Time: 9:27 PM
 */
?>
        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive Bootstrap 4 Admin &amp; Dashboard Template">
    <meta name="author" content="Bootlab">
    <link rel="icon" href="favicon.ico">

    <title>Spark - Responsive Admin &amp; Dashboard Template</title>

    <link href="{{ asset('Spark-v3/css/app.css') }}" rel="stylesheet">

</head>

<body>
<div class="splash active">
    <div class="splash-icon"></div>
</div>

<nav class="navbar navbar-expand navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="index.html">
            <svg>
                <use xlink:href="#ion-ios-pulse-strong"></use>
            </svg>
            Spark
            <small class="d-none d-sm-inline">| v3.0</small>
        </a>

        <div class="navbar-collapse collapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown active">
                    <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" data-toggle="dropdown">
                        <span class="d-none d-lg-inline-block">Messages</span>
                        <span class="d-lg-none"><i class="align-middle fas fa-envelope-open"></i></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right py-0"
                         aria-labelledby="messagesDropdown">
                        <div class="dropdown-menu-header">
                            <div class="position-relative">
                                4 New Messages
                            </div>
                        </div>
                        <div class="list-group">
                            <a href="#" class="list-group-item">
                                <div class="row no-gutters align-items-center">
                                    <div class="col-2">
                                        <img src="{{ asset('Spark-v3/img/avatar-5.jpg') }}" class="avatar img-fluid rounded-circle"
                                             alt="Michelle Bilodeau">
                                    </div>
                                    <div class="col-10 pl-2">
                                        <div class="text-dark">Michelle Bilodeau</div>
                                        <div class="text-muted small mt-1">Nam pretium turpis et arcu. Duis arcu
                                            tortor.
                                        </div>
                                        <div class="text-muted small mt-1">5m ago</div>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="list-group-item">
                                <div class="row no-gutters align-items-center">
                                    <div class="col-2">
                                        <img src="{{ asset('Spark-v3/img/avatar-3.jpg') }}" class="avatar img-fluid rounded-circle"
                                             alt="Kathie Burton">
                                    </div>
                                    <div class="col-10 pl-2">
                                        <div class="text-dark">Kathie Burton</div>
                                        <div class="text-muted small mt-1">Pellentesque auctor neque nec urna.</div>
                                        <div class="text-muted small mt-1">30m ago</div>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="list-group-item">
                                <div class="row no-gutters align-items-center">
                                    <div class="col-2">
                                        <img src="{{ asset('Spark-v3/img/avatar-2.jpg') }}" class="avatar img-fluid rounded-circle"
                                             alt="Alexander Groves">
                                    </div>
                                    <div class="col-10 pl-2">
                                        <div class="text-dark">Alexander Groves</div>
                                        <div class="text-muted small mt-1">Curabitur ligula sapien euismod vitae.</div>
                                        <div class="text-muted small mt-1">2h ago</div>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="list-group-item">
                                <div class="row no-gutters align-items-center">
                                    <div class="col-2">
                                        <img src="{{ asset('Spark-v3/img/avatar-4.jpg') }}" class="avatar img-fluid rounded-circle"
                                             alt="Daisy Seger">
                                    </div>
                                    <div class="col-10 pl-2">
                                        <div class="text-dark">Daisy Seger</div>
                                        <div class="text-muted small mt-1">Aenean tellus metus, bibendum sed, posuere
                                            ac, mattis non.
                                        </div>
                                        <div class="text-muted small mt-1">5h ago</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="dropdown-menu-footer">
                            <a href="#" class="text-muted">Show all messages</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown ml-lg-2">
                    <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" data-toggle="dropdown">
                        <span class="d-none d-lg-inline-block">Notifications</span>
                        <span class="d-lg-none"><i class="align-middle fas fa-bell"></i></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right py-0"
                         aria-labelledby="alertsDropdown">
                        <div class="dropdown-menu-header">
                            4 New Notifications
                        </div>
                        <div class="list-group">
                            <a href="#" class="list-group-item">
                                <div class="row no-gutters align-items-center">
                                    <div class="col-2">
                                        <i class="ml-1 text-danger fas fa-fw fa-bell"></i>
                                    </div>
                                    <div class="col-10">
                                        <div class="text-dark">Update completed</div>
                                        <div class="text-muted small mt-1">Restart server 12 to complete the update.
                                        </div>
                                        <div class="text-muted small mt-1">2h ago</div>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="list-group-item">
                                <div class="row no-gutters align-items-center">
                                    <div class="col-2">
                                        <i class="ml-1 text-warning fas fa-fw fa-envelope-open"></i>
                                    </div>
                                    <div class="col-10">
                                        <div class="text-dark">Lorem ipsum</div>
                                        <div class="text-muted small mt-1">Aliquam ex eros, imperdiet vulputate
                                            hendrerit et.
                                        </div>
                                        <div class="text-muted small mt-1">6h ago</div>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="list-group-item">
                                <div class="row no-gutters align-items-center">
                                    <div class="col-2">
                                        <i class="ml-1 text-primary fas fa-fw fa-building"></i>
                                    </div>
                                    <div class="col-10">
                                        <div class="text-dark">Login from 192.186.1.1</div>
                                        <div class="text-muted small mt-1">8h ago</div>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="list-group-item">
                                <div class="row no-gutters align-items-center">
                                    <div class="col-2">
                                        <i class="ml-1 text-success fas fa-fw fa-bell-slash"></i>
                                    </div>
                                    <div class="col-10">
                                        <div class="text-dark">New connection</div>
                                        <div class="text-muted small mt-1">Anna accepted your request.</div>
                                        <div class="text-muted small mt-1">12h ago</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="dropdown-menu-footer">
                            <a href="#" class="text-muted">Show all notifications</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown ml-lg-2">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" data-toggle="dropdown">
                        <span class="d-none d-lg-inline-block">Profile</span>
                        <span class="d-lg-none"><i class="align-middle fas fa-cog"></i></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#"><i class="align-middle mr-1 fas fa-fw fa-user"></i> View
                            Profile</a>
                        <a class="dropdown-item" href="#"><i class="align-middle mr-1 fas fa-fw fa-comments"></i>
                            Contacts</a>
                        <a class="dropdown-item" href="#"><i class="align-middle mr-1 fas fa-fw fa-chart-pie"></i>
                            Analytics</a>
                        <a class="dropdown-item" href="#"><i class="align-middle mr-1 fas fa-fw fa-cogs"></i>
                            Settings</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#"><i
                                    class="align-middle mr-1 fas fa-fw fa-arrow-alt-circle-right"></i> Sign out</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="header">
    <div class="container">
        <div class="media text-white">
            <img src="{{ asset('Spark-v3/img/avatar.jpg') }}" class="avatar img-fluid rounded-circle mr-3" alt="Linda Miller"/>
            <div class="media-body">
                <h3 class="mb-1 text-white font-weight-normal">Linda Miller</h3>
                <span class=" font-weight-normal">831 Arron Smith Drive, NE 68438</span>
            </div>
        </div>
    </div>
</div>

<main class="content">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4 col-lg-3 col-xl-2">
                <a class="card d-block d-md-none mt-4" data-toggle="collapse" data-target="#sidebar">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Menu</h5>
                    </div>
                </a>

                <nav id="sidebar" class="collapse collapse-disabled-md sidebar sidebar-sticky">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Main</h5>
                        </div>
                        <div class="sidebar-content">
                            <a href="index.html" class="sidebar-item">
                                <i class="align-middle mr-1 fas fa-fw fa-home"></i> <span
                                        class="align-middle">Dashboard</span>
                            </a>
                            <a class="sidebar-item" href="#layouts" data-toggle="collapse">
                                <i class="align-middle mr-1 fas fa-fw fa-desktop"></i> <span class="align-middle">Layouts</span>
                            </a>
                            <div class="sidebar-dropdown collapse" id="layouts" data-parent="#sidebar">
                                <a class="sidebar-item" href="layouts-sidebar-right.html">Right Sidebar</a>
                                <a class="sidebar-item" href="layouts-sidebar-static.html">Static Sidebar</a>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Elements</h5>
                        </div>
                        <div class="sidebar-content">
                            <a class="sidebar-item" href="#ui" data-toggle="collapse">
                                <i class="align-middle mr-1 fas fa-fw fa-flask"></i> <span class="align-middle">User Interface</span>
                            </a>
                            <div class="sidebar-dropdown collapse" id="ui" data-parent="#sidebar">
                                <a class="sidebar-item" href="ui-alerts.html">Alerts</a>
                                <a class="sidebar-item" href="ui-buttons.html">Buttons</a>
                                <a class="sidebar-item" href="ui-cards.html">Cards</a>
                                <a class="sidebar-item" href="ui-general.html">General</a>
                                <a class="sidebar-item" href="ui-grid.html">Grid</a>
                                <a class="sidebar-item" href="ui-modals.html">Modals</a>
                                <a class="sidebar-item" href="ui-notifications.html">Notifications</a>
                                <a class="sidebar-item" href="ui-tabs.html">Tabs</a>
                                <a class="sidebar-item" href="ui-typography.html">Typography</a>
                            </div>
                        </div>
                        <div class="sidebar-content">
                            <a class="sidebar-item" href="#charts" data-toggle="collapse">
                                <i class="align-middle mr-1 fas fa-fw fa-chart-pie"></i> <span class="align-middle">Charts</span>
                            </a>
                            <div class="sidebar-dropdown collapse" id="charts" data-parent="#sidebar">
                                <a class="sidebar-item" href="charts-chartjs.html">Chart.js</a>
                                <a class="sidebar-item" href="charts-apexcharts.html">ApexCharts</a>
                                <a class="sidebar-item" href="charts-morrisjs.html">Morris.js</a>
                            </div>
                        </div>
                        <div class="sidebar-content">
                            <a class="sidebar-item" href="#forms" data-toggle="collapse">
                                <i class="align-middle mr-1 fas fa-fw fa-check-square"></i> <span class="align-middle">Forms</span>
                            </a>
                            <div class="sidebar-dropdown collapse" id="forms" data-parent="#sidebar">
                                <a class="sidebar-item" href="forms-layouts.html">Layouts</a>
                                <a class="sidebar-item" href="forms-basic-elements.html">Basic Elements</a>
                                <a class="sidebar-item" href="forms-advanced-elements.html">Advanced Elements</a>
                                <a class="sidebar-item" href="forms-input-groups.html">Input Groups</a>
                                <a class="sidebar-item" href="forms-editors.html">Editors</a>
                                <a class="sidebar-item" href="forms-validation.html">Validation</a>
                                <a class="sidebar-item" href="forms-wizard.html">Wizard</a>
                            </div>
                        </div>
                        <div class="sidebar-content">
                            <a class="sidebar-item" href="#tables" data-toggle="collapse">
                                <i class="align-middle mr-1 fas fa-fw fa-table"></i> <span
                                        class="align-middle">Tables</span>
                            </a>
                            <div class="sidebar-dropdown collapse" id="tables" data-parent="#sidebar">
                                <a class="sidebar-item" href="tables-bootstrap.html">Bootstrap</a>
                                <a class="sidebar-item" href="tables-datatables.html">DataTables</a>
                            </div>
                        </div>
                        <div class="sidebar-content">
                            <a class="sidebar-item" href="#maps" data-toggle="collapse">
                                <i class="align-middle mr-1 fas fa-fw fa-map-marker-alt"></i> <span
                                        class="align-middle">Maps</span>
                            </a>
                            <div class="sidebar-dropdown collapse" id="maps" data-parent="#sidebar">
                                <a class="sidebar-item" href="maps-google.html">Google Maps</a>
                                <a class="sidebar-item" href="maps-vector.html">Vector Maps</a>
                            </div>
                        </div>
                        <div class="sidebar-content">
                            <a class="sidebar-item" href="#icons" data-toggle="collapse">
                                <i class="align-middle mr-1 fas fa-fw fa-heart"></i> <span
                                        class="align-middle">Icons</span>
                            </a>
                            <div class="sidebar-dropdown collapse" id="icons" data-parent="#sidebar">
                                <a class="sidebar-item" href="icons-font-awesome.html">Font Awesome</a>
                                <a class="sidebar-item" href="icons-ion.html">Ion Icons</a>
                                <a class="sidebar-item" href="icons-feather.html">Feather Icons</a>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Extras</h5>
                        </div>
                        <div class="sidebar-content">
                            <a class="sidebar-item" href="#pages" data-toggle="collapse">
                                <i class="align-middle mr-1 fas fa-fw fa-file"></i> <span
                                        class="align-middle">Pages</span>
                            </a>
                            <div class="sidebar-dropdown collapse" id="pages" data-parent="#sidebar">
                                <a class="sidebar-item " href="pages-sign-in.html">Sign In</a>
                                <a class="sidebar-item " href="pages-sign-up.html">Sign Up</a>
                                <a class="sidebar-item " href="pages-reset-password.html">Reset Password</a>
                                <a class="sidebar-item " href="pages-blank.html">Blank Page</a>
                                <a class="sidebar-item " href="pages-404.html">404 Page</a>
                                <a class="sidebar-item " href="pages-500.html">500 Page</a>
                                <a class="sidebar-item " href="pages-invoice.html">Invoice</a>
                            </div>
                            <a href="documentation.html" class="sidebar-item">
                                <i class="align-middle mr-1 fas fa-fw fa-book"></i> <span class="align-middle">Getting Started</span>
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="col-12 col-md-8 col-lg-9 col-xl-10 pl-lg-4">

                <div class="row">
                    <div class="col-6 col-xl-3 d-flex">
                        <div class="card flex-fill">
                            <div class="card-body py-3">
                                <div class="row">
                                    <div class="col-12 col-sm-4 align-self-center text-center text-sm-left">
                                        <div class="icon icon-primary">
                                            <i class="align-middle" data-feather="truck"></i>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-8 align-self-center text-center text-sm-right">
                                        <p class="text-muted mb-1">Sales Today</p>
                                        <h2><i class="text-primary fas fa-caret-up"></i> 2562</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-xl-3 d-flex">
                        <div class="card flex-fill">
                            <div class="card-body py-3">
                                <div class="row">
                                    <div class="col-12 col-sm-4 align-self-center text-center text-sm-left">
                                        <div class="icon icon-danger">
                                            <i class="align-middle" data-feather="users"></i>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-8 align-self-center text-center text-sm-right">
                                        <p class="text-muted mb-1">Visitors Today</p>
                                        <h2><i class="text-danger fas fa-caret-down"></i> 17212</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-xl-3 d-flex">
                        <div class="card flex-fill">
                            <div class="card-body py-3">
                                <div class="row">
                                    <div class="col-12 col-sm-4 align-self-center text-center text-sm-left">
                                        <div class="icon icon-success">
                                            <i class="align-middle" data-feather="dollar-sign"></i>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-8 align-self-center text-center text-sm-right">
                                        <p class="text-muted mb-1">Total Earnings</p>
                                        <h2><i class="text-primary fas fa-caret-up"></i> $ 24300</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-xl-3 d-flex">
                        <div class="card flex-fill">
                            <div class="card-body py-3">
                                <div class="row">
                                    <div class="col-12 col-sm-4 align-self-center text-center text-sm-left">
                                        <div class="icon icon-warning">
                                            <i class="align-middle" data-feather="shopping-cart"></i>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-8 align-self-center text-center text-sm-right">
                                        <p class="text-muted mb-1">Pending Orders</p>
                                        <h2><i class="text-danger fas fa-caret-down"></i> 43</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-lg-9 d-flex">
                        <div class="card flex-fill w-100">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Recent Movement</h5>
                            </div>
                            <div class="card-body">
                                <div class="chart chart-lg mt-2">
                                    <canvas id="chartjs-dashboard-line"></canvas>
                                </div>
                            </div>
                        </div>

                        <script>
                            document.addEventListener("DOMContentLoaded", function (event) {
                                // Line chart
                                new Chart(document.getElementById("chartjs-dashboard-line"), {
                                    type: 'line',
                                    data: {
                                        labels: ["Jan", "", "Feb", "", "Mar", "", "Apr", "", "May", "", "Jun", "", "Jul", "", "Aug", "", "Sep", "", "Oct", "", "Nov", "", "Dec", ""],
                                        datasets: [{
                                            label: "Sales ($)",
                                            fill: true,
                                            backgroundColor: "rgba(65, 212, 146, 0.15)",
                                            borderColor: "#41D492",
                                            data: [6, 7, 8, 11, 9, 11, 8, 14, 12, 16, 9, 10, 14, 15, 9, 12, 16, 17, 22, 18, 24, 32, 31, 36]
                                        }, {
                                            label: "Orders",
                                            fill: true,
                                            backgroundColor: "rgba(206, 212, 218, 0.15)",
                                            borderColor: "#AFBBBF",
                                            borderDash: [4, 4],
                                            data: [3, 5, 4, 9, 5, 8, 5, 6, 4, 7, 4, 3, 4, 6, 4, 7, 12, 12, 18, 15, 20, 25, 22, 25]
                                        }]
                                    },
                                    options: {
                                        maintainAspectRatio: false,
                                        legend: {
                                            display: false
                                        },
                                        tooltips: {
                                            intersect: false
                                        },
                                        hover: {
                                            intersect: true
                                        },
                                        plugins: {
                                            filler: {
                                                propagate: false
                                            }
                                        },
                                        elements: {
                                            line: {
                                                tension: 0
                                            }
                                        },
                                        scales: {
                                            xAxes: [{
                                                reverse: true,
                                                gridLines: {
                                                    color: "rgba(0,0,0,0.0)"
                                                }
                                            }],
                                            yAxes: [{
                                                ticks: {
                                                    stepSize: 5
                                                },
                                                display: true,
                                                borderDash: [5, 5],
                                                gridLines: {
                                                    color: "rgba(0,0,0,0)",
                                                    fontColor: "#fff"
                                                }
                                            }]
                                        }
                                    }
                                });
                            });
                        </script>
                    </div>
                    <div class="col-12 col-lg-3 d-flex">
                        <div class="card flex-fill w-100">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Browser Usage</h5>
                            </div>
                            <div class="card-body d-flex">
                                <div class="align-self-center w-100">
                                    <div class="py-3">
                                        <div class="chart chart-sm">
                                            <canvas id="chartjs-dashboard-pie"></canvas>
                                        </div>
                                    </div>

                                    <table class="table mb-0">
                                        <tbody>
                                        <tr>
                                            <td><i class="fas fa-square-full text-primary"></i> Chrome</td>
                                            <td class="text-right">4401</td>
                                        </tr>
                                        <tr>
                                            <td><i class="fas fa-square-full text-warning"></i> Firefox</td>
                                            <td class="text-right">4003</td>
                                        </tr>
                                        <tr>
                                            <td><i class="fas fa-square-full text-danger"></i> IE</td>
                                            <td class="text-right">1589</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <script>
                            document.addEventListener("DOMContentLoaded", function (event) {
                                // Pie chart
                                new Chart(document.getElementById("chartjs-dashboard-pie"), {
                                    type: 'pie',
                                    data: {
                                        labels: ["Chrome", "Firefox", "IE", "Other"],
                                        datasets: [{
                                            data: [4401, 4003, 1589],
                                            backgroundColor: ["#41D492", "#5C59ED", "#F2B51D", "#E8EAED"],
                                            borderColor: "transparent"
                                        }]
                                    },
                                    options: {
                                        responsive: !window.MSInputMethodContext,
                                        maintainAspectRatio: false,
                                        legend: {
                                            display: false
                                        },
                                        cutoutPercentage: 60
                                    }
                                });
                            });
                        </script>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-xl-4 d-flex">
                        <div class="card flex-fill">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Calendar</h5>
                            </div>
                            <div class="card-body d-flex">
                                <div class="align-self-center w-100">
                                    <div class="chart">
                                        <div id="datetimepicker-dashboard"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <script>
                            document.addEventListener("DOMContentLoaded", function (event) {
                                $('#datetimepicker-dashboard').datetimepicker({
                                    inline: true,
                                    sideBySide: false,
                                    format: 'L'
                                });
                            });
                        </script>
                    </div>
                    <div class="col-12 col-xl-8 d-flex">
                        <div class="card flex-fill w-100">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Current Visitors</h5>
                            </div>
                            <div class="card-body px-4">
                                <div id="world_map" style="height:350px;"></div>
                            </div>
                        </div>

                        <script>
                            document.addEventListener("DOMContentLoaded", function (event) {
                                var mapData = {
                                    "US": 298,
                                    "SA": 200,
                                    "DE": 220,
                                    "FR": 540,
                                    "CN": 120,
                                    "AU": 760,
                                    "BR": 550,
                                    "IN": 200,
                                    "GB": 120,
                                };
                                $('#world_map').vectorMap({
                                    map: 'world_mill',
                                    backgroundColor: "transparent",
                                    zoomOnScroll: false,
                                    regionStyle: {
                                        initial: {
                                            fill: '#e4e4e4',
                                            "fill-opacity": 0.9,
                                            stroke: 'none',
                                            "stroke-width": 0,
                                            "stroke-opacity": 0
                                        }
                                    },
                                    series: {
                                        regions: [{
                                            values: mapData,
                                            scale: ["#34A874", "#41D492"],
                                            normalizeFunction: 'polynomial'
                                        }]
                                    },
                                });
                            })
                        </script>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-lg-8 col-xxl-9 d-flex">
                        <div class="card flex-fill">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Top Selling Products</h5>
                            </div>
                            <table id="datatables-dashboard" class="table table-striped my-0">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th class="d-none d-xl-table-cell">License</th>
                                    <th class="d-none d-xl-table-cell">Technology</th>
                                    <th class="d-none d-xl-table-cell">Tickets</th>
                                    <th>Sales</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>AppStack</td>
                                    <td class="d-none d-xl-table-cell">Single license</td>
                                    <td><span class="badge badge-success">HTML</span></td>
                                    <td class="d-none d-xl-table-cell">50</td>
                                    <td class="d-none d-xl-table-cell">720</td>
                                </tr>
                                <tr>
                                    <td>Spark</td>
                                    <td class="d-none d-xl-table-cell">Single license</td>
                                    <td><span class="badge badge-danger">Angular</span></td>
                                    <td class="d-none d-xl-table-cell">20</td>
                                    <td class="d-none d-xl-table-cell">540</td>
                                </tr>
                                <tr>
                                    <td>Milo</td>
                                    <td class="d-none d-xl-table-cell">Single license</td>
                                    <td><span class="badge badge-warning">React</span></td>
                                    <td class="d-none d-xl-table-cell">40</td>
                                    <td class="d-none d-xl-table-cell">280</td>
                                </tr>
                                <tr>
                                    <td>Ada</td>
                                    <td class="d-none d-xl-table-cell">Single license</td>
                                    <td><span class="badge badge-info">Vue</span></td>
                                    <td class="d-none d-xl-table-cell">60</td>
                                    <td class="d-none d-xl-table-cell">610</td>
                                </tr>
                                <tr>
                                    <td>Abel</td>
                                    <td class="d-none d-xl-table-cell">Single license</td>
                                    <td><span class="badge badge-danger">Angular</span></td>
                                    <td class="d-none d-xl-table-cell">80</td>
                                    <td class="d-none d-xl-table-cell">150</td>
                                </tr>
                                <tr>
                                    <td>Spark</td>
                                    <td class="d-none d-xl-table-cell">Single license</td>
                                    <td><span class="badge badge-success">HTML</span></td>
                                    <td class="d-none d-xl-table-cell">20</td>
                                    <td class="d-none d-xl-table-cell">480</td>
                                </tr>
                                <tr>
                                    <td>Libre</td>
                                    <td class="d-none d-xl-table-cell">Single license</td>
                                    <td><span class="badge badge-warning">React</span></td>
                                    <td class="d-none d-xl-table-cell">30</td>
                                    <td class="d-none d-xl-table-cell">280</td>
                                </tr>
                                <tr>
                                    <td>Von</td>
                                    <td class="d-none d-xl-table-cell">Single license</td>
                                    <td><span class="badge badge-danger">Angular</span></td>
                                    <td class="d-none d-xl-table-cell">50</td>
                                    <td class="d-none d-xl-table-cell">350</td>
                                </tr>
                                <tr>
                                    <td>Material Blog</td>
                                    <td class="d-none d-xl-table-cell">Single license</td>
                                    <td><span class="badge badge-info">Vue</span></td>
                                    <td class="d-none d-xl-table-cell">10</td>
                                    <td class="d-none d-xl-table-cell">480</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <script>
                            document.addEventListener("DOMContentLoaded", function (event) {
                                $('#datatables-dashboard').DataTable({
                                    pageLength: 6,
                                    lengthChange: false,
                                    bFilter: false,
                                    autoWidth: false
                                });
                            });
                        </script>
                    </div>
                    <div class="col-12 col-lg-4 col-xxl-3 d-flex">
                        <div class="card flex-fill w-100">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Monthly Sales</h5>
                            </div>
                            <div class="card-body d-flex w-100">
                                <div class="align-self-center chart chart-lg">
                                    <canvas id="chartjs-dashboard-bar"></canvas>
                                </div>
                            </div>
                        </div>
                        <script>
                            document.addEventListener("DOMContentLoaded", function (event) {
                                // Bar chart
                                new Chart(document.getElementById("chartjs-dashboard-bar"), {
                                    type: 'bar',
                                    data: {
                                        labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                                        datasets: [{
                                            label: "Last year",
                                            backgroundColor: "#41D492",
                                            borderColor: "#41D492",
                                            hoverBackgroundColor: "#41D492",
                                            hoverBorderColor: "#41D492",
                                            data: [54, 67, 41, 55, 62, 45, 55, 73, 60, 76, 48, 79]
                                        }, {
                                            label: "This year",
                                            backgroundColor: "#E8EAED",
                                            borderColor: "#E8EAED",
                                            hoverBackgroundColor: "#E8EAED",
                                            hoverBorderColor: "#E8EAED",
                                            data: [69, 66, 24, 48, 52, 51, 44, 53, 62, 79, 51, 68]
                                        }]
                                    },
                                    options: {
                                        maintainAspectRatio: false,
                                        legend: {
                                            display: false
                                        },
                                        scales: {
                                            yAxes: [{
                                                gridLines: {
                                                    display: false
                                                },
                                                stacked: false,
                                                ticks: {
                                                    stepSize: 20
                                                }
                                            }],
                                            xAxes: [{
                                                barPercentage: .75,
                                                categoryPercentage: .5,
                                                stacked: false,
                                                gridLines: {
                                                    color: "transparent"
                                                }
                                            }]
                                        }
                                    }
                                });
                            });
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<footer class="footer">
    <div class="container">
        <hr/>
        <div class="text-muted text-center">
            <ul class="list-inline mb-2">
                <li class="list-inline-item">
                    <a class="text-muted" href="#">Support</a>
                </li>
                <li class="list-inline-item">
                    <a class="text-muted" href="#">Privacy</a>
                </li>
                <li class="list-inline-item">
                    <a class="text-muted" href="#">Terms of Service</a>
                </li>
                <li class="list-inline-item">
                    <a class="text-muted" href="#">Contact</a>
                </li>
            </ul>
            <p>
                &copy; 2018 - <a href="index.html" class="text-muted">Spark</a>
            </p>
        </div>
    </div>
</footer>
<script src="{{ asset('Spark-v3/js/app.js') }}"></script>

<svg width="0" height="0" style="position:absolute">
    <defs>
        <symbol viewBox="0 0 512 512" id="ion-ios-pulse-strong">
            <path d="M448 273.001c-21.27 0-39.296 13.999-45.596 32.999h-38.857l-28.361-85.417a15.999 15.999 0 0 0-15.183-10.956c-.112 0-.224 0-.335.004a15.997 15.997 0 0 0-15.049 11.588l-44.484 155.262-52.353-314.108C206.535 54.893 200.333 48 192 48s-13.693 5.776-15.525 13.135L115.496 306H16v31.999h112c7.348 0 13.75-5.003 15.525-12.134l45.368-182.177 51.324 307.94c1.229 7.377 7.397 11.92 14.864 12.344.308.018.614.028.919.028 7.097 0 13.406-3.701 15.381-10.594l49.744-173.617 15.689 47.252A16.001 16.001 0 0 0 352 337.999h51.108C409.973 355.999 427.477 369 448 369c26.511 0 48-22.492 48-49 0-26.509-21.489-46.999-48-46.999z"></path>
        </symbol>
    </defs>
</svg>
</body>
</html>