<!-- Display the exit information, adjust as needed -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parking System</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body class="container mt-5">
    <h1>Parking Exit</h1>

    <p>Police Number: {{ $parkingRecord->police_number }}</p>
    <p>Entry Time: {{ $parkingRecord->entry_time }}</p>
    <p>Exit Time: {{ $parkingRecord->exit_time }}</p>
    <p>Parking Fee: Rp {{ $parkingRecord->parking_fee }}</p>

  
</body>
</html>
