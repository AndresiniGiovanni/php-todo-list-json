<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: X-Requested-With");
//leggo il file 
$file_url = './data.json';
$file_text = file_get_contents($file_url);
$todo_list = json_decode($file_text);

if (isset($_POST['newTodoText'])) {

    $newTodo = [
        'text' => $_POST['newTodoText'],
        'done ' => false,
    ];

    array_push($todo_list, $newTodo);


    file_put_contents($file_url, json_encode($todo_list));


} else {

    header('Content-Type: application/json');
    echo json_encode($todo_list);

}


?>