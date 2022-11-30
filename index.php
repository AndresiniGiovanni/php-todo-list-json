<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href="css/style.css" rel="stylesheet" />
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/vue@3.2.41/dist/vue.global.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.2.0/axios.min.js"
    integrity="sha512-OdkysyYNjK4CZHgB+dkw9xQp66hZ9TLqmS2vXaBrftfyJeduVhyy1cOfoxiKdi4/bfgpco6REu6Rb+V2oVIRWg=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <link rel="stylesheet" href="./css/style.css" />
  <title></title>
</head>

<body>
  <div id="app">
    <h1 class="titolo text-center text-white mt-5">Todo List</h1>

    <div class="container mytodo mt-5 text-white">
      <ul id="todo-list" class="mt-2 d-flex align-items-center flex-column">
        <li v-for='(data, index) in mydata'>{{data.text}}</li>
      </ul>
    </div>
    <div class="d-flex justify-content-center mt-3">

      <input v-model="newTodoText" class="rounded-2" type="text" name="newTodoText" id="inserisci"
        placeholder="    Inserisci un elemento" />
      <button @click='addTodo()' class="ms-3 btn btn-danger">Inserisci</button>

    </div>
  </div>
  <script src="./js/script.js"></script>
</body>

</html>