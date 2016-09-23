<?php
require_once 'process/vendor/autoload.php';
//use process\Process\Process;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;

require_once   'smarty/libs/Smarty.class.php';

$smarty = new Smarty();
$smarty->template_dir = 'views';
$smarty->compile_dir = 'tmp';

/*$process = new Process('wkhtmltopdf http://localhost/temp/ "C:/xampp/htdocs/Temp/Sample/sample.pdf"');
$process->run();

// executes after the command finishes
if (!$process->isSuccessful()) {
    throw new ProcessFailedException($process);
}

echo $process->getOutput();*/
$process = new Process('wkhtmltopdf http://localhost/temp/ C:/xampp/htdocs/Temp/Sample/sample.pdf');
$process->run(function ($type, $buffer) {
    if (Process::ERR === $type) {
        echo 'ERR > '.$buffer;
    } else {
        echo 'OUT > '.$buffer;
    }
});