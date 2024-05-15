<?php

require('../Database.php');

$config = require('../config.php');
$db = new Database($config['database']);

// validation

if($_POST['body'] === '') {
    echo 'The note field is required';

    return false;
}

$query_string = 'insert into notes(body, student_id) values (:body, :student_id)';

$db->query($query_string, [
    ':body' => $_POST['body'],
    ':student_id' => 6
]);

// header('location: /index.php');
