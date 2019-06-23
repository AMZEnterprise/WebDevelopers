<!DOCTYPE html>
<html dir="rtl" lang="fa-IR">

<head>

    <meta charset="utf-8">
    <meta name="description" content="طراحی پروژه های خود شامل وبسایت و برنامه های اندرویدی و ویندوزی خود را به ما بسپارید - گروه وب دولوپرز" />
    <meta property=og:locale content=fa_IR>
    <meta property=og:type content="intro">
    <meta property=og:title content="گروه برنامه نویسی وب دولوپرز">
    <meta property=og:description content="طراحی پروژه های خود شامل وبسایت و برنامه های اندرویدی و ویندوزی خود را به ما بسپارید - گروه وب دولوپرز" />
    <meta property=og:url content="#">
    <meta property=og:site_name content="وب دولوپرز">
    <meta property=og:image content="#">
    <meta name=twitter:card content=summary>
    <meta name=twitter:description content="طراحی پروژه های خود شامل وبسایت و برنامه های اندرویدی و ویندوزی خود را به ما بسپارید - گروه وب دولوپرز" />
    <meta name=twitter:title content="گروه برنامه نویسی وب دولوپرز">
    <meta name=twitter:image content="#">

    <title>Post</title>
    <!-------------------------------Favicon-------------------------------------->
    <link rel="shortcut icon" href="image/icon/Favicon.png">

    <!-------------------------------FontAwsome-------------------------------------->
    <link rel="stylesheet" href="../Shared/css/all.min.css">

    <link rel="stylesheet" href="../Shared/css/bootstrap.min.css">
    <link rel="stylesheet" href="assest/css/post.css">
    <link rel="stylesheet" href="assest/css/post_responsive.css">
    <!-------------------------------Slick Slider-------------------------------------->
    <link rel="stylesheet" href="../Shared/css/slick.css">
    <link rel="stylesheet" href="../Shared/css/slick-theme.css">

    <script src="../Shared/js/jquery-3.3.1.min.js"></script>
    <script src="../Shared/js/typed.min.js"></script>


    <!-------------------------------Bootstarp-------------------------------------->
    <script src="../Shared/js/bootstrap.min.js"></script>

    <!-------------------------------AOS : Scroll hide and show effects-------------------------------------->
    <link rel="stylesheet" href="../Shared/css/aos.css">
    <script src="../Shared/js/aos.js"></script>

    <script src="../Shared/js/smoothScroll.js"></script>

</head>

