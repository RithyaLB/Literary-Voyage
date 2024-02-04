<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compayible" content="IE=edge">
        <meta name="viewpoint" content="width=device-width,initial-scale=1.0">
        <title>
            Stories Website
        </title>
        <!-- bootstrap css cdn -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <!-- stylesheet -->
        <link rel="stylesheet" href="style.css">
        <!-- font awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body>
<?php include 'C:\xampp\htdocs\stories\images\partials\connect.php';?>
        <div class="conatiner-fluid slider">
            <?php include 'C:\xampp\htdocs\stories\images\partials\header.php';?>
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="img11.jpg" class="d-block w-100" alt="First slide">
                  </div>
                  <div class="carousel-item">
                    <img src="img10.jpg" class="d-block w-100" alt="Second slide">
                  </div>
                  <div class="carousel-item">
                    <img src="img6.jpg" class="d-block w-100" alt="Third slide">
                  </div>
                </div>
              </div>
<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
        </div>
        <div cass="container">
          <h1 class="text-center featureTitle mb-5">Featured Stories </h1>
<div class="row">
  <?php
$sql="SELECT * from topics";
$result = mysqli_query($con,$sql);
while($row=mysqli_fetch_assoc($result))
{
$id=$row['topic_id'];
$topic_image=$row['topic_image'];
$topic_name=$row['topic_name'];
$topic_desc=$row['topic_desc'];
echo '<div class="col-md-4 col-sm-6 mb-5">
<div class="card" style="width: 18rem;">
  <img src=' .$topic_image.' class="card-img-top" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">'.$topic_name.'</h5>
    <p class="card-text"> ' .substr($topic_desc,0,50).'.......</p>
    <a href="story.php?story_id='.$id.'" class="btn btn-primary">Continue Reading</a>
  </div>
</div>
</div>';
}
?>
</div>
</div>
        <?php include 'C:\xampp\htdocs\stories\images\partials\footer.php';?>
    </body>
</html>