
<!doctype html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet"> 
        <meta charset="UTF-8">
        <title>To Do Liste</title>
        <!-- Bootstrap Verlinkung -->
       
        <link rel="stylesheet" href="style/style.css">
          <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
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
                        <a class="btn btn-link" href="#" data-toggle="collapse" data-target="#target1">
                        <div class="card-header">Frage 1</div>
                        </a>
                        
                    <div id="target1" class="collapse">
                        
                        <div class="card-body text-success">
                            <div class="row">
                            <h5 class="card-title"><input type="checkbox" id="antwort1" value=1 >
                            <label for="antwort1"><img src="img/bulbasaur.gif" width="100px"></label></h5><br>
                            
                                
                            <h5 class="card-title"><input type="checkbox" id="antwort2" value=2 >
                            <label for="antwort2"><img src="img/caterpie.gif" width="100px"></label></h5><br>
                            </div>
                            
                            <div class="row">
                            <h5 class="card-title"><input type="checkbox" id="antwort3" value=3 >
                            <label for="antwort3"><img src="img/charmander.gif" width="100px"></label></h5><br>
                            
                            <h5 class="card-title"><input type="checkbox" id="antwort4" value=4 >
                            <label for="antwort4"><img src="img/doduo.gif" width="100px"></label></h5>
                            </div>
                        </div>  
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
                    
                </div> 
                
                 <div class="grid-item">

                    <div class="card border-success mb-3" style="max-width: 18rem;">
                        <div class="card-header">Frage 4</div>
                        <div class="card-body text-success">
                            <h5 class="card-title"> sfojsfosjifoisjfosijf?<input type="range" name="frage4" min="1" max="10" >  </h5><br>
                        </div>   
                    </div> 
                </div> 
                
                
                
                
                <input type="submit" name="submit" value="Get Selected Values" />
                
                
                <div class="accordion" id="accordionExample">

  
  
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


        
          <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>

    </body>
</html>