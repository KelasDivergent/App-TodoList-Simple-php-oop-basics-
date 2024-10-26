<?php 

namespace view{

    use Service\TodoListService;
    use Helper\InputHelper;

    class TodoListView{

        private TodoListService $todoListService;
        public function __construct(TodoListService $todoListService)  {
            $this->todoListService = $todoListService;
        }

        // membuat function show todo list
        function showTodoList() :void {
            while (true) {
               $this->todoListService->showTodoList();
        
                // Create instruksi
                echo "Menu" . PHP_EOL;
                echo "1. Add TODO" . PHP_EOL;
                echo "2. Remove TODO" . PHP_EOL;
                echo "3. Edit TODO" . PHP_EOL;
                echo "x. Exit" . PHP_EOL;
        
                // Logic choice
            $choice = InputHelper::input("Choose");
            if ($choice == "1") {
                $this->addTodoList();
            } elseif ($choice == "2") {
                $this->removeTodoList();
            } elseif ($choice == "3") {
                $this->editTodoList();
            } elseif ($choice == "x") {
                // Exit
                break;
            } else {
                echo "Choose Not Understand Please Select The Available One!" . PHP_EOL; 
            }
            }
            echo "Thanks See You Again :) " . PHP_EOL;
        }

        // membuat function add todo list
        function addTodoList() : void {
            echo "ADD TODO" . PHP_EOL;

            $todo = InputHelper::input("Todo (x for cancel)");
        
             // if cancel
            if ($todo == "x") {
                // cancel
                echo "Cancel Add Todo " . PHP_EOL;;
            }else {
                $this->todoListService->addTodoList($todo);
            }
        }

        // membuat function remove todo list

        function removeTodoList() : void {
            echo "REMOVE TODO" . PHP_EOL;
            $choice = InputHelper::input("Number (x for Cancel)");

            if ($choice == "x") {
                echo "Failed Remove Todo" . PHP_EOL;
            } else {
                $this->todoListService->removeTodoList($choice);
            
             
            }
        }

        // membuat function edit todo list

        // membuat function edit todo list
function editTodoList() : void {
    echo "EDIT TODO" . PHP_EOL;

    $number = InputHelper::input("Number of TODO to edit (x for cancel)");

    if ($number == "x") {
        echo "Cancel Edit Todo " . PHP_EOL;
    } else {
        $newTodo = InputHelper::input("New TODO");
        $this->todoListService->editTodoList((int)$number, $newTodo);
    }
}

    }
}