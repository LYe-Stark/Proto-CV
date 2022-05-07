<?php 
if(! function_exists('nav_item')){
function nav_item(string $lien, string $title): string 
{
$classe = 'nav_item';
if($_SERVER['SCRIPT_NAME'] === $lien){
$classe .= ' active';
}
return <<<HTML
<li class="$classe">
    <a class="nav-link $classe"  href="$lien">$title</a>
</li> 
HTML;
}
}
?>
<?= nav_item('/index.php','Home'); ?>

<?= nav_item('/realisation.php','Réalisation'); ?>

<?= nav_item('/contact.php','Contact'); ?>

<?= nav_item('/dev.php','About'); ?>