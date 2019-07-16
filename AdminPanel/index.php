<?php
session_start();
if(!isset($_SESSION['username']))
{
	header('location:login.html');
}

?>
<!DOCTYPE html>
<html dir="rtl" lang="fa-IR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>پنل مدیریت - داشبورد</title>
    <link rel="stylesheet" href="assets/css/lib/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/lib/all.min.css">
    <link rel="stylesheet" href="assets/css/index.css">
</head>
<body class="bg-dark">
   

    
    <section>
        <nav class="navbar navbar-expand-lg  navbar-dark bg-dark">
            <a href="index.php" class="navbar-brand text-danger mr-4 ml-4">پنل مدیریت</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#NavbarTop">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="NavbarTop">
                <ul class="nav navbar-nav">
                    <li class="nav-item"><a href="projects.php" class="nav-link"><span class="fa fa-code"></span> پروژه ها</a></li>
                    <li class="nav-item"><a href="posts.php" class="nav-link"><span class="fa fa-table"></span> پست ها</a></li>
                    <li class="nav-item"><a href="changewebsitetemplate.php" class="nav-link"><span class="fa fa-paint-roller"></span> ویرایش وبسایت</a></li>
                    <li class="nav-item"><a href="settings.php" class="nav-link"><span class="fa fa-cogs"></span> تنظیمات</a></li>
                </ul>
                <ul class="nav navbar-nav ml-auto">
                    
                    <li class="nav-item">
                        <a href="#" class="nav-link dropdown-toggle mr-2" id="userSetting" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user-circle"></i><span id="username">  <?php echo $_SESSION['username']; ?> </span> </a>
                        <div class="dropdown-menu">
                            <a href="profile.php" class="dropdown-item"><i class="fa fa-edit mr-3"></i>پروفایل</a>
                            <a href="#" class="dropdown-item"><i class="fa fa-cog mr-3"></i>تنظیمات</a>
                        </div>
                    </li>
                    <li class="nav-item"><a href="login.php" class="nav-link mr-5"><span class="fa fa-sign-out-alt"></span> خروج </a></li>
                </ul>
            </div>
        </nav>
    </section>

    
    <!----------------------------Top Label  Start---------------------------->
    <section id="topLabel">
        <div class="container-fluid">
            <div class="row text-white">
                <div class="col text-center py-5">
                    <h2><span class="fa fa-user"></span> پنل مدیریت</h2>
                </div>
            </div>
        </div>
    </section>
    <!----------------------------Top Label End---------------------------->

    <section id="welcomeMessage">
        <div class="container-fluid text-center text-white">
            <div class="row">
                <div class="col">
                    <h4>به پنل مدیریت سایت خوش آمدید</h4>
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="container-fluid">
            <div class="row my-5">
                <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                    <a href="projects.php" class="btn btn-danger p-5 btn-block rounded-0 mt-lg-0 mt-md-0 mt-sm-3 mt-3"><span class="fa fa-code h4"></span>  <span class="h4">پروژه ها</span></a>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                    <a href="posts.php" class="btn btn-warning text-white p-5 btn-block rounded-0 mt-lg-0 mt-md-0 mt-sm-3 mt-3"><span class="fa fa-table h4"></span>  <span class="h4">پست ها</span></a>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                    <a href="changewebsitetemplate.php" class="btn btn-primary p-5 btn-block rounded-0 mt-lg-0 mt-md-0 mt-sm-3 mt-3"><span class="fa fa-paint-roller h4"></span>  <span class="h4">ویرایش</span></a>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                    <a href="settings.php" class="btn btn-success p-5 btn-block rounded-0 mt-lg-0 mt-md-0 mt-sm-3 mt-3" style="background-color: rgb(4, 145, 98)"><span class="fa fa-cogs h4"></span>  <span class="h4">تنظیمات</span></a>
                </div>
            </div>
        </div>
    </section>



    


    <section class="mt-5 fixed-bottom">
        <div class="container-fluid">
            <div class="row pt-2 bg-primary text-white text-center">
                <div class="col">
                    <p>Copyright &copy; 2018</p>
                </div>
            </div>
        </div>
    </section>

    <script src="assets/js/lib/jquery-3.3.1.min.js"></script>
    <script src="assets/js/lib/bootstrap.min.js"></script>
    <script src="assets/js/index.js"></script>
</body>
</html>