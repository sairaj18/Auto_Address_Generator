<!DOCTYPE html>
<html>
<head>
  <title>View Page</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <link rel="stylesheet" type="text/css" href="css/view.css">
</head>
<body style="background-image: url('images/bg-02.jpg');">
  <div class="bg-contact2" >
    <nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Mystore</a>
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-lg-auto">
            <li class="nav-item">
              <a class="nav-link" href="#home">HOME <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.html">ADD ADDRESS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#logout">LOGOUT</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-12">
          <div class="headerText text-center">
            <h2>ADDRESS DETAILS</h2>
          </div>
        </div>
      </div>
        <?php

          include "db.inc.php";

          $sql = "SELECT country,state,city,place,street,pincode from address_details";

          $result = $conn -> query($sql);

          $i = 0;

          $msg = "<div class='row'>";

          while($row = $result -> fetch_row())
          {
              $n = $i+1;

              $msg.="<div class='col-sm-3 address'><h5><label>ADDRESS NO.".$n."</label></h5>";
              
              $msg.="<ul><li><b>Country:</b>&nbsp".$row[0]."</li>";

              $msg.="<li><b>State:</b>&nbsp".$row[1]."</li>";

              $msg.="<li><b>City:</b>&nbsp".$row[2]."</li>";

              $msg.="<li><b>Place:</b>&nbsp".$row[3]."</li>";

              $msg.="<li><b>Street:</b>&nbsp".$row[4]."</li></ul>";

              $msg.="</div>";
              $i++;
               if( $i%3 == 0)
              {
                  $msg.="</div><div class='row'>";
              }
          }
          $msg.="</div>";
          echo "$msg";
        ?>
    </div>
  </div>
  <script type="text/javascript">
    $(document).ready(function () {
      $(window).scroll(function () {
        if ($(document).scrollTop() > 50) 
        {
          $("nav").addClass("scrolled");
        } 
        else 
        {
          $("nav").removeClass("scrolled");
        }
      });
    });
  </script>
</body>
</html>
