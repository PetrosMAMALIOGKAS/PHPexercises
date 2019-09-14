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
    <form method="post" action="traitement.php">
    <h2>Formlulaire d' envoi</h2>
        Nom: 
        <input type="text" name="nom" placeholder="votre nom"/><br/>
        Prenom:
        <input type="text" name="prenom" placeholder="votre prenom"/><br/><br/>
        
        <input type="radio" name="sexe" value="M"/>Masculin<br/>
        <input type="radio" name="sexe" value="F"/> Feminin<br/><br/>
        
        
        Anneés d'expérience:
        <select name="experience">
            <option value="-1">moins un an</option>
            <option value="1-3">un à trois ans</option>
            <option value="3-5">trois à cinq ans</option>
            <option value="+5">Plus de cinq ans</option>
        </select><br/><br/>
        
         Langages Web(plussieurs choix sont possibles):<br/><br/>
        <select name="languages[]" multiple>
            <option value="HTML5">HTML5</option>
            <option value="CSS3">CSS3</option>
            <option value="JS">JS</option>
            <option value="PHP">PHP</option>
        </select>
        <br/><br/>

        
        langues parlées:<br/>
        <input type="checkbox" name="langues[]" value="FR"> Français<br/>
        <input type="checkbox" name="langues[]" value="AN"> Anglais<br/>
        <input type="checkbox" name="langues[]" value="ES"> Espagnol<br/><br/>
        
        commentaire:<br/>
        <textarea name="coman" rows="10" cols="30">votre commentaires
        </textarea>
    
        <br/>
        <input type="submit" value="envoyer"/>
        <input type="reset" value="effacer" name="effacer"/>

        
        
        
        
    </form>
   
    
    
    <?php
   
    ?>
</body>
</html>