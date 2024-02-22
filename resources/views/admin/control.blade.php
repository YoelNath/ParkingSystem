
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
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h1 class="text-center mt-2">Parking Report</h1></div>
    
                        <div class="container con-test border border-light py-4">

                            <form action="{{ url('/admins') }}" method="get" class="d-grid mb-3">
                                <div class="form-group">
                                    <label for="start_date">Start Date:</label>
                                    <input type="date" name="start_date" class="form-control" required>
                                </div>
                        
                                <div class="form-group">
                                    <label for="end_date">End Date:</label>
                                    <input type="date" name="end_date" class="form-control" required>
                                </div>
                        
                                <button type="submit" class="btn btn-success mt-3 justify-content-center" >Generate Report</button>
                            </form> 
                            
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>    
                                                    <th>Police Number</th>
                                                    <th>Entry Time</th>
                                                    <th>Exit Time</th>
                                                    <th>Unique Code</th>
                                                    <th>Parking Fee</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @forelse ($parkingRecord as $record)
                                                    <tr>
                                                        <td>{{ $record->police_number }}</td>
                                                        <td>{{ $record->entry_time }}</td>
                                                        <td>{{ $record->exit_time }}</td>
                                                        <td>{{ $record->code}}</td>
                                                        <td>{{ $record->parking_fee}}</td>
                                                    </tr>
                                                @empty
                                                    <tr>
                                                        <td colspan="3">No records found on the specified date range</td>
                                                    </tr>
                                                @endforelse
                                            </tbody>
                                        </table>
                        
                                        <form action="{{ url('/admin/export-report') }}" method="get" class=" d-grid mb-3">
                        
                                    
                                            <button type="submit" id="btn-gen" class="btn btn-success">Download Report</button>
                                        </form> 
                        
            
    
                
                    
                </div>
            </div>
            
        </div>
    </div>





    
    



</body>
</html>
