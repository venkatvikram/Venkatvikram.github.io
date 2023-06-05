<?php
require_once 'google-api-php-client/src/Google/Client.php';
require_once 'google-api-php-client/src/Google/Service/Sheets.php';
// Update the path to the Google Client Library

use Google\Client;
use Google\Service\Sheets;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Retrieve form data
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];

  // Store the data in a spreadsheet
  $spreadsheetId = "1ppLV9vgTFKLSMHZFbbl99YbKFR3OWPW3OPeFuh6qZeU"; // Replace with your actual spreadsheet ID
  $range = "Sheet1!A1:C1"; // Specify the range where you want to store the data

  // Prepare the data to be written
  $data = [$name, $email, $message];

  // Append the data to the spreadsheet
  $service = getClient(); // Implement the getClient() function to authenticate and get the Google Sheets service
  $requestBody = new Google_Service_Sheets_ValueRange([
    'values' => [$data]
  ]);
  $service->spreadsheets_values->append($spreadsheetId, $range, $requestBody, ['valueInputOption' => 'USER_ENTERED']);

  // Return a response
  echo json_encode(["success" => true]);
}
?>
