<?php 

// add for todo in list
function addTodoList(string $todo){
    // add todo list 
    global $todoList;

    $number =  sizeof($todoList) + 1;

    $todoList[$number] = $todo;
}