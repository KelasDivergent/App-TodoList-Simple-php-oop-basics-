<?php 

require_once "./Helper/Input.php";
require_once "./BusinessLogic/RemoveTodoList.php";
function viewRemoveTodoList(){
    echo "REMOVE TODO" . PHP_EOL;

    $choice = input("Number (x for cancel)");

    // if chose x this failed remove Todo else success remove todo list
    if ($choice == "x") {
        echo "Failed Remove Todo" . PHP_EOL;
    } else {
        $success = removeTodoList($choice);
    
        // if success remove todo, show success message, otherwise show failed message
        if ($success) {
            echo "Success Remove Todo Number $choice" . PHP_EOL;
        } else {
            echo "Failed Remove Todo Number $choice" . PHP_EOL;
        }
    }
}
