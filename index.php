<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="style.css">
       
        
    </head>
    <body>
        <h1><center>School Data Collection</center></h1>
        <hr/>
        <form method="post" id="id1">
            <table id="tab">
                <tr><td>School Code:</td><td><input type="text" name="SclCode"/></td></tr>
            
                <tr><td> HS <input type="radio" name="instType" value="1" checked="checked"/>
            HSS <input type="radio" name="instType" value="1"/>
            VHSE <input type="radio" name="instType" value="1"/></td></tr>
               
         
               <tr><td>Name of School </td><td><input type="text" name="nSchool"/></td></tr>
               <tr><td> Address</td><td><input type="textbox" name="address" width="250"/></td></tr>
               <tr><td> Email Id:</td><td><input type="text" name="Email"  /></td></tr>
               <tr><td> Telephone Num(office):</td><td><input type="text" name="phn"/></td></tr>
               <tr><td> Name of Educational District:</td><td><input type="text" name="nEd" /></td></tr>
               <tr><td> Name of Educational Sub District:</td><td><input type="text" name="nSd"/></td></tr>
               <tr><td>Name of Gramapanchayath </td><td><input type="text" name="nGp"/></td></tr>
               <tr><td>Total area of landed property to school in hectors </td><td><input type="text" name="area"/></td></tr>
               <tr><td>Survey no & Village </td><td><input type="text" name="surveyNo"/></td></tr>
               <tr><td>Approximate free land variable </td><td><input type="text" name="freeLand"/></td></tr>
               <tr><td>Name of headmaster/headmistress </td><td><input type="text" name="nHm"/></td></tr>
               <tr><td>Mobile No of Headmaster/headmistress </td><td><input type="text" name="phHm"/></td></tr>
               <tr><td><u>RollStrength</u></td></tr>
               <tr><td>Roll strength as on 6th+ workingday 2015</td><td><input type="text" name="roll15"/></td></tr>
               <tr><td>Roll strength as on 6th workingday 2016</td><td><input type="text" name="roll16"/></td></tr>
               <tr><td>Roll strength as on 6th workingday 2018</td><td><input type="text" name="roll17"/></td></tr>

              </table>
            <br/>
            <input type="submit" value="Submit" name="Submit"/><br/>
            <a href="page1.php">Next</a>
            
              
            
            
        </form>
        <?php
        // put your code here
        $conn = mysqli_connect("localhost", "root", "root","schooldata");


        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        var_dump($_POST);
        if(sizeof($_POST) > 0 ){
       // $sql="INSERT INTO school(sclCode) VALUES ('{$_POST['SclCode']}')";
            $sql="insert into school values('{$_POST['SclCode']}','{$_POST['instType']}','{$_POST['nSchool']}'"
            . ",'{$_POST['address']}','{$_POST['Email']}','{$_POST['phn']}','{$_POST['nEd']}','{$_POST['nSd']}',"
            . "'{$_POST['nGp']}','{$_POST['area']}','{$_POST['surveyNo']}','{$_POST['freeLand']}','{$_POST['nHm']}',"
            . "'{$_POST['phHm']}','{$_POST['roll15']}','{$_POST['roll16']}','{$_POST['roll17']}')";
    echo $sql;
        mysqli_query($conn, $sql);
        
        }
       // echo "Connected successfully";
        ?>
        
    </body>
</html>


