<div class="navbar navbar-inverse set-radius-zero">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand">

                <img style="width: 350px;heigth: 130px " src="assets/img/logo.png" />
            </a>

        </div>

        <div class="right-div">
            <a href="logout.php" class="btn btn-danger pull-right">LOG ME OUT</a>
        </div>
    </div>
</div>
<!-- LOGO HEADER END-->
<section class="menu-section">
    <div class="container">
        <div class="row ">
            <div class="col-md-12">
                <div class="navbar-collapse collapse ">
                    <ul id="menu-top" class="nav navbar-nav navbar-right">
                        <li><a href="dashboard.php" class="menu-top-active">DASHBOARD</a></li>


                        <li>
                            <a href="#" class="menu-top-active dropdown-toggle" id="ddlmenuItem" data-toggle="dropdown">
                                Authors <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu" role="menu" aria-labelledby="ddlmenuItem">
                                <li role="presentation"><a class="menu-top-active" role="menuitem" tabindex="-1"
                                        href="add-author.php">Add Author</a></li>
                                <li role="presentation"><a class="menu-top-active" role="menuitem" tabindex="-1"
                                        href="manage-authors.php">Manage Authors</a></li>
                            </ul>
                        </li>



                    </ul>
                </div>
            </div>

        </div>
    </div>
</section>