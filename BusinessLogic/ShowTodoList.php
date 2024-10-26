<?php 

// show todo in list
function showTodoList(){
    global $todoList;
    
    echo "Divergent TODOLIST" . PHP_EOL;

    foreach ($todoList as $number => $value) {
        echo "$number . $value" . PHP_EOL;
    }

}