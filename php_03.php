<!DOCTYPE html>
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container mt-5">

            <form method="post" action="">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Enter Number</label>
                    <input name="num" type="num" class="form-control" id="exampleFormControlInput1" placeholder="Enter Number">
                </div>
                <div class="mb-3">
                    <button class="btn btn-success" type="submit">Submit</button>
                </div>

                
                <h1>สูตรคูณแม่ :<?php if(isset($_POST['num'])){ echo $_POST['num']; }?></h1>
                <div class="container mt-5">
            <?php $myvar = $_POST['num']; ?>
                <?php
                for($i=1;$i <= 12;$i++){
                    $answer = $myvar*$i;
                ?>
                <div class="row">
                <div class="h2 col text-end"><?php echo "$myvar x $i =";?></div>
                <div class="h2 col text-start"><?php echo "$answer";?></div>

            </div>
            <?php
                }
            ?>
        </div>
            </form>
        </div>
    </body>
</html>