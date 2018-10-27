<?php include('formprocess.php'); ?>

<!doctype html>
<html lang="en">

<head>
    <title>Contact Us</title>
    <link href="global.css" rel="stylesheet">
    <link rel="stylesheet" href="formstyle.css" type="text/css">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A page's description, usually one or two sentences.">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
</head>

<body>

    <div class="wrap">

        <img id="logo" src="img/companylogo5.jpg" alt="company logo">

        <nav class="navbar navbar-expand-lg navbar-dark" style="background: #2a4671">
            <div class="container">
                <a class="navbar-brand" href="index.html">QCE PTE. LTD.</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarsExample07">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about-us.html">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="services.html">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact-us.php">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="faq.html">FAQ</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>


        <div>
            <div class="container">
                <main>


                    <form id="contact" action="<?= $_SERVER['PHP_SELF']; ?>" method="post">

                        <form>
                            <h1>E-mail Us</h1>

                            <div class="contentform">
                                <div id="sendmessage"> Your message has been sent successfully. Thank you. </div>


                                <div class="leftcontact">


                                    <div class="form-group">
                                        <p>Name <span>*</span></p>

                                        <input placeholder="Your name" type="text" tabindex="1" name="name" value="<?= $name ?>" autofocus>
                                        <span class="error">
                                            <?= $name_error ?></span>
                                        <div class="validation"></div>
                                    </div>

                                    <div class="form-group">
                                        <p>E-mail <span>*</span></p>

                                        <input placeholder="Your Email Address" type="text" name="email" value="<?= $email ?>" tabindex="2">
                                        <span class="error">
                                            <?= $email_error ?></span>
                                        <div class="validation"></div>
                                    </div>

                                    <div class="form-group">
                                        <p>Phone number <span>*</span></p>

                                        <input placeholder="Your Phone Number" type="text" name="phone" value="<?= $phone ?>" tabindex="3">
                                        <span class="error">
                                            <?= $phone_error ?></span>
                                        <div class="validation"></div>
                                    </div>


                                </div>

                                <div class="rightcontact">


                                    <div class="form-group">
                                        <p>Message <span>*</span></p>

                                        <textarea placeholder="Type your Message Here...." type="text" name="message" tabindex="5"></textarea>
                                        <div class="validation"></div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="button-contact">Send</button>

                            <div class="success">
                                <?= $success; ?>
                            </div>

                        </form>

                </main>

                <hr>
                <form>

                    <h1>FIND US HERE</h1>

                    <iframe src="https://maps.google.com/?ll=1.405135%2C103.759128&amp;spn=0.003293%2C0.00751&amp;ie=UTF8&amp;z=17&amp;t=roadmap&amp;sll=1.405135%2C103.759128&amp;sspn=0.003293%2C0.00751&amp;q=Singapore%20729932%20(729932)&amp;output=embed" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
                    <h1>
                        PRESTIOGIO 1 TOWER 3,
                        <br>29 MANDAI ESTATE #06-11,
                        <br>Singapore 729932
                        <br>Open ??? to ??? weekday?? weekend??? public holiday????
                    </h1>

                </form>






                <br>

                <hr>

                <div id=telfax>
                    <address>
                        Hp: +(65) 98633094
                        <br>Tel: +(65) 65094468
                        <br>Fax: +(65) 65094478
                        <br>E-Mail: cc_tan@qce.com.sg
                    </address>
                </div>

                <br>
                <br>
                <br>

                <div id="fb">
                    <a href="https://www.facebook.com/wilson.tan.353"><img height=50px src="img/Facebook.jpg" alt="facebook"></a>
                    <a href="https://www.instagram.com/"><img height=50px src="img/instagramlogo.jpg" alt="instragram"></a>
                </div>




                <div id=telfax>

                    <address>
                        Follow us on Facebook and Instagram to
                        <br>find out more about us!
                    </address>
                </div>
                </main>
            </div>

        </div>

        <footer class="navbar text-white p-0" style="background: #2a4671">
            <div class="container">
                <p style="margin: 5px 0">This website and its contents are copyright © 2010 - 2018 Quantum Circuit Engineering PTE. LTD. | <a class="text-light" href="contact-us.php">Contact Us</a></p>
            </div>
        </footer>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </div>

</body>

</html>
