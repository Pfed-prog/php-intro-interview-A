<?php //php 7.2.24

   $data = [
    'question' => ['почему', 'как', 'зачем', 'столько'],
    'animals' => [
        'birds' => [
            [
                'name' => 'грачи',
            ],
            [
                'name' => 'воробьи',
            ],
        ],
        'others' => [
            [
                ['name' => 'кошки'],
                ['name' => 'рыбы'],
                ['name' => 'собаки'],
            ],
        ],
    ],
    'parts' => [
        'hands' => 'рук',
        'feathers' => 'перьев',
        'eyes' => 'глаз',
    ],
];
    echo $data['question'][0].' '.$data['animals']['birds'][0]['name'].' не '.$data['animals']['others'][0][0]['name'].' и '.$data['question'][2].' им '.$data['question'][3].' '.$data['parts']['feathers'];
?>