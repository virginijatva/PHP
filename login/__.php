<?php

$users = [
    ['name' => 'Antanas', 'psw' => md5('123'), 'color' => 'lightblue'],
    ['name' => 'Ona', 'psw' => md5('12'), 'color' => 'pink'],
    ['name' => 'Maryte', 'psw' => md5('1'), 'color' => 'green'],
];

file_put_contents(__DIR__.'/users.json', json_encode($users));
