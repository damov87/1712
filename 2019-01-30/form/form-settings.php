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
];

$inputsRadio = [
    [
        'type'        => 'radio',
        'class'       => 'custom-control-input',
        'id'          => 'gender1',
        'name'        => 'gender',
        'placeholder' => null,
        'label'       => 'Мужской',
        'value'       => 'men',
    ],
    [
        'type'        => 'radio',
        'class'       => 'custom-control-input',
        'id'          => 'gender2',
        'name'        => 'gender',
        'placeholder' => null,
        'label'       => 'Женский',
        'value'       => 'women',
    ],
];

$inputsRadio2 = [
    [
        'type'        => 'radio',
        'class'       => 'custom-control-input',
        'id'          => 'transport1',
        'name'        => 'transport',
        'placeholder' => null,
        'label'       => 'Общественный',
        'value'       => 'public',
    ],
    [
        'type'        => 'radio',
        'class'       => 'custom-control-input',
        'id'          => 'transport2',
        'name'        => 'transport',
        'placeholder' => null,
        'label'       => 'Личная машина',
        'value'       => 'car',
    ],
    [
        'type'        => 'radio',
        'class'       => 'custom-control-input',
        'id'          => 'transport3',
        'name'        => 'transport',
        'placeholder' => null,
        'label'       => 'Велосипед',
        'value'       => 'bycicle',
    ],
];

$inputsRadio3 = [
    [
        'type'        => 'radio',
        'class'       => 'custom-control-input',
        'id'          => 'education1',
        'name'        => 'education',
        'placeholder' => null,
        'label'       => 'Школа',
        'value'       => 'school',
    ],
    [
        'type'        => 'radio',
        'class'       => 'custom-control-input',
        'id'          => 'education2',
        'name'        => 'education',
        'placeholder' => null,
        'label'       => 'Университет (бакалавр)',
        'value'       => 'university1',
    ],
    [
        'type'        => 'radio',
        'class'       => 'custom-control-input',
        'id'          => 'education3',
        'name'        => 'education',
        'placeholder' => null,
        'label'       => 'Университет (специалист)',
        'value'       => 'university2',
    ],
    [
        'type'        => 'radio',
        'class'       => 'custom-control-input',
        'id'          => 'education4',
        'name'        => 'education',
        'placeholder' => null,
        'label'       => 'Университет (магистр)',
        'value'       => 'university3',
    ],
];

$submit = [
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

$select = [
    [
        'class'       => 'custom-select margin',
        'id'          => 'work',
        'name'        => 'work',
        'size'        => null,
    ],
];

$options = [
    [
        'value'       => '0',
        'label'       => 'Предпочтение работы:',
    ],
    [
        'value'       => 'office',
        'label'       => 'В офисе',
    ],
    [
        'value'       => 'remotely',
        'label'       => 'Удаленно',
    ],
    [
        'value'       => 'trip',
        'label'       => 'Командировки',
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
    'inputsRadio' => $inputsRadio,
    'inputsRadio2' => $inputsRadio2,
    'inputsRadio3' => $inputsRadio3,
    'submit' => $submit,
    'select' => $select,
    'options' => $options,
    // 'labels' => $labels,
];
