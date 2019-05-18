<?php 

if ( (isset($vMNameErr)) || (isset($vMPhoneNumberErr)) || (isset($VMAddressErr))) {

    echo $vMNameErr."<br>";

    echo $vMPhoneNumberErr."<br>";

    echo $VMAddressErr."<br>";  

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

<a href="?sdm=makeup"  class="btn-back">Back</a>

    <form action="?sdm=makeup_model" method="post" >

    <table class="default_form">

        <tr>

            <td>Vendor Makeup Name</td>

            <td><input type="text" name="vm_name" id="" required></td>

        </tr>

        <tr>

            <td>Phone Number</td>

            <td><input type="number" name="phone_number" id="" required></td>

        </tr>

        <tr>

            <td>Address</td>

            <td><textarea name="address" id="" cols="30" rows="10" required></textarea></td>

        </tr>

    </table>

    <input type="submit" name="saveDataSubmit" value="Save">

    </form>

</body>

</html>   