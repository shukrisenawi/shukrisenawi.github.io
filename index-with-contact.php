<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

$headers .= "From:".strtolower($_POST['email'])."\r\n";
$headers .= "X-Sender: $_POST[email]\n";
$headers .= "Return-Path: $_POST[email]\n";
$headers .= "MIME-Version: 1.0\n";
$headers .= "Content-type: text/html; charset=utf-8\r\n";

$enviar = "<html>
                <head>
                <title>CONTATO</title>
                </head>
                <body>
                <table width='100%' cellpadding='0' cellspacing='0' border='0' style='background-color:#677DA3;'>
                  <tr>
                    <td>
                        <table width='100%' cellpadding='4' cellspacing='1' bgcolor='#CCCCCC' style='font-family:tahoma, arial; font-size:11px; color:#666666;'>
                            <tr>  
                                <td width='15%' height='25' bgcolor='#F3F3F3'><strong>Name:</strong></td>
                                <td bgcolor='#FFFFFF'>$_POST[name]</td>
                            </tr>
                            <tr>  
                                <td width='15%' height='25' bgcolor='#F3F3F3'><strong>Email:</strong></td>
                                <td bgcolor='#FFFFFF'>".strtolower($_POST['email'])."</td>
                            </tr>
                            <tr>  
                                <td width='15%' height='25' bgcolor='#F3F3F3'><strong>Message:</strong></td>
                                <td bgcolor='#FFFFFF'>".nl2br($_POST['message'])."</td>
                            </tr>                           
                        </table>
                    </td>
                  </tr>
                </table>
            </body>
            </html>";
    mail("thiago@moch.com.br","[Contact]", $enviar, $headers);          
    echo "<script language='javascript'>alert('Mensagem enviada com sucesso! Aguarde o nosso contato');location.href='index.html'</script>";
}
?>
<!doctype html>
<!--[if lt IE 7 ]> <html lang="pt-BR" xmlns:fb="http://ogp.me/ns/fb#" class="no-js oldie ie6 lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7 ]>    <html lang="pt-BR" xmlns:fb="http://ogp.me/ns/fb#" class="no-js oldie ie7 lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="pt-BR" xmlns:fb="http://ogp.me/ns/fb#" class="no-js oldie ie8 lt-ie9"> <![endif]-->
<!--[if IE 9 ]>    <html lang="pt-BR" xmlns:fb="http://ogp.me/ns/fb#" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="pt-BR" xmlns:fb="http://ogp.me/ns/fb#" class="no-js" ><!--<![endif]-->
<head>
<meta charset="utf-8" />
<title>JustMe vCard Template</title>
<meta name="description" content="Description Here Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse ornare blandit tempus." />
<meta name="author" content="Thiago Moch. http://www.thiagomoch.com.br" />
<meta name="robots" content="index,follow" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

<!-- Meta Facebook -->
<meta property="og:title" content="JustMe vCard Template"/>
<meta property="og:description" content="Description Here Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse ornare blandit tempus."/>

<!-- Favicon -->
<link rel="shortcut icon" href="images/favicon.ico" />

<!-- Style -->
<link rel="stylesheet" href="css/default.css" media="screen" />
<link rel="stylesheet" href="css/style.css" media="screen" />

<!-- Google Fonts -->
<link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400,700' rel='stylesheet' type='text/css'>

<!-- Respond JS -->
<script src="js/respond.min.js"></script>

<!-- Modernizr JS -->
<script src="js/modernizr-2.5.3.min.js"></script>

<!-- Flexslider JS -->
<link rel="stylesheet" href="js/flexslider/flexslider.css" type="text/css" media="screen" />
</head>

