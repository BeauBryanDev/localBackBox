<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-eqiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </title>Print Some text from PHP</title>
</head>
<?php 
    $flg = false ; 
    $N = 10 ;
    $fruits = [ "Apple", "Banana","Cherry","Kiwi","Melon","Peach","Strawberry","Watermelon"];
    $cnt = 0;
?>
<body>

    <?php echo "<h1> Hello from PHP </h1>"; ?>
    
    <?= "<i> This is another way to printr text &&& tag within php</i>" ?>
    <div class="CASS"> </div>

    <?php if ( $flg ) : ?>
        
        <b>IT MEANS YES!</b>

    <?php else : ?>

        <b>It means Not as False </b>
    <?php endif ; ?>

    <?php echo "<br> $N <br>"?>

    <ul>

        <?php for ( $i = 0; $i < $N ; $i ++ ) : ?>

        <li> <?= $i ?> </li>

        <?php endfor ; ?>

    </ul>

    <h3>Fruits List </h3>

    <ul> 
        <?php foreach($fruits as $fruit  ) : ?>

            <li>  <?= $fruit ?> </li>
        
        <?php endforeach ?>
    </ul>
    
    <script>

        let myFruits = JSON.parse( ' <?=  json_encode( $fruits ) ?>' ) ;

        console.log(myFruits) ;

    </script>
    <h3>User Input FORM </h3>
    <form action="./main.php" method="get">
        
        <label for="uName">Your Name</label>
        <input type ="text" name = "uName"  id="uName">

        <label for="uAge">Your Age</label>
        <input type ="text" name = "uAge"  id="uAge">
        
        <button type="Submit">SubmitForm</button>

    </form>
    <h3>Upluad a Picture to the Server </h3>
    <div>
        <form action="./main.php" method = "post" enctype ="multipart/form-data" >
        <label for="FileImage">Picture </label>
        <input type ="file" name="FileImage" id="FileImage">

        <button type="submit">UPLOAD YOUR PICTURE </button>
        </form>

    </div>
    <div>
        <h3> Fill out this input form now </h3>
        <form action="./scripts.php" method="post" >
            <lable form ="firstName" >
                Your First Name Please.
            <lable> 
                <input type="text" name="firstName" id ="firstName" >

                <lable form ="lastName" >
                Your Last Name Please.
            <lable> 
                <input type="text" name="lastName" id ="lastName" >
                <lable form ="userAge" >
                Your Bloody Age Please.
            <lable> 
                <input type="number" name="userAge" id ="userAge" >
                
                <button type="submit"> SUBMIT </button></>
        
        </form>
    </div>
    
    <div> 
        <h3>
            SAy GoodBye <br> 
        </h3>
    </div>
    <?= "Hola Mundo\n."  ?>


</body>
</html>