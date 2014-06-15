<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Home</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="css/half-slider.css" rel="stylesheet">
    
            

</head>

<body>

    <nav class="navbar navbar-fixed-top navbar-inverse" role="navigation">
        <div class="container">
            
             <div class="login">
       		  <form method="post" id="loginform" action="search">
                        <input type="text" class="txtbox" name="uname" placeholder="Search" />
                        <button type="submit" class="login-submit" name="search">Search</button>
                  </form>
            </div><!--/search-->
            
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">everydayjobs</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="#about">Home</a>
                    </li>
                    <li><a href="services">How It Works</a>
                    </li>
                    <li><a href="faq">FAQ</a>
                    </li>
                    <li><a href="#register">Register</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <div class="container">

        <div class="row section">
            <div class="col-lg-12">
                <br><br>
                <h1>FAQ'S</h1><br>
                <p>Q: What is Everydayjobs.com?</p>
                <p>A:Online job portal for people to search jobs in their field. Our network of agency members uses this site to find the specific people they need for their work. By using our proprietary "search" tool, they view people matching their job criteria. If the profile of any user matches with their criteria they can directly contact them by their available information.</p>
                <p>Q: How do I register with Everydayjobs.com?</p>
                <p>A:Just register online by clicking on the register link.Registeration for job seekers is free while  employers have to sign up with $20. You can register by paying by credit card or through Paypal. </p>
                <p>Q: Why do you charge $20?</p>
                <p>A:Creating a profile is only $20 per year. For less than a cup of coffee each month your Everydayjobs.com profile.
The $20 fee covers the cost of hosting your profile, the cost of marketing our members to the people who do the hiring and it ensures our member database maintains the highest quality.</p>
                <p>Q: If I join Everydayjobs.com, will I be guaranteed work?</p>
                <p>A:No, there is no guarantee.We cannot guarantee that a member will get offered work. </p>
                <p>Q: Do I have to have previous experience?</p>
                <p>A: No experience is necessary! The company will explain the role to you. </p>
                <p>Q: How will I be contacted?</p>
                <p>A: Using everydayjobs.com means only the email address you provided is used to contact you to begin with  and after that it will be between you and the hiring company and whatever details you provide them with. </p>
                <p>Q: How do I improve my chances of being getting work?</p>
                <p>A: First, ensure that you have as much correct data as possible to show up when the agency is looking for talent.

Second, ensure that your head-shot is clear, up-to-date, and matches what you said about yourself. This head shot is what the agency sees in their list, and helps them decide to check your profile out (or not).

Third, be available and able to work on the day in question.

Last, turn up on time and make a good impression! This is your ticket to repeat work. </p>
                <p>Q: How do I delete my account?</p>
                <p>A: If you wish to delete your account, simply email us (from the email address you used to sign up with) and we will delete your account. </p>
                <p>Q: Is my personal information protected?</p>
                <p>A: Your data is stored securely on our server. </p>
                <br><br>
        </div>

        <hr>

        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <nav class="footer_col">
                        COMPANY
                      <ul>
                            <li><a href="#">ABOUT US</a></li>
                            <li><a href="#">NEWSLETTER</a></li>
                            <li><a href="#">TERMS AND CONDITION</a></li>
                            <li><a href="#">PRIVACY</a></li>
                            <li><a href="#">COPYRIGHT</a></li>
                      </ul>
                    </nav><!--/footer_col-->
                    <nav class="footer_col">
                                    SUPPORT
                      <ul>
                            <li><a href="#">CUSTOMER SUPPORT</a></li>
                            <li><a href="contact.php">CONTACT US</a></li>

                      </ul>
                    </nav><!--/footer_col-->
                    <nav class="footer_col">
                                    SOCIAL
                      <ul>
                        <li><a href="#"><img src="images/f.jpg" alt="logo" border="0" /></a><li>
                       <li><a href="#"><img src="images/t.jpg" alt="logo" border="0" /></a></li>
                       <li><a href="#"><img src="images/g.jpg" alt="logo" border="0" /></a></li>
                    </ul>
                    </nav><!--/footer_col-->
                </div>
            </div>
        </footer>


    </div>
    <!-- /.container -->

    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>
</body>

</html>
