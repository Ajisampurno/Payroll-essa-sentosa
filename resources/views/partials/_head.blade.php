  <head>
    
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styletable.css">
    <link rel="shortcut icon" href="/img/svg/logo.svg" type="image/x-icon">
    <!-- Custom styles -->
    <link rel="stylesheet" href="/css/style.min.css">
    <title>ES | {{ $title }}</title>

    <!-- jquery -->
    <script src="{{ asset('js/jquery.js') }}"></script>
    <!-- icon https://feather.com -->
    <script src="https://unpkg.com/feather-icons"></script>

    <style>

        .progres label{
            font-size: 12px;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }
        .progress {
            height: 10px;
        }

        
        .select-karyawan select{
            width: 400px;
        }
        .select-karyawan select option{
            color: blue;
            font-size: 15px;
        }
        .table-setting tbody tr td input{
            background: white;            
        }
        .alternative{
            width: 800px;
            margin: 0px;
            padding: 0px;
            background: white;
        }
        .bobot{
                margin-left: 30px;
                padding: 0px;
                background: white;
            }

        @media only screen and (max-width:500px) {
            
            .tableform thead tr th{
                font-size: 10px;
                margin: 0px;
                padding: 0px;
            }
            .tableform tbody tr td{
                font-size: 10px;
                margin: 0px;
                padding: 0px;
            }
            .select-karyawan select{
                width: 200px;
                font-size: 10px;
            }
            .select-karyawan select option{
                color: blue;
                font-size: 10px;
            }
            .table-setting thead tr th{
                font-size: 10px;
                margin: 0px;
                padding: 0px;
                font-size: 10px;
            }
            .table-setting tbody tr td{
                font-size: 10px;
                margin: 0px;
                padding: 0px;
            }
            .alternative{
                font-size: 10px;
                margin: 0px;
                padding: 0px;
                max-width: 165px;
                background: white;
            }
            .bobot{
                font-size: 10px;
                text-align: center;
                margin: 0px;
                padding: 0px;
                max-width: 50px;
                background: white;
            }

        }

    </style>
    
  </head>