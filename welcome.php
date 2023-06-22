<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>CSE Hacks</title>

    <!--Favicon-->
    <link style="border-radius: 7px;" href="logo/logo2.png" width="60px" rel="icon">
    <link style="border-radius: 7px;" href="logo/logo2.png" width="60px" rel="apple-touch-icon">

    <!---------Css-------->

    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='style.css'>

    <!-----Google font----->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&family=Sofia+Sans+Condensed:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Aleo:wght@400;700&             display=swap" rel="stylesheet">

    <!-----Fontawesome----->
    <link rel="stylesheet" href="https://kit.fontawesome.com/f4de1cba20.css" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/f4de1cba20.js" crossorigin="anonymous"></script>

    <!------Bootstrap------>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">


</head>

<body class="body">



    <!-----------------------Navbar start------------------->






    <section class="navbar-main ">



        <div class="container text-center">
            <div class="row align-items-start">
                <div class="col col-sm-12 col-md-12 col-lg-2  ">
                    <a href="index.html"><img src="logo/logo3.png" width="160" alt="" class="my-1"></a>
                </div>
                <div class="col col col-sm-9 col-md-9 col-lg-8  ">

                    <div class="search-bar-back my-2 ">
                        <form class="d-flex search-bar2" role="search">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">

                            <div class="nav-div">


                                <button> <i class="fa-solid fa-magnifying-glass"></i></button>

                            </div>
                        </form>

                    </div>
                </div>


                <div class="col col col-sm-3 col-md-2 col-lg-2  log-in-back my-2">

                    <div class="login-button my-1">
                        <a href="welcome2.php"> <button> <i class="fa-regular fa-user"></i> <span><?php echo htmlspecialchars($_SESSION["username"]); ?></span> </button></a>
                    </div>



                </div>
            </div>

        </div>
        </div>






        <div class=" text-center">
            <div class="nabar-link">

                <div>
                    <a href=""> <i class="fa-solid fa-house"></i> Home</a>
                </div>
                <div id="rku">
                    <a href="RKU/rku.html" target="_blank"> <img src="logo/rku-logo.png" alt="" width="60px"> </a>
                </div>
                <!-- <div id="rku"> <a href="#latest-part"><i class="fa-solid fa-table-cells"></i> RKU</a> </div> -->
                <div> <a href="#latest-part"><i class="fa-solid fa-table-cells"></i> Latest</a> </div>
                <div>
                    <a href="#trend-tuto"> <i class="fa-solid fa-arrow-trend-up"></i> Trend</a>
                </div>
                <div> <a href=""><i class="fa-brands fa-html5"></i> HTML</a> </div>
                <div> <a href=""><i class="fa-brands fa-css3-alt"></i> CSS</a> </div>
                <div> <a href=""><i class="fa-brands fa-square-js"></i> JS</a> </div>
                <div> <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="32" height="20" viewBox="0 0 24 24"><path fill="currentColor" d="M3.345 6.935c-1.756 2.523-1.538 5.806-.196 8.487l.098.19c.021.04.041.082.063.121c.012.024.026.047.039.069a7.842 7.842 0 0 0 .198.344l.073.12a9.14 9.14 0 0 0 .211.33a10.179 10.179 0 0 0 .221.319l.036.049c.063.088.129.175.196.261l.074.094l.182.223l.069.082c.082.097.167.194.252.289l.005.005c.004.004.007.006.01.011c.083.091.17.181.256.271l.083.083l.205.201l.084.08c.092.087.186.172.281.256l.004.004l.049.041c.083.073.169.145.255.215l.105.084a11.03 11.03 0 0 0 .565.424c.029.021.057.042.087.062l.024.017c.076.053.154.103.231.153c.033.022.066.045.101.067a10.975 10.975 0 0 0 .886.509c.065.034.129.068.195.101l.045.022l.08.039c.102.048.205.097.308.143l.066.029c.119.052.239.102.36.149l.088.035a13.895 13.895 0 0 0 .382.142c.125.044.252.085.38.124l.092.028c.128.039.256.085.39.11c8.492 1.548 10.958-5.102 10.958-5.102c-2.072 2.698-5.748 3.41-9.232 2.618c-.132-.03-.261-.071-.39-.109l-.097-.029a10.929 10.929 0 0 1-.755-.264l-.093-.036c-.12-.047-.239-.097-.356-.148l-.071-.031a11.932 11.932 0 0 1-.301-.14l-.087-.042c-.078-.038-.155-.079-.232-.118c-.051-.027-.104-.053-.155-.082a8.294 8.294 0 0 1-.278-.156l-.094-.052a11.4 11.4 0 0 1-.363-.223l-.098-.065a10.557 10.557 0 0 1-.259-.172l-.083-.059c-.082-.058-.164-.116-.244-.176a11.921 11.921 0 0 1-.328-.255l-.099-.079c-.092-.076-.184-.152-.274-.231a12.01 12.01 0 0 1-.319-.288c-.028-.026-.055-.051-.081-.078a7.985 7.985 0 0 1-.208-.203l-.081-.081a10.76 10.76 0 0 1-.254-.269l-.012-.012a11.75 11.75 0 0 1-.258-.293l-.067-.081a10.313 10.313 0 0 1-.254-.313a11.855 11.855 0 0 1-.215-.286C3.864 11.825 3.17 8.186 4.715 5.198"/><path fill="currentColor" d="M8.794 4.809c-1.27 1.827-1.2 4.273-.21 6.205c.166.324.353.639.561.938c.191.273.401.597.654.816c.092.101.187.199.284.295l.076.074c.094.092.19.182.291.271l.011.01l.003.002c.111.097.224.19.34.281l.078.06a8.281 8.281 0 0 0 .366.268c.053.037.108.072.161.107c.026.017.051.035.078.051a7.14 7.14 0 0 0 .301.184c.076.044.155.087.233.13c.026.015.055.029.082.043c.055.028.108.057.163.083a9.645 9.645 0 0 0 .365.171l.074.031c.093.039.186.077.281.113l.117.044c.086.032.171.06.256.089l.117.037c.121.038.243.085.37.107c6.556 1.086 8.068-3.961 8.068-3.961c-1.364 1.964-4.006 2.902-6.825 2.17a7.866 7.866 0 0 1-.743-.232l-.118-.043a7.629 7.629 0 0 1-.353-.145a8.79 8.79 0 0 1-.344-.159c-.057-.028-.113-.058-.17-.087l-.099-.051a9.352 9.352 0 0 1-.533-.313l-.08-.053a7.65 7.65 0 0 1-.602-.435c-1.234-.974-2.213-2.306-2.678-3.815c-.488-1.566-.382-3.323.462-4.75"/><path fill="currentColor" d="M13.379 3.221c-.749 1.102-.823 2.469-.304 3.686c.548 1.292 1.671 2.304 2.981 2.785a3.85 3.85 0 0 0 .234.079c.077.024.152.053.233.067c3.62.699 4.601-1.857 4.862-2.234c-.86 1.239-2.306 1.536-4.078 1.105a5.403 5.403 0 0 1-.939-.344a5.39 5.39 0 0 1-.895-.545c-1.585-1.204-2.573-3.501-1.536-5.372"/></svg> JQ </a>                    </div>
                <div> <a href=""><i class="fa-regular fa-copyright"></i> PHP</a> </div>
                <div> <a href=""><i class="fa-solid fa-c"></i> C</a> </div>
                <div> <a href=""><i class="fa-brands fa-python"></i> PY</a> </div>
                <div>
                    <a href=""> <i class="fa-brands fa-java"></i> JAVA</a>
                </div>
                <div>
                    <a href=""> <i class="fa-brands fa-stack-overflow"></i> DSA</a>
                </div>
                <div> <a href=""><i class="fa-solid fa-database"></i> DBMS</a> </div>
                <div> <a href=""><i class="fa-solid fa-language"></i> EN</a> </div>
                <div> <a href=""><i class="fa-solid fa-brain"></i> GK</a> </div>
                <div> <a href=""><i class="fa-regular fa-newspaper"></i>ARTI</a> </div>

            </div>
        </div>

    </section>






    <!-----------------------Navbar End------------------->







    <!-----------------------Home page start------------------->







    <section id="home0" class="container bg-white my-2">




        <div id="carouselExampleAutoplaying" class="carousel slide " data-bs-ride="carousel">
            <div class="carousel-inner">


                <div class="carousel-item active">
                    <img src="images/home/main2.png" class="d-block w-100" alt="...">

                </div>
                <div class="carousel-item">
                    <img src="images/home/1.png" class="d-block w-100" alt="...">
                </div>

            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
        </div>




    </section>





    <div>
        <a class="position-fixed bottom-0 arrow-button end-0" href="#home"><i class="fa-solid fa-arrow-up"></i></a>

        <div class="position-fixed bottom-0 end-0  chat-icon-div  ">
            <a href="#home0"><img class="chat-icon-div-img" src="logo/logo2.png" alt=""></a>
        </div>
    </div>


    <!-----------------------Home page end End------------------->













    <!-----------------------Latest Tutorial  start------------------->





    <section id="latest-part" class="container bg-white my-4 ">


        <div class=" p-2 my-4 latest-tutorial-headline"> <i class="fa-solid fa-table-cells"></i> Latest <span>Tutorial</span> </div>


        <div class="container text-center latest-tutorial-div0 ">
            <div class="row p-4 row-cols-2 row-cols-lg-5 g-2    g-lg-3 latest-tutorial-div my-3 ">


                <div class="col  text-decoration-p">

                    <a href="">
                        <div class="shadow h-100 w-100 ">
                            <img src="images/latest-tutorial/c.png " width="50px" alt="">

                            <p>
                                C Programing
                            </p>

                        </div>
                    </a>

                </div>




                <div class="col text-decoration-p">

                    <a href="">
                        <div class="shadow h-100 w-100 ">
                            <img src="images/latest-tutorial/java.png" width="50px" alt="">

                            <p>
                                JAVA
                            </p>

                        </div>
                    </a>

                </div>

                <div class="col text-decoration-p">

                    <a href="">
                        <div class="shadow h-100 w-100 ">
                            <img src="images/latest-tutorial/database.png" width="50px" alt="">

                            <p>
                                DBMS
                            </p>

                        </div>
                    </a>

                </div>

                <div class="col text-decoration-p">

                    <a href="">
                        <div class="shadow h-100 w-100 ">
                            <img src="images/latest-tutorial/html.png" width="50px" alt="">

                            <p>
                                HTML
                            </p>

                        </div>
                    </a>

                </div>

                <div class="col text-decoration-p">

                    <a href="">
                        <div class="shadow h-100 w-100 ">
                            <img src="images/latest-tutorial/css3.png" width="50px" alt="">

                            <p>
                                CSS
                            </p>

                        </div>
                    </a>

                </div>

                <div class="col text-decoration-p">

                    <a href="">
                        <div class="shadow h-100 w-100 ">
                            <img src="images/latest-tutorial/javascript.png" width="50px" alt="">

                            <p>
                                JS
                            </p>

                        </div>
                    </a>

                </div>

                <div class="col text-decoration-p">

                    <a href="">
                        <div class="shadow h-100 w-100 ">
                            <img src="images/latest-tutorial/teaching-english.png" width="50px" alt="">

                            <p>
                                English
                            </p>

                        </div>
                    </a>

                </div>
                <div class="col text-decoration-p">

                    <a href="">
                        <div class="shadow h-100 w-100 ">
                            <img src="images/latest-tutorial/knowledge.png" width="50px" alt="">

                            <p>
                                GK
                            </p>

                        </div>
                    </a>


                </div>
            </div>








    </section>









    <!-----------------------Latest Tutorial End------------------->










    <!-----------------------trending Tutorial start------------------->





    <section id="trend-tuto" class=" container bg-white my-5">

        <div class=" p-2 latest-tutorial-headline"><i class="fa-solid fa-chart-column"></i> Trending <span> Tutorial</span> </div>



        <div class="row row-cols-1 row-cols-md-3 row-cols-lg-3 g-4 my-4">
            <div class="col p-3  col-lg-3 trendin-box-shadow">
                <div class="card h-100">
                    <img src="images/Trending-tutorial/dsa.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">DSA with Java</h5>
                        <p class="card-text">Data Structure and Algorithm with JAVA Beginner Level</p>
                    </div>


                    <div class="card-footer carfooter-div  justify-content-center">

                        <div class="row  ">
                            <div>
                                <img src="images/Trending-tutorial/free.png" width="40px" alt="">
                            </div>
                        </div>
                        <div>
                            <button type="button" class="btn btn-success container-fluid">Join Now</button>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col p-3  col-lg-3">
                <div class="card h-100">
                    <img src="images/Trending-tutorial/dbms.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">DBMS</h5>
                        <p class="card-text">Database Management System Basic to Advanch</p>
                    </div>
                    <div class="card-footer carfooter-div  justify-content-center">

                        <div class="row  ">
                            <div>
                                <img src="images/Trending-tutorial/free.png" width="40px" alt="">
                            </div>
                        </div>
                        <div>
                            <button type="button" class="btn btn-success container-fluid">Join Now</button>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col p-3 col-lg-3">
                <div class="card h-100">
                    <img src="images/Trending-tutorial/html.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">HTML</h5>
                        <p class="card-text"> Hyper Text Marqub Language Basic to Advanch</p>
                    </div>
                    <div class="card-footer carfooter-div  justify-content-center">

                        <div class="row  ">
                            <div>
                                <img src="images/Trending-tutorial/free.png" width="40px" alt="">
                            </div>
                        </div>
                        <div>
                            <button type="button" class="btn btn-success container-fluid">Join Now</button>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col p-3 col-lg-3">
                <div class="card h-100">
                    <img src="images/Trending-tutorial/java.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">JAVA</h5>
                        <p class="card-text"> High-level, class-based, Object-Oriented Programming language Basic</p>
                    </div>
                    <div class="card-footer carfooter-div  justify-content-center">

                        <div class="row  ">
                            <div>
                                <img src="images/Trending-tutorial/free.png" width="40px" alt="">
                            </div>
                        </div>
                        <div>
                            <button type="button" class="btn btn-success container-fluid">Join Now</button>
                        </div>

                    </div>
                </div>
            </div>
        </div>



    </section>























    <!-----------------------trending Tutorial end------------------->







    <footer>



        <div class=" ">
            <div class="row align-items-start">


                <div class="col col-sm-12 col-md-4 col-lg-3  ">
                    <div class="footer-main-div0  row   ">
                        <p> <img src="/logo/logo.png" width="150px" alt=""></p>
                        <p>CSE Hacks is a online platfrom where you can learn all about Computer Engineering and Science</p>

                        <div class="card-footer carfooter-div  justify-content-center">

                            <div class="row  ">
                                <div class="p-2">
                                    <a href=""> <img src="logo/footer/ap.png" width="120px" alt=""> </a>
                                </div>
                            </div>
                            <div class="p-2">
                                <a href=""> <img src="logo/footer/go.png" width=113px" alt=""></a>
                            </div>

                        </div>
                    </div>
                </div>



                <div class="col col-sm-3 col-md-2 col-lg-3  ">
                    <div class="footer-about row my-4 mx-4">
                        <h4>About</h4>
                        <a href=""><i class="fa-solid fa-user-group"></i> Team</a> <br>
                        <a href=""><i class="fa-solid fa-headset"></i> Support</a> <br>
                        <a href=""><i class="fa-solid fa-person-chalkboard"></i> Career</a>
                    </div>
                </div>
                <div class="col col-sm-3 col-md-2 col-lg-3  ">
                    <div class="footer-learn  row my-4 ">
                        <h4>Learn</h4>


                        <a href=""><i class="fa-solid fa-laptop-code"></i> Programing Language</a> <br>
                        <a href=""> <i class="fa-brands fa-stack-overflow"></i> Data Structure</a> <br>
                        <a href=""><i class="fa-solid fa-laptop-code"></i> Compiler</a>

                    </div>
                </div>
                <div class="col col-sm-6 col-md-4 col-lg-3  ">
                    <div class="footer-contact row my-4 ">
                        <h4>Contact</h4>
                        <div class="location-email my-3">
                            <p><i class="fa-solid fa-location-dot"></i>&nbsp&nbsp Rk University Rajkot,Gujarat</p>
                            <p><i class="fa-solid fa-envelope"></i>&nbsp&nbsp mishukinfo09@gmail.com</p>
                        </div>

                        <div class="footer-div">
                            <a href="https://www.facebook.com/mishuk0910" target="_blank"> <i class="fa-brands fa-facebook"></i></a>

                            <a href="https://www.linkedin.com/in/mahadi-hasan-mishuk-%F0%9F%87%A7%F0%9F%87%A9-1142b21a2" target="_blank"><i class="fa-brands fa-linkedin"></i></a>

                            <a href=""> <i class="fa-brands fa-twitter"></i></a>

                            <a href="https://instagram.com/mishuk0910?igshid=NTA5ZTk1NTc=" target="_blank"> <i class="fa-brands fa-instagram"></i></a>

                            <a href="https://github.com/mishuk09" target="_blank"> <i class="fa-brands fa-github"></i></a>



                            <div class="footer-div3">
                                <i class="fa-regular fa-copyright"></i> CSE Hacks 2023

                            </div>



                        </div>

                    </div>
                </div>
            </div>
        </div>










        <!-- 
 <div class="footer-main-div ">
  <div class="footer-main-div0  row   " >
    <p> <img src="/logo/logo.png" width="150px" alt=""></p>

  <div class="location-email">
  <p><i class="fa-solid fa-location-dot"></i>&nbsp&nbsp Rk University Rajkot,Gujarat</p>
  <p  ><i class="fa-solid fa-envelope"></i>&nbsp&nbsp mishukinfo09@gmail.com</p>
  </div>

  <div class="footer-main-div1" >
   <a href=""><img src="logo/footer/apple.png" width="120px" alt="" ></a> 
   <a href=""><img src="logo/footer/google.png" width="110px" alt=""></a> 
  </div>

</div>





  <div class="footer-about row ">
    <h2>About</h2>
    <ul>
      <li>Team</li>
      <li>Support</li>
      <li>Career</li>
    </ul>
  </div>




  <div class="footer-learn row "> 
    <h2>Learn</h2>
    <ul>
      <li>Programing Language</li>
      <li>Data Structure</li>
      <li>Compiler</li>
    </ul>
  </div>

  <div class="footer-contact row ">
     <h2>Contact</h2>
  </div>
 </div> -->

    </footer>

































    <!--Bootstrap-->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <!--Font awesome-->
</body>

</html>