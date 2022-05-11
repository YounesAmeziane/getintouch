<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<?php
    $conn = mysqli_connect('localhost', 'root', '', 'test');
    if(isset($_POST['submit'])){
        $protocol = $_POST['protocol'];
        $ADN = $_POST['ADN'];
        echo $protocol . "<br>";
        if($protocol = 'UADN'){
            echo "working" . "<br>";
            $sql = "SELECT ADN FROM info";
            $result = $conn->query($sql);
            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    echo "ADN: " . $row["ADN"] . "<br>";
                }
            }else{
                echo "0 results";
            }
            $conn->close();
        }else{
            echo "makheddemech";
        }
    }
?>
<body>
    <form method="post">
        <select name="protocol">
            <option value="SADN">Show ADNs</option>
            <option value="UADN">Use ADN</option>
        </select>
        <input type="text" name="ADN" placeholder="Enter the ADN">
        <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>
