<?php
include('includes/config.php');
   
if(ISSET($_POST['upload'])){
  $bookname=$_POST['bookname'];
  $category=$_POST['category'];
  $author=$_POST['author'];
  $isbn=$_POST['isbn'];

  $file_name = $_FILES['file']['name'];
  $file_temp = $_FILES['file']['tmp_name'];
  $file_size = $_FILES['file']['size'];
  $file_type = $_FILES['file']['type'];
  $date_uploaded=date("Y-m-d");
  $location="./image/".$file_name;
  if($file_size < 5242880){
    if(move_uploaded_file($file_temp, $location)){
      try{
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO tb_upload(name,category,author,isbn,image)  VALUES ('$bookname','$category','$author','$isbn','$file_name')";
        $dbh->exec($sql);
      }catch(PDOException $e){
        echo $e->getMessage();
      }
      
      $dbh = null;
      header('location: index.php');
    }
  }else{
    echo "<center><h3 class='text-danger'>File too large to upload!</h3></center>";
  }
}
?>
 
<!DOCTYPE html>
<html lang="en">
 
<head>
<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Online Library Management System | Add Book</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME STYLE  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    
</head>
 
<body>
          <!------MENU SECTION START-->
<?php include('includes/header.php');?>
<!-- MENU SECTION END-->
    <div class="content-wra">
    <div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">Add Book</h4>
                
                            </div>

</div>
<div class="row">
<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
<div class="panel panel-info">
<div class="panel-heading">

    <div class="panel-body">

    <form method="POST" enctype="multipart/form-data" action="upload.php">
            <div class="form-group">
        <label>Book Name<span style="color:red;">*</span></label>
        <input class="form-control" type="text" name="bookname" autocomplete="off"  required />
        </div>

        <div class="form-group">
            <label> Category<span style="color:red;">*</span></label>
            <select class="form-control" name="category" required="required">
            <option value=""> Select Category</option>
                  <?php 
                  $status=1;
                  $sql = "SELECT * from  tblcategory where Status=:status";
                  $query = $dbh -> prepare($sql);
                  $query -> bindParam(':status',$status, PDO::PARAM_STR);
                  $query->execute();
                  $results=$query->fetchAll(PDO::FETCH_OBJ);
                  $cnt=1;
                  if($query->rowCount() > 0)
                  {
                  foreach($results as $result)
                  {               ?>  
                  <option value="<?php echo htmlentities($result->id);?>"><?php echo htmlentities($result->CategoryName);?></option>
                  <?php }} ?> 
            </select>
        </div>

        <div class="form-group">
        <label> Author<span style="color:red;">*</span></label>
        <select class="form-control" name="author" required="required">
        <option value=""> Select Author</option>
        <?php 

        $sql = "SELECT * from  tblauthors ";
        $query = $dbh -> prepare($sql);
        $query->execute();
        $results=$query->fetchAll(PDO::FETCH_OBJ);
        $cnt=1;
        if($query->rowCount() > 0)
        {
        foreach($results as $result)
        {               ?>  
        <option value="<?php echo htmlentities($result->id);?>"><?php echo htmlentities($result->AuthorName);?></option>
        <?php }} ?> 
        </select>
        </div>

        <div class="form-group">
        <label>ISBN Number<span style="color:red;">*</span></label>
        <input class="form-control" type="text" name="isbn"  required="required" autocomplete="off"  />
        <p class="help-block">An ISBN is an International Standard Book Number.ISBN Must be unique</p>
        </div>

				<div class="form-group">
					<label>Upload here</label>
					<input name="file" type="file"  required="required" class="form-control"/>
				</div>
				<center><button class="btn btn-primary" name="upload">Upload</button></center>
			</form>
    


    </div>
    </div>
                        </div>
                            </div>

        </div>
   
    </div>
    </div>
 
   <!-- <a href="view.php">|View Uploads|</a> -->
</body>
 
</html>