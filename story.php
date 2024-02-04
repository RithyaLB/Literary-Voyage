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
<?php include 'C:\xampp\htdocs\stories\images\partials\connect.php';?>
<?php include 'C:\xampp\htdocs\stories\images\partials\header.php';?>
<?php
$id=$_GET['story_id'];
$sql="SELECT * from topics where topic_id=$id";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_assoc($result))
{
$topic_name=$row['topic_name'];

$topic_desc=$row['topic_desc'];

$topic_image=$row['topic_image'];
}
?>


<div class="container-fluid">
<div class="jumbotron bg-warning rounded">
<div class="container">
  <h1 class="display-4"><?php echo $topic_name;?> </h1>
  <p class="lead"><?php echo $topic_desc ?></p>
<button class="btn btn-dark">
<a class="text-light" href="#reading" role="button">Continue reading</a>
</button>
  
</div> </div>
</div>
        <div class="conatiner-fluid slider">
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
                    <img src="img3.jpg" class="d-block w-100" alt="Third slide">
                  </div>
                </div>
              </div>

        </div>

<div class="container" id="reading">
<div class="jumbotron jumbotron-fluid bg-warning rounded p-0">
<div class="container">
  <h1 class="display-4 text-center">Enjoy Reading</h1>
<img src=<?php echo $topic_image?> class="img-fluid">
  <p class="lead" pb-3>
The unicorn is a legendary creature that has been described since antiquity as a beast with a single large, pointed, spiraling horn projecting from its forehead.

In European literature and art, the unicorn has for the last thousand years or so been depicted as a white horse-like or goat-like animal with a long straight horn with spiralling grooves, cloven hooves, and sometimes a goat's beard. In the Middle Ages and Renaissance, it was commonly described as an extremely wild woodland creature, a symbol of purity and grace, which could be captured only by a virgin. In encyclopedias, its horn was described as having the power to render poisoned water potable and to heal sickness. In medieval and Renaissance times, the tusk of the narwhal was sometimes sold as a unicorn horn.

A bovine type of unicorn is thought by some scholars to have been depicted in seals of the Bronze Age Indus Valley civilization, the interpretation remaining controversial. An equine form of the unicorn was mentioned by the ancient Greeks in accounts of natural history by various writers, including Ctesias, Strabo, Pliny the Younger, Aelian[2] and Cosmas Indicopleustes.[3] The Bible also describes an animal, the re'em, which some translations render as unicorn.[2]

The unicorn continues to hold a place in popular culture. It is often used as a symbol of fantasy or rarity.
</p>

  
</div> </div>
</div>
<div class-"container-fluid mb-4">
<h2 class="text-center display-4">Thank you for your time</h2>
 </div>
</div>
<?php include 'C:\xampp\htdocs\stories\images\partials\footer.php';?>
