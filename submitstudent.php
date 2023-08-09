<?php
// Function to generate a unique filename
function generateUniqueFilename($filename)
{
    $extension = pathinfo($filename, PATHINFO_EXTENSION);
    return uniqid() . '.' . $extension;
}

// Handle feature image upload
if (isset($_FILES['feature_image']) && $_FILES['feature_image']['error'] === UPLOAD_ERR_OK) {
    $featureImage = $_FILES['feature_image'];
    $featureImageName = generateUniqueFilename($featureImage['name']);
    move_uploaded_file($featureImage['tmp_name'], '../images/' . $featureImageName);
} else {
    // Set a default image if no image is uploaded
    $featureImageName = 'default.jpg'; // Replace 'default.jpg' with your desired default image filename
}

// Retrieve form data
$academicYear = $_POST['academic_year'];
$studentId = $_POST['student_id'];
$firstName = $_POST['first_name'];
$lastName = $_POST['last_name'];
$middleInitial = $_POST['middle_initial'];
$address = $_POST['address'];
$gender = $_POST['gender'];
$birthdate = $_POST['birthdate'];
$age = $_POST['age'];
$birthplace = $_POST['birthplace'];
$nationality = $_POST['nationality'];
$religion = $_POST['religion'];
$contactNumber = $_POST['contact_number'];
$courseYear = $_POST['course_year'];
$civilStatus = $_POST['civil_status'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$guardian = $_POST['guardian'];
$guardianContact = $_POST['guardian_contact'];
$newEnrollees = 1;

// Save data to the database
$pdo = new PDO('mysql:host=localhost;dbname=jcytfchurch', 'root', '');
$stmt = $pdo->prepare('INSERT INTO tblstudent (ACADEMIC_YEAR, IDNO, FNAME, LNAME, MNAME, HOME_ADD, SEX, BDAY, BPLACE, NATIONALITY, RELIGION, CONTACT_NO, SYEAR, STATUS, AGE, ACC_USERNAME, ACC_PASSWORD, EMAIL, PARENT, PARENT_NO, STUDPHOTO, NewEnrollees) 
VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');

$stmt->execute([$academicYear, $studentId, $firstName, $lastName, $middleInitial, $address, $gender, $birthdate, $birthplace, $nationality, $religion, $contactNumber, $courseYear, $civilStatus, $age, $username, $password, $email, $guardian, $guardianContact, $featureImageName, $newEnrollees]);

// Display success message using SweetAlert
echo "<script src='https://unpkg.com/sweetalert/dist/sweetalert.min.js'></script>";
echo "<script>";
echo "swal('Success!', 'Data has been saved.', 'success').then(function() {window.location.reload();});";
echo "</script>";
?>
