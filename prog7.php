<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="refresh" content="1" />
<style>
p {
color: black;
font-size: 40px;
position: absolute;
top: 50%;
left: 50%;
transform: translate(-50%, -50%);
}
body {
background-color: blue;

}
</style>
<p> THE SERVER TIME IS <?php echo date(" h: i : s A");?>
    TODAY IS <?php echo date("y/m/d") ,"<br>";?>
    TODAY IS <?php echo date("y.m.d"), "<br>";?>
    TODAY IS <?php echo date("y-m-d"), "<br>";?>
    TODAY IS <?php echo date("l"), "<br>";?>
</p>
</head>
</html>