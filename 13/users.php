<?php

$users = [
    ['name' => 'Aldona', 'pass' => md5('123')],
    ['name' => 'Jonas', 'pass' => md5('223')],
    ['name' => 'Ona', 'pass' => md5('323')],
];

file_put_contents(__DIR__.'/users.json', json_encode($users));