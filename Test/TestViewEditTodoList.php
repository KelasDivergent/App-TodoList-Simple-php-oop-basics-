<?php 

require_once "./Model/TodoList.php";
require_once "./BusinessLogic/AddTodoList.php";
require_once "./View/ViewEditTodoList.php";

// Tambahkan beberapa item todo sebagai contoh
addTodoList("Hasby");
addTodoList("Aiman");
addTodoList("Divergent");

// Tampilkan fungsi viewEditTodoList untuk menguji
viewEditTodoList();

// Tampilkan daftar todo setelah dilakukan edit
var_dump($todoList);
