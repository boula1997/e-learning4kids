


<?php
require_once "pdo.php";
$stmt = $pdo->query("SELECT * FROM creataccount");
if ( isset($_POST['First_Name']) && isset($_POST['Last_Name'])
      && isset($_POST['Governrate']) && isset($_POST['Address'])&& isset($_POST['Educational_Level'])&& isset($_POST['Email'])&& isset($_POST['My_Password'])&& isset($_POST['Confirm_Password']))
  {
    $sql = "INSERT INTO creataccount (First_Name, Last_Name, Governrate,Address,Educational_Level,Email,My_Password,Confirm_Password)
               VALUES (:First_Name, :Last_Name, :Governrate,:Address,:Educational_Level,:Email,:My_Password,:Confirm_Password)";
      
    $stmt = $pdo->prepare($sql);
    $stmt->execute(array(
        ':First_Name' => $_POST['First_Name'],
        ':Last_Name' => $_POST['Last_Name'],
        ':Governrate' => $_POST['Governrate'],
        ':Address' => $_POST['Address'],
        ':Educational_Level' => $_POST['Educational_Level'],
        ':Email' => $_POST['Email'],
        ':My_Password' => $_POST['My_Password'],
        ':Confirm_Password' => $_POST['Confirm_Password']));
  } 
header("location:http://localhost/E- Learnin for kids/HTML/creat account-student.html"); 
  ?>