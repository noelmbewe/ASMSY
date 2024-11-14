<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>AKKHOR | All Expense</title>
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
                    <h3>Accounts</h3>
                    <ul>
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>All Expense</li>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                <!-- Expanse Table Area Start Here -->
                <div class="card height-auto">
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3>All Expenses</h3>
                            </div>
                           <div class="dropdown">
                                <a class="dropdown-toggle" href="#" role="button" 
                                data-toggle="dropdown" aria-expanded="false">...</a>
        
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#"><i class="fas fa-times text-orange-red"></i>Close</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                </div>
                            </div>
                        </div>
                        <form class="mg-b-20">
                            <div class="row gutters-8">
                                <div class="col-3-xxxl col-xl-3 col-lg-3 col-12 form-group">
                                    <input type="text" placeholder="Search by ID ..." class="form-control">
                                </div>
                                <div class="col-4-xxxl col-xl-4 col-lg-3 col-12 form-group">
                                    <input type="text" placeholder="Search by Name ..." class="form-control">
                                </div>
                                <div class="col-4-xxxl col-xl-3 col-lg-3 col-12 form-group">
                                    <input type="text" placeholder="Search by Phone" class="form-control">
                                </div>
                                <div class="col-1-xxxl col-xl-2 col-lg-3 col-12 form-group">
                                    <button type="submit" class="fw-btn-fill btn-gradient-yellow">SEARCH</button>
                                </div>
                            </div>
                        </form>
<div class="table-responsive">
    <table class="table data-table text-nowrap">
        <thead>
            <tr>
                <th>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input checkAll">
                        <label class="form-check-label">ID</label>
                    </div>
                </th>
                <th>Term</th>
                <th>Total Fees</th>
                <th>Paid Fees</th>
                <th>Fees Balance</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input">
                        <label class="form-check-label">#001</label>
                    </div>
                </td>
                <td>Spring 2023</td>
                <td>$2,500.00</td>
                <td>$2,000.00</td>
                <td>$500.00</td>
                <td>
                    <span class="badge badge-pill badge-success d-block mg-t-8">Paid</span>
                </td>
                <td>
                    <div class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                            <span class="flaticon-more-button-of-three-dots"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#"><i class="fas fa-eye text-primary"></i>View Details</a>
                            <a class="dropdown-item" href="#"><i class="fas fa-credit-card text-success"></i>Make Payment</a>
                        </div>
                    </div>
                </td>
            </tr>
            <!-- Add more rows for different terms or children -->
        </tbody>
    </table>
</div>

                    </div>
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