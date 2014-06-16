<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Home</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="../css/half-slider.css" rel="stylesheet">

</head>

<body>

    <nav class="navbar navbar-fixed-top navbar-inverse" role="navigation">
        <div class="container">
            
            <div class="login">
       		  <form method="post" id="loginform" action="#">
                        <input type="text" class="txtbox" name="uname" placeholder="Search" />
                        <button type="submit" class="login-submit" name="search">Search</button>
                  </form>
            </div><!--/login-->
            
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
                    <li><a href="#services">How It Works</a>
                    </li>
                    <li><a href="#contact">FAQ</a>
                    </li>
                    <li><a href="register">Register</a>
                    </li>
                    <li><a href="login">LOGIN</a>
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
                <h1>EDIT COMPANY INFORMATION</h1>
                
             <?php
                
             //print_r($results);
             
             foreach ($results as $row)
             {
                 echo "<strong>Selected Company ID:</strong> " . "<strong>" . $row->c_id . "</strong>";
                 echo "<br />";
                 $cid = $row->c_id;
                 $cname = $row->c_name;
                 $caddress = $row->c_address;
                 $cperson = $row->c_cperson;
                 $cusername = $row->c_username;
                 $cpswd = $row->c_pswd;
                 $ctel = $row->c_tel;
                 $cemail = $row->c_email;
             }
            
             ?>
             
                <hr />
                
                <form action="updateMember" method="post" name="updateform" enctype="multipart/form-data">
                    <input type="hidden" name="cid" value="<?php echo $cid; ?>" />
                    <table>
                        <tr>
                            <td>
                                Company Name*: 
                            </td>
                            <td>
                                <input type="input" name="name" value="<?php echo $cname; ?>"/>
                            </td>
                        </tr>
                        
                        <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
                        
                        <tr>
                            <td>
                                Address: 
                            </td>
                            <td>
                                <input type="input" name="address" value="<?php echo $caddress; ?>"/>
                            </td>
                        </tr>
                        
                        <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
                        
                        <tr>
                            <td>
                                Contact Person: 
                            </td>
                            <td>
                                <input type="input" name="person" value="<?php echo $cperson; ?>"/>
                            </td>
                        </tr>
                        
                        <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
                        
                        <tr>
                            <td>
                                User Name*: 
                            </td>
                            <td>
                                <input type="input" name="username" value="<?php echo $cusername; ?>"/>
                            </td>
                        </tr>
                        
                        <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
                        
                        <tr>
                            <td>
                                Password: 
                            </td>
                            <td>
                                <input type="password" name="password" value="<?php echo $cpswd; ?>"/>
                            </td>
                        </tr>
                        
                        <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
                        
                        <tr>
                            <td>
                                Telephone: 
                            </td>
                            <td>
                                <input type="input" name="phone" value="<?php echo $ctel; ?>"/>
                            </td>
                        </tr>
                        
                        <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
                        
                        <tr>
                            <td>
                                Email*: 
                            </td>
                            <td>
                                <input type="input" name="email" value="<?php echo $cemail; ?>"/>
                            </td>
                        </tr>
                        
                    </table>
                    <br />
                        <button type="submit" class="buyButton" name="Update">Update Information</button>
                </form>
                <br />
                <form action="deleteMember" method="post" name="deleteform" enctype="multipart/form-data">
                    <input type="hidden" name="cid" value="<?php echo $cid; ?>" />
                        <button type="submit" class="buyButton" name="Delete">Delete Information</button>
                </form>
                
            </div>
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
                        <li><a href="#"><img src="../images/f.jpg" alt="logo" border="0" /></a><li>
                       <li><a href="#"><img src="../images/t.jpg" alt="logo" border="0" /></a></li>
                       <li><a href="#"><img src="../images/g.jpg" alt="logo" border="0" /></a></li>
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
