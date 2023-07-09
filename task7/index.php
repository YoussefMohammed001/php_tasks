<?php
$myConnection  = mysqli_connect('localhost','root','','hr_db',3306);

//$state = 'SELECT * from employees';
//$state = 'SELECT first_name from employees';
//$state = 'SELECT * from employees WHERE employee_id > 100 AND employee_id <120';
//$state = 'SELECT * from employees WHERE first_name like "amr"';
//$state = 'SELECT * from employees WHERE first_name like "%r%"';
//$state = 'SELECT * from employees WHERE first_name like "r%"';
//$state = 'SELECT * from employees WHERE first_name like "%r"';
//$state = 'SELECT * from employees WHERE first_name like "a%r"';
//$state = 'SELECT * from employees WHERE first_name like "%e_"';
//$state = 'SELECT * from employees WHERE first_name like "%e%e%"';
//$state = 'SELECT * from employees WHERE phone_number is Null';
//$state = 'SELECT * from employees WHERE phone_number is not Null';
//SELECT COUNT(*), job_id,gender, CASE gender WHEN '0' then 'male' WHEN '1' then 'female' ELSE 'not defined' end as namedGender From employees GROUP BY gender, job_id;




$employess = mysqli_query($myConnection,$state);
$error = mysqli_error($myConnection);
var_dump($employess);


// $finaldata = mysqli_fetch_assoc($employess);
// $finaldata1 = mysqli_fetch_assoc($employess);
// var_dump($finaldata);
// var_dump($finaldata1);
// while($emp){
// var_dump($emp);
// }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">

<body>

<?php while($emp = mysqli_fetch_assoc($employess)) : ?>
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"> <?= $emp['employee_id']  ?></h5>
    <h6 class="card-subtitle mb-2 text-body-secondary"><?= $emp['first_name']?></h6>
    <p class="card-text"><?= $emp['employee_id']  ?></p>
    <a href="#" class="card-link"><?= $emp['salary']  ?> </a>
    <a href="#" class="card-link"><?= $emp['employee_id']  ?> </a>
</div>
<?php endwhile?>
</div>
</body>
</html>