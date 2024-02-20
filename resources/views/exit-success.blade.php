
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parking System</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
@include('layouts.app')    
<body >
 <div class="container"> 
    <h1>Parking Exit</h1>

    <p>Police Number: {{ session('parkingRecord')->police_number}}</p>
    <p>Entry Time: {{ session('parkingRecord')->entry_time}}</p>
    <p>Exit Time: {{ session('parkingRecord')->exit_time }}</p>
    <p>Parking Fee: {{ session('parkingRecord')->parking_fee}}</p>
</div>
</body>
</html>
