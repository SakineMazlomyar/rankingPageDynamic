
<?php include("./head.php");?>
<body>
<?php include("./header.php");?>
 
<form method="post" action="./details.php" style="position: relative; top: 15em;">
    <select name="event">
    <option value="html">html</option>
    <option value="css">css</option>
    <option value="javascript">javascript</option>
    <option value="nodejs">nodejs</option>
    <option value="php">php</option>
    <option value="python">python</option>
    </select>
    <input type="submit" name="submit" value="Get Selected Value's description." />
</form>

<?php include("./footer.php");?>
</body>
</html>



