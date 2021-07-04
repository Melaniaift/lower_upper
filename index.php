<?php
$bla="";
if(isset($_POST["text1"])){
    $var1=$_POST["text1"];
}else
    $var1="";

if(isset($_POST["lower"]))
    $bla=strtolower($var1);
elseif(isset($_POST["upper"]))
    $bla=strtoupper($var1);
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>ex7</title>
    </head>
    <body>
        <form action="<?php print $_SERVER["PHP_SELF"]?>" method="post">
            <input type="text" name="text1" size="12" maxlength="13"/>
            <input type="submit" value="->" name="baubau"/>
            <input type="text" name="text2" value="<?php echo($bla);?>" size="12" maxlength="13"/> <br/><br/><br/>
            
            <pre><input type="checkbox" value="lower" name="lower">lower</pre>
            <pre><input type="checkbox" value="upper" name="upper"/>upper</pre>
            
                
        </form>
    </body>
</html>