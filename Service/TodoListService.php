<?php 

namespace Service {

    use Entity\TodoList;
    use Repository\TodoListRepository;

    interface TodoListService {
        
        // Menampilkan todo list
        function showTodoList(): void;

        // Menambahkan todo ke dalam list
        function addTodoList(string $todo): void;

        // Menghapus todo dari list
        function removeTodoList(int $number): void;

        // Mengedit todo dalam list
        function editTodoList(int $number, string $newTodo): void;
    }

    class TodoListServiceImpl implements TodoListService {

        private TodoListRepository $todoListRepository;

        public function __construct(TodoListRepository $todoListRepository) {
            $this->todoListRepository = $todoListRepository;
        }

        // function menampilkan data pada todo list
        public function showTodoList(): void {
            echo "DIVERGENT TODOLIST" . PHP_EOL;
            $todoList = $this->todoListRepository->findAll();
            foreach ($todoList as $number => $value) {
                echo "$number. ". $value->getTodo() . PHP_EOL;
            }
        }

        // function menambah data pada todo list
        public function addTodoList(string $todo): void {
            $todoList = new TodoList($todo);
            $this->todoListRepository->save($todoList);   
            echo "SUCCESS ADD TODOLIST" . PHP_EOL;
        }

        public function removeTodoList(int $number): void {
            // Implementasi logika penghapusan todo
            if($this->todoListRepository->remove($number)){
                echo "SUCCESS REMOVE TODOLIST" . PHP_EOL;
            }else{
                echo "FAILED REMOVE TODOLIST" . PHP_EOL;
            }
        }
        
        public function editTodoList(int $number, string $newTodo): void {
            // Mencari Todo yang ada berdasarkan nomor
            $todoList = $this->todoListRepository->findAll();
            
            // Memeriksa apakah nomor yang diberikan valid
            if (isset($todoList[$number])) {
                // Mengubah nilai Todo dengan yang baru
                $todoList[$number]->setTodo($newTodo);
                echo "SUCCESS EDIT TODOLIST" . PHP_EOL;
            } else {
                echo "FAILED EDIT TODOLIST: Invalid Number" . PHP_EOL;
            }
        }
        
    }
}
