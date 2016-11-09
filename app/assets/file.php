<?php
//Получаем корневую директорию сайта и назначаем папку для загрузки файлов
$uploaddir = $_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'uploads'.DIRECTORY_SEPARATOR;
//Считываем загружаемые файлы
$uploadfile_1 = $uploaddir . basename($_FILES['userfile_1']['name']);
$uploadfile_2 = $uploaddir . basename($_FILES['userfile_2']['name']);
$uploadfile_3 = $uploaddir . basename($_FILES['userfile_3']['name']);


//Проверяем загружен ли файл. 
//В соответствии с входящими данными назначаем сопровождающее сообщение.
//Если файл не загружен, загружаем в директорию указанную в $uploadfile:
if (move_uploaded_file($_FILES['userfile_1']['tmp_name'], $uploadfile_1)) {
    $out = "Файл корректен и был успешно загружен.\n";
} else {
    $out = "Возможная атака с помощью файловой загрузки!\n";
}

if (move_uploaded_file($_FILES['userfile_2']['tmp_name'], $uploadfile_2)) {
    $out = "Файл корректен и был успешно загружен.\n";
} else {
    $out = "Возможная атака с помощью файловой загрузки!\n";
}

if (move_uploaded_file($_FILES['userfile_3']['tmp_name'], $uploadfile_3)) {
    $out = "Файл корректен и был успешно загружен.\n";
} else {
    $out = "Возможная атака с помощью файловой загрузки!\n";
}

echo $out;

?>