<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = test_input($_POST["name"]);
        $email = test_input($_POST["email"]);
      }
      
      function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }
      ?>

    <form id="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" >
        <div id="inputContainerAll">

            <div id="naamInputContainer">
                <input id="naamInput" placeholder="Uw naam" type="text" name="name">
            </div>

            <div id="emailInputContainer">
                <input id="emailInput" placeholder="Uw email" type="text" name="email">
            </div>

            <input type="submit" id="submitButton">

            <?php 
    
                echo "<p id = 'name'> Welcome {$name} </p> <br>";
                echo "<p id = 'email'> Your email address is: {$email}</p> ";
                
            ?>
            
        </div>
    </form>
    
 

<style>

#inputContainerAll {
    display: flex;
    margin-top: 3em;
    flex-direction: column;
    align-items: center;
}

#naamInputContainer {
    margin-bottom: 1em;
}

#submitButton {
    width: 13em;
    margin-top: 3em;
}

#name, #email {
    justify-content: center;
}
</style>

</body>
</html>