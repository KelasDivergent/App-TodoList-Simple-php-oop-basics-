\<?php 

require_once "./Model/TodoList.php";
require_once "./Helper/Input.php";
require_once "./BusinessLogic/EditTodoList.php";

function viewEditTodoList(){
    echo "EDIT TODO" . PHP_EOL;

    $number = input("Number to Edit (x for cancel)");

    // Batalkan jika pengguna memasukkan "x"
    if ($number == "x") {
        echo "Cancel Edit Todo" . PHP_EOL;
    } else {
        $number = (int) $number;  // Pastikan input adalah angka
        $newTodo = input("New Todo Text");

        $success = editTodoList($number, $newTodo);

        if ($success) {
            echo "Success Edit Todo Number $number" . PHP_EOL;
        } else {
            echo "Failed Edit Todo Number $number" . PHP_EOL;
        }
    }
}
