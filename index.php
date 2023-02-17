<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <!-- <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script> -->
    <!-- <script>
     AOS.init();
   </script> -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
     <style>
        .header{
            position: fixed;
            text-align:center;
            width:100%;
        }
        .content
        {
            padding-top:120px;
        }
       

        img
        {
            height: 200px;
            width: 150px;
        }
        h4 {
            color:orange;
        }
        button{
            margin-top:20px;
            background-color:orangered;
            border-radius:8px;
        }
        
        
         /*.content .container-fluid {
           
            background-image: url("image/bg.jpg");
            background-repeat:no-repeat;
            background-size:cover;
            width:100%;
            height:400px;
        } */
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
        
.sudhir
{
	height:400px;
    width:100%;
	background-image:url('image/bg1.jpg');
	background-repeat:no-repeat;
	background-size:cover;
	background-attachment:fixed;
}

     </style>
</head>
<body>
    <div class="header">
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
                <button style="margin-top:40px;" onclick="location.href='http://localhost/myproject/login.php'">Admin Login</button>
               </div>
            </div>   <!--1st row close -->

        </div>   <!--container-fluid close -->
        <div class="topnav">
            
               <a href="index.php">Home</a>
               <a href="about.php">About SPI</a>
               <a href="summer.php">ST2023</a>
               <a href="techmology.php">Technologies</a>
               <a href="contact.php">Contact Us</a>

              
           
        </div> <!--navbar close -->

    </div>  <!--header close -->


    <!--content part start -->
    <div class="content">
        <div class="container-fluid  pt-2 sudhir">
            <!-- <img src="image/content.jpg" style="width:100%; height:400px";> -->
            <div class="container  ">
                <div class="row " style="background-color:transparent;">
                    <div class="col-sm-6 mt-5"style="background-color:transparent;" >
                    <iframe width="100%" height="315" src="https://www.youtube.com/embed/Sumw60QvUe8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

                    </div>
                    <div class="col-sm-6 mt-5 ps-5" style="background-color:transparent; color:white;">
                    <h1>Softpro Summer Training Pre-Reporting Portal</h1>
                    <h2>Softpro Welcomes all the trainees to the biggest summer training festival 2023</h2>
                    <p>For any help and assistance, Call us on:</p>
                    <p>7080462022,7080102006</p>
                    </div>

                </div>   <!-- row close -->
            </div> <!--container part close -->

        </div>  <!--3rd container-fluid close -->

    </div> <!--content part close -->
    <div class="container-fluid" style="background-color:blue; height:150px;text-align:center;">
        <h2 style="color:white; margin-top:25px; padding-top:50px;">Please Fill the Pre-Reporting Form</h2>

    </div> <!--4th container-fluid close -->
    <div class="container-fluid">
            <h2>Pre-Reporting Form</h2>
              <p>Only Those students who have registered for Summer Trainig in Softpro India are eligible to fill this form (केवल वे छात्र जिन्होंने सोफ्तप्रो इंडिया में ग्रीष्मकालीन प्रशिक्षण के लिए पंजीकरण कराया है वे ही इस फॉर्म को भरने के पात्र है |)  </p>
              <form action="code.php" enctype="multipart/form-data" method="post" class="form-control">
            <div class="row" style="margin-bottom:10px;">

            <span id="msg"></span><br><br>
                <div class="col-sm-6 mt-auto">
                    <input type="number" name="mobile" id="mobile" class="form-control" placeholder="Enter Registered Mobile Number" maxlength="10" minlength="10" required />
                </div>
                <div class="col-sm-6 mt-auto">
                    <input type="email" name="email" id="email" class="form-control" placeholder="Enter Registered Email Address" required >
                </div>
                
            </div>   <!-- form 1st row close -->
            <div class="row">
                <div class="col-sm-6">
                    <input type="text" name="name" id="name" class="form-control" placeholder="Your Name" required>
                </div>
                <div class="col-sm-6">
                    <input type="text" name="college" id="college"  class="form-control" placeholder="Your College" required>
                </div>

            </div>  <!-- 2nd form row close -->
            <div class="row mt-3">
                <div class="col-sm-6">
                    <input type="text" name="gname" id="guardian_name" class="form-control"  placeholder="Guardian_name" required>
                </div>
                <div class="col-sm-6">
                    <input type="number" name="gmobile" id="guardian_mobile" class="form-control" placeholder="Guardian_mobile" required>
                </div>

            </div> <!-- 3rd form row close -->
            <div class="row mt-3">
                <div class="col-sm-6">
                    <select name="course"  class="form-control" id="course" >
                        <option value="">Select Course</option>
                        <option value="Diploma">Diploma</option>
                        <option value="B.tech">B.tech</option>
                        <option value="PGDCA">PGDCA</option>
                    </select>
                </div>
                <div class="col-sm-6">
                    <select name="branch"  class="form-control" id="branch" >
                        <option value="">Select Branch</option>
                        <option value="Computer Science Engineering">Computer Science Engineering</option>
                        <option value="Electronics Engineering">Electronics Engineering</option>
                        <option value="Electrical Engineering">Electrical Engineering</option>
                    </select>
                </div>
            </div> <!-- 4th form row close -->
            <div class="row mt-3">
            <div class="col-sm-6">
                    <select name="year"  class="form-control" id="year">
                        <option value="">Select Year</option>
                        <option value="1st Year">1st Year</option>
                        <option value="2nd Year">2nd Year</option>
                        <option value="3rd Year">3rd year</option>
                        <option value="4th Year">4th year</option>
                    </select>
                </div>
                <div class="col-sm-6">
                    <select name="gender"  class="form-control" id="gender" >
                        <option value="">Select Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Others">Others</option>
                    </select>
                </div>


            </div> <!-- year form  row close -->
            <div class="row mt-3">
            <div class="col-sm-6">
                    <select name="technology"  class="form-control" id="technology">
                        <option value="">Select Technology</option>
                        <option value="Python with Django">Python with Django</option>
                        <option value="PHP with Laravel/CI">PHP with Laravel/CI</option>
                        <option value=".Net">.Net</option>
                        
                    </select>
                </div>
                <div class="col-sm-6">
                    <select name="rdate"  class="form-control" id="rdate" >
                        <option value="">Select Reporting Date</option>
                        <option value="9 July 2023">9 July 2023</option>
                        <option value="12 July 2023">12 July 2023</option>
                        
                    </select>
                </div>


            </div> <!-- Technology form  row close -->
            <div class="row mt-3">
            <div class="col-sm-6">
                    <select name="accommodation"  class="form-control" id="accommodation">
                        <option value="">Select type of Accommodation</option>
                        <option value="Hostel">Hostel</option>
                        <option value="Room">Room</option>
                        <option value="Self-Arrangement">Self-Arrangement</option>
                        
                    </select>
                </div>
                <div class="col-sm-6">
                    <select name="mess"  class="form-control" id="mess" >
                        <option value="">Would Like to Avail mess Facility?</option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                        
                    </select>
                </div>


            </div> <!-- accommodation  form  row close -->
            <div class="row mt-3">
                <div class="col-sm-6">
                    <label for="photo">**Upload Your Passport Size Photo in JPEG/JPG/PNG Format Only</label>
                    <input type="file" name="photo" id="photo"  class="form-control" accept="image/jpg,image/jpeg,image/png," placeholder="Upload Your Passport size Photo">
                </div>
                <div class="col-sm-6">
                    <label for="aadhar">**Upload Your Aadhar Card in JPEG/JPG/PNG Format Only</label>
                    <input type="file" name="aadhar" id="aadhar" class="form-control" accept="image/jpg,image/jpeg,image/png," placeholder="Upload Your Passport size Photo">
                </div>

            </div> <!-- file 1st row close -->
            <div class="row mt-3">
                <div class="col-sm-6">
                    <label for="marksheet">**Upload Your Marksheet in PDF Format Only</label>
                    <input type="file" name="marksheet" id="marksheet"  class="form-control" accept=".pdf" placeholder="Upload Your Marksheet">
                </div>
                <div class="col-sm-6">
                    <select name="district" id="district" class="form-control">
                        <option value="">Select Your Home District</option>
                        <option value="Lucknow">Lucknow</option>
                        <option value="Kushinagar">Kushinagar</option>
                        <option value="Varanasi">Varanasi</option>
                        <option value="Gorakhpur">Gorakhpur</option>
                        <option value="Ayodhya">Ayodhya</option>
                        

                    </select>
                </div>




                </div> <!-- markseet row close -->
                <div class="row mt-3">
                    <div class="col-sm-6">
                        <input type="number" name="pincode" id="pincode" class="form-control" placeholder="Enter Your Pin Code" required maxlength="6">
                    </div>
                    <div class="col-sm-6">
                        <textarea name="address" id="address" rows="3" class="form-control" required placeholder="Enter Your Address"></textarea>
                    </div>

                </div>   <!--pin code row close -->
                <div class="row mt-5">
                    <div class="col-sm-12">
                    <input type="checkbox" name="checkbox" id="checkbox" required>
                    <label for="checkbox">
                        I hereby declare that the details mentioned above in the form are true as per my knowledge & I give my concern to join Summer Training 2023 at Softpro Inidia on the selected date & time as per my choice.
                    </label>
                    </div>
                    </div> <!-- check box close -->
                <div class="row mt-5">
                    <div class="col-sm-4"></div>
                    <div class="col-sm-4" >
                        <input type="submit" name="submit" value="submit" class="form-control" style="background-color:orangered;">
                    </div>
                    <div class="col-sm-4"></div>


                </div> <!--  submit button close -->

         </form>
    <!-- </div>  -->
          <div class="row">
          <div class="col-sm-12 pt-5">
          <h2 style="text-align:center; color:orangered;">Testimonials</h2>
          <h2 style="text-align:center; color:blue;">200000+ Students Love Us</h2>
         </div>
