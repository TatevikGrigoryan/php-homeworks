<form method="post" action="<?=$_SERVER['PHP_SELF'];?>">
    <div style="margin: 5px 0">
        <label>FirstName:</label>
        <input type="text" name="firstName">
    </div>
    <br>

    <div style="margin: 5px 0">
        <label>LastName:</label>
        <input type="text" name="lastName">
    </div>
    <br>

    <div style="margin: 5px 0">
        <label>Age:</label>
        <input type="number" name="age" min="1">
    </div>
    <br>

    <div style="margin: 5px 0">
        <label>Country:</label>
        <input type="text" name="country">
    </div>
    <br>

    <div style="margin: 5px 0">
        <input type="submit" >
    </div>
    <br>
</form>

<?php
function testTextValues ($value): string
{
    $value = trim($value);
    $value = htmlspecialchars($value);
    $value = stripslashes($value);

    return $value;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = testTextValues($_POST['firstName']);
    $last_name = testTextValues($_POST['lastName']);
    $age = $_POST['age'];
    $country = testTextValues($_POST['country']);

    $arr['first_name'] = $first_name;
    $arr['last_name'] = $last_name;
    $arr['age'] = $age;
    $arr['country'] = $country;

    echo json_encode($arr) ."<br>";
}

$jsonData = '[ { "name" : "John Garg", "age" : "15", "school" : 
"Ahlcon Public school" }, { "name" : "Smith Soy", 
"age" : "16", "school" : "St. Marie school" }, { 
"name" : "Charle Rena", "age" : "16", "school" : 
"St. Columba school" } ]';

function decodeJsonData($value)
{
    return json_decode($value);
}

var_dump(decodeJsonData($jsonData), true);


