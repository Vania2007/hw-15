<?php
define("SIGN", "З повагою, Деканат.");

$actions = [
    "stipend" => "нарахування стипендії",
    "expulsion" => "відрахування за неуспішність",
    "commendation" => "оголошення подяки за успіхи в навчанні",
    "award" => "нарахування премії за участь в олімпіаді"
];

$students = [
    "shevchenko" => [
        "name" => "Шевченко Тарас",
        "email" => "shevchenko@mail.com"
    ],
    "franko" => [
        "name" => "Франко Іван",
        "email" => "franyk@mail.com"
    ],
    "semenko" => [
        "name" => "Семенко Михайло",
        "email" => "semenko@mail.com"
    ],
    "kravchuk" => [
        "name" => "Кравчук Віктор",
        "email" => "kravchuk@mail.com"
    ],
    "piddubny" => [
        "name" => "Піддубний Микола",
        "email" => "piddub@mail.com"
    ]
];

$actionsForStudents = [
    "shevchenko" => ["stipend", "commendation"],
    "franko" => ["stipend", "award"],
    "semenko" => ["stipend", "commendation", "award"],
    "kravchuk" => ["expulsion"],
    "piddubny" => ["expulsion"]
];
?>
