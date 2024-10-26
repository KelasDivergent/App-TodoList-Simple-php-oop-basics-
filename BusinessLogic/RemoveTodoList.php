<?php 

// remove todo in list
function removeTodoList(int $number ) : bool{

        global $todoList;
        
        // Jika number lebih besar dari value todo listnya maka kembalikan value false
        if ($number > sizeof($todoList)) {
            return false;
        }

        // membuat logic untuk menghapus number jika ada data yang terhapus diakan menyesuaikannya menggeser datanya
        for ($i=$number; $i < sizeof($todoList) ; $i++) { 
            $todoList[$i] = $todoList[$i + 1];
        }
        // untuk terakhir dihapus datanya
        unset($todoList[sizeof($todoList)]);

        return true;

        // 1. Hasby
        // 2. Aiman
        // 3  Divergent
 

        // 1. Hasby
        // $todoList[2 + 1]
        // $todoList[3 + 1]
    

}