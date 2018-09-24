<?php
session_start();
include_once('m/functions.php');
include_once('m/db-functions.php');

$db = connect_db();   //Соединение с БД

$msg = '';

$sql2 = "SELECT * FROM space_requirements ORDER BY name DESC";
$query2 = $db->prepare($sql2);

$query2->execute();

$space_requirements = $query2->fetchAll();

if (count($_POST) > 0) {
    // POST
    $name = trim(htmlspecialchars($_POST['name']));
    $initial_load_shipped = trim(htmlspecialchars($_POST['initial_load_shipped']));
    $space_requirements = trim(htmlspecialchars($_POST['space_requirements']));
    $issues_accaunted = "";
    if (isset($_POST['localisation'])) $issues_accaunted .= "localisation" . ", ";
    if (isset($_POST['cost_efficienty'])) $issues_accaunted .= "Cost efficienty" . ", ";
    if (isset($_POST['turnaround_time'])) $issues_accaunted .= "Turnaround time" . ", ";
    if (isset($_POST['client_experience'])) $issues_accaunted .= "Client experience" . ", ";
    if (isset($_POST['inventory_discrepency'])) $issues_accaunted .= "Inventory discrepency" . ", ";
    if (isset($_POST['other'])) $issues_accaunted .= "other" . ", ";


    if ($name != '' && $initial_load_shipped != '') {

        $sql = "INSERT INTO main_form (name, initial_load_shipped, space_requirements, issues_accaunted) VALUES (:name, :initial_load_shipped, :space_requirements, :issues_accaunted)";
        $query = $db->prepare($sql);
        $params = ['name' => $name, 'initial_load_shipped' => $initial_load_shipped, 'space_requirements' => $space_requirements, 'issues_accaunted' => $issues_accaunted,];
        $query->execute($params);

//        $to = 'mlazarev@3-dm.com';
//        $subject = 'New questionnaire';
//        $message = 'Hello, $name, $initial_load_shipped' . "\r\n";
//        $headers = 'From: questionnaire@3-dm.com' . "\r\n" .
//            mail($to, $subject, $message, $headers);

        if ($query->errorCode() != PDO::ERR_NONE) {
            $info = $query->errorInfo();
            echo implode('<br>', $info);
            file_put_contents("error.log" . "\n", $info, FILE_APPEND);
            echo '<a href="index.php">Back</a>';
            exit();
        }
//        print_r($_POST);
             header("Location: send.php");
        exit();
    } else {
        $msg = '<div>Заполните пожалуйста поля!</div>';
    }

} else {
    // GET
    $title = '';
    $content = '';

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>3DM Client Integration Questionnaire</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
    <!--===============================================================================================-->
    <!--    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">-->
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <!--	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">-->
    <!--===============================================================================================-->
    <!--	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">-->
    <!--===============================================================================================-->
    <!--	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">-->
    <!--===============================================================================================-->
    <!--	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">-->
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <!--	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">-->
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!--===============================================================================================-->
</head>
<body>
<div class="contact100-more flex-col-c-m"
     style="background: url('images/bg-01.jpg'); height: 1000px; no-repeat; position: fixed; background-size: cover;">
</div>
<div class="container-contact100">
    <div class="wrap-contact100">

        <form class="contact100-form validate-form" method="post" action="">
				<span class="contact100-form-title">
					Please fill up the form:
				</span>


            <div class="wrap-input100 validate-input" data-validate="Name is required">
                <label class="label-input100" for="name">Full name</label>
                <input id="name" class="input100" type="text" name="name" placeholder="Enter your name...">
                <span class="focus-input100"></span>
            </div>


            <div class="wrap-input100" data-validate="Message is required">
                <label class="label-input100" for="message">What will be the estimated initial load shipped to us
                    (number of skids, containers, cartons, etc…)?</label>
                <textarea id="message" class="input100" name="initial_load_shipped"
                          placeholder="Type your message here..."></textarea>
                <span class="focus-input100"></span>
            </div>

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


            <div class="wrap-input100">
                <label class="label-input100" name="issues_accaunted">Current issues accounted ?</label>
                <div class="input100"><br/>
                    <div class="radio">
                        <label>
                            <input type="checkbox" name="localisation"> Localisation
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="checkbox" name="cost_efficienty"> Cost efficienty
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="checkbox" name="turnaround_time"> Turnaround time
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="checkbox" name="client_experience"> Client experience
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="checkbox" name="inventory_discrepency"> Inventory discrepency
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="checkbox" name="other"> Other
                            <br/><br/></label>
                    </div>
                </div>
            </div>


            <div class="container-contact100-form-btn">
                <button class="contact100-form-btn" input type="submit" name="submit" value="Submit">
                    Send
                </button>
            </div>
        </form>


    </div>
</div>


<!--===============================================================================================-->
<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/bootstrap/js/popper.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/select2/select2.min.js"></script>
<script>
    $(".js-select2").each(function () {
        $(this).select2({
            minimumResultsForSearch: 20,
            dropdownParent: $(this).next('.dropDownSelect2')
        });
    })
    $(".js-select2").each(function () {
        $(this).on('select2:open', function (e) {
            $(this).parent().next().addClass('eff-focus-selection');
        });
    });
    $(".js-select2").each(function () {
        $(this).on('select2:close', function (e) {
            $(this).parent().next().removeClass('eff-focus-selection');
        });
    });

</script>
<!--===============================================================================================-->
<script src="vendor/daterangepicker/moment.min.js"></script>
<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script src="js/main.js"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }

    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
</script>
</body>
</html>