<body class="pattern1 blue home">
<div id="all" class="center">
	<div id="main" class="center">
      <!-- BEGIN STYLE CHANGER -->
        <div id="change-color">
            Color
            <ul>
                <li><a class="color-blue" href="blue">Blue</a></li>
                <li><a class="color-orange" href="orange">Orange</a></li>
                <li><a class="color-red" href="red">Red</a></li>
                <li><a class="color-green" href="green">Green</a></li>
            </ul>
        </div>
        <div id="change-pattern">
            Pattern
            <ul>
                <li><a href="pattern1"><img src="images/pattern1-thumb.jpg" alt="Pattern1 Thumb" width="20" height="20"></a></li>
                <li><a href="pattern2"><img src="images/pattern2-thumb.jpg" alt="Pattern2 Thumb" width="20" height="20"></a></li>
                <li><a href="pattern3"><img src="images/pattern3-thumb.jpg" alt="Pattern3 Thumb" width="20" height="20"></a></li>
                <li><a href="pattern4"><img src="images/pattern4-thumb.jpg" alt="pattern4 Thumb" width="20" height="20"></a></li>
            </ul>
        </div>
        <!-- END STYLE CHANGER -->
        <!-- BEGIN HEADER -->
        <header id="header">
            <div id="title">
             <h1>thiago nunes</h1>
               <div id="subtitle">CEO and Web Designer</div>
            </div>
            <div id="myphoto">
                <figure><img src="images/myphoto.jpg" alt="Thiago Nunes | CEO and Web Designer" width="150" height="150"></figure>
            </div>
            <nav id="nav-global">
                <ul id="nav-global-ul">
                    <li class="nav-global-li nav-home"><a href="#sec-home" title="HOME" class="nav-global-a">HOME</a></li>
                    <li class="nav-global-li nav-resume"><a href="#sec-resume" title="RESUME" class="nav-global-a">RESUME</a></li>
                    <li class="nav-global-li nav-portfolio"><a href="#sec-portfolio" title="PORTFOLIO" class="nav-global-a">PORTFOLIO</a></li>
                    <li class="nav-global-li nav-contact"><a href="#sec-contact" title="CONTACT" class="nav-global-a">CONTACT</a></li>
                </ul>
            </nav> 
        </header>
        <!-- END HEADER -->
        <!-- BEGIN CONTENT -->
    	<section id="content">
             <!-- BEGIN HOME -->
            <section id="sec-home">
                <p>About You Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sodales, nisi eget ultricies vestibulum, magna libero imperdiet arcu, et faucibus quam nisl at erat. Cras lacus lacus, dapibus quis congue ac, placerat vel arcu. Sed lorem velit, luctus eget tempor nec, scelerisque vel libero. Aliquam erat volutpat. </p>
                <h2>Personal Info</h2>
                <div class="clearfix">
                <table class="table fl" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td class="td-title">Name</td>
                    <td>Thiago Nunes</td>
                  </tr>
                  <tr>
                    <td class="td-title">Date of birth</td>
                    <td>March 02, 1985</td>
                  </tr>
                  <tr>
                    <td class="td-title">Address</td>
                    <td>21 New York Avenue, New York, USA</td>
                  </tr>
                </table>
                <table class="table fr" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td class="td-title">Email</td>
                    <td>thiago@moch.com.br</td>
                  </tr>
                  <tr>
                    <td class="td-title">Phone</td>
                    <td>+55 81 8666-8867</td>
                  </tr>
                  <tr>
                    <td class="td-title">Website</td>
                    <td><a href="http://www.thiagomoch.com.br" target="_blank">thiagomoch.com.br</a></td>
                  </tr>
                </table>
                </div>
            </section>
            <!-- END HOME -->
            <!-- BEGIN RESUME -->
            <section id="sec-resume">
                <div id="all-resume">
                    <div class="fl">
                        <section id="employment">
                            <h2>Employment</h2>
                            <ul>
                                <li>
                                    <span>Manager - Company (2012 - Present)</span><br/>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce rutrum sapien quis purus fringilla cursus. Integer a turpis sed nunc pellentesque vulputate sed vulputate neque.</p>
                                </li>
                            </ul>
                        </section>
                        <section id="education">
                            <h2>Education</h2>
                            <ul>
                                <li>
                                    <span>Graphic Design - School Of Design (2010 - 2012)</span><br/>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce rutrum sapien quis purus fringilla cursus.</p>
                                </li>
                                <li>
                                    <span>Graphic Design - School Of Design (2010 - 2012)</span><br/>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce rutrum sapien quis purus fringilla cursus.</p>
                                </li>
                            </ul>
                        </section>
                    </div>
                    <div class="fr">
                        <section id="design-skills">
                            <h2>Design Skills</h2>
                            <ul>
                                <li>
                                    <div class="stars">
                                        <span class="star-100">&nbsp;</span>
                                        <span class="star-100">&nbsp;</span>
                                        <span class="star-100">&nbsp;</span>
                                        <span class="star-100">&nbsp;</span>
                                        <span class="star-100">&nbsp;</span>
                                    </div>
                                    Graphic Design
                                </li>
                                <li>
                                    <div class="stars">
                                        <span class="star-100">&nbsp;</span>
                                        <span class="star-100">&nbsp;</span>
                                        <span class="star-100">&nbsp;</span>
                                        <span class="star-50">&nbsp;</span>
                                        <span class="star-0">&nbsp;</span>
                                    </div>
                                    Web Design
                                </li>
                                <li>
                                    <div class="stars">
                                        <span class="star-100">&nbsp;</span>
                                        <span class="star-100">&nbsp;</span>
                                        <span class="star-100">&nbsp;</span>
                                        <span class="star-50">&nbsp;</span>
                                        <span class="star-0">&nbsp;</span>
                                    </div>
                                    Print Design
                                </li>
                            </ul>
                        </section>
                        <section id="programming-skills">
                            <h2>Programming Skills</h2>
                            <ul>
                                <li>
                                    <div class="stars">
                                        <span class="star-100">&nbsp;</span>
                                        <span class="star-100">&nbsp;</span>
                                        <span class="star-100">&nbsp;</span>
                                        <span class="star-50">&nbsp;</span>
                                        <span class="star-0">&nbsp;</span>
                                    </div>
                                    PHP/MySQL
                                </li>
                                <li>
                                    <div class="stars">
                                        <span class="star-100">&nbsp;</span>
                                        <span class="star-100">&nbsp;</span>
                                        <span class="star-0">&nbsp;</span>
                                        <span class="star-0">&nbsp;</span>
                                        <span class="star-0">&nbsp;</span>
                                    </div>
                                    Javascript
                                </li>
                                <li>

                                    <div class="stars">
                                        <span class="star-100">&nbsp;</span>
                                        <span class="star-100">&nbsp;</span>
                                        <span class="star-0">&nbsp;</span>
                                        <span class="star-0">&nbsp;</span>
                                        <span class="star-0">&nbsp;</span>
                                    </div>Wordpress
                                </li>
                            </ul>
                        </section>
                    </div>
                </div>
                <section id="testimonials">
                    <h2>Testimonials</h2>
                    <ul>
                        <li class="fl">
                            <div class="aspas">"</div>
                            <img src="images/photo-testimonials.jpg" width="50" height="50">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce rutrum sapien quis purus fringilla. Integer a turpis sed nunc pellentesque vulputate sed.
                            <br/><span>Thiago Nunes - CEO and Web Designer</span></p>
                        </li>
                        <li class="fr">
                            <div class="aspas">"</div>
                            <img src="images/photo-testimonials.jpg" width="50" height="50">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce rutrum sapien quis purus fringilla. Integer a turpis sed nunc pellentesque vulputate sed.
                            <br/><span>Thiago Nunes - CEO and Web Designer</span></p>
                        </li>
                    </ul>
                </section>
            </section>
            <!-- END RESUME -->
            <!-- BEGIN PORTFOLIO -->
            <section id="sec-portfolio">
                <section id="portfolio">
                    <div class="flexslider">
                        <ul class="slides">
                            <li>
                                <ul class="portfolio-slide">
                                    <li><figure><a class="show-portfolio-text" href="#port1"><span></span><img alt="Portfolio" src="images/portfolio-default.jpg" /></a></figure><a class="show-portfolio-text" href="#port1">Projetct Title</a></li>
                                    <li><figure><a class="show-portfolio-img" href="images/portfolio-default-big.jpg"><span></span><img alt="Portfolio" src="images/portfolio-default.jpg" /></a></figure><a class="show-portfolio-img" href="images/portfolio-default-big.jpg">Projetct Title</a></li>
                                    <li><figure><a class="show-portfolio-link" href="#" target="_blank"><span></span><img alt="Portfolio" src="images/portfolio-default.jpg" /></a></figure><a class="show-portfolio-link" href="#" target="_blank">Projetct Title</a></li>
                                    <li><figure><a class="show-portfolio-text" href="#port1"><span></span><img alt="Portfolio" src="images/portfolio-default.jpg" /></a></figure><a class="show-portfolio-text" href="#port1">Projetct Title</a></li>
                                    <li><figure><a class="show-portfolio-img" href="images/portfolio-default-big.jpg"><span></span><img alt="Portfolio" src="images/portfolio-default.jpg" /></a></figure><a class="show-portfolio-img" href="images/portfolio-default-big.jpg">Projetct Title</a></li>
                                    <li><figure><a class="show-portfolio-link" href="#" target="_blank"><span></span><img alt="Portfolio" src="images/portfolio-default.jpg" /></a></figure><a class="show-portfolio-link" href="#" target="_blank">Projetct Title</a></li>
                                    <li><figure><a class="show-portfolio-text" href="#port1"><span></span><img alt="Portfolio" src="images/portfolio-default.jpg" /></a></figure><a class="show-portfolio-text" href="#port1">Projetct Title</a></li>
                                    <li><figure><a class="show-portfolio-img" href="images/portfolio-default-big.jpg"><span></span><img alt="Portfolio" src="images/portfolio-default.jpg" /></a></figure><a class="show-portfolio-img" href="images/portfolio-default-big.jpg">Projetct Title</a></li>
                                </ul>
                            </li>
                            <li>
                                <ul class="portfolio-slide">
                                    <li><figure><a class="show-portfolio-img" href="images/portfolio-default-big.jpg"><span></span><img alt="Portfolio" src="images/portfolio-default.jpg" /></a></figure><a class="show-portfolio-img" href="images/portfolio-default-big.jpg">Projetct Title</a></li>
                                    <li><figure><a class="show-portfolio-link" href="#" target="_blank"><span></span><img alt="Portfolio" src="images/portfolio-default.jpg" /></a></figure><a class="show-portfolio-link" href="#" target="_blank">Projetct Title</a></li>
                                    <li><figure><a class="show-portfolio-text" href="#port1"><span></span><img alt="Portfolio" src="images/portfolio-default.jpg" /></a></figure><a class="show-portfolio-text" href="#port1">Projetct Title</a></li>
                                    <li><figure><a class="show-portfolio-img" href="images/portfolio-default-big.jpg"><span></span><img alt="Portfolio" src="images/portfolio-default.jpg" /></a></figure><a class="show-portfolio-img" href="images/portfolio-default-big.jpg">Projetct Title</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </section>
            </section>
            <!-- BEGIN PORTFOLIO DETAIL -->
            <div style="display: none;">

                <!-- BEGIN PORTFOLIO TEXT DETAIL -->
                <div id="port1" class="portfoliodetail">
                    <div class="fl">
                         <section class="portfoliodetail-img">
                            <div class="flexslider-detail">
                                <ul class="slides portfolio-slide">
                                    <li><figure><img src="images/portfolio-default-big.jpg" alt="Title" /></figure></li>
                                    <li><figure><img src="images/portfolio-animals-big.jpg" alt="Title" /></figure></li>
                                    <li><figure><img src="images/portfolio-foods-big.jpg" alt="Title" /></figure></li>
                                    <li><figure><img src="images/portfolio-lakes-big.jpg" alt="Title" /></figure></li>
                                </ul>
                            </div>
                        </section>
                    </div>
                    <div class="fr">
                        <section id="portfoliodetail-text">
                            <h3>Project Title</h3>
                            <p>Project description lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eu dui nec quam blandit rutrum eget ac elit. Nunc sollicitudin porta quam, eget facilisis quam porttitor eget. Pellentesque ac odio eu elit dignissim imperdiet auctor vitae arcu. Curabitur a diam mauris, quis elementum mauris.</p>
                            <p><strong>Tools used:</strong></p>
                            <ul>
                                <li>Adobe Photoshop</li>
                                <li>Wordpress</li>
                                <li>HTML 5 e CSS 3</li>
                            </ul>
                            <p><strong>Website:</strong></p>
                            <a href="http://www.thiagomoch.com.br" class="link-site">http://www.thiagomoch.com.br</a>
                        </section>
                    </div>
                </div>
                <!-- BEGIN PORTFOLIO TEXT DETAIL -->

            </div>
            <!-- END PORTFOLIO DETAIL -->
            <!-- END PORTFOLIO -->
            <!-- BEGIN CONTACT -->
            <section id="sec-contact">
                <div class="fl">
                    <section id="contact-info">
                        <h2>Contact Info</h2>
                        <iframe width="100%" height="160" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com.br/maps?f=q&amp;source=s_q&amp;hl=pt-BR&amp;geocode=&amp;q=21+New+York+Avenue,+New+York,+USA&amp;aq=&amp;sll=-14.239424,-53.186502&amp;sspn=56.118961,107.138672&amp;ie=UTF8&amp;hq=&amp;hnear=21+New+York+Ave,+Brooklyn,+Kings,+New+York+11216,+EUA&amp;t=m&amp;ll=40.679466,-73.946829&amp;spn=0.010415,0.032358&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe>
                        <p><span>21 New York Avenue, New York, USA</span> <br/><br/>
                            <span>Email:</span> thiago@moch.com.br<br/>
                            <span>Phone:</span> +55 81 8666-8867<br/>
                            <span>Website:</span> <a href="http://www.thiagomoch.com.br" target="_blank">thiagomoch.com.br</a></p>
                    </section>
                </div>
                <div class="fr">
                    <section id="contact-me">
                        <h2>Contact Me</h2>
                            <form id="form-contact-me" method="post" name="form-contact-me" action="index-with-contact.php">
                          <dl>
                            <dt>Your Name</dt>
                            <dd><input type="text" name="name" id="name" class="field f1" value="" /></dd>
                            <dt>Your Email</dt>
                            <dd><input type="text" name="email" id="email" class="field f1" value="" /></dd>
                            <dt>Your Message</dt>
                            <dd><textarea name="message" id="message" class="field f2"></textarea></dd>
                            <dt>&nbsp;</dt>
                            <dd><input type="submit" value="Send Message" /></dd>
                          </dl>
                        </form>
                    </section>
                </div>
            </section>
            <!-- END CONTACT -->
        </section>
    <!-- END CONTENT -->	
    <!-- BEGIN FOOTER -->
          <footer id="footer">
          <div>
              <section id="download-vcard">
                    <a href="#" title="Download vCard">Download vCard</a>
                </section>
                <section id="social">
                    <ul>
                        <li class="social-rss"><a href="#" title="RSS">RSS</a></li>
                        <li class="social-twitter"><a href="#" title="Twitter">Twitter</a></li>
                        <li class="social-googleplus"><a href="#" title="Google Plus">Google Plus</a></li>
                        <li class="social-facebook"><a href="#" title="Facebook">Facebook</a></li>
                        <li class="social-linkedin"><a href="#" title="Linkedin">Linkedin</a></li>
                    </ul>
                </section>
            </div>
            <section id="copyright">
              © 2012 Thiago Nunes
            </section>
        </fotter>
    <!-- END FOOTER -->
    </div>
</div>
<!-- JS DEFAUL FOOTER -->

    <!-- jQuery file -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-1.7.2.min.js"><\/script>')</script>

    <!-- Flexslider -->
    <script src="js/flexslider/jquery.flexslider-min.js"></script>

    <!-- Easytabs -->
    <script src="js/jquery.hashchange.min.js"></script>
    <script src="js/jquery.easytabs.min.js"></script>

    <!-- jQuery validate -->
    <script src="js/jquery.validate.min.js"></script>

    <!-- Fancybox -->
    <script type="text/javascript" src="js/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
    <script type="text/javascript" src="js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
    <link rel="stylesheet" type="text/css" href="js/fancybox/jquery.fancybox-1.3.4.css" media="screen" />

    <!-- Custom.JS file -->
    <script src="js/custom.js"></script>

<!-- END JS DEFAUL FOOTER -->
</body>
</html>