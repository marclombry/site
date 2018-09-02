<?php
$config=require_once('app/database/config.php');
require_once('app/database/database.php');
require_once('app/database/table.php');
require_once('app/model/links.php');
require_once('app/form.php');
$content='';$choiceLink='';
//var_dump($config);
$database= new Database($config);
//var_dump($database->all());
$table = new Table($config);
//$images = $table->select('SELECT photo FROM links');


/*
echo "<div style='background-color:#1abc9c'>";
	foreach($table->all(true) as $elem){
		echo '<p style="padding:2px;">'.$elem.'</p>';
	}
echo "</div>";
*/
$link = new Links($table->all(true));
//$l1 = $link->hydrate();
$table->setTable('links');
$all=[];
foreach ($table->all() as $key => $link) {
	array_push($all,new Links($link));
}
foreach($all as $key=> $value){
	$content.='
<div class="col-xs-6 col-lg-4" style="background-color:'.$value->getColor().'">
    <h2>'.$value->getName().'</h2> 
    <p><a href="'.$value->getHref().'" target="_blank"><img src="app/images/'.$value->getPhoto().'" width="100%"></a></p>     
</div>';
}

/*
$d = array(
	':wordsen'=>'update',
	':picture'=>'',
	':wordsfr'=>'modifier'
   );
  */
//var_dump($database->delete(111,'langage'));
require_once('app/view/index.view.php');
