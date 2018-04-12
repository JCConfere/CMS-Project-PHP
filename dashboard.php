<?php require_once("Include/sessions.php"); ?>
<?php require_once("Include/functions.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title></title>

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>




  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">

  <link rel="stylesheet" href="main.css">
  <link rel="stylesheet" href="adminstyles.css">
  <script type="text/javascript" src="script.js"></script>

  <body>

    <div class="navbar navbar-inverse">
       <div class="container">
           <div class="navbar-header">
               <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
               </button>
               <a class="navbar-brand navigate" href="www.jasonconfere.com">JasonConfere.com</a>
       </div>

           <div class="navbar-collapse collapse">

               <ul class="nav navbar-nav navbar-right">

   <!-- <li class="active"> will highlight button -->

                   <li><a href="#"></a></li>
          <li><a href="#"></a></li>
                   <li><a href="https://codepen.io/WvMtnBoy/full/eZOZBv/"></a></li>
                   <li><a href="#"></a></li>
                   <li><a href="#"></a></li>
                   <li><a href="#"></a></li>
           </ul>

           </div><!--/nav-collapse -->
       </div>
   </div> <!-- /static navbar -->

   <div class="container-fluid">
     <div class="row">

       <div class="col-sm-2">
         <h1>Jason</h1>
         <ul id="side-menu" class="nav nav-pills nav-stacked">
           <li class="active"><a href="dashboard.php"><span class="glyphicon glyphicon-home"> Dashboard</span></a></li>
           <li><a href="#"><span class="glyphicon glyphicon-list-alt"> Add New Post</a></span></li>
           <li><a href="categories.php"><span class="glyphicon glyphicon-tags"> Categories</a></span></li>
           <li><a href="#"><span class="glyphicon glyphicon-user"> Manage Admins</a></span></li>
           <li><a href="#"><span class="glyphicon glyphicon-comment"> Comments</a></span></li>
           <li><a href="#"><span class="glyphicon glyphicon-equalizer"> Live Blog</a></span></li>
           <li><a href="#"><span class="glyphicon glyphicon-log-out"> Logout</a></span></li>


         </ul>

       </div> <!-- /col-sm-2 -->

       <div class="col-sm-10 about">
         <h1>Admin Dashboard</h1>
          <?php echo Message();
          echo SuccessMessage();?>

         <div>
         <p>Lorem ipsum <em>dolor sit amet</em>, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.
          Cum sociis natoque penatibus et magnis .<p>
       </div>


     </div><!-- /.row -->
   </div> <!-- ./container-fluid -->

   <div id="footer">
     <hr />
     <p>Based on the CMS theme developed by <a href="www.jazebakram.com">Jazeb Akram</a>.
              The information used to build this project is derived from his course, The Complete
              PHP/MySQL Professional Course with 5 Projects, available on <a href="www.udemy.com">www.Udemy.com</a>.</p>


   </div>


  </body>
</html>
