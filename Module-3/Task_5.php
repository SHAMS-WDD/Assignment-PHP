<?php

function generatePassword($length) {
    // Define the character set for the password
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+';
    
    // Get the total number of characters in the character set
    $charLength = strlen($characters);
    
    // Initialize an empty password
    $password = '';
    
    // Generate the password
    for ($i = 0; $i < $length; $i++) {
        // Get a random character from the character set
        $randomChar = $characters[rand(0, $charLength - 1)];
        
        // Append the random character to the password
        $password .= $randomChar;
    }
    
    return $password;
}

// Generate a password with a length of 12 characters
$password = generatePassword(12);

// Print the generated password
echo "Generated Password: $password";

?>
