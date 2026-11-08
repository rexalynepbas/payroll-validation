<!DOCTYPE html>
<html>
<head>
    <title>Payroll Validation System</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h2>Payroll Validation System</h2>

    <form action="process.php" method="POST">

        <label>Employee Name</label>
        <input type="text" name="employee_name" required>

        <label>Hours Worked</label>
        <input type="number" name="hours_worked" min="1" max="300" required>

        <label>Hourly Rate (₱)</label>
        <input type="number" name="hourly_rate" min="1" required>

        <button type="submit">Calculate Payroll</button>

    </form>
</div>

</body>
</html>
