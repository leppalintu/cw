<?php
// Database credentials
$host = 'localhost';
$dbname = 'enquiryform';
$username = 'root';
$password = '';

// Create a new PDO instance
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error: " . $e->getMessage());
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $fullname = $_POST['fullname'];
    $dob = $_POST['dob'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $englishSkill = $_POST['englishSkill'];
    $englishSkillComment = $_POST['englishSkillComment'];
    $parentfullname = $_POST['parentfullname'];
    $parentemail = $_POST['parentemail'];
    $parentmobile = $_POST['parentmobile'];
    $chronicDiseases = $_POST['chronicDiseases'];
    $diseaseDetails = $_POST['diseaseDetails'];
    $medication = $_POST['medication'];
    $medicationDetails = $_POST['medicationDetails'];
    $allergic = $_POST['allergic'];
    $allergicDetails = $_POST['allergicDetails'];
    $dietary = $_POST['dietary'];
    $dietaryDetails = $_POST['dietaryDetails'];
    $shirtsize = $_POST['shirtsize'];
    $notes = $_POST['notes'];

    // Prepare an insert statement
    $sql = "INSERT INTO enquiry (fullname, dob, mobile, email, englishSkill, englishSkillComment, parentfullname, parentemail, parentmobile, chronicDiseases, diseaseDetails, medication, medicationDetails, allergic, allergicDetails, dietary, dietaryDetails, shirtsize, notes) 
            VALUES (:fullname, :dob, :mobile, :email, :englishSkill, :englishSkillComment, :parentfullname, :parentemail, :parentmobile, :chronicDiseases, :diseaseDetails, :medication, :medicationDetails, :allergic, :allergicDetails, :dietary, :dietaryDetails, :shirtsize, :notes)";

    // Prepare the statement
    $stmt = $pdo->prepare($sql);

    // Bind the parameters
    $stmt->bindParam(':fullname', $fullname);
    $stmt->bindParam(':dob', $dob);
    $stmt->bindParam(':mobile', $mobile);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':englishSkill', $englishSkill);
    $stmt->bindParam(':englishSkillComment', $englishSkillComment);
    $stmt->bindParam(':parentfullname', $parentfullname);
    $stmt->bindParam(':parentemail', $parentemail);
    $stmt->bindParam(':parentmobile', $parentmobile);
    $stmt->bindParam(':chronicDiseases', $chronicDiseases);
    $stmt->bindParam(':diseaseDetails', $diseaseDetails);
    $stmt->bindParam(':medication', $medication);
    $stmt->bindParam(':medicationDetails', $medicationDetails);
    $stmt->bindParam(':allergic', $allergic);
    $stmt->bindParam(':allergicDetails', $allergicDetails);
    $stmt->bindParam(':dietary', $dietary);
    $stmt->bindParam(':dietaryDetails', $dietaryDetails);
    $stmt->bindParam(':shirtsize', $shirtsize);
    $stmt->bindParam(':notes', $notes);

    // Execute the statement
    if ($stmt->execute()) {
        echo "Registration successful!";
    } else {
        echo "Error: Could not execute the query.";
    }
}
?>
