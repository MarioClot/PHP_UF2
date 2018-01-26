@extends('layouts.app')
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .title {
            text-align: center;
            font-size: 36px;
            padding: 20px;
        }
    </style>

</head>
<body>
@section('content')
<div class="flex-center position-ref full-height">

        <div class="title">
            Error de la base de dades<br>
            <span>Assegura't que el camp no existeixi ja</span>
        </div>

</div>
@endsection