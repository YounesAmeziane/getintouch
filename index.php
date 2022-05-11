<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Home</title>
</head>
<?php
    function age(){
        $age = date("Y") - 2005;
        echo $age;
    }
    $conn = mysqli_connect('localhost', 'root', '', 'test');
    $date = date("m.d.y");
    if(isset($_POST['submit'])){
        $ADN = $_POST['ADN'];
        $tI = $_POST["sub"];
        $info = $_POST["info"];
        if(empty($ADN) or empty($tI) or empty($info)){
            header("location localhost/info/?error='chuf rah chi haja na9sa'");
        }
        $sql = "INSERT INTO info (ADN, ti, info, date) VALUES ('$ADN', '$tI', '$info', '$date')";
        $result = $conn->query($sql);
    }
?>
<body>
    <div class="container">
        <form method="post">
            <input type="text" name="ADN" placeholder="ADN" required>
            <input type="text" name="sub" placeholder="Type of information" require>
            <input type="text" name="info" placeholder="Info" >
            <input type="submit" class="submit" name="submit" value="Submit">
        </form>
        <div class="arrow"><i class="fa-solid fa-arrow-down arr"></i></div>
    </div>
    <section>
        <h1>Who I am</h1>
        <div class="text">
            <p>
                Probably if you really don't know me actually this site is useless for you, I am Younes Ameziane
                knowed as Leax, currentry my age is <?php age()?>, and nothig I don't want spreed information about
                me here so if you wanna get in touch with me you can text me in
                <a href="https://www.instagram.com/leax_m_">Instagram</a> or if you know me or you are an old friend 
                you can let your information in the form in the top.
            </p>
        </div>
        <h1>How it's working and What is the purpose</h1>
        <div class="text">
            <p>
                Actually when you enter your information the sistem that I personally created show them to me in my 
                personal dashboard. So the purpose of all that is to get in touch again, i created this site in 2022
                when I left Morocco, so maybe we know each but lost the contact time ago, I invite you to let the
                most possible information about you in the form in the top so I can read them and contact you, if
                you submited the info and I didn't contact you the reasosns are 3 :
                <ul>
                    <li>I can't remember you</li>
                    <li>I don't wanna get in touch with you again</li>
                    <li>I didn't see your info yet</li>
                </ul>
            </p>
        </div>
    </section>
</body>
</html>