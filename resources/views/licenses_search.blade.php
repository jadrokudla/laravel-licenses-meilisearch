<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advanced License Search</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: aliceblue;
            padding: 20px;
        }
        .search-container {
            background: white;
            padding: 30px;
            border-radius: 12px;
            margin-bottom: 30px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }
        .search-form {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-bottom: 20px;
        }
        .form-group {
            display: flex;
            flex-direction: column;
        }
        .form-group label {
            margin-bottom: 8px;
            font-weight: 600;
            color: #374151;
        }
        .form-group input, .form-group select {
            padding: 12px 15px;
            border: 2px solid #e5e7eb;
            border-radius: 8px;
            font-size: 14px;
            transition: border-color 0.2s;
        }
        .form-group input:focus, .form-group select:focus {
            outline: none;
            border-color: #3b82f6;
        }
        .button-group {
            display: flex;
            gap: 15px;
            grid-column: 1 / -1;
            margin-top: 10px;
        }
        .search-btn {
            padding: 12px 24px;
            background: linear-gradient(135deg, #10b981, #059669);
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-weight: 600;
            transition: transform 0.2s;
        }
        .search-btn:hover {
            transform: translateY(-2px);
        }
        .clear-btn {
            padding: 12px 24px;
            background: #6b7280;
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-weight: 600;
            text-decoration: none;
            transition: background 0.2s;
        }
        .clear-btn:hover {
            background: #4b5563;
        }
        .results-container {
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }
        .results-header {
            background: #f8fafc;
            padding: 20px;
            border-bottom: 1px solid #e5e7eb;
        }
        .results-info {
            font-size: 18px;
            font-weight: 600;
            color: #374151;
        }
        .results-table {
            width: 100%;
            border-collapse: collapse;
        }
        .results-table th {
            background: #f1f5f9;
            padding: 15px 10px;
            font-weight: 600;
            color: #475569;
            border-bottom: 2px solid #e2e8f0;
            text-align: center;
        }
        .results-table td {
            padding: 12px 10px;
            text-align: center;
            border-bottom: 1px solid #e2e8f0;
        }
        .results-table tr:hover {
            background: #f8fafc;
        }
        .qualified-yes {
            background: #dcfce7;
            color: #166534;
            padding: 4px 8px;
            border-radius: 4px;
            font-weight: 500;
        }
        .qualified-no {
            background: #fee2e2;
            color: #991b1b;
            padding: 4px 8px;
            border-radius: 4px;
            font-weight: 500;
        }
        .no-results {
            text-align: center;
            padding: 40px;
            color: #6b7280;
            font-size: 16px;
        }
        .navigation-links {
            margin-top: 20px;
            display: flex;
            gap: 15px;
        }
        .nav-link {
            display: inline-block;
            padding: 10px 20px;
            background: #3b82f6;
            color: white;
            text-decoration: none;
            border-radius: 8px;
            font-weight: 500;
            transition: background 0.2s;
        }
        .nav-link:hover {
            background: #2563eb;
        }
    </style>
</head>
<body>
    <div class="search-container">
        <h1 style="margin-bottom: 20px; color: #374151;">Search</h1>
        
        <div id="search-form">
            <div class="search-form">
                <div class="form-group">
                    <label for="search-query">Search Query:</label>
                    <input type="text" id="search-query" placeholder="Enter search terms...">
                </div>
                
                <div class="form-group">
                    <label for="gender-filter">Gender:</label>
                    <select id="gender-filter">
                        <option value="">All Genders</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="age-group-filter">Age Group:</label>
                    <select id="age-group-filter">
                        <option value="">All Age Groups</option>
                        <option value="18-25">18-25</option>
                        <option value="26-35">26-35</option>
                        <option value="36-45">36-45</option>
                        <option value="46-55">46-55</option>
                        <option value="56+">56+</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="race-filter">Race:</label>
                    <select id="race-filter">
                        <option value="">All Races</option>
                        <option value="white">White</option>
                        <option value="black">Black</option>
                        <option value="asian">Asian</option>
                        <option value="hispanic">Hispanic</option>
                        <option value="other">Other</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="training-filter">Training:</label>
                    <select id="training-filter">
                        <option value="">All Training Types</option>
                        <option value="professional">Professional</option>
                        <option value="standard">Standard</option>
                        <option value="basic">Basic</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="qualified-filter">Qualified:</label>
                    <select id="qualified-filter">
                        <option value="">All</option>
                        <option value="1">Qualified</option>
                        <option value="0">Not Qualified</option>
                    </select>
                </div>
                
                <div class="button-group">
                    <button type="button" class="search-btn" onclick="performSearch()">Search Licenses</button>
                    <button type="button" class="clear-btn" onclick="clearSearch()">Clear Filters</button>
                </div>
            </div>
        </div>
    </div>

    <div class="results-container" id="results-container" style="display: none;">
        <div class="results-header">
            <div class="results-info" id="results-info"></div>
        </div>
        <div id="results-content"></div>
    </div>

    <div class="navigation-links">
        <a href="{{ route('licenses.index') }}" class="nav-link">← Späť na licencie</a>
        <a href="{{ route('licenses.create') }}" class="nav-link">➕ Pridať novú licenciu</a>
        <a href="{{ route('licenses.parking') }}" class="nav-link">🚗 Zoradiť podľa parkovania</a>
        <a href="{{ route('licenses.age_group') }}" class="nav-link">📊 Zoradiť podľa veku</a>
    </div>

    <script>
        async function performSearch() {
            const query = document.getElementById('search-query').value;
            const gender = document.getElementById('gender-filter').value;
            const ageGroup = document.getElementById('age-group-filter').value;
            const race = document.getElementById('race-filter').value;
            const training = document.getElementById('training-filter').value;
            const qualified = document.getElementById('qualified-filter').value;

            const params = new URLSearchParams();
            if (query) params.append('q', query);
            if (gender) params.append('gender', gender);
            if (ageGroup) params.append('age_group', ageGroup);
            if (race) params.append('race', race);
            if (training) params.append('training', training);
            if (qualified) params.append('qualified', qualified);

            try {
                const response = await fetch(`{{ route('licenses.search') }}?${params.toString()}`);
                const data = await response.json();
                
                displayResults(data);
            } catch (error) {
                console.error('Search error:', error);
                alert('Search failed. Please try again.');
            }
        }

        function displayResults(data) {
            const resultsContainer = document.getElementById('results-container');
            const resultsInfo = document.getElementById('results-info');
            const resultsContent = document.getElementById('results-content');

            resultsInfo.textContent = `Found ${data.total} licenses`;
            
            if (data.licenses.length === 0) {
                resultsContent.innerHTML = '<div class="no-results">No licenses found matching your criteria.</div>';
            } else {
                let tableHTML = `
                    <table class="results-table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Applicant ID</th>
                                <th>Gender</th>
                                <th>Age Group</th>
                                <th>Race</th>
                                <th>Training</th>
                                <th>Parking</th>
                                <th>Theory Test</th>
                                <th>Qualified</th>
                                <th>Created</th>
                            </tr>
                        </thead>
                        <tbody>
                `;

                data.licenses.forEach(license => {
                    const qualifiedBadge = license.qualified 
                        ? '<span class="qualified-yes">✓ Qualified</span>' 
                        : '<span class="qualified-no">✗ Not Qualified</span>';
                    
                    const createdDate = new Date(license.created_at).toLocaleDateString();
                    
                    tableHTML += `
                        <tr>
                            <td>${license.id}</td>
                            <td>${license.applicant_id}</td>
                            <td>${license.gender}</td>
                            <td>${license.age_group}</td>
                            <td>${license.race}</td>
                            <td>${license.training}</td>
                            <td>${license.parking}</td>
                            <td>${license.theory_test}</td>
                            <td>${qualifiedBadge}</td>
                            <td>${createdDate}</td>
                        </tr>
                    `;
                });

                tableHTML += '</tbody></table>';
                resultsContent.innerHTML = tableHTML;
            }

            resultsContainer.style.display = 'block';
        }

        function clearSearch() {
            document.getElementById('search-query').value = '';
            document.getElementById('gender-filter').value = '';
            document.getElementById('age-group-filter').value = '';
            document.getElementById('race-filter').value = '';
            document.getElementById('training-filter').value = '';
            document.getElementById('qualified-filter').value = '';
            document.getElementById('results-container').style.display = 'none';
        }

        // Allow search on Enter key press
        document.getElementById('search-query').addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                performSearch();
            }
        });
    </script>
</body>
</html>
