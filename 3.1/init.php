<?php

/**
 * В /bitrix/php_interface/s1/init.php или /bitrix/php_interface/init.php
 */

AddEventHandler('sale','OnSaleStatusOrder',function($orderId,$statusVal){
    
    if($statusVal!='OP'){ // Код статус смотрим в админке
        return;
    }
    
    // Я что то хз где это https://disk.yandex.ru/i/zAYsChja5sGPCQ я так
    // понял в админке гдето
    // Ну тут смотрим как эта работает эта кнопка в админке... 
    // Еще есть https://dev.1c-bitrix.ru/user_help/components/magazin/profiles/sale_personal_order_cancel.php
    // Тоже можно посмотреть как работает наверное...    
});

