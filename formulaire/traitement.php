<!doctype html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Home Page</title>
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <link href="style1.css" rel="stylesheet" type="text/css"/>
</head>
<body>
    
    
    
    <?php
    $surname = $_POST["nom"];
    echo "le nom vous avez declaré est " . $surname;
    $name = $_POST["prenom"];
    echo "<br/>le prenom vous avez declaré est " . $name;
    $gender = $_POST["sexe"];
    echo "<br/>la sexe vous avez declaré est " . $gender;
    $xp = $_POST["experience"];
    echo "<br/>vous avez " . $xp . "années d experience";
    $lang = $_POST["languages"];
    echo "<br/> vous avez declaré les languages ";
    foreach ($lang as $l) {
        echo $l . " "; 
    }
    $langu = $_POST["langues"];
    echo "<br/> vous parlez ";
    foreach ($langu as $l) {
        echo $l . " "; 
    }
    
    $com = $_POST["coman"];
     echo "<br/> et Aussi : " . $com;
    
        
    

   
    ?>
</body>
</html>