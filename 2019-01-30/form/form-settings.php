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
        'type'        => 'email',
        'class'       => 'form-control',
        'id'          => 'email',
        'name'        => 'email',
        'placeholder' => 'Введите E-mail',
        'label'       => 'E-mail:',
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
        'type'        => 'text',
        'class'       => 'form-control',
        'id'          => 'form_phone',
        'name'        => 'phone',
        'placeholder' => 'Введите телефон',
        'label'       => 'Телефон:',
        'value'       => null,
    ],
];

$inputsCheck = [
    [
        'type'        => 'checkbox',
        'class'       => 'custom-control-input',
        'id'          => 'PHP',
        'name'        => 'skills',
        'placeholder' => null,
        'label'       => 'PHP',
        'value'       => 'PHP',
    ],
    [
        'type'        => 'checkbox',
        'class'       => 'custom-control-input',
        'id'          => 'MySQL',
        'name'        => 'skills',
        'placeholder' => null,
        'label'       => 'MySQL',
        'value'       => 'MySQL',
    ],
    [
        'type'        => 'checkbox',
        'class'       => 'custom-control-input',
        'id'          => 'Java',
        'name'        => 'skills',
        'placeholder' => null,
        'label'       => 'Java',
        'value'       => 'Java',
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

// $labels = [
//     [
//         'id'          => 'form_name',
//         'class'       => 'col-sm-2 col-form-label',
//         'label'       => 'ФИО:',
//     ],
//     [
//         'id'          => 'form_name',
//         'class'       => 'col-sm-2 col-form-label',
//         'label'       => 'Пароль:',
//     ],
// ];

return [
    'action' => '',
    'method' => 'post',
    'inputs' => $inputs,
    'inputsCheck' => $inputsCheck,
    // 'labels' => $labels,
];
