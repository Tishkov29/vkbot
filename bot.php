<?php

include "vk_api.php"; 


const VK_KEY = "a652359ecc6805d1d98f4c78162fa8c302fd6c59e74e7f04d8357d08e9ecaf7c93d8eaa5cb8c86c18639f";  // Токен сообщества
const ACCESS_KEY = "feee5362";  // Тот самый ключ из сообщества 
const VERSION = "5.81"; // Версия API VK


$vk = new vk_api(VK_KEY, VERSION); 
$data = json_decode(file_get_contents('php://input')); 

if ($data->type == 'confirmation') { 
    exit(ACCESS_KEY); 
}
$vk->sendOK(); 
// ====== Наши переменные ============
$id = $data->object->from_id;
$peer_id = $data->object->peer_id; // Узнаем ID пользователя, кто написал нам
$message = $data->object->text; // Само сообщение от пользователя
// ====== *************** ============

if ($data->type == 'message_new') {

    if ($message == '!бот') {

            $vk->sendMessage($peer_id, "Привет :-)");
			
        }


	}
	