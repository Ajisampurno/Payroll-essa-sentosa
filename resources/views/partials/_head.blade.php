  <head>
    
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="shortcut icon" href="/img/svg/logo.svg" type="image/x-icon">
    
    <!-- Custom styles -->
    <link rel="stylesheet" href="/css/style.min.css">
    <link rel="stylesheet" href="/css/style-rate.css">
    <link rel="stylesheet" href="/css/style-settingnilai.css">
    <link rel="stylesheet" href="/css/style-formpk.css">

    <title>ES | {{ $title }}</title>

    <!-- jquery -->
    <script src="{{ asset('js/jquery.js') }}"></script>
    <!-- icon https://feather.com -->
    <script src="https://unpkg.com/feather-icons"></script>
    <script type="text/javascript">
      $.ajax({
        type: "get",
        url: "https://katanime.vercel.app/api/getrandom",
        dataType:'json',
        success:function(data){
          var index = Math.floor(Math.random() * (data.result.length));

          $("#quotes").text(data.result[index].indo);
          $("#byquotes").text("By : " + data.result[index].character);
          $("#animequotes").text("Anime : " + data.result[index].character);
        }
      });
      </script>
    
  </head>