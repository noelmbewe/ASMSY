<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>AKKHOR | Exam Grade</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- including inside_head.php -->
    <?php include("includes/inside_head.php"); ?>
    <!-- end including inside_head.php -->
</head>

<body>
    <!-- Preloader Start Here -->
    <div id="preloader"></div>
    <!-- Preloader End Here -->
    <div id="wrapper" class="wrapper bg-ash">
        <!-- Header Menu Area Start Here -->
        <?php include("includes/head.php"); ?>
        <!-- Header Menu Area End Here -->

        <!-- Page Area Start Here -->
        <div class="dashboard-page-one">
            <!-- Sidebar Area Start Here -->
            <?php include("includes/side_bar.php"); ?>
            <!-- Sidebar Area End Here -->
            <div class="dashboard-content-one">
                <!-- Breadcubs Area Start Here -->
                <div class="breadcrumbs-area">
                    <h3>Examination</h3>
                    <ul>
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>Exam Grade</li>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                <div class="row">
                    <!-- Exam Grade Add Area Start Here -->

                    <!-- Exam Grade Add Area End Here -->
                    <!-- Exam Grade List Area Start Here -->
                    <div class="col-8-xxxl col-12">
                        <div class="card height-auto">
                            <div class="card-body">
                                <div class="heading-layout1">
                                    <div class="item-title">
                                        <h3>Exam Grade Lists</h3>
                                    </div>
                                    <div class="dropdown">
                                        <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                            aria-expanded="false">...</a>

                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#"><i
                                                    class="fas fa-times text-orange-red"></i>Close</a>
                                            <a class="dropdown-item" href="#"><i
                                                    class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                            <a class="dropdown-item" href="#"><i
                                                    class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table display data-table text-nowrap">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input checkAll">
                                                        <label class="form-check-label">Grade Name</label>
                                                    </div>
                                                </th>
                                                <th>Grade Point</th>
                                                <th>Percent From</th>
                                                <th>Percent Upto</th>
                                                <th>Comment</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input">
                                                        <label class="form-check-label">A+</label>
                                                    </div>
                                                </td>
                                                <td>3.50</td>
                                                <td>95.00</td>
                                                <td>100.00</td>
                                                <td>Good Result</td>
                                                <td>
                                                    <div class="dropdown">
                                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                                            aria-expanded="false">
                                                            <span class="flaticon-more-button-of-three-dots"></span>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fas fa-times text-orange-red"></i>Close</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input">
                                                        <label class="form-check-label">B+</label>
                                                    </div>
                                                </td>
                                                <td>4.00</td>
                                                <td>95.00</td>
                                                <td>100.00</td>
                                                <td>Good Result</td>
                                                <td>
                                                    <div class="dropdown">
                                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                                            aria-expanded="false">
                                                            <span class="flaticon-more-button-of-three-dots"></span>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fas fa-times text-orange-red"></i>Close</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Exam Grade List Area End Here -->
                </div>
                <?php include("includes/footer.php"); ?>
                <!-- Dashboard Content End Here -->
            </div>
        </div>
        <!-- Page Area End Here -->
    </div>
    
    <!-- including jquery-->
    <?php include("includes/jquery.php"); ?>
    <!-- end including jquery -->

</body>

</html>