</div> <!-- Testimonials 1st row close -->
<div class="row pt-3">
    <div class="col-sm-3 ps-5"><img src="image/testimonial.png" style="width:80%; border-radius:15px;box-shadow:5px 5px 5px black;"></div>
    <div class="col-sm-3 ps-5"><img src="image/testimonial2.png" style="width:80%; border-radius:15px;box-shadow:5px 5px 5px black;"></div>
    <div class="col-sm-3 ps-5"><img src="image/testimonial1.png" style="width:80%; border-radius:15px;box-shadow:5px 5px 5px black;"></div>
    <div class="col-sm-3 ps-5"><img src="image/astest.png" style="width:80%; border-radius:15px;box-shadow:5px 5px 5px black;"></div>

</div> <!-- Testimonials 2nd row close -->
<div class="container-fluid p-3"  style="background-color:pink;">
    <div class="row mt-5 p-0" >
        <div class="col-sm-12">
            <h5 style="text-align:center;">Not yet registered for Summer Training 2023,kindly register today to be a part of Team Softpro.</h5>
            <p style="text-align:center;">अगर आपने अभी तक Summer Training 2023 के लिए Regstration नही किया है तो, Softpro Team का हिस्सा बनने के लिए नीचे दिए गये button पर Click करके आज ही Registration करे </p>
            
           
        </div>
    </div>  <!-- row close -->
    <div class="row">
        <div class="col-sm-5"></div>
        <div class="col-sm-2"><a href="https://www.trainingatsoftpro.com/register.php">
            <button type="button" class="btn btn-primary" style="background-color:#e77910;">Register Now</button>
        </a></div>
        <div class="col-sm-5"></div>
    </div>
