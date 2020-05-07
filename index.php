<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-google-faq</title>
    <link rel="stylesheet" href="style.css">

    <?php
        require_once "faq.php";
    ?>
</head>
<body>

<header>
    <div class="logo">
        <div class=""><img src="google.jpg"></div>
        <h2>Privacy e termini</h2>
    </div>
    <nav>
        <div>
        <a href="#">Introduzione</a>
        <a href="#">Norme sulla privacy</a>
        <a href="#">Termini di servizio</a>
        <a href="#">Teconologie</a>
        <a href="#" class="active">Domande frequenti</a>
        </div>
        <a href="#" class="right">Account Google</a>
    </nav>
</header>
<main>

    <div class="container">
        
    <?php
        $domande=0;
        foreach($faq as $faq){
        $testo.="<h2><br>".$faq["domanda"]."</h2><br><p>".$faq["risposta"]."</p>";
        $domande++;
        }

    
        foreach($class as $value){
            if($name===$value["name"]){
            echo "Nome: ". $value["name"]."<br>";
            echo "Cognome: ". $value["lastname"]."<br>";
        }





    ?>
    
    <h2>Trovate <?php echo $domande ?> domande </h2> 
        
   <?php echo $testo ?>
        

    </div>
</main>

</body>
<footer>
   <div class="width">
        <ul>
            <li><a href="#">Google </a></li>
            <li><a href="#">Tutto su google</a></li>
            <li><a href="#">Privacy</a></li>
            <li><a href="#">Termini</a></li>
        </ul>
        <div class="flex">
            <img src="icona.png">
            <select><option>Italiano<option></select>
        </div>
        </div>
</footer>
</html>