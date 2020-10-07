<?php

// require_once(__DIR__ . '/config.php');
require_once(__DIR__ . '/functions.php');
require_once(__DIR__ . '/todo.php');

// get todos
$todoApp = new \MyApp\Todo();
$todos = $todoApp->getAll();

var_dump($todos);
// exit;

?>

<!DOCTYPE html>
<html lang="ja">
<html>
<meta charset="utf-8">
<title>My Todo</title>
<link rel="stylesheet" href="./style.css">

</html>

<body>
  <div id="container">
    <h1>To Do</h1>
    <form><input type="text" id="new_todo" placeholder="What needs to be done?"></form>
    <ul>
      <li>
        <input type="checkbox">
        <span>Do something</span>
        <div class="delete_todo">×</div>
      </li>
      <li>
        <input type="checkbox" checked>
        <span class="done">Do something again!</span>
        <div class="delete_todo">×</div>
      </li>
    </ul>
  </div>
</body>