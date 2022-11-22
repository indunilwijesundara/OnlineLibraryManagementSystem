<div class="navbar navbar-inverse set-radius-zero">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a class="navbar-brand">
                <img class="logo" style="width: 350px;heigth: 130px " src="assets/img/logo.png" />
                <!-- </a>
                       <h4 class="name">Trincomalee Campus Eastern University Sri Lanka </h4> -->
            </a>
        </div>
        <?php if($_SESSION['login'])
{
?>
        <div class="right-div">
            <a href="logout.php" class="btn btn-danger pull-right">LOG ME OUT</a>
        </div>
        <?php }?>
    </div>
</div>
<!-- LOGO HEADER END-->
<?php if($_SESSION['login'])
{
?>
<section class="menu-section">
    <div class="container">
        <div class="row ">
            <div class="col-md-12">
                <div class="navbar-collapse collapse ">
                    <ul id="menu-top" class="nav navbar-nav navbar-right">
                        <li><a href="home.php" class="menu-top-active">HOME</a></li>
                        <li><a href="dashboard.php" class="menu-top-active">DASHBOARD</a></li>


                        <li>
                            <a href="#" class="dropdown-toggle menu-top-active" id="ddlmenuItem" data-toggle="dropdown">
                                Account <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu menu-top-active" role="menu" aria-labelledby="ddlmenuItem">
                                <li role="presentation "><a class="menu-top-active" role="menuitem" tabindex="-1"
                                        href="my-profile.php">My Profile</a></li>
                                <li role="presentation"><a class="menu-top-active" role="menuitem" tabindex="-1"
                                        href="change-password.php">Change Password</a></li>
                            </ul>
                        </li>
                        <li><a href="issued-books.php">Issued Books</a></li>


                    </ul>
                </div>
            </div>

        </div>
    </div>
</section>
<?php } else { ?>
<section class="menu-section">
    <div class="container">
        <div class="row ">
            <div class="col-md-12">
                <div class="navbar-collapse collapse ">
                    <ul id="menu-top" class="nav navbar-nav navbar-right">

                        <li><a href="adminlogin.php">Admin Login</a></li>
                        <li><a href="signup.php" class="menu-top-active">User Signup</a></li>
                        <li><a href="index.php" class="menu-top-active">User Login</a></li>
                        <li><a href="aboutus.php" class="menu-top-active">About Us</a></li>
                        <li><a href="staff.php" class="menu-top-active">Staff</a></li>

                    </ul>
                </div>
            </div>

        </div>
    </div>
</section>

<?php } ?>