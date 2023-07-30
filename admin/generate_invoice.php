<?php
if(isset($_GET['invoiceID']) && isset($_GET['name']) && isset($_GET['email']) && isset($_GET['phone']) && isset($_GET['roomType']) && isset($_GET['beddingType']) && isset($_GET['noOfRooms']) && isset($_GET['mealPlan']) && isset($_GET['checkIn']) && isset($_GET['checkOut']) && isset($_GET['amount'])) {
  $invoiceID = $_GET['invoiceID'];
  $name = $_GET['name'];
  $email = $_GET['email'];
  $phone = $_GET['phone'];
  $roomType = $_GET['roomType'];
  $beddingType = $_GET['beddingType'];
  $noOfRooms = $_GET['noOfRooms'];
  $mealPlan = $_GET['mealPlan'];
  $checkIn = $_GET['checkIn'];
  $checkOut = $_GET['checkOut'];
  $amount = $_GET['amount'];

  // Generate and save the invoice as a PDF file
  // You'll need to have a library like TCPDF or FPDF to generate the PDF
  // In this example, we'll assume you have a function called generatePDFInvoice() that creates the PDF

  // Include the library and any necessary dependencies
  require_once('tcpdf/tcpdf.php');

  // Create a new PDF instance
  $pdf = new TCPDF();

  // Set document information
  $pdf->SetCreator('Worldwide Hotel');
  $pdf->SetAuthor('Indranuj Ganguly & Susnata Mondal');
  $pdf->SetTitle('Invoice');
  $pdf->SetSubject('Invoice');

  // Add a page
  $pdf->AddPage();

  // Set content
  $content = '
  <h1>Invoice</h1>
  <p>Invoice ID: ' . $invoiceID . '</p>
  <p>Name: ' . $name . '</p>
  <p>Email: ' . $email . '</p>
  <p>Phone: ' . $phone . '</p>
  <p>Room Type: ' . $roomType . '</p>
  <p>Bedding Type: ' . $beddingType . '</p>
  <p>Number of Rooms: ' . $noOfRooms . '</p>
  <p>Meal Plan: ' . $mealPlan . '</p>
  <p>Check-in Date: ' . $checkIn . '</p>
  <p>Check-out Date: ' . $checkOut . '</p>
  <p>Amount: $' . $amount . '</p>';

  // Output the content into the PDF
  $pdf->writeHTML($content, true, false, true, false, '');

  // Generate the PDF file
  $pdf->Output('invoice.pdf', 'D');
} else {
  echo 'Invalid parameters. Unable to generate the invoice.';
}
?>
