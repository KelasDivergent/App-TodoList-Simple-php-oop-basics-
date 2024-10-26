<?php 

require_once "./Model/TodoList.php";
require_once "./View/viewShowTodoList.php";
require_once "./View/viewAddTodoList.php";
require_once "./View/viewRemoveTodoList.php";
require_once "./Helper/Input.php";

function viewShowTodoList(){

   while (true) {
        showTodoList();

        // Create instruksi
        echo "Menu" . PHP_EOL;
        echo "1. Add TODO" . PHP_EOL;
        echo "2. Remove TODO" . PHP_EOL;
        echo "3. Edit TODO" . PHP_EOL;
        echo "x. Exit" . PHP_EOL;

        // logic choice
        $choice = input("Choose");
        if ($choice == "1") {
            viewAddTodoList();
        } elseif ($choice == "2") {
            viewRemoveTodoList();
        }elseif ($choice == "3") {  // Logika untuk pilihan edit
            viewEditTodoList();  // Panggil fungsi edit 
        }elseif ($choice == "x") {
            // Exit
            break;
        }else {
            echo "Choose Not Understand Please Select The Availble One !". PHP_EOL; 
        }
    }
    echo "Thanks See You Again :) " . PHP_EOL;
}