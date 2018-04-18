<?php

    if (!function_exists('note_empty'))
    {
        function note_empty($fields=[])
        {
            if(count($fields)!= 0){
                foreach ($fields as $field)
                {
                    if (empty($_POST[$field]) || trim($_POST[$field]) == "")
                    {
                        return false;
                    }
                }
                return true;
            }
        }

    }

    if (!function_exists('is_already_in_use')){
        function is_already_in_use($field, $value, $table)
        {
            global $db;

            $q = $db->prepare("SELECT id FROM $table WHERE $field = ?");
            $q->execute([$value]);

            // stocker les resultats de la requetes dans la variable count
            $count = $q->rowCount();
            $q->closeCursor();

            return $count; // 0 (false) si la valeur n'existe pas dans la base de données et 1(true) si elle existe
        }
    }
