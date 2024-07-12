<!-- resources/views/index.blade.php -->

@extends('layout.app')

@section('content')
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            display: flex;
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
            font-family: Lucida Handwriting;
            display: none;
            color: #004c7f;
            margin-bottom: 20px;
            font-size: 60px;
        }
    </style>
    <div id="courseSelection">
        <button class="course-button" id="bsitButton">BSIT</button>
        <button class="course-button" id="csButton">BSCS</button>
        <button class="course-button" id="actButton">ACT</button>
        <button class="course-button" id="bscpeButton">BSCPE</button>
        <button class="course-button" id="bshmButton">BSHM</button>
        <button class="course-button" id="hrsButton">HRS</button>
        <button class="course-button" id="hrtButton">HRT</button>
        <button class="course-button" id="tourismButton">TOURISM</button>
        <button class="course-button" id="cetButton">CET</button>
    </div>

    <h2 id="bsitTitle" class="course-title"><center>BSIT YEAR LIST</center></h2>
    <div id="bsitYearList" class="container">
        <div class="year">1ST YEAR</div>
        <div class="year">2ND YEAR</div>
        <div class="year">3RD YEAR</div>
        <div class="year">4TH YEAR</div>
        
        <button class="course-button" id="bsit-101">BSIT-101</button>
        <button class="course-button">BSIT-201</button>
        <button class="course-button">BSIT-301</button>
        <button class="course-button">BSIT-401</button>

        <button class="course-button">BSIT-102</button>
        <button class="course-button">BSIT-202</button>
        <button class="course-button">BSIT-302</button>
        <button class="course-button">BSIT-402</button>

        <button class="course-button">BSIT-103</button>
        <button class="course-button">BSIT-203</button>
        <button class="course-button">BSIT-303</button>
        <button class="course-button">BSIT-403</button>
    </div>

    <h2 id="csTitle" class="course-title"><center>BSCS YEAR LIST</center></h2>
    <div id="csYearList" class="container">
        <div class="year">1ST YEAR</div>
        <div class="year">2ND YEAR</div>
        <div class="year">3RD YEAR</div>
        <div class="year">4TH YEAR</div>
        
        <button class="course-button">BSCS-101</button>
        <button class="course-button">BSCS-201</button>
        <button class="course-button">BSCS-301</button>
        <button class="course-button">BSCS-401</button>

        <button class="course-button">BSCS-102</button>
        <button class="course-button">BSCS-202</button>
        <button class="course-button">BSCS-302</button>
        <button class="course-button">BSCS-402</button>

        <button class="course-button">BSCS-103</button>
        <button class="course-button">BSCS-203</button>
        <button class="course-button">BSCS-303</button>
        <button class="course-button">BSCS-403</button>
    </div>

    <h2 id="actTitle" class="course-title"><center>ACT YEAR LIST</center></h2>
    <div id="actYearList" class="container">
        <div class="year">1ST YEAR</div>
        <div class="year">2ND YEAR</div>
        <div class="year">3RD YEAR</div>
        <div class="year">4TH YEAR</div>
        
        <button class="course-button">ACT-101</button>
        <button class="course-button">ACT-201</button>
        <button class="course-button">ACT-301</button>
        <button class="course-button">ACT-401</button>

        <button class="course-button">ACT-102</button>
        <button class="course-button">ACT-202</button>
        <button class="course-button">ACT-302</button>
        <button class="course-button">ACT-402</button>

        <button class="course-button">ACT-103</button>
        <button class="course-button">ACT-203</button>
        <button class="course-button">ACT-303</button>
        <button class="course-button">ACT-403</button>
    </div>

    <h2 id="bscpeTitle" class="course-title"><center>BSCPE YEAR LIST</center></h2>
    <div id="bscpeYearList" class="container">
        <div class="year">1ST YEAR</div>
        <div class="year">2ND YEAR</div>
        <div class="year">3RD YEAR</div>
        <div class="year">4TH YEAR</div>
        
        <button class="course-button">BSCPCE-101</button>
        <button class="course-button">BSCPCE-201</button>
        <button class="course-button">BSCPCE-301</button>
        <button class="course-button">BSCPCE-401</button>

        <button class="course-button">BSCPCE-102</button>
        <button class="course-button">BSCPCE-202</button>
        <button class="course-button">BSCPCE-302</button>
        <button class="course-button">BSCPCE-402</button>

        <button class="course-button">BSCPCE-103</button>
        <button class="course-button">BSCPCE-203</button>
        <button class="course-button">BSCPCE-303</button>
        <button class="course-button">BSCPCE-403</button>
    </div>

    <h2 id="bshmTitle" class="course-title"><center>BSHM YEAR LIST</center></h2>
    <div id="bshmYearList" class="container">
        <div class="year">1ST YEAR</div>
        <div class="year">2ND YEAR</div>
        <div class="year">3RD YEAR</div>
        <div class="year">4TH YEAR</div>
        
        <button class="course-button">BSHM-101</button>
        <button class="course-button">BSHM-201</button>
        <button class="course-button">BSHM-301</button>
        <button class="course-button">BSHM-401</button>

        <button class="course-button">BSHM-102</button>
        <button class="course-button">BSHM-202</button>
        <button class="course-button">BSHM-302</button>
        <button class="course-button">BSHM-402</button>

        <button class="course-button">BSHM-103</button>
        <button class="course-button">BSHM-203</button>
        <button class="course-button">BSHM-303</button>
        <button class="course-button">BSHM-403</button>
    </div>

    <h2 id="hrsTitle" class="course-title"><center>HRS YEAR LIST</center></h2>
    <div id="hrsYearList" class="container">
        <div class="year">1ST YEAR</div>
        <div class="year">2ND YEAR</div>
        <div class="year">3RD YEAR</div>
        <div class="year">4TH YEAR</div>
        
        <button class="course-button">HRS-101</button>
        <button class="course-button">HRS-201</button>
        <button class="course-button">HRS-301</button>
        <button class="course-button">HRS-401</button>

        <button class="course-button">HRS-102</button>
        <button class="course-button">HRS-202</button>
        <button class="course-button">HRS-302</button>
        <button class="course-button">HRS-402</button>

        <button class="course-button">HRS-103</button>
        <button class="course-button">HRS-203</button>
        <button class="course-button">HRS-303</button>
        <button class="course-button">HRS-403</button>
    </div>

    <h2 id="hrtTitle" class="course-title"><center>HRT YEAR LIST</center></h2>
    <div id="hrtYearList" class="container">
        <div class="year">1ST YEAR</div>
        <div class="year">2ND YEAR</div>
        <div class="year">3RD YEAR</div>
        <div class="year">4TH YEAR</div>
        
        <button class="course-button">HRT-101</button>
        <button class="course-button">HRT-201</button>
        <button class="course-button">HRT-301</button>
        <button class="course-button">HRT-401</button>

        <button class="course-button">HRT-102</button>
        <button class="course-button">HRT-202</button>
        <button class="course-button">HRT-302</button>
        <button class="course-button">HRT-402</button>

        <button class="course-button">HRT-103</button>
        <button class="course-button">HRT-203</button>
        <button class="course-button">HRT-303</button>
        <button class="course-button">HRT-403</button>
    </div>

    <h2 id="tourismTitle" class="course-title"><center>TOURISM YEAR LIST</center></h2>
    <div id="tourismYearList" class="container">
        <div class="year">1ST YEAR</div>
        <div class="year">2ND YEAR</div>
        <div class="year">3RD YEAR</div>
        <div class="year">4TH YEAR</div>
        
        <button class="course-button">TOURISM-101</button>
        <button class="course-button">TOURISM-201</button>
        <button class="course-button">TOURISM-301</button>
        <button class="course-button">TOURISM-401</button>

        <button class="course-button">TOURISM-102</button>
        <button class="course-button">TOURISM-202</button>
        <button class="course-button">TOURISM-302</button>
        <button class="course-button">TOURISM-402</button>

        <button class="course-button">TOURISM-103</button>
        <button class="course-button">TOURISM-203</button>
        <button class="course-button">TOURISM-303</button>
        <button class="course-button">TOURISM-403</button>
    </div>

    <h2 id="cetTitle" class="course-title"><center>CET YEAR LIST</center></h2>
    <div id="cetYearList" class="container">
        <div class="year">1ST YEAR</div>
        <div class="year">2ND YEAR</div>
        <div class="year">3RD YEAR</div>
        <div class="year">4TH YEAR</div>
        
        <button class="course-button">CET-101</button>
        <button class="course-button">CET-201</button>
        <button class="course-button">CET-301</button>
        <button class="course-button">CET-401</button>

        <button class="course-button">CET-102</button>
        <button class="course-button">CET-202</button>
        <button class="course-button">CET-302</button>
        <button class="course-button">CET-402</button>

        <button class="course-button">CET-103</button>
        <button class="course-button">CET-203</button>
        <button class="course-button">CET-303</button>
        <button class="course-button">CET-403</button>
    </div>
        <button class="course-button" onclick="window.location.href='{{ route('addstudent') }}'">Add Student</button>
    <script>
       
        document.getElementById('bsitButton').addEventListener('click', function() {
            toggleYearList('bsitYearList', 'bsitTitle');
        });

        document.getElementById('csButton').addEventListener('click', function() {
            toggleYearList('csYearList', 'csTitle');
        });

        document.getElementById('actButton').addEventListener('click', function() {
            toggleYearList('actYearList', 'actTitle');
        });

        document.getElementById('bscpeButton').addEventListener('click', function() {
            toggleYearList('bscpeYearList', 'bscpeTitle');
        });

        document.getElementById('bshmButton').addEventListener('click', function() {
            toggleYearList('bshmYearList', 'bshmTitle');
        });

        document.getElementById('hrsButton').addEventListener('click', function() {
            toggleYearList('hrsYearList', 'hrsTitle');
        });

        document.getElementById('hrtButton').addEventListener('click', function() {
            toggleYearList('hrtYearList', 'hrtTitle');
        });

        document.getElementById('tourismButton').addEventListener('click', function() {
            toggleYearList('tourismYearList', 'tourismTitle');
        });

        document.getElementById('cetButton').addEventListener('click', function() {
            toggleYearList('cetYearList', 'cetTitle');
        });

        function toggleYearList(listId, titleId) {
            const lists = document.querySelectorAll('.container');
            const titles = document.querySelectorAll('.course-title');

            lists.forEach(list => {
                if (list.id === listId) {
                    list.style.display = list.style.display === 'grid' ? 'none' : 'grid';
                } else {
                    list.style.display = 'none';
                }
            });

            titles.forEach(title => {
                if (title.id === titleId) {
                    title.style.display = title.style.display === 'block' ? 'none' : 'block';
                } else {
                    title.style.display = 'none';
                }
            });
        }
    </script>
@endsection
