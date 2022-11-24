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
                                Categories <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu" role="menu" aria-labelledby="ddlmenuItem">
                                <li role="presentation"><a class="menu-top-active" role="menuitem" tabindex="-1"
                                        href="add-category.php">Add Category</a></li>
                                <li role="presentation"><a class="menu-top-active" role="menuitem" tabindex="-1"
                                        href="manage-categories.php">Manage Categories</a></li>
                            </ul>
                        </li>
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
                        <li>
                            <a href="#" class="menu-top-active dropdown-toggle" id="ddlmenuItem" data-toggle="dropdown">
                                Books <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu" role="menu" aria-labelledby="ddlmenuItem">
                                <li role="presentation"><a class="menu-top-active" role="menuitem" tabindex="-1"
                                        href="add-book.php">Add Book</a></li>
                                <li role="presentation"><a class="menu-top-active" role="menuitem" tabindex="-1"
                                        href="manage-books.php">Manage Books</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="#" class="menu-top-active dropdown-toggle" id="ddlmenuItem" data-toggle="dropdown">
                                Issue Books <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu" role="menu" aria-labelledby="ddlmenuItem">
                                <li role="presentation"><a class="menu-top-active" role="menuitem" tabindex="-1"
                                        href="issue-book.php">Issue New Book</a></li>
                                <li role="presentation"><a class="menu-top-active" role="menuitem" tabindex="-1"
                                        href="manage-issued-books.php">Manage Issued Books</a></li>
                            </ul>
                        </li>
                        <li>

                            <a href="#" class="menu-top-active dropdown-toggle" id="ddlmenuItem" data-toggle="dropdown">
                                Reg Users <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu" role="menu" aria-labelledby="ddlmenuItem">
                                <li role="presentation"><a class="menu-top-active" role="menuitem" tabindex="-1"
                                        href="reg-students.php">Reg Students</a></li>
                                <li role="presentation"><a class="menu-top-active" role="menuitem" tabindex="-1"
                                        href="reg-lectures.php">Reg Lectures</a></li>
                                <li role="presentation"><a class="menu-top-active" role="menuitem" tabindex="-1"
                                        href="reg-staff.php">Reg Staff</a></li>
                                <li role="presentation"><a class="menu-top-active" role="menuitem" tabindex="-1"
                                        href="reg-others.php">Reg Others</a></li>
                            </ul>
                        </li>

                        <li><a href="change-password.php" class="menu-top-active">Change Password</a></li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</section>