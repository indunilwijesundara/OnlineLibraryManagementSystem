<?php 
session_start();
include('includes/config.php');
error_reporting(0);
if(isset($_POST['signup']))
{
//code for captach verification
if ($_POST["vercode"] != $_SESSION["vercode"] OR $_SESSION["vercode"]=='')  {
        echo "<script>alert('Incorrect verification code');</script>" ;
    } 
        else {    
//Code for student ID
    $count_my_page = ("studentid.txt");
    $hits = file($count_my_page);
    $hits[0] ++;
    $fp = fopen($count_my_page , "w");
    fputs($fp , "$hits[0]");
    fclose($fp); 
    $StudentId= "TCLUID$hits[0]";   
    $fname=$_POST['fullanme'];
    
    $mobileno=$_POST['mobileno'];
    $email=$_POST['email']; 
    $occupation=$_POST['occupation'];
    $selectedfaculty="";
    $selecteddepartment="";
    $selectedyear="";
    $selectedfaculty=$_POST['faculty'];
    $selecteddepartment=$_POST['department'];
    $selectedyear=$_POST['year'];
    $password=$_POST['password']; 

// Validate password strength
$uppercase = preg_match('@[A-Z]@', $password);
$lowercase = preg_match('@[a-z]@', $password);
$number    = preg_match('@[0-9]@', $password);


if(!$uppercase || !$lowercase || !$number || strlen($password) < 8) {
    $passworderror= 'Password not strong';
    echo "<script>alert('Password not strong');</script>" ;
    $fname=$_POST['fullanme'];
    
    $mobileno=$_POST['mobileno'];
    $email=$_POST['email']; 
    $occupation=$_POST['occupation'];
    $selectedfaculty="";
    $selecteddepartment="";
    $selectedyear="";
    $selectedfaculty=$_POST['faculty'];
    $selecteddepartment=$_POST['department'];
    $selectedyear=$_POST['year'];
}else{
   

    $status=1;
    $sql="INSERT INTO  tblstudents(StudentId,FullName,MobileNumber,EmailId,Occupation,Faculty,Department,Year,Password,Status) VALUES(:StudentId,:fname,:mobileno,:email,:occupation,:selectedfaculty,:selecteddepartment,:selectedyear,:password,:status)";
    $query = $dbh->prepare($sql);
    $query->bindParam(':StudentId',$StudentId,PDO::PARAM_STR);
    $query->bindParam(':fname',$fname,PDO::PARAM_STR);
    $query->bindParam(':mobileno',$mobileno,PDO::PARAM_STR);
    $query->bindParam(':email',$email,PDO::PARAM_STR);
    $query->bindParam(':occupation',$occupation,PDO::PARAM_STR);
    $query->bindParam(':selectedfaculty', $selectedfaculty,PDO::PARAM_STR);
    $query->bindParam(':selecteddepartment', $selecteddepartment,PDO::PARAM_STR);
    $query->bindParam(':selectedyear', $selectedyear,PDO::PARAM_STR);
    $query->bindParam(':password',$password,PDO::PARAM_STR);
    $query->bindParam(':status',$status,PDO::PARAM_STR);
    $query->execute();
    $lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
   echo '<script>alert("Your Registration successfull and your id is  "+"'.$StudentId.'")</script>';
}
else 
{
echo "<script>alert('Something went wrong. Please try again');</script>";
}
}
}
}
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>Online Library Management System | Student Signup</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME STYLE  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <script type="text/javascript">
    function valid() {
        if (document.signup.password.value != document.signup.confirmpassword.value) {
            alert("Password and Confirm Password Field do not match  !!");
            document.signup.confirmpassword.focus();
            return false;
        }
        return true;
    }
    </script>
    <script>
    function checkAvailability() {
        $("#loaderIcon").show();
        jQuery.ajax({
            url: "check_availability.php",
            data: 'emailid=' + $("#emailid").val(),
            type: "POST",
            success: function(data) {
                $("#user-availability-status").html(data);
                $("#loaderIcon").hide();
            },
            error: function() {}
        });
    }
    </script>

</head>

