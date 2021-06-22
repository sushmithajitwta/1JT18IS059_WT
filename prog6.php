<?php
$user = "YourName";
?>
<!DOCTYPE html>
<html>
<head> <title> program 6 </title>
<style>
body{
    background-color : blue;
    color: white;
    font-size: 20px;
}
h1{
    text-align : center;
}
</style>
    
</head>
<body>
<h1> <?php echo $user; ?>, Welcome to Sample PHP Script </h1>
<h2> This Program dispalys the number of page visits</h2>
<?php
print "<h3> REFRESH PAGE </h3>";
$name="counter.txt";
$file = fopen($name,"r");
$hits = fscanf($file,"%d");
fclose($file);
$hits[0]++;
$file = fopen($name,"w");
fprintf($file,"%d",$hits[0]);
fclose($file);
print "Total number of views: ".$hits[0];
?>
</body>
</html>