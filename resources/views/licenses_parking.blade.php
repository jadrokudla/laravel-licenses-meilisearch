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
        .modern-title {
            font-size: 1.5rem;
            font-weight: 600;
            color: #1e293b;
            margin-bottom: 18px;
            letter-spacing: 0.5px;
            text-align: center;
        }
    </style>
</head>
<body>
    <h4 class="modern-title">Zoradené podľa Parking, zostupne</h4>
    <div style="display: flex; justify-content: center;">
        <table border="1">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Parking</th>
                   
                </tr>
            </thead>
            <tbody>
                @foreach($licenses as $license)
                    <tr>
                        <td>{{ $license->id }}</td>
                        <td>{{ $license->parking }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div style="display: flex; justify-content: center; align-items: center;">
        <div class="button-container">
            <a href="{{ route('licenses.index') }}" class="modern-link">← Späť na všetky licencie</a>
            <a href="{{ route('licenses.create') }}" class="modern-link">➕ Pridať novú licenciu</a>
            <a href="{{ route('licenses.age_group') }}" class="modern-link">📊 Zoradiť podľa veku</a>
            <a href="{{ route('licenses.search.page') }}" class="modern-link">🔍 Pokročilé vyhľadávanie</a>
        </div>
    </div>
    

</body>
</html>

