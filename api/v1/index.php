<?php
session_start();
require_once './env.php';
require DOCROOT . './vendor/autoload.php';
$config = include 'config/db.php';

//singleton db
$db = Repository\DataRepository::instance($config, 'default');

$method = $_SERVER['REQUEST_METHOD'];
$path = $_SERVER['REQUEST_URI'];
$paths = explode("/", $path);

//REST API

$sub_path = explode("?", $paths[3]);
try {
    if ($sub_path[0] == "search") {
        switch ($method) {
            case 'POST':
            case 'GET':
                if (isset($_GET['q'])) {
                    if (!isset($_GET['max']))
                        $_GET['max'] = 10;
                    $db = new \Usecase\Search($db);
                    $output = $db->new_search($_GET['q'], $_GET['max']);
                } else {
                    throw new \Exception('api error');
                }
                break;

        }
    }

} catch (Exception $e) {
    $message = $e->getMessage();
}
//output
echo json_encode($output);
die;