<body>

    <!-------------------------Main Panel Start-------------------------->
    <section id="mainPanel">
        <div class="container-fluid">
            <div class="row">
			<!----PHP--PHP--PHP--PHP--PHP--PHP--PHP--PHP--PHP--->
			<?php
				$con = mysqli_connect("localhost","root","","webdevelopers");
				if(!mysqli_connect_error())
				{
					$query = "select * from posts";
					$info = mysqli_query($con,$query);
					while($rows = mysqli_fetch_assoc($info))
					{
			?>
			<!----PHP--PHP--PHP--PHP--PHP--PHP--PHP--PHP--PHP--->

			<!------------------------------------------OnePost----------------------------------->
				  <div class="col-7">
                    <div class="mainpanelRight">
                        <div class="post">
                            <div class="postHeader">
                                <ul>
                                    <li>
                                        <span class="fa fa-user mr-2"></span><span>نویسنده : </span><span class="postBy"><?php echo $rows['writer'] ; ?></span>
                                    </li>
                                    <li>
                                        <span class="fa fa-calendar mr-2"></span><span>تاریخ ارسال : </span><span class="sentDate"><?php echo $rows['date']; ?></span>
                                    </li>
                                    <li>
                                        <span class="fa fa-eye mr-2"></span><span>تعداد بازدید : </span><span class="vistedCounter">0</span>
                                    </li>
                                    <li>
                                        <span class="fa fa-comment mr-2"></span><span>تعداد نظرات : </span><span class="commentCounter">0</span>
                                    </li>
                                </ul>
							 <img src="images/<?php echo $rows['image']; ?>"  />

                            </div>
                            <div class="postBody">

                                <?php echo $rows['text']; ?>
                            </div>
                            <div class="postFooter">
                                <ul>
                                    <li>
                                        اشتراک گذاری
                                    </li>
                                    <li>
                                        <a href="#"><span class="fab fa-telegram"></span></a>
                                    </li>
                                    <li>
                                        <a href="#"><span class="fab fa-facebook"></span></a>
                                    </li>
                                    <li>
                                        <a href="#"><span class="fab fa-twitter"></span></a>
                                    </li>
                                </ul>
                                <a href="#">دریافت فایل ضمیمه</a>
                            </div>
                        </div>

                        
                            <div class="comment">
                                <div class="commentHeader">
                                    <ul>
                                        <li>
                                            <span class="fa fa-user mr-2"></span><span>نام : </span><span class="commentBy">علی
                                                مومن زاده</span>
                                        </li>
                                        <li>
                                            <span class="fa fa-calendar mr-2"></span><span>تاریخ ارسال : </span><span
                                                class="commentSentDate">97/4/26</span>
                                        </li>
                                    </ul>

                                </div>
                                <div class="commentBody">
                                    <div class="commentBodyRight">
                                        <img src="assest/images/slider.jpg" alt="" class="userPic">
                                    </div>
                                    <div class="commentBodyLeft">
                                        <p class="commentText">
                                            <<<<text>>>>
                                        </p>
                                    </div>
                                </div>
                                <div class="commentFooter">
                                    <div class="commentLikes">
                                        <button class="commentLikeCount"><span>12</span><span class="fa fa-plus ml-2"></span></button>
                                        <button class="commentDislikeCount"><span>3</span><span class="fa fa-minus ml-2"></span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
			<!----PHP--PHP--PHP--PHP--PHP--PHP--PHP--PHP--PHP--->
			<?php
				}
					}
			?>
			<!----PHP--PHP--PHP--PHP--PHP--PHP--PHP--PHP--PHP--->
			<!--------------------------------OnePost----------------------------------->
                
                
                <div class="col-5">
                    <div class="mainpanelLeft">
                        <div class="search">
                            <form action="#">
                                <div class="input-group">
                                    <a href="" class="input-group-text"><span class="fa fa-search"></span></span></a>
                                    <input type="text" name="" id="search" class="form-control">
                                </div>
                            </form>
                        </div>
                        <div class="smPosts mt-4">
                            <div class="catHeader">
                                <span class="fa fa-newspaper fa-1x mr-3"></span>
                                <span class="h4">خبر های برتر</span>
                            </div>
                            <div class="smPostsSlider">
                                <div>
                                    <a href="#" class="smPost">
                                        <div class="smPostRight">
                                            <img src="assest/images/slider.jpg" alt="">
                                        </div>
                                        <div class="smPostLeft">
                                            <p class="h2">تیتر خبر</p>
                                            <p>
                                                <<<<>>>>>>
                                            </p>
                                        </div>
                                    </a>
                                </div>
                               
                            </div>
                        </div>
                        <div class="socialMediaLinks mt-5">
                            <div class="catHeader">
                                <span class="fa fa-link fa-1x mr-3"></span>
                                <span class="h4">پیوندها</span>
                            </div>
                            <ul>
                                <li>
                                    <a href="#"><span class="fab fa-telegram"></span></a>
                                </li>
                                <li>
                                    <a href="#"><span class="fab fa-twitter"></span></a>
                                </li>
                                <li>
                                    <a href="#"><span class="fab fa-instagram"></span></a>
                                </li>
                                <li>
                                    <a href="#"><span class="fab fa-facebook-f"></span></a>
                                </li>
                            </ul>
                        </div>
                        <div class="links mt-5">
                            <div class="catHeader">
                                <span class="fa fa-table fa-1x mr-3"></span>
                                <span class="h4">مطالب دیگر</span>
                            </div>
                            <ul>
                                
                                <li>
                                    <a href="#">این یک لینک است</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--------------------------Main Panel End-------------------------->




    <!--------------------------Add JavaScripts------------------------------>

    <script src="../Shared/js/slick.min.js"></script>
    <script src="assest/js/post.js"></script>

</body>

</html>