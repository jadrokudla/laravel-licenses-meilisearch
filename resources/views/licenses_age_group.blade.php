<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Licenses - Sorted by Age Group</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: aliceblue;
            padding: 20px;
        }
        .header {
            text-align: center;
            margin-bottom: 30px;
        }
        .header h1 {
            color: #2563eb;
            margin-bottom: 10px;
        }
        .header p {
            color: #6b7280;
            font-size: 16px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }
        th {
            background: #f1f5f9;
            padding: 20px;
            font-weight: 600;
            color: #475569;
            border-bottom: 2px solid #e2e8f0;
            text-align: center;
            font-size: 18px;
        }
        td {
            padding: 15px 20px;
            text-align: center;
            border-bottom: 1px solid #e2e8f0;
            font-size: 16px;
        }
        tr:hover {
            background: #f8fafc;
        }
        .numeric-age {
            background: #dcfce7;
            color: #166534;
            font-weight: 600;
            border-radius: 4px;
            padding: 8px;
        }
        .string-age {
            background: #fef3c7;
            color: #92400e;
            font-weight: 500;
            border-radius: 4px;
            padding: 8px;
        }
        .modern-link {
            display: inline-block;
            margin: 8px;
            padding: 12px 24px;
            background: #2563eb;
            color: #fff;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 500;
            transition: background 0.2s;
        }
        .modern-link:hover {
            background: #1e40af;
        }
        .button-container {
            display: flex;
            justify-content: center;
            gap: 16px;
            align-items: center;
            margin-top: 30px;
            flex-wrap: wrap;
        }
        .stats {
            background: white;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 20px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            text-align: center;
        }
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-top: 15px;
        }
        .stat-item {
            padding: 15px;
            background: #f8fafc;
            border-radius: 6px;
        }
        .stat-number {
            font-size: 24px;
            font-weight: 700;
            color: #2563eb;
        }
        .stat-label {
            font-size: 14px;
            color: #6b7280;
            margin-top: 5px;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>📊 Age Groups - Sorted</h1>
        <p>Licencie zoradené podľa veku</p>
    </div>

    <!-- Statistics -->
    <div class="stats">
        <h3>📈 Štatistiky vekových skupín</h3>
        <div class="stats-grid">
            @php
                $numericAges = $licenses->filter(function($license) {
                    return is_numeric($license->age_group);
                });
                $stringAges = $licenses->filter(function($license) {
                    return !is_numeric($license->age_group);
                });
            @endphp
            
            <div class="stat-item">
                <div class="stat-number">{{ $licenses->count() }}</div>
                <div class="stat-label">Celkom licencií</div>
            </div>
            <div class="stat-item">
                <div class="stat-number">{{ $numericAges->count() }}</div>
                <div class="stat-label">Číselné vekové skupiny</div>
            </div>
            <div class="stat-item">
                <div class="stat-number">{{ $stringAges->count() }}</div>
                <div class="stat-label">Textové vekové skupiny</div>
            </div>
            <div class="stat-item">
                <div class="stat-number">{{ $licenses->pluck('age_group')->unique()->count() }}</div>
                <div class="stat-label">Unikátne vekové skupiny</div>
            </div>
        </div>
    </div>

    <!-- Age Groups Table -->
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Applicant ID</th>
                <th>Age Group</th>
                <th>Type</th>
            </tr>
        </thead>
        <tbody>
            @foreach($licenses as $license)
                <tr>
                    <td>{{ $license->id }}</td>
                    <td>{{ $license->applicant_id }}</td>
                    <td>
                        @if(is_numeric($license->age_group))
                            <span class="numeric-age">{{ $license->age_group }}</span>
                        @else
                            <span class="string-age">{{ $license->age_group }}</span>
                        @endif
                    </td>
                    <td>
                        @if(is_numeric($license->age_group))
                            🔢 Numeric
                        @else
                            📝 String
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="button-container">
        <a href="{{ route('licenses.index') }}" class="modern-link">← Späť na všetky licencie</a>
        <a href="{{ route('licenses.parking') }}" class="modern-link">🚗 Zoradiť podľa parkovania</a>
        <a href="{{ route('licenses.create') }}" class="modern-link">➕ Pridať novú licenciu</a>
        <a href="{{ route('licenses.search.page') }}" class="modern-link">🔍 Pokročilé vyhľadávanie</a>
    </div>
</body>
</html>
