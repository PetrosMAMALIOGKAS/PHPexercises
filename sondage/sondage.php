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
    <h1>SONDAGE</h1>
    <h2>Comment avez-vous découvert le site?</h2>
    
    <form action="" method="POST">
        <input type="radio" name="site" value="presse"/> Par la presse spécialisée<br/>
        <input type="radio" name="site" value="annuaire"/> Par un annuaire<br/>
        <input type="radio" name="site" value="moteur"/> Par un moteur de recherche<br/>
        <input type="radio" name="site" value="forum"/> Par un forum<br/>
        <input type="radio" name="site" value="news"/> Par les news<br/>
        <input type="radio" name="site" value="ami"/> Par un ami<br/>
        <input type="radio" name="site" value="Autre"/> Autre<br/>
        Merci de maisser votre email:
        <input type="email" name="mail" placeholder="votre email"/><br/>
        <input type="submit" name="submit" value="envoyer"/>
    </form>
    <?php
    if (!empty($_POST['site']) && !empty($_POST['mail'])) {
        
        $how = $_POST['site'];
        $mel = $_POST['mail'];
        echo"<p style='color: green;'>Merci d avoir participer au sondage</p>";
        $d = date("j M o H:i:s ");
        $fp = fopen("reponse.txt", "a+");
        fwrite($fp ,"method : " . $how ." ," );
        fwrite($fp ,"email : " . $mel." ," );
        fwrite($fp ,"date : " . $d ." .\n" );

        fclose($fp);
    
     } else {
        
        echo"<p style='color: red;'>Les deux options sont obligatoires</p>";
        
    }
    
   
    
   
    ?>
</body>
</html>