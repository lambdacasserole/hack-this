<!DOCTYPE html>
<html lang="en">
<head>
    <title>Hack This | Home</title>
    <!-- Responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Encoding -->
    <meta charset="utf-8">
    <!-- Metadata -->
    <meta name="description" content="A collection of common web programming security mistakes.">
    <meta name="author" content="Saul Johnson">
    <!-- Styles -->
    <link href="/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="/css/styles.css" rel="stylesheet">
    <link href="/fonts/fonts.css" rel="stylesheet">
    <!-- Compatibility -->
    <!--[if lt IE 9]>
        <script src="/bower_components/html5shiv/dist/html5shiv.min.js"></script>
        <script src="/bower_components/respond/dest/respond.min.js"></script>
    <![endif]-->
</head>
<body id="page-top" class="index">
    <!--
        Navigation
    -->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#page-top">Hack This</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="#about">About</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#exploits">Exploits</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--
        Header
    -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <img class="img-responsive" src="img/biohazard.svg" alt="">
                    <div class="intro-text">
                        <span class="name">Please Hack This</span>
                        <span class="skills">A collection of common web programming security mistakes.</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--
        About
    -->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>About</h2>
                    <hr/>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-lg-offset-2">
                    <p>
                        <b>Hack This</b> is a collection of common web programming security mistakes bundled together in
                        one place for you to thoroughly mess about with. Though it's written in PHP, most mistakes in
                        the codebase are just as easy to make in any language.
                    </p>
                </div>
                <div class="col-lg-4">
                    <p>
                        The only way you're going to appreciate the importance of good security practices in web
                        development is by seeing for yourself just how easy it is to exploit code written by people
                        who don't know (or don't care about) the kind of threat model they face.
                    </p>
                </div>
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <a href="https://github.com/lambdacasserole/hack-this" class="btn btn-lg btn-outline">
                        <i class="fa fa-github"></i> View on GitHub
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!--
        Exploits
    -->
    <section id="exploits">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Exploits</h2>
                    <hr/>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 exploits-item">
                    <a href="#exploitsModal1" class="exploits-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                                <p>
                                    SQL Injection
                                </p>
                            </div>
                        </div>
                        <img src="img/exploits/sql_injection.svg" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-4 exploits-item">
                    <a href="#exploitsModal2" class="exploits-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                                <p>
                                    Login Bypass
                                </p>
                            </div>
                        </div>
                        <img src="img/exploits/login_bypass.svg" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-4 exploits-item">
                    <a href="#exploitsModal3" class="exploits-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                                <p>
                                    Cross-Site Scripting
                                </p>
                            </div>
                        </div>
                        <img src="img/exploits/cross_site_scripting.svg" class="img-responsive" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!--
        Footer
    -->
    <footer class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-4">
                        <h3>Disclaimer</h3>
                        <p>
                            This website is intentionally left vulnerable to common exploits.
                        </p>
                        <p>
                            Deploying this website anywhere is a bad idea.
                        </p>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Around the Web</h3>
                        <ul class="list-inline">
                            <li>
                                <a href="https://github.com/lambdacasserole/hack-this" class="btn-social btn-outline"><i class="fa fa-fw fa-github"></i></a>
                            </li>
                            <li>
                                <a href="https://sauljohnson.com/" class="btn-social btn-outline"><i class="fa fa-fw fa-globe"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Why Teach This?</h3>
                        <p>
                            The only way you learn about web security is by bypassing naïve attempts yourself.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; Saul Johnson 2017
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--
        Exploit modals.
    -->
    <div class="exploits-modal modal fade" id="exploitsModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>SQL Injection</h2>
                            <hr class="star-primary">
                            <img src="img/exploits/sql_injection.svg" class="img-responsive img-centered" alt="">
                            <p>
                                In an SQL injection attack, malicious SQL statements are inserted into an entry field
                                for execution (usually in a data-driven web application).
                            </p>
                            <p>
                                The harm that SQL injection can do cannot be overstated. It is potentially possible to
                                steal any file from disk, or delete/steal/modify entire databases at a time.
                            </p>
                            <a href="/customers.php" class="btn btn-lg btn-outline"><i class="fa fa-user-secret"></i> Exploit</a>
                            <button type="button" class="btn btn-lg btn-outline" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="exploits-modal modal fade" id="exploitsModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Login Bypass</h2>
                            <hr class="star-primary">
                            <img src="img/exploits/login_bypass.svg" class="img-responsive img-centered" alt="">
                            <p>
                                SQL injection is actually very versatile, and remains one of the most common
                                vulnerabilities out there. As well as stealing data, you can gain privileged access
                                to an application as any user you like.
                            </p>
                            <a href="#" class="btn btn-lg btn-outline"><i class="fa fa-user-secret"></i> Exploit</a>
                            <button type="button" class="btn btn-lg btn-outline" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="exploits-modal modal fade" id="exploitsModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Cross-Site Scripting</h2>
                            <hr class="star-primary">
                            <img src="img/exploits/cross_site_scripting.svg" class="img-responsive img-centered" alt="">
                            <p>
                                Another type of code injection attack is known as cross-site scripting (XSS). If a
                                forum website, for example, doesn't check user posts for &lt;script&gt; tags, any user
                                viewing that post could potentially have malicious code executed on their machine.
                            </p>
                            <a href="#" class="btn btn-lg btn-outline"><i class="fa fa-user-secret"></i> Exploit</a>
                            <button type="button" class="btn btn-lg btn-outline" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--
        Scripts
    -->
    <script src="/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="/bower_components/jquery.easing/js/jquery.easing.min.js"></script>
    <script src="/js/script.js"></script>
</body>
</html>
