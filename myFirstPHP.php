<html>
<body>

<h1>My XXXX page</h1>

<?php
$txt1 = "HELLO PHP";
$txt2 = "I have changed myFirstPHP too";
$x = 100;
$y = 200;

// Line 12 is nogitt the problem. It looks fine, so check above... 
echo "<h2>" . $txt1 . "</h2>";
echo "Study PHP at " . $txt2 . "<br>";
echo $x + $y;
?>


    
<!-- now put a link here to get back to the first page -->
<?php
    echo "Now can you add another link to this page that links back to the first page";
?>
    
</body>
</html>