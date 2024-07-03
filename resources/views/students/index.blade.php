@extends('layout.app')

@section('content')
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            flex-direction: column;
        }
        .course-button, .year-list-button {
            display: block;
            width: 200px;
            padding: 10px;
            margin: 10px auto;
            background-color: #2ecc71;
            color: white;
            text-align: center;
            cursor: pointer;
            border: none;
            border-radius: 5px;
        }
        .year-list {
            display: none;
            text-align: center;
            margin-top: 20px;
        }
        .container {
            display: none;
            grid-template-columns: repeat(4, auto);
            gap: 20px;
            padding: 20px;
            background-color: #004c7f;
            color: white;
            border: 1px solid white;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .year {
            padding: 10px;
            text-align: center;
            border-radius: 5px;
            border: 1px solid white;
        }
        .course-button {
            background-color: #00d1a1;
            padding: 10px;
            text-align: center;
            border-radius: 5px;
            border: none;
            color: white;
            cursor: pointer;
            font-size: 16px;
        }
        .course-button:hover {
            background-color: #00a885;
        }
        .course-title {
            display: none;
            color: #004c7f;
            margin-bottom: 20px;
            font-size: 24px;
        }
    </style>
</head>
<body>
    <div id="courseSelection">
        <button class="course-button" id="bsitButton">BSIT</button>
        <button class="course-button" id="engButton">ENGINEERING</button>
        <button class="course-button" id="hmButton">HM</button>
        <button class="course-button" id="tesdaButton">TESDA</button>
    </div>

    <h2 id="bsitTitle" class="course-title">BSIT YEAR LIST</h2>
    <div id="bsitYearList" class="container">
        <div class="year">1ST YEAR</div>
        <div class="year">2ND YEAR</div>
        <div class="year">3RD YEAR</div>
        <div class="year">4TH YEAR</div>
        
        <button class="course-button">101</button>
        <button class="course-button">201</button>
        <button class="course-button">301</button>
        <button class="course-button">401</button>

        <button class="course-button">102</button>
        <button class="course-button">202</button>
        <button class="course-button">302</button>
        <button class="course-button">402</button>

        <button class="course-button">103</button>
        <button class="course-button">203</button>
        <button class="course-button">303</button>
        <button class="course-button">403</button>
    </div>

    <h2 id="engTitle" class="course-title">ENGINEERING YEAR LIST</h2>
    <div id="engYearList" class="container">
        <div class="year">1ST YEAR</div>
        <div class="year">2ND YEAR</div>
        <div class="year">3RD YEAR</div>
        <div class="year">4TH YEAR</div>
        
        <button class="course-button">101</button>
        <button class="course-button">201</button>
        <button class="course-button">301</button>
        <button class="course-button">401</button>

        <button class="course-button">102</button>
        <button class="course-button">202</button>
        <button class="course-button">302</button>
        <button class="course-button">402</button>

        <button class="course-button">103</button>
        <button class="course-button">203</button>
        <button class="course-button">303</button>
        <button class="course-button">403</button>
    </div>

    <h2 id="hmTitle" class="course-title">HM YEAR LIST</h2>
    <div id="hmYearList" class="container">
        <div class="year">1ST YEAR</div>
        <div class="year">2ND YEAR</div>
        <div class="year">3RD YEAR</div>
        <div class="year">4TH YEAR</div>
        
        <button class="course-button">101</button>
        <button class="course-button">201</button>
        <button class="course-button">301</button>
        <button class="course-button">401</button>

        <button class="course-button">102</button>
        <button class="course-button">202</button>
        <button class="course-button">302</button>
        <button class="course-button">402</button>

        <button class="course-button">103</button>
        <button class="course-button">203</button>
        <button class="course-button">303</button>
        <button class="course-button">403</button>
    </div>

    <h2 id="tesdaTitle" class="course-title">TESDA YEAR LIST</h2>
    <div id="tesdaYearList" class="container">
        <div class="year">1ST YEAR</div>
        <div class="year">2ND YEAR</div>
        <div class="year">3RD YEAR</div>
        <div class="year">4TH YEAR</div>
        
        <button class="course-button">101</button>
        <button class="course-button">201</button>
        <button class="course-button">301</button>
        <button class="course-button">401</button>

        <button class="course-button">102</button>
        <button class="course-button">202</button>
        <button class="course-button">302</button>
        <button class="course-button">402</button>

        <button class="course-button">103</button>
        <button class="course-button">203</button>
        <button class="course-button">303</button>
        <button class="course-button">403</button>
    </div>

    <script>
        document.getElementById('bsitButton').addEventListener('click', function() {
            document.getElementById('courseSelection').style.display = 'none';
            document.getElementById('bsitTitle').style.display = 'block';
            document.getElementById('bsitYearList').style.display = 'grid';
        });
        
        document.getElementById('engButton').addEventListener('click', function() {
            document.getElementById('courseSelection').style.display = 'none';
            document.getElementById('engTitle').style.display = 'block';
            document.getElementById('engYearList').style.display = 'grid';
        });

        document.getElementById('hmButton').addEventListener('click', function() {
            document.getElementById('courseSelection').style.display = 'none';
            document.getElementById('hmTitle').style.display = 'block';
            document.getElementById('hmYearList').style.display = 'grid';
        });

        document.getElementById('tesdaButton').addEventListener('click', function() {
            document.getElementById('courseSelection').style.display = 'none';
            document.getElementById('tesdaTitle').style.display = 'block';
            document.getElementById('tesdaYearList').style.display = 'grid';
        });
    </script>

@endsection