<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>AKKHOR | Home 4</title>
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
                    <h3>Admin Dashboard</h3>
                    <ul>
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>Parents</li>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->

                <!-- Dashboard summery Start Here -->
                <?php include("includes/dashboard_summery.php"); ?>
                <!-- Dashboard summery End Here -->

                <!-- Dashboard Content Start Here -->
                <?php include("includes/dashboard_content.php"); ?>
                <!-- Dashboard Content End here -->

                <!-- Notification Start Here -->
                <?php include("includes/notification.php"); ?>
                <!-- Notification Ends Here -->
                
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