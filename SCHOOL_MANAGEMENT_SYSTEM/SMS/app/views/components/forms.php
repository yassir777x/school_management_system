<?php

$forms = [
    'student' => [
        'student_name' => [
            'label' => 'student name',
            'for' => 'name',
            'placeholder' => 'Enter Name',
            'type' => 'text',
        ],
        'student_tel' => [
            'label' => 'student tel',
            'for' => 'tel',
            'placeholder' => 'Enter Student Tel',
            'type' => 'number',
        ],
        'student_address' => [
            'label' => 'student address',
            'for' => 'address',
            'placeholder' => 'Enter address',
            'type' => 'text',
        ],
        'student_birthday' => [
            'label' => 'student birthday',
            'for' => 'birthday',
            'placeholder' => null,
            'type' => 'date',
        ],
        'student_genre' => [
            'label' => 'student genre',
            'for' => 'genre',
            'placeholder' => 'Select Genre',
            'type' => 'select',
            'options' => ['male', 'female']
        ],
        'student_registration' => [
            'label' => 'Registration Date',
            'for' => 'registration',
            'placeholder' => null,
            'type' => 'date',
        ],
        'student_subjects' => [
            'label' => 'student subjects',
            'type' => 'checkbox',
            'checkboxes' => ['math' , 'pc'], // !!! here
        ],
        'student_email' => [
            'label' => 'Student Email : (unique)',
            'for' => 'email',
            'placeholder' => 'Enter Student Email',
            'type' => 'text',
        ],
        'student_password' => [
            'label' => 'Student Password',
            'for' => 'password',
            'placeholder' => 'Enter Student Password',
            'type' => 'text',
        ],
    ],
    'teacher' => [
        'teacher_name' => [
            'label' => 'teacher name',
            'for' => 'name',
            'placeholder' => 'Enter Name',
            'type' => 'text',
        ],
        'teacher_tel' => [
            'label' => 'teacher tel',
            'for' => 'tel',
            'placeholder' => 'Enter phone',
            'type' => 'number',
        ],
        'teacher_birthday' => [
            'label' => 'teacher birthday',
            'for' => 'tel',
            'placeholder' => null,
            'type' => 'date',
        ],
        'teacher_address' => [
            'label' => 'teacher address',
            'for' => 'address',
            'placeholder' => 'Enter address',
            'type' => 'text',
        ],
        'teacher_genre' => [
            'label' => 'teacher genre',
            'for' => 'genre',
            'placeholder' => 'Select genre',
            'type' => 'select',
            'options' => ['male', 'female'],
        ],
        'teacher_class' => [
            'label' => 'teacher class',
            'for' => 'class',
            'placeholder' => 'Select class',
            'type' => 'select',
            'options' => ['class-1', 'class-2'],
        ],
        'teacher_email' => [
            'label' => 'teacher email',
            'for' => 'email',
            'placeholder' => 'Enter Email',
            'type' => 'email',

        ],
        'teacher_password' => [
            'label' => 'teacher password',
            'for' => 'password',
            'placeholder' => 'Enter password',
            'type' => 'text',

        ]
    ],
    'class' => [
        'class_name' => [
            'label' => 'class name',
            'for' => 'name',
            'placeholder' => 'Enter Class Name',
            'type' => 'text',
        ],
        'class_teacher' => [
            'label' => 'class teacher',
            'for' => 'name',
            'placeholder' => 'Select Class Teacher',
            'type' => 'select',
            'options' => ['teacher-1', 'teacher-2'],
        ],
    ],
    'subject' => [
        'subject_name' => [
            'label' => 'subject name',
            'for' => 'name',
            'placeholder' => 'Enter Subject Name',
            'type' => 'text',
        ],
        'subject_teacher' => [
            'label' => 'subject teacher',
            'for' => 'name',
            'placeholder' => 'Select Class',
            'type' => 'select',
            'options' => ['class-1', 'class-2'],
        ],
    ],
    'school' => [
        'school_name' => [
            'label' => 'school name',
            'for' => 'name',
            'placeholder' => 'Enter Name',
            'type' => 'text',
        ],
        'school_address' => [
            'label' => 'school address',
            'for' => 'address',
            'placeholder' => 'Enter Address',
            'type' => 'text',
        ],
        'school_tel' => [
            'label' => 'school tel',
            'for' => 'tel',
            'placeholder' => 'Enter School Phone',
            'type' => 'number',
        ],
        'school_email' => [
            'label' => 'school email',
            'for' => 'email',
            'placeholder' => 'Enter School Email',
            'type' => 'email',
        ],
        'school_description' => [
            'label' => 'school description',
            'for' => 'description',
            'placeholder' => 'Enter School Description',
            'type' => 'text',
        ],
    ],
    'admin' => [
        'admin_fullname' => [
            'label' => 'Admin Full Name',
            'for' => 'fullname',
            'placeholder' => 'Enter Your full name',
            'type' => 'text',
        ],
        'admin_age' => [
            'label' => 'Admin Age',
            'for' => 'age',
            'placeholder' => 'Enter Your full name',
            'type' => 'text',
        ],
        'admin_genre' => [
            'label' => 'admin genre',
            'for' => 'genre',
            'placeholder' => 'Select genre',
            'type' => 'select',
            'options' => ['male', 'female'],
        ],
        'admin_phone_number' => [
            'label' => 'admin phone number',
            'for' => 'tel',
            'placeholder' => 'Enter phone number',
            'type' => 'number',
        ],
    ]
];
