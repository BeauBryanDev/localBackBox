<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact our Sales Team</title>
</head>
<body>

    <?php if ( $status == "danger") : ?>

    <div class="alert danger" >
        
    <span>
        Error. Thee was a Problem!
    </span>
    </div>

    <?php if ( $status == "success") : ?>

        <div class="alert danger" >
        
    <span>
        Message was successfully sent!
    </span>
    </div>

    </div> 

    <h2>User Fileds</h2>
    <div>
        <form action="#"></form>
        <h1>Please Fill OUt your Contact Information</h1>
        <div class="input-group">
            <label for="itsName" id="itsfName" >Enter your First Name</label>
            <input type="text" name="itsfName" id="itsfName" >
        
        </div>
        <div class="input-group">
            <label for="itslstName" id="itslstName" >Enter your Last Name</label>
            <input type="text" name="itslstName" id="itslstame" >
        
        </div>
        <div class="input-group" >
            <label for="itsEmal" id="itEmail" >Enter your Enamil </label>
            <input type="text" name="itsEmail" id="itsEmail" >
        
        </div>
        <div class="input-group" >
            <label for="itsAge" id="itsAge" >Enter your Age</label>
            <input type="Number" name="itsAge" id="itsAge" >
        
        </div>
        <div class="input-group" >
            <label for="itsPhone" id="itsPoneNumber" >Enter your PhoneNumber</label>
            <input type="text" name="itsPoneNumer" id="itsPhoneNumber" >
        
        </div>
        <div class="input-group" >
            <label for="user_message"> Leave us Your Message</label>
            <textarea name="user_message" cols="10" rows="5"  id="user_message"></textarea>
        </div>
    </div>
      <button type="submit" name="send_form"> SUBMIT </button></>
    <div> 
        <div> 
            <span>
                1345 WhisperyWood Mainland Avenue 56th
                Cleveland OH  57354
            </span>
        </div>
        <div>
            <span>
                545 675 5676
            </span>
        </div>
    </div>
</body>
</html>

<?php

function check_validated ( $itsName, $itslstName, $itsAge, $itsPhone,$user_message, $send_form ) {

    $checker = ( !empty($itslstName) && !empty($itsName) && !empty($itsPhone) && !empty($itsAge) && !empty($user_message) );

    return $checker;
}

$status = "";

if ( isset($_POST["send_form"]  )  ) {

    if  ( validate( ...$_POST) ) {

        $firstName = $_POST["itsName"];
        $lastName  = $_POST["itslstName"];
        $age       = $_POST["itsAge"];
        $telePhhone= $_POST["itsPhone"];
        $itsMessage= $_POST["user_message"];


        //send E$mail to User 

        $status = "success";



    }

}