<body>
    <!------MENU SECTION START-->
    <?php include('includes/header.php');?>
    <!-- MENU SECTION END-->
    <div class="Back-h content-wrapper">
        <div class="container">
            <div class="row pad-botm">
                <div class="col-md-12">
                    <!-- <h4 class="header-line">User Signup</h4> -->

                </div>

            </div>
            <div class="row">

                <div class="col-md-9 col-md-offset-1">
                    <div class="panel panel-danger">
                        <div class="panel-heading">
                            SINGUP FORM
                        </div>
                        <div class="panel-body">
                            <form name="signup" method="post" onSubmit="return valid();">
                                <div class="form-group">
                                    <label>Enter Full Name</label><span style="color:red;">*</span>
                                    <input class="form-control" type="text" name="fullanme" autocomplete="off"
                                        pattern="[a-zA-Z ,.]+" required />
                                </div>


                                <div class="form-group">
                                    <label>Mobile Number </label><span style="color:red;">*</span>
                                    <input class="form-control" type="text" name="mobileno" maxlength="10"
                                        autocomplete="off" required />
                                </div>

                                <div class="form-group">
                                    <label>Enter Email</label><span style="color:red;">*</span>
                                    <input class="form-control" type="email" name="email" id="emailid"
                                        onBlur="checkAvailability()" autocomplete="off" required />
                                    <span id="user-availability-status" style="font-size:12px;"></span>
                                </div>
                                <div class="form-group">
                                    <label>Select Yor Section</label><span style="color:red;">*</span>
                                    <SELECT class="form-control" id="occupation" name="occupation" onChange="" required>
                                        <Option value="" disabled disabled selected>-Select Yor Section-</option>
                                        <Option value="Staff">Staff</option>
                                        <Option value="Student">Student</option>
                                        <Option value="Lectures">Lecturer</option>
                                        <Option value="Others">Others</option>

                                    </SELECT>
                                </div>

                                <div class="form-group">
                                    <label>Select Your faculty</label>
                                    <select class="form-control" name="faculty" id="faculty" autocomplete="off">
                                        <option value="" disabled disabled selected>-Select Your Faculty-</option>
                                        <option value="FAS">Faculty Of Applied Science</option>
                                        <<<<<<< HEAD <option value="Sidha">Faculty of Siddha Medicine</option>
                                            =======
                                            <option value="SIDHA">Faculty of Sidha Medicine</option>
                                            >>>>>>> 3efe6c83b4b001245ea46d17affeb0762fa6d242
                                            <option value="BMS">Faculty of Communication & Bussiness Studies</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Select Your Department</label>
                                    <select class="form-control" name="department" id="department" autocomplete="off">
                                        <option value="" disabled disabled selected>-Select Your Department-</option>
                                        <option value="CS">Department of Computer Science</option>
                                        <option value="PS">Department of Physical Science</option>
                                        <option value="BMS">Department of Business & Management Studies </option>
                                        <option value="LCS">Department of Language & Communication Studies </option>
                                        <option value="IT">Department of Information Technology </option>
                                        <option value="SIDDHA">Department of siddha unit </option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Select Your Academic Year</label>
                                    <select class="form-control" name="year" id="year" autocomplete="off">
                                        <option value="" disabled disabled selected>-Select Your Academic Year-</option>
                                        <option value="16/17">2016/2017</option>
                                        <option value="17/18">2017/2018</option>
                                        <option value="19/20">2018/2019</option>
                                        <option value="20/21">2019/2020</option>
                                        <option value="20/21">2020/2021</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Enter Password</label><span
                                        style="color:red;">*<?php echo $passworderror?></span>
                                    <input class="form-control" type="password" name="password" autocomplete="off"
                                        required />


                                </div>

                                <div class="form-group">
                                    <label>Confirm Password </label><span style="color:red;">*</span>
                                    <input class="form-control" type="password" name="confirmpassword"
                                        autocomplete="off" required />

                                </div>
                                <div class="form-group">
                                    <label>Verification code : </label>
                                    <input type="text" name="vercode" maxlength="5" autocomplete="off" required
                                        style="width: 150px; height: 25px;" />&nbsp;<img src="captcha.php">
                                </div>
                                <button type="submit" name="signup" class="btn btn-danger" id="submit">Register Now
                                </button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- CONTENT-WRAPPER SECTION END-->
    <?php include('includes/footer.php');?>
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
    <!-- CUSTOM SCRIPTS  -->
    <script src="assets/js/custom.js"></script>
</body>

</html>