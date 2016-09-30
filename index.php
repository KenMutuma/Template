<?php
require_once 'process/vendor/autoload.php';
require_once   'smarty/libs/Smarty.class.php';
//use process\Process\Process;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;
//require_once 'header.php';
$jsondata = file_get_contents("data.json");

$items_array = json_decode($jsondata);


$v=json_encode($jsondata);
$smarty = new Smarty();
$smarty->template_dir = 'views';
$smarty->compile_dir = 'tmp';
//$smarty->setCaching(true);
/*$array = array(
'Jesse' => 25,
'Joey' =>26,
'Benja'=>62
	);
$items = array(
	'Item_Name' =>'Gloves' ,
	'Unit'=>10,
	'Amount'=>100
	);*/
$data = "Hospital Bill";




if(!$smarty->isCached('index.tpl')){
	
$smarty->assign('items',$items_array);
$smarty->assign('bill',$data);
//$smarty->assign('people', $array);
}




$smarty->display('index.tpl');
//$items_array = json_decode($jsondata);

// var_dump($items_array);


// echo $items_array->items[0]->ItemName;
// echo $items_array->items[0]->Quantity;
// echo $items_array->items[0]->Amount;
// $process = new Process('wkhtmltopdf http://localhost/temp/ "C:/xampp/htdocs/Temp/Sample/sample.pdf"');
// $process->run();
// executes after the command finishes
// if (!$process->isSuccessful()) {
// throw new ProcessFailedException($process);
// }
// echo $process->getOutput();