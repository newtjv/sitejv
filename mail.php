<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Mensagem Enviada - Red Green Bluez</title>
        <meta name="description" content="Arte e Design Digital">
        <meta name="keywords" content="Red Green Bluez, João Vítor A. H. dos Santos, Design, Artwork, Digital art, arte digital, design gráfico">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style/style.css">
        <link rel="icon" type="image/png" href="../assets/favicon.png">
    </head>
    <body>
        <header>
        <?php include_once("includes/header.php") ?>            
        </header>

        <main>
            <div class="wrapper">
            <?php 
            $name = $_POST['name'];
            $email = $_POST['email'];
            $message = $_POST['message'];
            $subject = $_POST['subject'];
            $formcontent="From: $name \n Message: $message";
            $recipient = "newtjvart@gmail.com";
            $mailheader = "From: $email \r\n";
            mail($recipient, $subject, $formcontent, $mailheader, $name, $email, $message) or die("Error!");
            ?>            
            <h1>Obrigado!</h1>
            <h4>Retornarei assim que puder :)</h4>
            <br>
            <a href="index">Voltar</a>
            </div>
        </main>
    </body>


</html>



