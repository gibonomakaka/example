<?php

class Count {
    
       /**
     * Функция возвращает количество записей в таблице с именем $tableName)
     * @return int
     */
    public static function getCountLineInTable($tableName = "category"){
    
    // Соединение с БД
        $db = Db::getConnection();

        /* 
         * Запрос к БД получить количество id со статусом поля status раным 1
         */
        $result = $db->query("SELECT COUNT(id)FROM $tableName WHERE status = 1");

        // Получение и возврат результатов
        $row = $result->fetch();

        return $row[0];
  
    }
}
