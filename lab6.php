<!DOCTYPE html>
 <html lang='en'>
 <head>
    <meta charset = 'UTF-8'>
    <meta name ='viewport' content = 'width=device-width, initial-scale=1.0'>
    <title>Function Calls</title>
    <?php require('lab_exercise_6.php');?>
</head>
<style>
         *{background-color: #333333;
            color: cyan;
            font-weight: bold;
        }
      </style>
<body>


    <h1>Temperature Conversion</h1>

    <form action="lab6.php" method="post">
        <p>Enter Temperature:<input type="text" name="temp" /><br/>
        <br><input type="radio" name="input" value="F"/>Farenheit to Celsius
        <br/>
        <input type="radio" name="input" value="C" />Celsius To Farenheit
        <br><br>
        <input type="submit" />
        </p>
    </form>

<?php
        
        
        if(isset($_REQUEST['input']) && isset($_REQUEST['temp']))
        {
            $temp = $_REQUEST['temp'];
            $choice = $_REQUEST['input'];
            if($choice == "F")
            {
                printf("%0.2f&deg; Celsius", fToC($temp));
            } else {
                printf("%0.2f&deg; Farenheit", cToF($temp));
            }
            
        }

       // $a = array ('test', 'random', 6, 'how', 'does', 'this', 'apply', 'word', 6.5, NULL, true);

        //var_dump($a);
    ?>
   


</body>
</html>