
<!-- 
    Tai yra template, kurią sukūrėme su mintim naudoti mūsų homepage`ui.
    Tačiau, mes ją galėsime naudoti NEBŪTINAI TIK homepage. Su bet kuriuo
    kitu controlleriu galėsime ją "renderinti" taip pat. 
!-->
<div class="page-cv">
    <div class="nav">
        <button type="button"><a class="navHome" href="http://donatasphp.lt/?page=home#">Home</a></button>
        <button type="button"><a href="http://donatasphp.lt/?page=cv#">CV</a></button>
        <button type="button"><a href="http://donatasphp.lt/?page=showcase#">Showcase</a></button>
    </div>
    <h1><?php print $page['content']['title']; ?></h1>
    <?php if (isset($page['content']['subtitle'])): ?>
        <h2><?php print $page['content']['subtitle']; ?></h2>
    <?php endif; ?>

        <?php 
$result = "";
class calculator
{
    var $a;
    var $b;
    function checkopration($oprator)
    {
        switch($oprator)
        {
            case '+':
            return $this->a + $this->b;
            break;
            case '-':
            return $this->a - $this->b;
            break;
            case '*':
            return $this->a * $this->b;
            break;
            case '/':
            return $this->a / $this->b;
            break;
            default:
            return "Sorry No command found";
        }   
    }
    function getresult($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        return $this->checkopration($c);
    }
}
$cal = new calculator();
if(isset($_POST['submit']))
{   
    $result = $cal->getresult($_POST['n1'],$_POST['n2'],$_POST['op']);
}
?>
<form method="post">
<table align="center">
    <tr>
        <td><strong><?php echo $result; ?><strong></td>
    </tr>
    <tr>
        <td>Enter 1st Number</td>
        <td><input type="text" name="n1"></td>
    </tr>
    <tr>
        <td>Enter 2nd Number</td>
        <td><input type="text" name="n2"></td>
    </tr>
    <tr>
        <td>Select Oprator</td>
        <td><select name="op">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select></td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" name="submit" value="                =                "></td>
    </tr>
</table>
</form>
    <hr>
</div>