<?php

$name = trim($_POST['employee_name']);
$hours = $_POST['hours_worked'];
$rate = $_POST['hourly_rate'];

$errors = [];

/*
|--------------------------------------------------------------------------
| Validation Rules
|--------------------------------------------------------------------------
*/

if(empty($name)){
    $errors[] = "Employee name is required.";
}

if($hours <= 0 || $hours > 300){
    $errors[] = "Hours worked must be between 1 and 300.";
}

if($rate <= 0){
    $errors[] = "Hourly rate must be greater than zero.";
}

if(count($errors) > 0){

    echo "<h2>Validation Errors</h2>";

    foreach($errors as $error){
        echo "<p>$error</p>";
    }

    echo "<a href='index.php'>Go Back</a>";
    exit;
}

/*
|--------------------------------------------------------------------------
| Payroll Computation
|--------------------------------------------------------------------------
*/

$grossPay = $hours * $rate;

$tax = $grossPay * 0.10;

$netPay = $grossPay - $tax;

?>

<!DOCTYPE html>
<html>
<head>
    <title>Payroll Result</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

<h2>Payroll Summary</h2>

<p><strong>Employee:</strong> <?php echo htmlspecialchars($name); ?></p>

<p><strong>Hours Worked:</strong> <?php echo $hours; ?></p>

<p><strong>Hourly Rate:</strong> ₱<?php echo number_format($rate,2); ?></p>

<p><strong>Gross Pay:</strong> ₱<?php echo number_format($grossPay,2); ?></p>

<p><strong>Tax Deduction (10%):</strong> ₱<?php echo number_format($tax,2); ?></p>

<p><strong>Net Pay:</strong> ₱<?php echo number_format($netPay,2); ?></p>

<a href="index.php">Calculate Another Employee</a>

</div>

</body>
</html>
