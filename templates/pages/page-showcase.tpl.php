<!-- 
    Tai yra template, kurią sukūrėme su mintim naudoti mūsų homepage`ui.
    Tačiau, mes ją galėsime naudoti NEBŪTINAI TIK homepage. Su bet kuriuo
    kitu controlleriu galėsime ją "renderinti" taip pat. 
!-->
<html>
    <head>
    </head>
</body>
<div class="home-showcase">
    <div class="nav">
        <button type="button"><a class="navHome" href="http://donatasphp.lt/?page=home#">Home</a></button>
        <button type="button"><a href="http://donatasphp.lt/?page=cv#">CV</a></button>
        <button type="button"><a href="http://donatasphp.lt/?page=showcase#">Showcase</a></button>
    </div>
    
    <div class="mainas" align="center">
        <h1><?php print $page['content']['title']; ?></h1>
        <form action="index.php?page=showcase" method="post">
            <label> Enter Number 1 </label>
            <br>
            <input type="text" name="num1">
            <br>
            <br>
            <label> Enter Number 2 </label>
            <br>
            <input type="text" name="num2">
            <br>
            <input type="submit" name ="submit" value="Calculate">
            <br>
        </form>

        <?php if (isset($page['content']['suma'])): ?>
        <h2><?php print $page['content']['suma']; ?></h2>
        <?php endif; ?>
             <?php if (isset($page['content']['atimti'])): ?>
        <h2><?php print $page['content']['atimti']; ?></h2>
        <?php endif; ?>
             <?php if (isset($page['content']['daugyba'])): ?>
            <h2><?php print $page['content']['daugyba']; ?></h2>
        <?php endif; ?>
             <?php if (isset($page['content']['dalyba'])): ?>
            <h2><?php print $page['content']['dalyba']; ?></h2>
        <?php endif; ?>

    </div>
</div>
    </body
</html>
