<!DOCTYPE html>
<html dir="rtl" lang="fa-IR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>پنل مدیریت - پست ها</title>
    <link rel="stylesheet" href="assets/css/lib/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/lib/all.min.css">
    <link rel="stylesheet" href="assets/css/posts.css">
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
                    <li class="nav-item active"><a href="posts.php" class="nav-link"><span class="fa fa-table"></span> پست ها</a></li>
                    <li class="nav-item"><a href="changewebsitetemplate.php" class="nav-link"><span class="fa fa-paint-roller"></span> ویرایش وبسایت</a></li>
                    <li class="nav-item"><a href="settings.php" class="nav-link"><span class="fa fa-cogs"></span> تنظیمات</a></li>
                </ul>
                <ul class="nav navbar-nav ml-auto">
                    
                    <li class="nav-item">
                        <a href="#" class="nav-link dropdown-toggle mr-2" id="userSetting" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user-circle"></i><span id="username">  علی مومن زاده </span> </a>
                        <div class="dropdown-menu">
                            <a href="profile.php" class="dropdown-item"><i class="fa fa-edit mr-3"></i>پروفایل</a>
                            <a href="settings.php" class="dropdown-item"><i class="fa fa-cog mr-3"></i>تنظیمات</a>
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
                <div class="col bg-warning text-center py-5">
                    <h2><span class="fa fa-table"></span> پست ها</h2>
                </div>
            </div>
        </div>
    </section>
    <!----------------------------Top Label End---------------------------->






    <!----------------------------Tabel and slide menu Start---------------------------->
    <section>
        <div class="container-fluid">
            <div class="row mt-5">
                <div class="col-lg-9 col-md-9 col-sm-8 col-col-12">
                    <table class="table table-responsive table-responsive-md table-responsive-sm table-bordered table-hover text-white text-center"
                        id="postsTable">
                        <thead class="bg-secondary">
                            <tr>
                                <th><span class="fa fa-sort"></span></th>
                                <th>عنوان</th>
                                <th>نویسنده</th>
                                <th>تاریخ ارسال</th>
                                <th>متن کامل</th>
                            </tr>
                        </thead>
                        <tbody>

                            <!-- =================================== php ===================================

                    Get data from database

                    Important note : the last colum ("متن کامل") contains some buttons ,
                    these buttons must have the id of the post then when we click them they will open the post
                    (with the id that comes from the data base , I mean that each post have a uniq key or id in data base)
                    in new .html file (for ex: post_data.html)

                    =================================== php =================================== -->



                            <tr>
                                <td>1</td>
                                <td>بررسی زبان پی اچ پی</td>
                                <td>مهدی مرادی</td>
                                <td>97/02/04</td>
                                <td>
                                    <a href="#" id="" class="btn btn-block btn-primary">ادامه مطلب</a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>دات نت</td>
                                <td>علی مومن زاده</td>
                                <td>97/02/04</td>
                                <td>
                                    <a href="#" id="" class="btn btn-block btn-primary">ادامه مطلب</a>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>طراحی واکنش گرا وب</td>
                                <td>فاطمه نیازی</td>
                                <td>97/02/04</td>
                                <td>
                                    <a href="#" id="" class="btn btn-block btn-primary">ادامه مطلب</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>



                <div class="col-lg-3 col-md-3 col-sm-4 col-col-12">
                    <a href="#" id="btnAdd" class="btn btn-outline-success p-5 btn-block rounded-0" data-toggle="modal"
                        data-target="#modalAddProject" data-whatever="@mdo">
                        <span class="h4 fa fa-plus-square"></span>
                        <span class="h4">اضافه</span>
                    </a>
                    
                </div>

            </div>
        </div>
    </section>





    <!-- =================================== php ===================================

                    The <ul></ul> is used for pagination(links to load other pages) make them dynamic to get pages number
                    note : it is static right now.


    =================================== php =================================== -->
    <ul class="pagination ml-2 mt-lg-0 mt-md-0 mt-sm-3 mt-3">
        <li class="page-item disabled"><a href="" class="page-link">قبل</a></li>
        <li class="page-item active"><a href="" class="page-link">1</a></li>
        <li class="page-item"><a href="" class="page-link">2</a></li>
        <li class="page-item"><a href="" class="page-link">3</a></li>
        <li class="page-item"><a href="" class="page-link">4</a></li>
        <li class="page-item"><a href="" class="page-link">5</a></li>
        <li class="page-item"><a href="" class="page-link"><span class="fa fa-arrow-left"></span></a></li>
    </ul>




    <!----------------------------Tabel and slide menu End---------------------------->



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
    <script src="assets/js/posts.js"></script>
</body>

</html>