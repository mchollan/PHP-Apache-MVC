<h1>Home page view</h1>
<?
foreach ($data as $upload) {
?>
 <p>This upload is owned by <?=$upload->Owner?>.  Its status is  <?=$upload->Status?></p>
<?}?>

