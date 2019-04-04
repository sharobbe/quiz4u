<?php
session_start();

$_SESSION["parameter1"] = 0;
$_SESSION["parameter2"] = 0;
$_SESSION["parameter3"] = 0;




if(isset($_POST['login_submit'])){

    $username = sql_injection_filter($_POST['username']);
    $password = sql_injection_filter($_POST['password']);

    $result = login($username , $password);

    $row_count = mysqli_num_rows($result);

    if($row_count == 1){
        $user = mysqli_fetch_assoc($result);
        $_SESSION['userid'] = $user['id'];
        header('Location: index.php');
    }else{
        $msg = "Die Benutzerdaten sind nicht in unserer Datenbank vorhanden.";
    }

}

?>
<!doctype html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet"> 
        <meta charset="UTF-8">
        <title>To Do Liste</title>
        <!-- Bootstrap Verlinkung -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="style/style.css">
        <style>
            .grid-container {
                display: grid;
                grid-template-columns: auto auto auto;
            }
            body {
                padding: 20px;
            }
        </style>

    </head>
    <body >
        <div class="grid-container">

            <form  method="post">
                <div class="grid-item">

                    <div class="card border-success mb-3" style="max-width: 18rem;">
                        <div class="card-header">Frage 1</div>
                        <div class="card-body text-success">
                            <h5 class="card-title"><input type="radio" name="parameter1" value=1 > Antwort 1</h5><br>
                            <h5 class="card-title"><input type="radio" name="parameter1" value=4 > Antwort 2</h5><br>
                            <h5 class="card-title"><input type="radio" name="parameter1" value=3> Antwort 3  </h5><br>
                            <h5 class="card-title"><input type="radio" name="parameter1" value=2> Antwort 4</h5>
                        </div>   
                    </div> 
                </div> 

                <div class="grid-item">
                    <div class="card border-danger mb-3" style="max-width: 18rem;">
                        <div class="card-header">Frage 2</div>
                        <div class="card-body text-danger">
                            <h5 class="card-title"><input type="radio" name="parameter2" value=4 > Antwort 1</h5><br>
                            <h5 class="card-title"><input type="radio" name="parameter2" value=2> Antwort 2</h5><br>
                            <h5 class="card-title"><input type="radio" name="parameter2" value=1> Antwort 3  </h5><br>
                            <h5 class="card-title"><input type="radio" name="parameter2" value=3> Antwort 4</h5>
                        </div>   
                    </div>  
                </div> 

                <div class="grid-item">
                    <div class="card border-info mb-3" style="max-width: 18rem;">
                        <div class="card-header">Frage 3</div>
                        <div class="card-body text-info">
                            <h5 class="card-title"><input type="radio" name="parameter3" value=1 > Antwort 1</h5><br>
                            <h5 class="card-title"><input type="radio" name="parameter3" value=4 > Antwort 2</h5><br>
                            <h5 class="card-title"><input type="radio" name="parameter3" value=3> Antwort 3  </h5><br>
                            <h5 class="card-title"><input type="radio" name="parameter3" value=2> Antwort 4</h5>
                        </div>   
                    </div> 
                    <input type="submit" name="submit" value="Get Selected Values" />
                </div> 
            </form> 
        </div>


        <?php
        if(isset($_POST['submit'])){

            $parameter1= $_POST ['parameter1'];
            echo 'Paramter 1 ergibt den Wert ' . $parameter1; 
        ?> <br> <?php
            $parameter2= $_POST ['parameter2'];
            echo 'Paramter 2 ergibt den Wert ' . $parameter2;
        ?> <br> <?php    
            $parameter3= $_POST ['parameter3'];
            echo 'Paramter 3 ergibt den Wert ' . $parameter3;

        }
        ?>



    </body>
</html>