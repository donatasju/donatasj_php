<html>
    <head>
        
    </head>
    <body class="vienas">
<div class="home-page">
    <div class="nav">
        <button type="button"><a class="navHome" href="http://donatasphp.lt/?page=home#">Home</a></button>
        <button type="button"><a href="http://donatasphp.lt/?page=cv#">CV</a></button>
        <button type="button"><a href="http://donatasphp.lt/?page=showcase#">Showcase</a></button>
    </div>
    <div class="pagrind" align="center">
        <?php if (isset($page['content']['subtitle'])): ?>
            <h2><?php print $page['content']['subtitle']; ?></h2>
        <?php endif; ?>
        <form role = "form" action = "index.php?page=home" method = "post">
            <input type = "text" name = "username" placeholder = "username" required autofocus></br>
            <input type = "password" name = "password" placeholder = "password" required><br>
            <button type = "submit" name = "login">Login</button>
        </form>
        <?php if (isset($page['content']['msg'])): ?>
            <h2><?php print $page['content']['msg']; ?></h2>
        <?php endif; ?>
    </div> 
</div>

    </body>
</html>


<!-- 
            Jeigu yra galimybė, kad tam tikrų elementų nespausdinsime,
            pirma patikriname ar $page['content'][?kazkoks_indeksas?]
            yra nustatytas prieš spausdindami tag'us
        !-->