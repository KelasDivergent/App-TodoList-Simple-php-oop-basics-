<?php 
require_once "./Model/TodoList.php";
require_once "./Helper/Input.php";
require_once "./BusinessLogic/AddTodoList.php";
function viewAddTodoList(){
    echo "ADD TODO" . PHP_EOL;

    $todo = input("Todo (x for cancel)");

     // if cancel
    if ($todo == "x") {
        // cancel
        echo "Cancel Add Todo " . PHP_EOL;;
    }else {
        addTodoList($todo);
    }
}