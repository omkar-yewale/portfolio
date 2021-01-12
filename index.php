<?php 
  $message_sent = false;
  if(isset($_POST['email']) && $_POST['email'] != '') {
    if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $user_name = $_POST['name'];
        $user_email = $_POST['email'];
        $user_message = $_POST['message'];
        $to = "yewaleomkar@gmail.com";
        $subject = "hello";
        $body = "";
        $body .= "From: ".$user_name. "\r\n";
        $body .= "Email: ".$user_email. "\r\n";
        $body .= "Message: ".$user_message. "\r\n";

        mail($to,$body,$subject);        
        $msg = 'Thanks, ill be in touch.';
        $message_sent = true;
    }
    else {
        $msg = 'Email Not Sent.';
    }
  }


?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="assets/css/styles.css">

        <!-- =====BOX ICONS===== -->
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>

        <title>Omkar Yewale</title>
         <link rel="icon" href="assets/img/title_logo.png" class="omkar" alt="" />
    </head>
    <body>
        <!--===== HEADER =====-->
        <header class="l-header">
            <nav class="nav bd-grid">
                <div style="float: left;">
                    <img src="assets/img/logo2.jpg" class="omkar" alt="">
                </div>
                <div class="logo_text" style="float: left;">
                    <a href="#" class="name">Omkar</a>
                    <a href="#" class="nav__logo">Yewale</a>
                </div>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item"><a href="#home" class="nav__link active">Home</a></li>
                        <li class="nav__item"><a href="#about" class="nav__link">About</a></li>
                        <li class="nav__item"><a href="#skills" class="nav__link">Skills</a></li>
                        <li class="nav__item"><a href="#work" class="nav__link">Work</a></li>
                        <li class="nav__item"><a href="#education" class="nav__link">Qualification</a></li>
                        <li class="nav__item"><a href="#contact" class="nav__link">Contact</a></li>
                        <li class="nav__item"><a href="assets/files/OmkarYewale.pdf" class="nav__link">Download CV</a></li>
                    </ul>
                </div>

                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-menu'></i>
                </div>
            </nav>
        </header>

        <main class="l-main">
            <!--===== HOME =====-->
            <section class="home bd-grid" id="home">
                <div class="home__data">
                    <h1 class="home__title">Hi,<br>I'am Omkar<br><span class="home__title-color typing"></span></h1>

                    <a href="#contact" class="button">Contact</a>
                    <a href="assets/files/OmkarYewale.pdf" class="button-cv"> Download CV </a>
                </div>

                <div class="home__social">
                    <a href="https://in.linkedin.com/in/omkar-yewale-77a88ba2" class="home__social-icon" target="_blank"><i class='bx bxl-linkedin'></i></a>
                    <a href="https://www.drupal.org/u/omkar_yewale" class="home__social-icon" target="_blank"><i class='bx bxl-drupal'></i></a>
                    <a href="https://github.com/omkar-yewale" class="home__social-icon" target="_blank"><i class='bx bxl-github' ></i></a>
                    <a href="https://api.whatsapp.com/send?phone=919967177564&text=Hello%20Omkar" class="home__social-icon" target="_blank"><i class='bx bxl-whatsapp' ></i></a>
                </div>

                <div class="home__img">    
                    <img src="assets/img/about2.png" alt="">
                </div>
            </section>

            <!--===== ABOUT =====-->
            <section class="about section " id="about">
                <h2 class="section-title">About</h2>

                <div class="about__container bd-grid">
                    <div class="about__img">
                        <img src="assets/img/about.jpg" alt="">
                    </div>
                    
                    <div>
                        <h2 class="about__subtitle">I'am <span class="home__title-color typing-2"></span></h2>
                        <p class="about__text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptate cum expedita quo culpa tempora, assumenda, quis fugiat ut voluptates soluta, aut earum nemo recusandae cumque perferendis! Recusandae alias accusamus atque.</p>           
                    </div>                                   
                </div>
            </section>

            <!--===== SKILLS =====-->
            <section class="skills section" id="skills">
                <h2 class="section-title">Skills</h2>

                <div class="skills__container bd-grid">          
                    <div>
                        <h2 class="skills__subtitle">Profesional Skills</h2>
                        <p class="skills__text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Velit optio id vero amet, alias architecto consectetur error eum eaque sit.</p>
                        <div class="skills__data">
                            <div class="skills__names">
                                <i class='fab fa-drupal skills__icon' ></i>
                                <span class="skills__name">DRUPAL 8 & 9</span>
                            </div>
                            <div class="skills__bar skills__drupal">
                                
                            </div>
                            <div>
                                <span class="skills__percentage">75%</span>
                            </div>
                        </div>
                        <div class="skills__data">
                            <div class="skills__names">
                                <i class='fab fa-php skills__icon'></i>
                                <span class="skills__name">PHP</span>
                            </div>
                            <div class="skills__bar skills__php">
                                
                            </div>
                            <div>
                                <span class="skills__percentage">65%</span>
                            </div>
                        </div>
                        <div class="skills__data">
                            <div class="skills__names">
                                <i class='bx bxl-javascript skills__icon' ></i>
                                <span class="skills__name">JQUERY</span>
                            </div>
                            <div class="skills__bar skills__js">
                                
                            </div>
                            <div>
                                <span class="skills__percentage">65%</span>
                            </div>
                        </div>
                        <div class="skills__data">
                            <div class="skills__names">
                                <i class='bx bxl-html5 skills__icon'></i>
                                <span class="skills__name">HTML5</span>
                            </div>
                            <div class="skills__bar skills__html">

                            </div>
                            <div>
                                <span class="skills__percentage">65%</span>
                            </div>
                        </div>
                        <div class="skills__data">
                            <div class="skills__names">
                                <i class='bx bxl-css3 skills__icon'></i>
                                <span class="skills__name">CSS3</span>
                            </div>
                            <div class="skills__bar skills__css">
                                
                            </div>
                            <div>
                                <span class="skills__percentage">50%</span>
                            </div>
                        </div>
                    </div>
                    
                    <div>              
                        <img src="assets/img/work3.jpg" alt="" class="skills__img">
                    </div>
                </div>
            </section>
            <!--===== Qualification =====-->
            <section class="education section" id="education">
                <h2 class="section-title">Qualification & Experience</h2>

                <div class="education__container bd-grid">
                    <div class="education__content">
                        <div>
                            <h3 class="education__year">2011-2012</h3>
                            <span class="education__university">State Board</span>
                        </div>
                        <div class="education__time">
                            <span class="education__rounder"></span>
                            <span class="education__line"></span>
                        </div>
                        <div>
                            <h3 class="education__race">SSC</h3>
                            <span class="education__specialty">Gokhale High School</span>
                        </div>
                    </div>

                    <div class="education__content">
                        <div>
                            <h3 class="education__year">2013-2014</h3>
                            <span class="education__university">State Board</span>
                        </div>
                        <div class="education__time">
                            <span class="education__rounder"></span>
                            <span class="education__line"></span>
                        </div>
                        <div>
                            <h3 class="education__race">HSC Science</h3>
                            <span class="education__specialty">Shiravane College</span>
                        </div>
                    </div>

                    <div class="education__content">
                        <div>
                            <h3 class="education__year">2015-2016</h3>
                            <span class="education__university">MSBTE</span>
                        </div>
                        <div class="education__time">
                            <span class="education__rounder"></span>
                            <span class="education__line"></span>
                        </div>
                        <div>
                            <h3 class="education__race">Diploma</h3>
                            <span class="education__specialty">Bharti Vidyapeeth</span>
                        </div>
                    </div>


                    <div class="education__content">
                        <div>
                            <h3 class="education__year">2017-2019</h3>
                            <span class="education__university">Mumbai University</span>
                        </div>
                        <div class="education__time">
                            <span class="education__rounder"></span>
                            <span class="education__line"></span>
                        </div>
                        <div>
                            <h3 class="education__race">Bachelor of Engineering</h3>
                            <span class="education__specialty">VIMEET College</span>
                        </div>
                    </div>

                    <div class="education__content">
                        <div>
                            <h3 class="education__year">2019-Current</h3>
                            <span class="education__university">Mumbai</span>
                        </div>
                        <div class="education__time">
                            <span class="education__rounder"></span>
                            <span class="education__line"></span>
                        </div>
                        <div>
                            <h3 class="education__race">Software Engineer</h3>
                            <span class="education__specialty">Trigyn Technologies</span>
                        </div>
                    </div>

                </div>
                
            </section>
            <!--===== WORK =====-->
            <section class="work section" id="work">
                <h2 class="section-title">Work</h2>

                <div class="work__container bd-grid">
                    <div class="work__img">
                        <img src="assets/img/work1.jpg" alt="">
                    </div>
                    <div class="work__img">
                        <img src="assets/img/work2.jpg" alt="">
                    </div>
                    <div class="work__img">
                        <img src="assets/img/work3.jpg" alt="">
                    </div>
                    <div class="work__img">
                        <img src="assets/img/work4.jpg" alt="">
                    </div>
                    <div class="work__img">
                        <img src="assets/img/work5.jpg" alt="">
                    </div>
                    <div class="work__img">
                        <img src="assets/img/work6.jpg" alt="">
                    </div>
                </div>
            </section>

            <!--===== CONTACT =====-->
            <section class="contact section" id="contact">
                <h2 class="section-title">Contact</h2>

                <div class="contact__container bd-grid">
                    <form action="index.php" method="POST" class="contact__form">
                        <input type="text" placeholder="Name" name="name" class="contact__input">
                        <input type="mail" placeholder="Email" name="email" class="contact__input">
                        <!-- <textarea name="" id="" cols="0" rows="10" placeholder="Write Query" name="subject" class="contact__input"></textarea> -->
                        <textarea class="contact__input" rows="5" cols="50" id="message" name="message" placeholder="Write Message" tabindex="4"></textarea>
                        <button type="submit" class="contact__button button">Send</button>
                    </form>
                </div>
            </section>
        </main>

        <!--===== FOOTER =====-->
        <footer class="footer">
            <p class="footer__title">Omkar Yewale</p>
            <div class="footer__social">
                <a href="https://m.facebook.com/yewaleomkar" class="footer__icon"><i class='bx bxl-facebook' ></i></a>
                <a href="https://www.instagram.com/omkar_yewale/" class="footer__icon"><i class='bx bxl-instagram' ></i></a>
                <a href="https://twitter.com/omkaryewale1" class="footer__icon"><i class='bx bxl-twitter' ></i></a>
                <a href="https://api.whatsapp.com/send?phone=919967177564&text=Hello%20Omkar" class="footer__icon"><i class='bx bxl-whatsapp' ></i></a>
            </div>
            <p>&#169; 2020 copyright all right reserved</p>
        </footer>


        <!--===== SCROLL REVEAL =====-->
        <script src="https://unpkg.com/scrollreveal"></script>
        
        <!--===== MAIN JS =====-->
        <script src="assets/js/main.js"></script>
        <script>
            var msg = '<?php echo $msg; ?>';
            if(msg != '') {
                alert(msg);
            }
        </script>
    </body>
</html>