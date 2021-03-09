<?php

$cronFileContent=shell_exec('crontab -l');

if($cronFileContent===NULL){
    $cronFileContent='';
}

file_put_contents('./newCronFile.txt',$cronFileContent."\n".'*/1 * * * * echo "'.time().'" >> ./crontabTest'."\n");

shell_exec('crontab ./newCronFile.txt');

echo "\n----------------\n".shell_exec('crontab -l');

// Для удаления списка установленных задач нужно выполнить команду shell_exec('crontab -r');



