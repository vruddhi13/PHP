<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Class details</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body id="hhh">
    <center>
<div id="sql">
    <h1> Class Details</h1>
        <form action="classdatainsert5.php" method="post">
            <label>Class ID </label>
            <input type="number" name="id"><br>
            <label> Class Name </label>
            <select name="className">
                <option value="fyit">FYIT</option>
                <option value="syit">SYIT</option>
                <option value="fymb">FYMB</option>
                <option value="symb">SYMB</option>
                <option value="sybt">SYBT</option>
            </select>

            <br>
            <input type="submit" name="add" value="add " id="icc"> 
            <br>
            <?php  echo "<a href='class_display6.php'> Show data </a>"; ?>
        </form>

    </div>
</center>
</body>
</html>
