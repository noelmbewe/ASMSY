<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>AKKHOR | Notice Board</title>
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
                    <h3>Notice Board</h3>
                    <ul>
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>Notice</li>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                <div class="row">
                    <!-- Add Notice Area Start Here -->
                    <!-- All Notice Area Start Here -->
<div class="col-8-xxxl col-12">
    <div class="card height-auto">
        <div class="card-body">
            <div class="heading-layout1">
                <div class="item-title">
                    <h3>Exams Schedule</h3>
                </div>
                <div class="dropdown">
                    <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">...</a>

                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#"><i class="fas fa-times text-orange-red"></i>Close</a>
                        <a class="dropdown-item" href="#"><i class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                        <a class="dropdown-item" href="#"><i class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                    </div>
                </div>
            </div>
            <form class="mg-b-20">
                <div class="row gutters-8">
                    <div class="col-lg-5 col-12 form-group">
                        <input type="text" placeholder="Search by Date ..." class="form-control">
                    </div>
                    <div class="col-lg-5 col-12 form-group">
                        <input type="text" placeholder="Search by Subject ..." class="form-control">
                    </div>
                    <div class="col-lg-2 col-12 form-group">
                        <button type="submit" class="fw-btn-fill btn-gradient-yellow">SEARCH</button>
                    </div>
                </div>
            </form>
            <div class="notice-board-wrap">
                <div class="notice-list">
                    <div class="post-date bg-skyblue">16 June, 2019</div>
                    <h6 class="notice-title"><a href="#">Math Exam Schedule</a></h6>
                    <div class="entry-meta">  Jennyfar Lopez / <span>5 min ago</span></div>
                </div>
                <div class="notice-list">
                    <div class="post-date bg-yellow">17 June, 2019</div>
                    <h6 class="notice-title"><a href="#">Science Exam Schedule</a></h6>
                    <div class="entry-meta">  Jennyfar Lopez / <span>10 min ago</span></div>
                </div>
                <div class="notice-list">
                    <div class="post-date bg-pink">18 June, 2019</div>
                    <h6 class="notice-title"><a href="#">History Exam Schedule</a></h6>
                    <div class="entry-meta">  Jennyfar Lopez / <span>15 min ago</span></div>
                </div>
                <div class="notice-list">
                    <div class="post-date bg-skyblue">19 June, 2019</div>
                    <h6 class="notice-title"><a href="#">English Exam Schedule</a></h6>
                    <div class="entry-meta">  Jennyfar Lopez / <span>20 min ago</span></div>
                </div>
                <div class="notice-list">
                    <div class="post-date bg-yellow">20 June, 2019</div>
                    <h6 class="notice-title"><a href="#">Geography Exam Schedule</a></h6>
                    <div class="entry-meta">  Jennyfar Lopez / <span>25 min ago</span></div>
                </div>
                <div class="notice-list">
                    <div class="post-date bg-pink">21 June, 2019</div>
                    <h6 class="notice-title"><a href="#">Art Exam Schedule</a></h6>
                    <div class="entry-meta">  Jennyfar Lopez / <span>30 min ago</span></div>
                </div>
                <div class="notice-list">
                    <div class="post-date bg-skyblue">22 June, 2019</div>
                    <h6 class="notice-title"><a href="#">Physics Exam Schedule</a></h6>
                    <div class="entry-meta">  Jennyfar Lopez / <span>35 min ago</span></div>
                </div>
            </div>
        </div>
    </div>
</div>

                    <!-- All Notice Area End Here -->
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