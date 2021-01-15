<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Contato - Red Green Bluez</title>
        <meta name="description" content="Arte e Design Digital">
        <meta name="keywords" content="Red Green Bluez, João Vítor A. H. dos Santos, Design, Artwork, Digital art, arte digital, design gráfico">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style/style.css">
        <link  rel="stylesheet" href="style/lightbox.css"/>
        <script src="script/lightbox-plus-jquery.js"></script>
        <link rel="icon" type="image/png" href="assets/favicon.png">
        <script src="https://kit.fontawesome.com/c7732acf15.js" crossorigin="anonymous"></script>
        <script src="script/menu.js"></script>
    </head>
    <body>       
        <header>
            <?php include_once("includes/header.php") ?>
        </header>
        <main>
            <div class="wrapper">
                <h1>Contato</h1>
                <p>Mande uma mensagem!</p>
                <br>
                <br>
                <form action="mail" method="POST">
                    <p>Nome</p> <input type="text" name="name" required>
                    <p>Email</p> <input type="email" name="email" required>
                    <p>Assunto</p> <input type="text" name="subject" required>
                    <p>Mensagem</p><textarea name="message" rows="6" cols="25" required></textarea>
                    <input class="submit" type="submit" value="Enviar">
                </form>               
            </div>
            <br>
            <br>
        </main>
        <footer>
        <?php include_once("includes/footer.php") ?>
        </footer>
    </body>
</html>