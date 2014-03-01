<?php
//LENDO ARQUIVOS
//VARIAVEL QUE RECEBE O VLR
$archive = '/var/www/aulas-php/aula15-manipulacao-arquivos/arquivo.txt';
//ABRE O ARQUIVO
$open = fopen($archive, 'r');
//VERIFICA DE O ARQUIVO EXISTE
if(file_exists($archive)){
    //LOOP PARA LEITURA DE TODO ARQUIVO
    while(!feof($open)){
        $buffer = fgets($open);
        echo $buffer;
    }
    //FEICHA O ARQUIVO
    fclose($open);
}else{
    echo "CAGO!";
}

?>
