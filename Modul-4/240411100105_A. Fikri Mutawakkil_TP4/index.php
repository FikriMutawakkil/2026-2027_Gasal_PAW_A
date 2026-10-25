
<?php
$errors = array();

require_once 'validate.inc';

if (isset($_POST['surname']))
{
    
    validateName($errors, $_POST, 'surname');
    validateEmail($errors, $_POST, 'email');
    validateRequired($errors, $_POST, 'password');
    validateRequired($errors, $_POST, 'address');
    validateRequired($errors, $_POST, 'state');
    validateRequired($errors, $_POST, 'gender');

    if ($errors)
    {
        echo '<h1>Invalid, correct the following errors:</h1>';

        foreach ($errors as $field => $error)
        {
            echo "$field $error<br/>";
        }

        // Tampilkan kembali form
        include 'form.inc';
    }
    else
    {
        echo 'Form submitted successfully with no errors';
    }
}
else
{
    // Tampilkan form saat halaman pertama dibuka
    include 'form.inc';
}
?>
