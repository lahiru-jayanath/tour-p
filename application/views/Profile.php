<html>
<head>
    <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">



</head>
<body>
 <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->


    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

        <ul class="nav navbar-nav">
          <li><a href="<?php echo base_url("index.php/Welcome/Profile")?>"><h4><b>Sri Lanka Tours</b></h4></a></li>
      
        </li>
      </ul>



      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="<?php echo base_url("index.php/Welcome/register")?>">Manage Profile</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Admin<span class="caret"></span></a>
          <ul class="dropdown-menu">

            <li><a href="#">Logout</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<style type="text/css">
body {
     background: url('https://t119q2izu9f3tlmwk2xdggp1-wpengine.netdna-ssl.com/wp-content/uploads/2017/08/20170801-BLewis-Dear-Trail-Curmudgeon-1-1080x675.jpg') fixed;
    background-size: cover;


}

*[role="form"] {
    max-width: 1530px;
    padding: 15px;
    margin: 0 auto;
    border-radius: 0.3em;
    background-color: #f2f2f2;
}

*[role="form"] h2 { 
    font-family: 'Open Sans' , sans-serif;
    font-size: 40px;
    font-weight: 600;
    color: #000000;
    margin-top: 5%;
    text-align: center;
    text-transform: uppercase;
    letter-spacing: 4px;
}

</style>


<div class="container">
          <form class="form-horizontal" role="form">
            <div class="container">
              <div class="row">
                <div class="col-12">
                  <table class="table table-striped" >
                    <thead>
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Rating(1-5)</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                   <?php

                    foreach ($CustomerList as $re )
                    {
                    ?>
                      <tr>
                            <td> <?php  $re->Id ?></td>
                              <td><?php echo $re->FirstName." ".$re->LastName ?></td>
                              <td><?php echo $re->Email ?></td>
                              <td><?php echo $re->DateOfBirth ?></td>
                              <td><?php echo $re->PhoneNumber ?></td>
                              <td><?php echo $re->Address ?></td>
                              <td> Edit | Delete </td>
                              </tr>
<?php }

                    ?>  

                  </table>
                </div>
              </div>
            </div>
                  



          </form>

</div> <!-- ./container -->




</div>

<?php include 'partials/footer.php'?>