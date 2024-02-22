
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
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h1 class="text-center mt-2">Parking Exit</h1></div>
    
                    <div class="card-body text-center">
    
                        
                  
                        
                            <p class="border-bottom border-primary">Police Number: {{ session('parkingRecord')->police_number}}</p>
                            <p class="border-bottom border-primary">Entry Time: {{ session('parkingRecord')->entry_time}}</p>
                            <p class="border-bottom border-primary">Exit Time: {{ session('parkingRecord')->exit_time }}</p>
                            <p class="border-bottom border-primary">Parking Fee: {{ session('parkingRecord')->parking_fee}}</p>
                     
                    </div>
    
                
                    
                </div>
            </div>
            
        </div>
    </div>
 
</body>
</html>
