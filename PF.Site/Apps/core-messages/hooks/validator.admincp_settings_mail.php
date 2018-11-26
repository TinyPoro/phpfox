<?php
$aValidation = [
    'chat_group_member_maximum' => [
        'def' => 'int:required',
        'min' => '2',
        'max' => '10',
        'title' => _p('Numbers of group member must in range of [2,10]'),
    ]
];