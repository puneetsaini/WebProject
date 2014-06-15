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
    
    <script>
        function validateForm() {
            var x = document.forms["addjobForm"]["cat"].value;
            if (x==null || x=="") {
                alert("Category must be filled out");
                return false;
            }
            var y = document.forms["addjobForm"]["title"].value;
            if (y==null || y=="") {
                alert("Title must be filled out");
                return false;
            }
            var z = document.forms["addjobForm"]["desc"].value;
            if (z==null || z=="") {
                alert("Description must be filled out");
                return false;
            }
        }
    </script>

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
                    <li><a href="services">How It Works</a>
                    </li>
                    <li><a href="faq">FAQ</a>
                    </li>
                    <li><a href="#register">Register</a>
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
                <h1>ADD JOBS</h1>
                
             <form name="addjobForm" method="post" id="addjob" action="insertJobs" onsubmit="return validateForm()">
                
                <table>
                        <tr>
                            <td>
                                Category: 
                            </td>
                            <td>
                                <select name="cat">
                                    <option value="" disabled="disabled" selected="selected">Select Job Category</option>
                                    <option value="Accounting">Accounting</option>
                                    <option value="Banking">Banking</option>
                                    <option value="Hotels">Hotels</option>
                                    <option value="Sales">Sales</option>
                                    <option value="Marketing">Marketing</option>
                                    <option value="Customer Service">Customer Service</option>
                                    <option value="Mechanics">Mechanics</option>
                                    <option value="Education">Education</option>
                                    <option value="IT">IT</option>
                                    <option value="Architecture">Architecture</option>
                                    <option value="Engineering">Engineering</option>
                                    <option value="Management">Management</option>
                                    <option value="Human Resources">Human Resources</option>
                                    <option value="Media">Media</option>
                                    <option value="Others">Others</option>
                                </select>
                            </td>
                        </tr>
                        
                        <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
                        
                        <tr>
                            <td>
                                Title:
                            </td>
                            <td>
                                <input type="text" name="title" />
                            </td>
                        </tr>
                        
                        <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
                        
                        <tr>
                            <td>
                                Description:
                            </td>
                            <td>
                                <textarea name="desc" cols="25" rows="5"></textarea>
                            </td>
                        </tr>
                        
                        <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
                        
                        <tr>
                            <td>
                                Company ID - SOULD BE CHANGE TO HIDDEN FIELD
                            </td>
                            <td>
                                <input type="text" name="compID" />
                            </td>
                        </tr>
                        
                        <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
                        
                    </table>
                
                <button type="submit" class="login-submit" name="login">Add Job</button>
                
             </form>
                
                <h3>JOBS POSTED</h3>
                
             <?php
             
             // http://www.youtube.com/watch?v=jdN3tK-Oa-4
             // http://www.youtube.com/watch?v=WjJhIcZ6918
             // http://www.youtube.com/watch?v=lcpCFrjAiCw
                
             //print_r($results);
             $output = '';
             echo $output;
             
             foreach ($results as $row)
             {
                 echo "<a href='getJobsById?j_id=" . $row->j_id . "'>Edit</a>";
                 echo '&nbsp;&nbsp;';
                 echo "<a href='deleteJob?j_id=" . $row->j_id . "'>Delete</a>";
                 echo '&nbsp;&nbsp;';
                 echo $row->j_postdate;
                 echo '&nbsp;&nbsp;';
                 //echo $row->j_category;
                 echo $row->j_title;
                 //echo $row->j_description;
                 echo '<br />';
             }
            
             ?>
                
             
             
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
