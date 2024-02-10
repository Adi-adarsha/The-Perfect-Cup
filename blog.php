<?php
session_start();

if (isset($_SESSION['login'])) {
    $fname = $_SESSION['fname'];
    $lname = $_SESSION['lname'];


?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>The Perfect Cup - Blog</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="brand">The Perfect Cup</div>
    <div class="address-bar">3481 Melrose Place | Beverly Hills, CA 90210 | 123.456.7890</div>

    <!-- Navigation -->
    <?php require_once 'nav.php'; ?>

    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <h2 class="text-center">Welcome <?php echo $fname; echo " " . $lname; ?> - 
                    <a href="logout.php">Logout</a></h2>
                    <hr>
                    <h2 class="intro-text text-center">The Perfect Cup
                        <strong>blog</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="img/slide-1.jpg" alt="">
                    <h2>Blend
                        <br>
                        <small>October 13, 2023</small>
                    </h2>
                    <p>Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis 
                        dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets. 
                        Sed ut perspiciatis unde omnis iste natus.</p>
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" 
                    data-target="#myModal">Read More</button>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="img/slide-2.jpg" alt="">
                    <h2>Blend
                        <br>
                        <small>October 13, 2023</small>
                    </h2>
                    <p>Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis 
                        dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets. 
                        Sed ut perspiciatis unde omnis iste natus.</p>
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" 
                    data-target="#myModal2">Read More</button>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="img/slide-3.jpg" alt="">
                    <h2>Blend
                        <br>
                        <small>October 13, 2023</small>
                    </h2>
                    <p>Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis 
                        dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets. 
                        Sed ut perspiciatis unde omnis iste natus.</p>
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" 
                    data-target="#myModal3">Read More</button>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <ul class="pager">
                        <li class="previous"><a href="#">&larr; Older</a>
                        </li>
                        <li class="next"><a href="#">Newer &rarr;</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->

    <!-- Modal 1-->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
            <!-- Modal Content -->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Modal Header 1</h4>
                </div>
                <div class="modal-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                        Sem nulla pharetra diam sit amet nisl suscipit adipiscing.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 2 -->
    <div class="modal fade" id="myModal2" role="dialog">
        <div class="modal-dialog">
            <!-- Modal Content -->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Modal Header 2</h4>
                </div>
                <div class="modal-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                        Sem nulla pharetra diam sit amet nisl suscipit adipiscing.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 3 -->
    <div class="modal fade" id="myModal3" role="dialog">
        <div class="modal-dialog">
            <!-- Modal Content -->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Modal Header 3</h4>
                </div>
                <div class="modal-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                        Sem nulla pharetra diam sit amet nisl suscipit adipiscing.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer  -->
    <?php require_once 'footer.php'; ?>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>

<?php 

} else {
    header("location:login.php");
}

?>