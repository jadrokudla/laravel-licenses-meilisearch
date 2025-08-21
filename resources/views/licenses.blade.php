<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>licenses</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: aliceblue;
            padding: 20px;
        }
        table, th, td {
            text-align: center;
        }
        .modern-link {
            display: inline-block;
            margin: 8px 0;
            padding: 8px 18px;
            background: #2563eb;
            color: #fff;
            border-radius: 6px;
            text-decoration: none;
            font-weight: 500;
            transition: background 0.2s;
        }
        .modern-link:hover {
            background: #1e40af;
        }
        .button-container {
            display: flex;
            gap: 16px;
            align-items: center;
            margin-top: 16px;
        }
        .search-container {
            background: white;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 20px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .search-form {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 15px;
            align-items: end;
        }
        .form-group {
            display: flex;
            flex-direction: column;
        }
        .form-group label {
            margin-bottom: 5px;
            font-weight: 500;
            color: #374151;
        }
        .form-group input, .form-group select {
            padding: 8px 12px;
            border: 1px solid #d1d5db;
            border-radius: 4px;
            font-size: 14px;
        }
        .search-btn {
            padding: 8px 16px;
            background: #10b981;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-weight: 500;
            height: fit-content;
        }
        .search-btn:hover {
            background: #059669;
        }
        .clear-btn {
            padding: 8px 16px;
            background: #6b7280;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-weight: 500;
            height: fit-content;
        }
        .clear-btn:hover {
            background: #4b5563;
        }
        .results-info {
            margin: 10px 0;
            font-weight: 500;
            color: #374151;
        }
    </style>
</head>
<body>
    <!-- Search Container -->
    <div class="search-container">
        <h2>Search</h2>
        <form method="GET" action="{{ route('licenses.index') }}" class="search-form">
            <div class="form-group">
                <label for="search">Search Query:</label>
                <input type="text" id="search" name="search" value="{{ $query ?? '' }}" 
                       placeholder="Enter search terms...">
            </div>
            <div class="form-group">
                <button type="submit" class="search-btn">Search</button>
            </div>
            <div class="form-group">
                <a href="{{ route('licenses.index') }}" class="clear-btn" style="text-decoration: none; text-align: center;">Clear</a>
            </div>
        </form>
        
        @if(isset($query) && $query)
            <div class="results-info">
                Search results for: "<strong>{{ $query }}</strong>" - Found {{ $licenses->count() }} licenses
            </div>
        @endif
    </div>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Applicant ID</th>
                <th>Gender</th>
                <th>Age Group</th>
                <th>Race</th>
                <th>Training</th>
                <th>Signals</th>
                <th>Yield</th>
                <th>Speed Control</th>
                <th>Night Drive</th>
                <th>Road Signs</th>
                <th>Steer Control</th>
                <th>Mirror Usage</th>
                <th>Confidence</th>
                <th>Parking</th>
                <th>Theory Test</th>
                <th>Reactions</th>
                <th>Qualified</th>
                <th>Created At</th>
            </tr>
        </thead>
        <tbody>
            @foreach($licenses as $license)
                <tr>
                    <td>{{ $license->id }}</td>
                    <td>{{ $license->applicant_id }}</td>
                    <td>{{ $license->gender }}</td>
                    <td>{{ $license->age_group }}</td>
                    <td>{{ $license->race }}</td>
                    <td>{{ $license->training }}</td>
                    <td>{{ $license->signals }}</td>
                    <td>{{ $license->yield }}</td>
                    <td>{{ $license->speed_control }}</td>
                    <td>{{ $license->night_drive }}</td>
                    <td>{{ $license->road_signs }}</td>
                    <td>{{ $license->steer_control }}</td>
                    <td>{{ $license->mirror_usage }}</td>
                    <td>{{ $license->confidence }}</td>
                    <td>{{ $license->parking }}</td>
                    <td>{{ $license->theory_test }}</td>
                    <td>{{ $license->reactions }}</td>
                    <td>{{ $license->qualified }}</td>
                    <td>{{ $license->created_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="button-container">
        <a href="{{ route('licenses.create') }}" class="modern-link">➕ Create novu licenciu</a>
        <a href="{{ route('licenses.parking') }}" class="modern-link">🚗 Zoradit podľa známky parkovania</a>
        <a href="{{ route('licenses.age_group') }}" class="modern-link">📊 Zoradit podľa veku</a>
        <a href="{{ route('licenses.search.page') }}" class="modern-link">🔍 Advanced Search</a>
    </div>
</body>
</html>

