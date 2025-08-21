<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
        .center-container {
            display: flex;
            justify-content: flex-start; /* changed from center */
            align-items: center;
            min-height: 100vh;
        }
        .form-row {
            display: flex;
            align-items: center;
            margin-bottom: 14px;
            gap: 18px;
        }
        .form-row label {
            min-width: 140px;
            text-align: right;
            margin-right: 12px;
        }
        .form-row input,
        .form-row select {
            flex: 1;
            padding: 6px 10px;
            border-radius: 4px;
            border: 1px solid #cbd5e1;
        }
    </style>
</head>
<body>
    
    <div class="center-container">
        <form action="{{ route('licenses.store') }}" method="POST">
        @csrf
        <div class="form-row">
            <label for="applicant_id">Applicant ID:</label>
            <input type="number" name="applicant_id" id="applicant_id" required>
        </div>
        <div class="form-row">
            <label for="gender">Gender:</label>
            <input type="text" name="gender" id="gender" required>
        </div>
        <div class="form-row">
            <label for="age_group">Age Group:</label>
            <input type="text" name="age_group" id="age_group" required>
        </div>
        <div class="form-row">
            <label for="race">Race:</label>
            <input type="text" name="race" id="race" required>
        </div>
        <div class="form-row">
            <label for="training">Training:</label>
            <input type="text" name="training" id="training" required>
        </div>
        <div class="form-row">
            <label for="signals">Signals:</label>
            <input type="number" name="signals" id="signals" required>
        </div>
        <div class="form-row">
            <label for="yield">Yield:</label>
            <input type="number" name="yield" id="yield" required>
        </div>
        <div class="form-row">
            <label for="speed_control">Speed Control:</label>
            <input type="number" name="speed_control" id="speed_control" required>
        </div>
        <div class="form-row">
            <label for="night_drive">Night Drive:</label>
            <input type="number" name="night_drive" id="night_drive" required>
        </div>
        <div class="form-row">
            <label for="road_signs">Road Signs:</label>
            <input type="number" name="road_signs" id="road_signs" required>
        </div>
        <div class="form-row">
            <label for="steer_control">Steer Control:</label>
            <input type="number" name="steer_control" id="steer_control" required>
        </div>
        <div class="form-row">
            <label for="mirror_usage">Mirror Usage:</label>
            <input type="number" name="mirror_usage" id="mirror_usage" required>
        </div>
        <div class="form-row">
            <label for="confidence">Confidence:</label>
            <input type="number" name="confidence" id="confidence" required>
        </div>
        <div class="form-row">
            <label for="parking">Parking:</label>
            <input type="number" name="parking" id="parking" required>
        </div>
        <div class="form-row">
            <label for="theory_test">Theory Test:</label>
            <input type="number" name="theory_test" id="theory_test" required>
        </div>
        <div class="form-row">
            <label for="reactions">Reactions:</label>
            <input type="number" name="reactions" id="reactions" required>
        </div>
        <div class="form-row">
            <label for="qualified">Qualified:</label>
            <select name="qualified" id="qualified" required>
                <option value="1">Yes</option>
                <option value="0">No</option>
            </select>
        </div>
        <button type="submit">Submit</button>
        <div style="display: flex">
        <div class="button-container">
            <a href="{{ route('licenses.index') }}" class="modern-link">📋 Zoznam licencií</a>
        </div>
    </div>
        </form>
    </div>
     
   
</body>
</html>



