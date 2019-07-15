<!DOCTYPE html>
<html dir="rtl" lang="fa-IR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>پنل مدیریت - پروژه ها</title>
    <link rel="stylesheet" href="assets/css/lib/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/lib/all.min.css">
    <link rel="stylesheet" href="assets/css/projects.css">
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
                    <li class="nav-item active"><a href="projects.php" class="nav-link"><span class="fa fa-code"></span> پروژه ها</a></li>
                    <li class="nav-item"><a href="posts.php" class="nav-link"><span class="fa fa-table"></span> پست ها</a></li>
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



    <!----------------------------- Top Label  Start ----------------------------->
    <section id="topLabel">
        <div class="container-fluid">
            <div class="row text-white">
                <div class="col bg-danger text-center py-5">
                    <h2><span class="fa fa-code"></span> پروژه ها</h2>
                </div>
            </div>
        </div>
    </section>
    <!----------------------------Top Label End---------------------------->






    <!----------------------------Table and side menu Start---------------------------->
    <section>
        <div class="container-fluid">
            <div class="row mt-5">
                <div class="col-lg-9 col-md-9 col-sm-8 col-col-12">
                    <table class="table table-responsive table-responsive-md table-responsive-sm table-bordered table-hover text-white text-center"
                        id="projectsTable">
                        <thead class="bg-secondary">
                            <tr>
                                <th><span class="fa fa-sort"></span></th>
                                <th>نوع</th>
                                <th>نام</th>
                                <th>نام خانوادگی</th>
                                <th>تلفن</th>
                                <th>ایمیل</th>
                                <th>توضیحات</th>
                                <th>تاریخ سفارش</th>
                                <th>هزینه</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
								$con = mysqli_connect("localhost","root","","webdevelopers");
								$counter = 1;
								if(! mysqli_connect_error()){
									
									$query = "select * from info";
									$table = mysqli_query($con,$query);
									while($rows = mysqli_fetch_assoc($table))
									{
                                        echo "<tr>";
											echo "<td>" . $counter . "</td>";
											echo "<td>" . $rows['projectType'] . "</td>";
                                            echo "<td>" . $rows['firstName'] . "</td>";
                                            echo "<td>" . $rows['lastName'] . "</td>";
                                            echo "<td>" . $rows['phoneNumber'] .  "</td>";
                                            echo "<td>" . $rows['email'] . "</td>";
                                            echo "<td>" . $rows['description'] . "</td>";
											echo "<td>" . " " .  "</td>";
											echo "<td>" . " " .  "</td>";
											
										echo "</tr>";
										$counter ++;
									}
									
								}
						?>
                        </tbody>
                    </table>
                </div>



                <div class="col-lg-3 col-md-3 col-sm-4 col-col-12">
                    <a href="#" id="btnAdd" class="btn btn-outline-success p-5 btn-block rounded-0" data-toggle="modal" data-target="#modalAddProject" data-whatever="@mdo">
                        <span class="h4 fa fa-plus-square"></span>
                        <span class="h4">اضافه</span>
                    </a>

                    <a href="#" id="btnEdit" class="btn btn-outline-primary p-5 btn-block rounded-0">
                        <span class="h4 fa fa-pencil-alt"></span>
                        <span class="h4">ویرایش</span>
                    </a>
                    <a href="#" id="btnDelete" class="btn btn-outline-danger p-5 btn-block rounded-0" data-toggle="modal" data-target="#modalDeleteProject" data-whatever="@mdooo">
                        <span class="h4">حذف</span>
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





    <!--Modal for Adding New Project-->
    <div class="modal fade" id="modalAddProject" tabindex="-1" role="dialog" aria-labelledby="modalAddProjectLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content bg-dark text-white">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalAddProjectLabel">اضافه کردن پروژه</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-labelledby="Close"><span class="text-white">&times;</span></button>
                </div>
                <div class="modal-body">
                    <form action="" method="POST">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="نام" id="add_firstName">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="نام خانوادگی" id="add_LastName">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="ایمیل" id="add_email">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="شماره تماس" id="add_phoneNumber">
                        </div>
                        <div class="form-group">
                            <label for="ProjectType">نوع پروژه : </label>
                            <select class="custom-select" id="add_ProjectType">
                                <option value="webSite" selected="">وبسایت</option>
                                <option value="webApp">وب اپلیکشین</option>
                                <option value="androidApp">نرم افزار اندروید</option>
                                <option value="DesktopApp">نرم افزار دسکتاپ</option>
                                <option value="FullWebApp">وبسایت + وب اپلیکشین</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <textarea name="" id="add_description" cols="30" rows="4" class="form-control" placeholder="توضیحات"></textarea>
                        </div>
                        <button id="add_btn" type="submit" class="btn btn-success">ثبت پروژه</button>
                    </form>
                </div>
            </div>
        </div>
    </div>



    <!--Modal for Editing A Project-->
    <div class="modal fade" id="modalEditProject" tabindex="-1" role="dialog" aria-labelledby="modalEditProjectLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content bg-dark text-white">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalEditProjectLabel">ویرایش اطلاعات پروژه</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-labelledby="Close"><span class="text-white">&times;</span></button>
                </div>
                <div class="modal-body">
                    <form action="" method="POST">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="نام" id="edit_firstName">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="نام خانوادگی" id="edit_lastName">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="ایمیل" id="edit_email">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="شماره تماس" id="edit_phoneNumber">
                        </div>
                        <div class="form-group">
                            <label for="ProjectType">نوع پروژه : </label>
                            <select class="custom-select" id="edit_ProjectType">
                                <option value="webSite" selected="">وبسایت</option>
                                <option value="webApp">وب اپلیکشین</option>
                                <option value="androidApp">نرم افزار اندروید</option>
                                <option value="DesktopApp">نرم افزار دسکتاپ</option>
                                <option value="FullWebApp">وبسایت + وب اپلیکشین</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <textarea name="" id="edit_description" cols="30" rows="4" class="form-control" placeholder="توضیحات"></textarea>
                        </div>

                        <button id="edit_btnConfirm" type="submit" class="btn btn-block btn-primary">ویرایش</button>
                        <button id="edit_btnCancel" class="btn btn-block btn-danger">لغو</button>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>



    <!--Modal for Deleting Projects-->
    <div class="modal fade" id="modalDeleteProject" tabindex="-1" role="dialog" aria-labelledby="modalDeleteProjectLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content bg-dark text-white">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalDeleteProjectLabel">حذف کردن پروژه</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-labelledby="Close"><span class="text-white">&times;</span></button>
                </div>
                <div class="modal-body">
                    <p class="h6">تعداد آیتم های برای پاک کردن : <span id="deletingItemsCount"></span></p>
                    <table class="table table-bordered" id="deletingItemsTable">
                        <thead class="bg-danger">
                            <tr>
                                <th><span class="fa fa-sort"></span></th>
                                <th>دسته بندی</th>
                                <th>نام سفارش دهنده</th>
                                <th>شماره تماس</th>
                                <th>تاریخ سفارش</th>
                                <th>هزینه</th>
                            </tr>
                        </thead>
                        <tbody class="bg-light text-dark">
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-danger btn-block" id="btnDeleteConfirm">حذف کردن موارد انتخابی</button>
                </div>
            </div>
        </div>



    </div>
    <!----------------------------Table and side menu End---------------------------->



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
    <script src="assets/js/projects.js"></script>
</body>

</html>