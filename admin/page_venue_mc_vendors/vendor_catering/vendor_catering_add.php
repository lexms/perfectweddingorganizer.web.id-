<?php 
if ( (isset($nameErr)) || (isset($phoneNumberErr)) || (isset($addressErr)) || (isset($availabilityErr))) {
    echo $nameErr."<br>";
    echo $phoneNumberErr."<br>";
    echo $addressErr."<br>";
}
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<a href="?sdm=catering" class="btn-back">Back</a>
    <form action="?sdm=catering_model" method="post">
    <table class="default_form">
        <tr>
            <td>Name</td>
            <td><input type="text" name="name" id="" required></td>
        </tr>
        <tr>
            <td>Phone Number</td>
            <td><input type="number" name="phone_number" id="" required></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><textarea name="address" id="" cols="30" rows="10" required></textarea></td>
        </tr>   
        <tr>
            <td>
                ON<input type="radio" name="availability" id="" value="1" checked>
                OFF<input type="radio" name="availability" id="" value="0">
            </td>
        </tr>      
    </table>
    <input type="submit" name="saveDataSubmit" value="Save">
    </form>
</body>
</html>   