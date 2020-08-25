<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html,
        body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
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

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links>a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }

    </style>
</head>

<body>
    <div class="flex-center position-ref full-height">

        <div class="content">

            <h1>{{ $userdata->name }}</h1>
            <form action="/voted" method="POST">
                @csrf
                <input disabled type="image" id="voting" value="1" src="/img/1.jpg" height="300">
                <input disabled type="image" id="voting" value="2" src="/img/2.jpg" height="300">
                <input disabled type="image" id="voting" value="3" src="/img/3.PNG" height="300">
                <br>
                <label for="balon">Balon:</label>
                <select id="balon" name="balon">
                    <option value="-">-</option>
                    <option value="1">Klif Pisang</option>
                    <option value="2">Klif Pengajar</option>
                    <option value="3">Kevin Yobeth</option>
                </select>

                <button type="submit">Submit</button>

            </form>

        </div>

    </div>
</body>

</html>
