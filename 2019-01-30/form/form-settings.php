<?php

$inputs = [
    [
        'type'        => 'text',
        'class'       => 'form-control',
        'id'          => 'form_name',
        'name'        => 'name',
        'placeholder' => 'Василий Иванович Петренко',
        'label'       => 'ФИО:',
        'value'       => null,
    ],
    [
        'type'        => 'password',
        'class'       => 'form-control',
        'id'          => 'form_password',
        'name'        => 'password',
        'placeholder' => 'Введите пароль',
        'label'       => 'Пароль:',
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

$labels = [
    [
        'id'          => 'form_name',
        'class'       => 'col-sm-2 col-form-label',
        'label'       => 'ФИО:',
    ],
    [
        'id'          => 'form_name',
        'class'       => 'col-sm-2 col-form-label',
        'label'       => 'Пароль:',
    ],
];

return [
    'action' => 'form-process.php',
    'method' => 'post',
    'inputs' => $inputs,
    'labels' => $labels,
];
