

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
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
Enter String 1   <input  type="text"class="t" name="s1" required="required"><br><br><br>
Enter string 2   <input type="text" class="t" name="s2" required="required"><br><br><br>
<button type="submit" name="submit" class="btn btn-dark">Compare</button>
</form>
</div>
</body>
</html>

<?php
if(isset($_POST['submit'])) 
{

$str1 = $_POST["s1"];
$str2 = $_POST["s2"];


function bSoundex($string)
{
    include './conn.php';

$char = substr("$string",0,3);

$lword = preg_split('/(?<!^)(?!$)/u', $string); // converts the string str1 into array

for($i=0;$i<strlen($char);$i++) //
{
 $str=$char[$i]."\n";

}


foreach($lword as $pos => $char)
{
    $result = mysqli_query($conn, "SELECT `codeNumber` FROM `charac` WHERE `charac`.`characters` = '$char'");

    if (!$result) 
    {
        printf("Error: %s\n", mysqli_error($conn));
        exit();
    }
    
    else 
    {
        while ($row = mysqli_fetch_array($result))
        {

        $c = $row['codeNumber'];
        echo $c;
        }
    }
}

}

echo "The soundex of " . $str1 . " is " ;
bSoundex($str1);
echo  "<br><br> The soundex of " . $str2 .  " is " ;
bSoundex($str2);

}
?>
