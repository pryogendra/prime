<html>
    <body>
        <form method="POST">
            Enter a number : 
            <input type="text" name="num"><br>
            <input type="submit" value="submit">
        </form>
    </body>
    <?php
    $num=(int)$_POST["num"];
    $r=0;
    for($i=3;$i<=$num/2;$i++)
    {
        if($num%$i==0)
        {
            $r=1;
        }   
    }
    if($num!=2)
    {
    if($r==1)
    {
        print($num." is not prime number.");
    }
    else
    {
        print($num." is prime number.");
    }
}
else{
    echo $num." is not prime number.";
}
    ?>
</html>