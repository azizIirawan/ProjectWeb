<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form kenal MDP</title>
</head>
<body>
    survey MDP
    <form action="proses.php" method="post">
         nama : <input type="text" name = "nama"> <br/>
            kenal MDP dari :
            <input type ="checkbox" name ="dari[]" value ="instagram"/>instagram<br/>
            <input type ="checkbox" name ="dari[]" value ="facebook"/>facebook<br/>
            <input type ="checkbox" name ="dari[]" value ="twitter"/>twitter<br/>
            <input type ="checkbox" name ="dari[]" value ="Tiktok"/>Tiktok<br/>
            <input type ="checkbox" name ="dari[]" value ="youtube"/>youtube<br/>
            <br/>
            <button type ="submit" name="simpan">simpan</button>
    </form>


</body>
</html>