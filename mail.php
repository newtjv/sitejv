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
                $visitor_email = $_POST['email'];
                $message = $_POST['message'];
                $subject = $_POST['subject'];
            
                $email_from = "$visitor_email";

                $email_subject = "$subject";

                $email_body = "Nome: $name\n".
                                "Email: $visitor_email\n".
                                    "Assunto: $email_subject\n".
                                        "Mensagem: $message\n";

                $to = "newtjvart@gmail.com";

                $headers = "From: $email_from \r\n";

                $headers .= "Reply-To: $visitor_email \r\n";
            
                mail($to,$email_subject,$email_body,$headers) or die("Error!");

            ?>            
            <h1>Obrigado!</h1>
            <h4>Retornarei assim que puder :)</h4>
            <br>
            <a href="index">Voltar</a>
            </div>
        </main>
        <footer>
        <?php include_once("includes/footer.php") ?>
        </footer>
    </body>


</html>



