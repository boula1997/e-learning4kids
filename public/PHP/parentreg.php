


<?php
require_once "pdo.php";
$stmt = $pdo->query("SELECT * FROM parent_information");
if ( isset($_POST['First_Name']) && isset($_POST['Last_Name'])
      && isset($_POST['Number_of_Children']) && isset($_POST['Address'])&& isset($_POST['Age'])&& isset($_POST['Email'])&& isset($_POST['My_Password'])&& isset($_POST['Confirm_Password']))
  {
    $sql = "INSERT INTO parent_information (First_Name, Last_Name, Number_of_Children,Address,Age,Email,My_Password,Confirm_Password)
               VALUES (:First_Name, :Last_Name, :Number_of_Children,:Address,:Age,:Email,:My_Password,:Confirm_Password)";
      
    $stmt = $pdo->prepare($sql);
    $stmt->execute(array(
        ':First_Name' => $_POST['First_Name'],
        ':Last_Name' => $_POST['Last_Name'],
        ':Number_of_Children' => $_POST['Number_of_Children'],
        ':Address' => $_POST['Address'],
        ':Age' => $_POST['Age'],
        ':Email' => $_POST['Email'],
        ':My_Password' => $_POST['My_Password'],
        ':Confirm_Password' => $_POST['Confirm_Password']));
  } 
header("location:http://localhost/E- Learnin for kids/HTML/creat account-parent.html"); 
  ?>