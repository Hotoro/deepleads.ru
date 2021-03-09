<?php

/**
 * Решение сработает для актуальной версии cms? - вопрос не ясен...
 * Остальное:
 */

if($GLOBALS['USER']->IsAuthorized()){
    var_dump($GLOBALS['USER']->GetLogin());
}