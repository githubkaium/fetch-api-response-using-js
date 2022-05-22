<?php

$api_url = 'https://gorest.co.in/public/v1/users';

$opts = [
    "http" => [
        "method" => "GET",
        "header" => "Accept-language: en\r\n" .
			"Content-Type: application/json; charset=utf-8" .
            "Cookie: foo=bar\r\n" .
			"Authorization: Bearer d7c01847de4c083cb154e9a533294301e9f05f93dbae7d589e42ece63226c0a3"
    ]
];

$context = stream_context_create($opts);

$json_data = file_get_contents($api_url, false, $context);

$response_data = json_decode($json_data);

$user_data = $response_data->data;

echo '<div style="display:grid; padding: 20px; grid-template-columns: repeat(3, 1fr);">';
foreach ($user_data as $user) {
	echo "<div style='background-color: rgb(250, 250, 250); box-sizing: border-box;  padding: 20px; outline: 2px solid lightgray; flex: 4; margin: 10px; border-radius: 10px;'>";
	echo "ID: ".$user->id;
	echo "<br />";
	echo "Name: ".$user->name;
	echo "<br />";
	echo "Email: ".$user->email;
	echo "<br />";
	echo "Gender: ".$user->gender;
	echo "<br />";
	echo "Status: ".$user->status;
	echo "<br /> <br />";
	echo "</div>";
}
echo "</div>";
?>