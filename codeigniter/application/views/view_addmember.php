<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>New Membership</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="../css/half-slider.css" rel="stylesheet">
    
    <script>
        function validateForm() {
            var x = document.forms["addmemberForm"]["name"].value;
            if (x==null || x=="") {
                alert("Company Name must be filled out");
                return false;
            }
            var y = document.forms["addmemberForm"]["address"].value;
            if (y==null || y=="") {
                alert("Address must be filled out");
                return false;
            }
            var z = document.forms["addmemberForm"]["person"].value;
            if (z==null || z=="") {
                alert("Contact person Name must be filled out");
                return false;
            }
            var z = document.forms["addmemberForm"]["username"].value;
            if (z==null || z=="") {
                alert("User Name must be filled out");
                return false;
            }
            var z = document.forms["addmemberForm"]["passw"].value;
            if (z==null || z=="") {
                alert("Password must be filled out");
                return false;
            }
            var z = document.forms["addmemberForm"]["phone"].value;
            if (z==null || z=="") {
                alert("Telephone number must be filled out");
                return false;
            }
            var z = document.forms["addmemberForm"]["email"].value;
            if (z==null || z=="") {
                alert("Email address must be filled out");
                return false;
            }
        }
    </script>

</head>

<body>

    <div class="container">

        <div class="row section">
            <div class="col-lg-12">
                <h1>NEW COMPANY REGISTRATION</h1>
                
             <form name="addmemberForm" method="post" id="addmember" action="register/insertMembers" onsubmit="return validateForm()">
                
                <table>
                        
                        <tr>
                            <td>
                                Company Name:
                            </td>
                            <td>
                                <input type="text" name="name" />
                            </td>
                        </tr>
                        
                        <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
                        
                        <tr>
                            <td>
                                Company Address:
                            </td>
                            <td>
                                <input type="text" name="address" />
                            </td>
                        </tr>
                        
                        <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
                        
                        <tr>
                            <td>
                                Contact Person:
                            </td>
                            <td>
                                <input type="text" name="person" />
                            </td>
                        </tr>
                        
                        <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
                        
                        <tr>
                            <td>
                                User Name:
                            </td>
                            <td>
                                <input type="text" name="username" />
                            </td>
                        </tr>
                        
                        <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
                        
                        <tr>
                            <td>
                                Password:
                            </td>
                            <td>
                                <input type="password" name="passw" />
                            </td>
                        </tr>
                        
                        <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
                        
                        <tr>
                            <td>
                                Telephone:
                            </td>
                            <td>
                                <input type="text" name="phone" />
                            </td>
                        </tr>
                        
                        <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
                        
                        <tr>
                            <td>
                                Email Address:
                            </td>
                            <td>
                                <input type="text" name="email" />
                            </td>
                        </tr>
                        
                        <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
                    </table>
                
                <button type="submit" class="login-submit" name="login">Include as Member</button>
                
             </form>   
             
            </div>
        </div>

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
