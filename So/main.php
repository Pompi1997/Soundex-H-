

<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="css/style.css">

</head>
<body>

<h1>
    Soundex for Bodo Language
</h1>
<div class ="form">
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">  <!-- action made to post the results within the same page -->

Enter String 1   <input  type="text"class="t" name="s1" required="required">
Enter string 2   <input type="text" class="t" name="s2" required="required">
<button type="submit" name="submit" class=" btn btn-dark">Compare</button>
</form>
</div>
</body>
</html>

<?php
if(isset($_POST['submit'])) 
{

$str1 = $_POST["s1"];
$str2 = $_POST["s2"];
$str1 = trim($str1);  //removing blank spaces before and after the string 
$str2 = trim($str2);


 function bSoundex($string)  // function for generating the soundex
{
    include './conn.php';

$char = substr("$string",0,3);
//$c="";

$lword = preg_split('/(?<!^)(?!$)/u', $string); // converts the input string into array

for($i=0;$i<strlen($char);$i++) //
{
 $str=$char[$i]."\n";

}


foreach($lword as $pos => $char)
{
    $result = mysqli_query($conn, "SELECT `codeNumber` FROM `charac` WHERE `charac`.`characters` = '$char'");  //soundex retrieval code by checking of respective characters

    if (!$result) 
    {
        printf("Error: %s\n", mysqli_error($conn));
        exit();
    }
    
    else 
    {
        while ($row = mysqli_fetch_array($result))
        {
            
            $c= $row['codeNumber'];                          //printing of soundex code fetched and jointly stored in $c 
            echo $c;
        }
        
        
        
    }
}
}
echo "Soundex of " . $str1 . " : " ;

ob_start();
bSoundex($str1);
$output1 = ob_get_clean();                   //stores the soundex output of $str1
print $output1 ;


echo  "<br><br> Soundex of " . $str2 .  " : " ;

ob_start();
bSoundex($str2);
$output2 = ob_get_clean();                   //stores the soundex output of $str2
print $output2 ;

if($output1 === $output2)
{
    echo "<br><br> They sound same ";
}
else{

    echo "<br><br>They sound different";
    }

}



?>



