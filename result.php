<?php

include_once('m/db-functions.php');

$db = connect_db();

$sql2 = "SELECT * FROM space_requirements ORDER BY name DESC";
$query2 = $db->prepare($sql2);

$query2->execute();


$space_requirements = $query2->fetchAll();
// my_print_r($articles); 
?>

<!doctype html>
<html>
<head>
    <title>List</title>
</head>
<body>
<h2>List of questions</h2>


<div class="wrap-input100">
    <div class="label-input100">Space Requirements</div>
    <div>
        <select class="js-select2" name="space_requirements">

            <? foreach ($space_requirements as $one): ?>

                <option>
                    <?= $one['name_en'] ?>
                </option>

            <? endforeach ?>
        </select>
        <div class="dropDownSelect2"></div>
    </div>
    <span class="focus-input100"></span>
</div>
</body>
</html>
