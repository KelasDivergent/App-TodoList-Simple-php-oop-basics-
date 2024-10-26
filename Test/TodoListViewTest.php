<?php

require_once "./Entity/TodoList.php";
require_once "./Repository/TodoListRepository.php";
require_once "./Service/TodoListService.php";
require_once "./View/TodoListView.php";
require_once "./Helper/InputHelper.php";

use Entity\TodoList;
use Repository\TodoListRepositoryImpl;
use Service\TodoListServiceImpl;
use View\TodoListView;

function testViewShowTodolist(): void {
    // Inisialisasi TodoListRepository
    $todoListRepository = new TodoListRepositoryImpl();
    
    // Inisialisasi TodoListService dengan TodoListRepository
    $todoListService = new TodoListServiceImpl($todoListRepository);
    
    // Inisialisasi TodoListView dengan TodoListService
    $todoListView = new TodoListView($todoListService);

    // Menambahkan beberapa item ke TodoList
    $todoListService->addTodoList("Reading PHP Basics");
    $todoListService->addTodoList("Reading PHP OOP Basics");
    $todoListService->addTodoList("Reading PHP Database");

    // Menampilkan TodoList
    $todoListView->showTodoList();
}

// testViewShowTodolist();

// testViewShowTodolist();

function testViewAddTodolist(): void {
    // Inisialisasi TodoListRepository
    $todoListRepository = new TodoListRepositoryImpl();
    
    // Inisialisasi TodoListService dengan TodoListRepository
    $todoListService = new TodoListServiceImpl($todoListRepository);
    
    // Inisialisasi TodoListView dengan TodoListService
    $todoListView = new TodoListView($todoListService);

    // Menambahkan beberapa item ke TodoList
    $todoListService->addTodoList("Reading PHP Basics");
    $todoListService->addTodoList("Reading PHP OOP Basics");
    $todoListService->addTodoList("Reading PHP Database");

    // Menampilkan TodoList setelah penambahan
    $todoListView->showTodoList();
    $todoListView->addTodoList();

    $todoListView->showTodoList();
    $todoListView->addTodoList();

    $todoListView->showTodoList();
    $todoListView->addTodoList();
}

// testViewAddTodolist();

function testViewRemoveTodolist(): void {
    // Inisialisasi TodoListRepository
    $todoListRepository = new TodoListRepositoryImpl();
    
    // Inisialisasi TodoListService dengan TodoListRepository
    $todoListService = new TodoListServiceImpl($todoListRepository);
    
    // Inisialisasi TodoListView dengan TodoListService
    $todoListView = new TodoListView($todoListService);

    // Menambahkan beberapa item ke TodoList
    $todoListService->addTodoList("Reading PHP Basics");
    $todoListService->addTodoList("Reading PHP OOP Basics");
    $todoListService->addTodoList("Reading PHP Database");

    // Menampilkan TodoList setelah penambahan
    $todoListView->showTodoList();
    $todoListView->removeTodoList();

    $todoListView->showTodoList();
    $todoListView->removeTodoList();

    $todoListView->showTodoList();
}
testViewAddTodolist();