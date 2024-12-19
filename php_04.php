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
                    <label for="exampleFormControlInput1" class="form-label">Enter Number Start</label>
                    <input name="numstart" type="number" class="form-control" id="numstart" placeholder="Enter Number">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Enter Number End</label>
                    <input name="numend" type="number" class="form-control" id="numend" placeholder="Enter Number">
                </div>
                <div class="mb-3">
                    <button class="btn btn-success" type="submit">Submit</button>
                </div>
            </form>
            
            <?php 
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $numS = isset($_POST['numstart']) ? (int)$_POST['numstart'] : 0;
                $numE = isset($_POST['numend']) ? (int)$_POST['numend'] : 0;

                echo "<h1>ตัวเลขระหว่าง: " . ($numS)."-".($numE) . "</h1>";

                for ($i = $numS; $i <= $numE; $i++) {
                    $answer = ($i % 2 == 0) ? "เลขคู่" : "เลขคี่";
            ?>
                <div class="row">
                    <div class="h2 col text-end"><?php echo "$i เป็น"; ?></div>
                    <div class="h2 col text-start"><?php echo "$answer"; ?></div>
                </div>
            <?php
                }
            }
            ?>
        </div>
    </body>
</html>
