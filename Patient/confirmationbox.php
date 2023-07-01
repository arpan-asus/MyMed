<?php
 if (!session_id()) session_start();
$userame="";
$appdate="";
$apptime="";
if (isset($_SESSION['patientusername'])){
  $userame=$_SESSION['patientusername'];
}
if (isset($_SESSION['appdate'])){
  $appdate=$_SESSION['appdate'];
}
if (isset($_SESSION['apptime'])){
  $apptime=$_SESSION['apptime'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <style>
    body,
    html {
      height: 100%;
    }

    .container {
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100%;
    }

    .confirmation-box {
      max-width: 600px;
      width: 100%;
    }
  </style>
  <title>Appointment Confirmation</title>
</head>

<body>
  <div class="container">
    <div class="card mt-5 confirmation-box">
      <div class="card-header bg-primary text-white">
        <h4><i class="fas fa-calendar-check"></i> Appointment Confirmation</h4>
      </div>
      <div class="card-body">
        <p>Dear <?php echo $userame ?></p>
        <p>Your appointment has been booked.</p>
        <p>Date: <?php echo $appdate ?></p>
        <p>Time: <?php echo $apptime ?></p>
        <p>If you have any questions or need to reschedule, please contact us at mymed8175@gmail.com</p>
        <p>Thank you for choosing our services. We look forward to seeing you!</p>
        <p>Best regards,</p>
        <p>MyMed</p>
      </div>
      <div class="card-footer bg-light">
        <small class="text-muted">Your Appointment was successfully booked.</small>
      </div>
      <div class="card-footer bg-light d-flex justify-content-end">
        <button type="button" class="btn btn-success">
          <i class="fas fa-print"></i><a href="appointmentview.php" style="text-decoration: none;color: white;">View All Appointment</a>
        </button>
      </div>
    </div>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
</body>

</html>
