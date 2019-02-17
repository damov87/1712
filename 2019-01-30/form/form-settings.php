<?php

$inputs = [
    [
        'type'        => 'text',
        'class'       => 'form-control',
        'id'          => 'form_name',
        'name'        => 'name',
        'placeholder' => 'Василий Иванович Петренко',
        'label'       => 'ФИО:',
        'value'       =>  null,
    ],
    [
        'type'        => 'email',
        'class'       => 'form-control',
        'id'          => 'email',
        'name'        => 'email',
        'placeholder' => 'Введите E-mail',
        'label'       => 'E-mail:',
        'value'       =>  null,
    ],
    [
        'type'        => 'password',
        'class'       => 'form-control',
        'id'          => 'form_password',
        'name'        => 'password',
        'placeholder' => 'Введите пароль',
        'label'       => 'Пароль:',
        'value'       =>  null,
    ],
    [
        'type'        => 'text',
        'class'       => 'form-control',
        'id'          => 'form_phone',
        'name'        => 'phone',
        'placeholder' => 'Введите телефон',
        'label'       => 'Телефон:',
        'value'       =>  null,
    ],
];

$inputsCheck = [
    [
        'type'        => 'checkbox',
        'class'       => 'custom-control-input',
        'id'          => 'PHP',
        'name'        => 'skills',
        'disabled'    =>  null,
        'checked'     =>  null,
        'label'       => 'PHP',
        'value'       => 'PHP',
    ],
    [
        'type'        => 'checkbox',
        'class'       => 'custom-control-input',
        'id'          => 'MySQL',
        'name'        => 'skills',
        'disabled'    =>  null,
        'checked'     =>  null,
        'label'       => 'MySQL',
        'value'       => 'MySQL',
    ],
    [
        'type'        => 'checkbox',
        'class'       => 'custom-control-input',
        'id'          => 'Java',
        'name'        => 'skills',
        'disabled'    =>  null,
        'checked'     =>  null,
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
        'required'    =>  '',
        'checked'     =>  null,
        'label'       => 'Мужской',
        'value'       => 'men',
    ],
    [
        'type'        => 'radio',
        'class'       => 'custom-control-input',
        'id'          => 'gender2',
        'name'        => 'gender',
        'required'    =>  null,
        'checked'     =>  null,
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
        'required'    =>  null,
        'checked'     =>  null,
        'label'       => 'Общественный',
        'value'       => 'public',
    ],
    [
        'type'        => 'radio',
        'class'       => 'custom-control-input',
        'id'          => 'transport2',
        'name'        => 'transport',
        'required'    =>  null,
        'checked'     =>  null,
        'label'       => 'Личная машина',
        'value'       => 'car',
    ],
    [
        'type'        => 'radio',
        'class'       => 'custom-control-input',
        'id'          => 'transport3',
        'name'        => 'transport',
        'required'    =>  null,
        'checked'     =>  '',
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
        'required'    =>  null,
        'checked'     =>  null,
        'label'       => 'Школа',
        'value'       => 'school',
    ],
    [
        'type'        => 'radio',
        'class'       => 'custom-control-input',
        'id'          => 'education2',
        'name'        => 'education',
        'required'    =>  null,
        'checked'     =>  null,
        'label'       => 'Университет (бакалавр)',
        'value'       => 'university1',
    ],
    [
        'type'        => 'radio',
        'class'       => 'custom-control-input',
        'id'          => 'education3',
        'name'        => 'education',
        'required'    =>  null,
        'checked'     =>  null,
        'label'       => 'Университет (специалист)',
        'value'       => 'university2',
    ],
    [
        'type'        => 'radio',
        'class'       => 'custom-control-input',
        'id'          => 'education4',
        'name'        => 'education',
        'required'    =>  null,
        'checked'     =>  null,
        'label'       => 'Университет (магистр)',
        'value'       => 'university3',
    ],
];

$submit = [
    [
        'type'        => 'submit',
        'class'       => 'btn btn-primary',
        'id'          =>  null,
        'name'        =>  null,
        'placeholder' =>  null,
        'label'       =>  null,
        'value'       => 'Отправить форму',
    ],
];

$select = [
    [
        'class'       => 'custom-select margin',
        'id'          => 'work',
        'name'        => 'work',
        'size'        =>  null,
        'multiple'    =>  null,
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

$select2 = [
    [
        'class'       => 'custom-select margin',
        'id'          => 'color',
        'name'        => 'color',
        'size'        => '8',
        'multiple'    => '',
    ],
];

$optionsGroup1 = [
    [
        'value'       => 'orange',
        'label'       => 'Апельсиновый',
    ],
    [
        'value'       => 'lemony',
        'label'       => 'Лимонный',
    ],
    [
        'value'       => 'peachy',
        'label'       => 'Персиковый',
    ],
];

$optionsGroup2 = [
    [
        'value'       => 'light',
        'label'       => 'Светлый',
    ],
    [
        'value'       => 'normal',
        'label'       => 'Нормальный',
    ],
    [
        'value'       => 'dark',
        'label'       => 'Темный',
    ],
];

$inputsCheck2 = [
    [
        'type'        => 'checkbox',
        'class'       => 'custom-control-input',
        'id'          => 'news',
        'checked'     => 'checked',
        'label'       => 'Подписаться на новости',
        'value'       => 'news',
        'disabled'    => '',
    ],
];

$inputsUpload = [
    [
        'type'        => 'file',
        'class'       => 'custom-file-input',
        'id'          => 'img',
        'name'        => 'img',
        'accept'      => 'image/png, image/jpeg',
        'multiple'    => '',
        'label'       => 'Выберите фотографии для загрузки',
    ],
    [
        'type'        => 'file',
        'class'       => 'custom-file-input',
        'id'          => 'avatar',
        'name'        => 'avatar',
        'accept'      => 'image/png, image/jpeg',
        'multiple'    =>  null,
        'label'       => 'Выберите свой аватар',
    ],
];

// echo "<pre>";var_dump($options2);exit;

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
    'select2' => $select2,
    'optionsGroup1' => $optionsGroup1,
    'optionsGroup2' => $optionsGroup2,
    'inputsCheck2' => $inputsCheck2,
    'inputsUpload' => $inputsUpload,
];
