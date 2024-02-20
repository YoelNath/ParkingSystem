
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parking Report</title>

</head>
@include('layouts.app')
<body>
    

<div class="container">

    <h1 class="my-4">Parking Report</h1>
    <form action="{{ url('/admins') }}" method="get" class="mb-3">
        <div class="form-group">
            <label for="start_date">Start Date:</label>
            <input type="date" name="start_date" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="end_date">End Date:</label>
            <input type="date" name="end_date" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-success mt-3">Generate Report</button>
    </form> 

</div>

 
</body>
</html>
