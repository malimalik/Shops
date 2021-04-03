<?php
session_start();

$users = [
    'John Doe' =>[
    "userName" => "jDoe",
    "userPassword" => "tG&z^Z",
    
    ],
    'Dedoid' =>[
        "userName" => "dedoid",
        "userPassword" => "rL-rtx",
    ], 
    'Calum' =>[
        "userName" => "calumx",
        "userPassword" => "P@ssw0rd8",
    ]

    ];

$failed = NULL;


if (isset($_POST["username"]) && isset ($_POST["password"])){
    $userName = $_POST['username'];
    $password = $_POST['password'];
    foreach($users as $username => $pass)
    {
        if ($username == $userName && $pass == $password)
        {
            $data = [$username, $pass];
            $_SESSION["username"] = $data["username"];
            echo $data["userName"];

        }
    }

}
?>
  
