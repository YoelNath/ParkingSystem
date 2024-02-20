
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
 <div class="container text-center"> 
    <h1 class="text-center border-bottom border-primary">Parking Exit</h1>

    <p class="border border-primary">Police Number: {{ session('parkingRecord')->police_number}}</p>
    <p class="border border-primary">Entry Time: {{ session('parkingRecord')->entry_time}}</p>
    <p class="border border-primary">Exit Time: {{ session('parkingRecord')->exit_time }}</p>
    <p class="border border-primary">Parking Fee: {{ session('parkingRecord')->parking_fee}}</p>
</div>
</body>
</html>
