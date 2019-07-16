<!DOCTYPE html>
<html dir="rtl" lang="fa-IR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>پنل مدیریت - پروفایل کاربری</title>
    <link rel="stylesheet" href="assets/css/lib/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/lib/all.min.css">
    <link rel="stylesheet" href="assets/css/profile.css">
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
                    <li class="nav-item"><a href="projects.php" class="nav-link"><span class="fa fa-code"></span> پروژه
                            ها</a></li>
                    <li class="nav-item"><a href="posts.php" class="nav-link"><span class="fa fa-table"></span> پست
                            ها</a></li>
                    <li class="nav-item"><a href="changewebsitetemplate.php" class="nav-link"><span
                                class="fa fa-paint-roller"></span> ویرایش وبسایت</a></li>
                    <li class="nav-item"><a href="settings.php" class="nav-link"><span class="fa fa-cogs"></span>
                            تنظیمات</a></li>
                </ul>
                <ul class="nav navbar-nav ml-auto">

                    <li class="nav-item">
                        <a href="#" class="nav-link dropdown-toggle mr-2" id="userSetting" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                class="fa fa-user-circle"></i><span id="username">  </span> </a>
                        <div class="dropdown-menu">
                            <a href="profile.php" class="dropdown-item"><i class="fa fa-edit mr-3"></i>پروفایل</a>
                            <a href="#" class="dropdown-item"><i class="fa fa-cog mr-3"></i>تنظیمات</a>
                        </div>
                    </li>
                    <li class="nav-item"><a href="login.php" class="nav-link mr-5"><span
                                class="fa fa-sign-out-alt"></span> خروج </a></li>
                </ul>
            </div>
        </nav>
    </section>



    <!----------------------------Top Label  Start---------------------------->
    <section id="topLabel">
        <div class="container-fluid">
            <div class="row text-white">
                <div class="col text-center py-5">
                    <h2><span class="fa fa-edit"></span> پروفایل</h2>
                </div>
            </div>
        </div>
    </section>
    <!----------------------------Top Label End---------------------------->






    <!----------------------------Form Start---------------------------->
    <section id="Form">
        <div class="container-fluid">
            <div class="row py-4 mt-5 justify-content-center">
                <div class="col-lg-7 col-md-8 col-sm-12 col-12 p-3 text-white">
                    <div class="mx-5">
                        <form action="" method="POST">
                            <div class="form-group">
                                <label for="firstname">نام</label>
                                <input type="text" class="form-control" id="firstname" >
                            </div>
                            <div class="form-group">
                                <label for="lastname">نام خانوادگی</label>
                                <input type="text" class="form-control" id="lastname">
                            </div>
                            <div class="form-group">
                                <label for="username">نام کاربری</label>
                                <input type="text" class="form-control" id="username">
                            </div>
                            <div class="form-group">
                                <label for="password">رمز عبور</label>
                                <input type="password" class="form-control" id="password">
                            </div>
                            <div class="form-group">
                                <label for="passwordConfirm">تکرار رمز عبور</label>
                                <input type="password" class="form-control" id="passwordConfirm">
                            </div>
                            <div class="form-group">
                                <label for="email">ایمیل</label>
                                <input type="text" class="form-control" id="email">
                            </div>
                            <div class="form-group mt-4">
                                <textarea name="" id="description" cols="30" rows="5" class="form-control"
                                    placeholder="توضیحات"></textarea>
                            </div>
                            <button type="submit" class="btn btn-success rounded-0" name ="btnEditInfo">اعمال
                                تغییرات</button>
                        </form>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-12 col-12 text-center text-white">
                    <div class="w-75 mx-2">
                        <h6 class="text-center ">تصویر پروفایل</h6>
                        <div id="profileImage">
                            <img src="assets/images/userAvatar.png" alt="Avatar">
                        </div>
                        <button class="btn btn-danger rounded-0 btn-block mt-1" id="btnDeletePic"><span
                                class="fa fa-eraser"></span> حذف</button>
                        <button class="btn btn-primary rounded-0 btn-block mt-1" id="btnEditPic"><span
                                class="fa fa-edit"></span> تغییر</button>
                        <input type="file" name="imgUploader" id="imgUploader" style="display: none">
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!----------------------------Form Start End---------------------------->



    <section class="mt-5">
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
    <script src="assets/js/profile.js"></script>
</body>

</html>