</div>  <!-- last container close -->

</div> <!--container form part close -->

<!--footer-->
<div class="container-fluid pt-5" >
    <div class="row" style="background-color:#d5d5d5;">
        <div class="col-sm-2">
            <img src="image/logo.jpg"/>
        </div>
        <div class="col-sm-5" >
            <display style="font-weight:bolder">  
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
            </display >
            <p style="font-weight:bolder; text-align:justify">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui architecto facilis odit illum cumque et nulla minus rerum iusto expedita fuga ipsam possimus tempora tenetur reprehenderit iure, quisquam libero quo!
            </p>
            <p style="color:red;font-weight:bolder;">&copy 2022-<?php echo date("d/m/y");?> Designed and developer by Harikesh Kushwaha </p>
        </div>
        <div class="col-sm-5">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d56956.543614251066!2d80.9304064!3d26.846822399999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1673506437001!5m2!1sen!2sin" width="100%" height="250" style="border:3px dotted red;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</div>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/query/3.4.1/jquery.min.js"></script> -->
    <script>
            $("#mobile").on("keyup",function(){
                let mobile=$(this).val();
                $.ajax({
                 url:"stu_ajax.php",
                 type:"POST",
                 data:{mobile},
                 
                 success: function(res){
                    console.log(res);
                    if(res.status == false){
                        $("#msg").text("You are not eligible for filling this form!")
                        setTimeout(function(){
                            $('#msg').fadeOut();
                            },5000);                      
                        $("#msg").removeClass("alert-success");
                        $("#msg").addClass("alert-danger");
                        $("#msg").html(res.message);
                        $("#name").val("");
                        $("#email").val("");
                        $("#college").val("");
                        $("#submit").attr("disabled", true);
                        
                        
                   }else{
                    $("#msg").html("You are eligible for filling this form!")
                    setTimeout(function(){
                            $('#msg').fadeOut();
                            },5000);
                    $("#msg").removeClass("alert-danger");
                    $("#msg").addClass("alert-success");
                    $("#name").val(res[0].name);
                    $("#email").val(res[0].email);
                    $("#college").val(res[0].college);
                    $("#submit").attr("disabled", false);
                   }
                 }   
                });
            });
        </script>

</body>
</html>
