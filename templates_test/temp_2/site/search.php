<!DOCTYPE html>
<html lang="en">
     <head>
     <title>Search results</title>
     <meta charset="utf-8">
     <meta name = "format-detection" content = "telephone=no" />
     <link rel="icon" href="images/favicon.ico" type="image/x-icon">
     <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
     <link rel="stylesheet" href="css/style.css">
     <link rel="stylesheet" href="css/font-awesome.css">
     <link rel="stylesheet" href="css/stuck.css">     
     <script src="js/jquery.js"></script>
     <script src="js/jquery-migrate-1.2.1.js"></script>
     <script src="js/jquery.easing.1.3.js"></script>
     <script src="js/script.js"></script>
     <script src="search/search.js"></script>        
     <script src="js/jquery.equalheights.js"></script>
     <script src="js/jquery.ui.totop.js"></script>     
     <script src="js/superfish.js"></script>
     <script src="js/jquery.mobilemenu.js"></script>
     <script src="js/tmStickUp.js"></script>     
     <!--[if lt IE 8]>
        <link rel="stylesheet" type="text/css" media="screen" href="css/ie.css">
        <link href='//fonts.googleapis.com/css?family=Asap:400' rel='stylesheet' type='text/css'>
        <link href='//fonts.googleapis.com/css?family=Asap:700' rel='stylesheet' type='text/css'>
        <link href='//fonts.googleapis.com/css?family=Lato:400' rel='stylesheet' type='text/css'>
        <link href='//fonts.googleapis.com/css?family=Lato:700' rel='stylesheet' type='text/css'>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
         </a>
      </div>
    <![endif]-->
    <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <link rel="stylesheet" type="text/css" media="screen" href="css/ie.css">
    <![endif]-->
        <script>
            $(document).ready(function(){
                /*Back to Top*/
                $().UItoTop({ easingType: 'easeOutQuart' });
             });
        </script>
     </head>
<body id="top">

<!--==============================header=================================-->

<header id="header">
        <div class="container">
            <div class="row">
                <div class="grid_5">
                    <ul class="top-links">
                        <li><a href="index.html">home</a></li>
                        <li><a href="#">links</a></li>
                        <li><a href="#">locations</a></li>
                        <li><a href="#">news</a></li>
                    </ul>
                </div>
                <div class="grid_7">
                    <div class="tel">24/7 Support:
                        <div class="phone"><i class="fa fa-phone"></i>+1 959 603 6035</div>
                        <span>&nbsp;</span>
                        <a href="#"><i class="fa fa-envelope-o"></i>mail@demolink.org</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="border"></div>
        <div class="container">
            <div class="row">
                <div class="grid_6">
                    <h1><a href="index.html"><img src="images/logo.png" alt=""></a></h1>
                </div>
                <div class="grid_6">
                    <div class="search_box">
                        <form id="search" action="search.php" method="GET">
                            <input type="text" name="s" value="" onfocus="if (this.value == '') {this.value=''}" onblur="if (this.value == '') {this.value=''}">
                            <a onClick="document.getElementById('search').submit()" class="link1">search</a>
                            <div class="clear"></div>      
                        </form>
                    </div>
                </div>
            </div>
            <div id="stuck_container">
                <div class="row">
                    <div class="grid_12">
                        <nav>
                            <ul class="sf-menu">
                                <li><a href="index.html">About Us</a></li>
                                <li><a href="index-1.html">Feeds</a>
                                    <ul>
                                        <li><a href="#">Vestibulum iaculis</a></li>
                                        <li><a href="#">Fusce euismod conuat</a>
                                            <ul>
                                                <li><a href="#">Pellentesque sed</a></li>
                                                <li><a href="#">Aliquam congue ferm</a></li>
                                                <li><a href="#">Mauris accum</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Pellentesque</a></li>
                                   </ul>
                                </li>
                                <li><a href="index-2.html">Farm & Ranch</a></li>
                                <li><a href="index-3.html">Wildlife & Garden</a></li>
                                <li><a href="index-4.html">Contacts</a></li>
                                <li><a href="index-5.html">Blog</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="grid_6">
                    <p class="welcome">Welcome to our site!</p>
                </div>
                <div class="grid_6">
                    <ul class="social-links">
                        <li><a href="#" class="col1"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" class="col2"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" class="col3"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#" class="col4"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#" class="col5"><i class="fa fa-envelope"></i></a></li>
                    </ul>
                </div>
            </div>
            <br>
            <div class="divider"></div>
            <br>
        </div>
    </header>

<!--=======content================================-->

<div id="content">
<div class="p36">
    <div class="container">
        <div class="row">
            <div class="grid_12">
                <h2>Search Results</h2>           
                <div id="search-results"></div>
            </div>            
        </div>
    </div>
</div>

</div>

<!--==================footer=======================-->

<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="grid_12 border1">
                <div class="copy">
                    <a class="link6" href="index.html">SATI. Feed and Farm Supplies.</a>
                    <span>&nbsp;&copy;&nbsp;</span>
                    <span id="copyright-year"></span>&nbsp;
                    <a class="link7" href="index-6.html">Privacy policy</a> <!--{%FOOTER_LINK} -->
                </div>
            </div>
        </div>
    </div>
</footer>

</body>
</html>