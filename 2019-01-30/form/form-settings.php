<?php

$inputs = [
    [
        'type'        => 'text',
        'class'       => 'form-control',
        'id'          => 'name',
        'name'        => 'name',
        'placeholder' => 'Василий Иванович Петренко',
        'label'       => 'Логин',
        'value'       => null,
    ],
    [
        'type'        => 'password',
        'class'       => 'form-control',
        'id'          => 'password',
        'name'        => 'password',
        'placeholder' => 'Введите пароль',
        'label'       => 'Пароль',
        'value'       => null,
    ],
    [
        'type'        => 'submit',
        'class'       => 'btn btn-primary',
        'id'          => null,
        'name'        => null,
        'placeholder' => null,
        'label'       => null,
        'value'       => 'Отправить форму',
    ],
];

return [
    'action' => 'form-process.php',
    'method' => 'post',
    'inputs' => $inputs,
];
