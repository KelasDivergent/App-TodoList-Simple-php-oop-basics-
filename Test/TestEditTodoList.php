<?php 

require_once "./Model/TodoList.php";
require_once "./BusinessLogic/AddTodoList.php";
require_once "./BusinessLogic/EditTodoList.php";

// Tambahkan beberapa item todo sebagai contoh
addTodoList("Hasby");
addTodoList("Aiman");
addTodoList("Divergent");

// Tampilkan daftar sebelum edit
echo "Before Edit:" . PHP_EOL;
var_dump($todoList);

// Coba edit item ke-2
editTodoList(2, "Aiman - Edited");

// Tampilkan daftar setelah edit
echo "After Edit:" . PHP_EOL;
var_dump($todoList);
