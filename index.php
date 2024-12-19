<!DOCTYPE html>
<html>
    <head>
        <title>PHP Test</title>
    </head>
    <body>
        <h1>File index.php</h1>
        <?php
        echo "Hello World";
        echo "<br>";
        print("Hello World");
        echo "<br>";
        print_r("Hello World");
        echo "<br>";
        printf("Hello World");
        echo "<br>";
        var_dump("Hello World");
        echo "<br>";
        $myvar = "Hello World";
        ?>
        <h1><?php echo $myvar; ?></h1>
        <?php
        echo "<h1>".$myvar."<h1>";
        ?>
        <?php
        $x = 1;
        function myfunction($myparam){
            global $x;
            $x = "Hello";
            return $myparam;
        }

        echo "<h4>".MYFUNCTION("Hello World!")."</h4>";
        ?>
        <h1><?php echo $x; ?></h1>
        <?php echo "1"+'1'; ?>
        <?php  
        $mychar = "a";
        ?>
        <h1><?php echo ++$mychar; ?></h1>
        <?php  
        if(1 == '1'){
            echo "1 == \"1\"";
        }elseif(true){
            echo "1 != \"1\"";
        }
        if(true)
        echo "true";
        else
        if(true)
        echo "false";

        $my_arry = array(1,2,3,4,5);
        for($i=0;$i < count($my_arry);$i++){
            echo $my_arry[$i];
        }
        echo "<br>";
        foreach($my_arry as $index => $value){
            echo $value;
        }
        echo "<br>";
        $my_arry2[] = [1,2,3];
        $my_arry2[] = 2;
        $my_arry2[4] = 3;
        $my_arry2[] = 4;
        $my_arry2[] = 5;
        print_r($my_arry2);
        echo "<br>";
        $my_arry3 = array(1,2,3,"myindex" => 4, 0. => 9);
        $my_arry3["myindex"] = 1;
        print_r($my_arry3);
        foreach($my_arry3 as $value){
            echo $value;
        }
        
        ?>
    </body>
</html>