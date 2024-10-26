<?php 

// Edit Todo item in the list
function editTodoList(int $number, string $newTodo) {
    global $todoList;

    // Check if the item number exists in the list
    if (isset($todoList[$number])) {
        $todoList[$number] = $newTodo;
        return true;
    } else {
        return false;
    }
}
