<?php
session_start();
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title>Rotut</title>
    <link href="css/styles.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <!-- <form id="form1"> -->
         <div class="headerBar">    
        </div>
        
         <div class="contentArea">
         
            <div class="loginArea">
            <?php 
            if($_SESSION['active'])
            {
            	echo 'Welcome '; 
            	echo $_SESSION['username'];
            	echo '<form name="logout" action="logout.php" method="post"><button class="loginButton" type="submit" >Logout</button></form>';
            }
            else
            {
            	echo '
            <form name="login" action="login.php" method="post">
            Username: &nbsp;&nbsp;&nbsp;<input type="text" name="username" />&nbsp;&nbsp;&nbsp;
                 Password: &nbsp;<input type="password" name="password" />&nbsp;&nbsp;
                  <button class="loginButton" type="submit" >LOGIN</button>
            </form> ';
            } 
            ?>                   
            </div>
        
             <!-- Links and Logo Area -->
            <div class="headerPadOne">
                        
                <div class="headerPadTwo">
                
                    <div class="headerImageLogo">
                            <a href="/index.html"><img alt="" src="images/RotutLogo2.png" border="0" /></a>
                    </div>
                    
                    <div class="headerLinks">
                    
                        <table cellpadding="15">
                            <tr>
                                <td>HOME</td>
                                <td>COURSES</td>
                                <td>TUTORS</td>
                                <td>SIGN UP</td>
                            </tr>
                        </table>
                    
                    </div>
                    
                </div>
                
          </div> 
          