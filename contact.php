<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/brands.min.css" integrity="sha512-G/T7HQJXSeNV7mKMXeJKlYNJ0jrs8RsWzYG7rVACye+qrcUhEAYKYzaa+VFy6eFzM2+/JT1Q+eqBbZFSHmJQew==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .topnav{
            overflow:hidden;
            background-color:blue;

        }
        .topnav a{
            display:block;
            text-align:center;
            padding:14px 16px;
            text-decoration:none;
            size:17px;
            float:left;
            color:white;

        }
        .topnav a:hover{
            background-color:orangered;
        }
        button{
            margin-top:20px;
            background-color:orangered;
            border-radius:8px;
        }
       
        .anil2{
            background-image:url('./image/contact.jpg');
            background-attachment:fixed;
            height:300px;
            background-size:cover;
            
            opacity: 0.7;
        }
        .smi
{
	list-style-type:none;
	
}
.smi li
{
	display:inline-block;
	background-color:white;
	color:red;
	padding:10px 15px;
	margin-right:10px;
	border-radius:50%;
	
}
.smi li a
{
	color:red;
}
.a
{
	:white;
}
        
    </style>
</head>
<body>
<div class="header sticky-top">
        <div class="container-fluid bg-white">
            <div class="row">
                <div class="col-sm-4">
                    <img src="image/spilogo.png" style="width:40%; height:80%"/>

                </div>
                <div class="col-sm-4">
                    <h2 style="margin-top:20px;">Softpro Learning Center</h2>
                    <h4>A Util of Softpro Group of Companies</h4>
                </div>
               <div class="col-sm-4">
              
               </div>
            </div>   <!--1st row close -->

        </div>   <!--container-fluid close -->
        <div class="topnav">
            
               <a href="index.php">Home <i class="fa fa-university" aria-hidden="true"></i></a>
               <a href="about.php">About SPI</a>
               <a href="summer.php">ST2023</a>
               <a href="technology.php">Technologies</a>
               <a href="contact.php">Contact Us</a>

              
           
        </div> <!--navbar close -->

    </div>  <!--header close -->
    <div class="container-fluid">
        <div class="row">
        <div class="col-sm-12 anil2 p-0">
	<div class="my-sec-inner h-100 text-center pt-4">
	<h5><a href="tel:8112896808" style="color:blue; text-decoration:none"><i class="fa-solid fa-phone fa-spin"></i> Call Us: +91 8112896808</a></h5>
	<h5><a href="mailto:harikeshkusawaha2002@gmail.com" style="color:orange; text-decoration:none"> Mail Us: harikeshkusawaha2002@gmail.com</a></h5>
	<ul class="smi">
	<li><a href="https://www.facebook.com/recover/code/?ph[0]=%2B919918575725&rm=send_sms&hash=AUZ1_vOge51R57v6_OI" target="_blank"><i class="fa-brands fa-facebook"></i></a></li>
	<li><i class="fa-brands fa-instagram"></i></li>
	<li><i class="fa-brands fa-twitter"></i></li>
	<li><i class="fa-brands fa-linkedin"></i></li>
	</ul>
	</div>
	</div>
        </div><!-- contact us container row close -->
        <div class="row">
            <div class="col-sm-12"><h1 style="text-align:center;color:orangered;">GET INTOUCH WITH US</h1></div>
           
        </div>
        <div class="row">
            <center>
        <form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label text-danger">Full Name</label>
    <input type="email" class="form-control"  style="width:50%;"id="exampleInputEmail1" aria-describedby="emailHelp">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label text-danger">Email</label>
    <input type="email" class="form-control"  style="width:50%;"id="exampleInputEmail1" aria-describedby="emailHelp">
    
  </div> <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label text-danger">Mobile No.</label>
    <input type="email" class="form-control"  style="width:50%;"id="exampleInputEmail1" aria-describedby="emailHelp">
    
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</center>
        </div>
        <!-- map -->
        <div class="row pt-3">
	<div class="col-sm-12 p-0">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3557.3674829399074!2d80.96253811479434!3d26.923562166104897!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399bfd7e0637bf21%3A0x730fe46201abc68a!2sSoftpro%20Learning%20Center!5e0!3m2!1sen!2sin!4v1662702404528!5m2!1sen!2sin" width="100%" height="450" style="border:2px dashed black;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	</div>
	
	
	</div>
    
     <!--footer start -->
     
      <div class="row p-5">
            <div class="col-sm-2"><img src="image/logo.jpg"/></div>
            <div class="col-sm-6"><display style="font-weight:bolder">  
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
            </display >
            <p style="font-weight:bolder; text-align:justify">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui architecto facilis odit illum cumque et nulla minus rerum iusto expedita fuga ipsam possimus tempora tenetur reprehenderit iure, quisquam libero quo!
            </p>
            <p style="color:red;font-weight:bolder;">&copy 2022-<?php echo date("d/m/y");?> Designed and developer by Harikesh Kushwaha </p></div>
            <div class="col-sm-4"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d56956.543614251066!2d80.9304064!3d26.846822399999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1673506437001!5m2!1sen!2sin" width="100%" height="250" style="border:3px dotted red;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
         </div>
    </div>
    </div>   <!-- contact us container fluid close -->
   
   
    </body>
    </html>