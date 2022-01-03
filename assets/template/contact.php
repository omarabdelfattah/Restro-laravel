<?php

ob_start();
$page_title = 'Contact us';

  // Include connection file
  require('config.php');

// Require navbar
    require("navbar.php");



// Check if method is POST
if($_SERVER['REQUEST_METHOD'] == "POST"){
    // CHECK IF All fields exits
     if( isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['feedback']) ){

        $name = $_POST['name'] ;
        $email = $_POST['email'] ;
        $phone = $_POST['phone'];
        $feedback = $_POST['feedback'];

        $result = $conn->query("INSERT INTO contact (name,email,phone,feedback) VALUES('$name','$email','$phone','$feedback')");
         if($conn->affected_rows > 0){
            header('Location:contact.php?st=t');
        }else{
             header('Location:contact.php?st=f');
        }
        }
}    

//Check if feedback was sent or not
echo"<script>";
if(isset($_GET['st'])){
    if($_GET['st'] == "t"){
        echo " $('#show_err').attr('class','text-success'); ";
        echo " $('#show_err').text('feedback sent successfully'); ";
    }else{
        echo " $('#show_err').attr('class','text-danger'); ";
        echo " $('#show_err').text('feedback could't be delievered'); ";
    }
}
echo "</script>";
?>

<!--Map-->
<div style="width: 100%">
    <iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
        src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Kolayet%20Al%20Oloum,%20Al%20Azaritah%20WA%20Ash%20Shatebi,%20Qism%20Bab%20Sharqi,%20Alexandria%20Governorate+(Faculty%20of%20Science,%20Alexandria%20University%D9%83%D9%84%D9%8A%D8%A9%20%D8%A7%D9%84%D8%B9%D9%84%D9%88%D9%85%20-%20%D8%A7%D9%84%D8%B4%D8%A7%D8%B7%D8%A8%D9%8A)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
</div>
<div class="container-fluid d-flex justify-content-center">
    <div class="row contact" style="padding: 8px 0px;">
        <!--Our Store-->
        <div class=" offset-md-2 col-lg-4 col-sm-4 col-xs-12 info-store">
            <div class="name-store">
                <h3>Your Store</h3>
            </div>
            <address>
                <div class="address clearfix form-group">
                    <div class="icon">
                        <i class="fa fa-home"></i>
                    </div>
                    <div class="text">Al Azaritah WA Ash Shatebi, Qism Bab Sharqi, Alexandria Governorate</div>
                </div>
                <div class="phone form-group">
                    <div class="icon">
                        <i class="fa fa-phone"></i>
                    </div>
                    <div class="text">Phone : 01204167590 - 0333333333</div>

                </div>
                <div class="comment">
                    <p style="box-sizing: border-box; margin: 0px 0px 10px;"><span
                            style="font-size: 14px; color: rgb(130, 130, 130); font-family: Shruti, sans-serif;">E-store&nbsp;is
                            a company specializing in retail and wholesale electronics including laptops, computers and
                            accessories.</span></p>

                    <p style="box-sizing: border-box; margin: 0px 0px 10px;"><span
                            style="color: rgb(130, 130, 130); font-family: Shruti, sans-serif; font-size: 14px; background-color: rgb(255, 255, 255);"
                            class="">E-store Computer</span>
                        <font color="#828282" face="Shruti, sans-serif"><span style="font-size: 14px;"> has been
                                established since 2005 in Egypt. It is engaged in wholesale sale, </span></font><span
                            style="color: rgb(130, 130, 130); font-family: Shruti, sans-serif; font-size: 14px;">E-store&nbsp;</span>&nbsp;
                        <font color="#828282" face="Shruti, sans-serif"><span style="font-size: 14px;">as a first stage
                                and retailing for more than 14 years in Egypt. Toby has 4 branches in the largest and
                                most famous commercial centers in Egypt</span></font>
                    </p>
                </div>
            </address>
        </div>

        <!--Contact us-->
        <div class="col-lg-6 col-sm-6 col-xs-12 contact-form">
            <form  method="POST"    class="form-horizontal">
                <fieldset>
                    <legend id="show_err"></legend>
                    <legend>Contact Us</legend>
                    <div class="form-group required">
                        <label class="col-sm-4 control-label" for="input-name">Your Name</label>
                        <div class="col-sm-10">
                            <input type="text" name="name" value="" id="input-name" class="form-control"
                                required="required">
                        </div>
                    </div>
                    <div class="form-group required">
                        <label class="col-sm-4 control-label" for="input-email">E-Mail Address</label>
                        <div class="col-sm-10">
                            <input type="text" name="email" value="" id="input-email" class="form-control"
                                required="required">
                        </div>
                    </div>

                    <div class="form-group required">
                        <label class="col-sm-4 control-label" for="input-email">Phone</label>
                        <div class="col-sm-10">
                            <input type="text" name="phone" value="" id="input-phone" class="form-control"
                                required="required">
                        </div>
                    </div>
                    <div class="form-group required">
                        <label class="col-sm-4 control-label" for="input-enquiry">feedback</label>
                        <div class="col-sm-10">
                            <textarea name="feedback" rows="5" id="input-enquiry" class="form-control"
                                required="required"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-10">
                            <button class="btn btn-primary buttonGray " id="submit" type="submit">
                                Submit
                            </button>
                        </div>
                    </div>
                </fieldset>

            </form>

        </div>
    </div>
</div>
<?php 
    // Require footer
    require('footer.php');
?>