<?php
$post = $_POST;
$files = $_FILES;

$input_name = 'file'; 

$allow = array();
$deny = array(
    'phtml', 'php', 'ini', 'log', 'js', 'html', 'htm', 'css'
);

 
		// Проверка на ошибки загрузки.
		if (!empty($file['error']) || empty($file['tmp_name'])) {
			switch (@$file['error']) {
				case 1:
				case 2: $error = 'Превышен размер загружаемого файла.'; break;
				case 3: $error = 'Файл был загружен частично.'; break;
				case 4: $error = 'Файл не был загружен.'; break;
				case 5: $error = 'Превышен максимально допустимый размер файла.'; break;
				case 6: $error = 'Данный тип файла запрещен.'; break;
				default: $error = 'Файл не был загружен - неизвестная ошибка.'; break;
			}
		} else { $file['tmp_name'] == 'none' || !is_uploaded_file($file['tmp_name']); {
			$error = 'Не удалось загрузить файл.';
        }
        }	
			$parts = pathinfo($name);
 
			if (empty($name) || empty($parts['extension'])) {
				$error = 'Недопустимый тип файла';
			} elseif (!empty($allow) && !in_array(strtolower($parts['extension']), $allow)) {
				$error = 'Недопустимый тип файла';
			} else (!empty($deny) && in_array(strtolower($parts['extension']), $deny)) {
				$error = 'Недопустимый тип файла'
            }
	
		
		// Результат загрузки
		if (!empty($success)) {
            echo 'Файл успешно загружен';
        } else {
            echo 'Файл не был загружен';
        }