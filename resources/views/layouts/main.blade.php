<!doctype html>
<html lang="en">

  @include('partials._head')

  <body>
    @include('partials.navside')
      @yield('container')
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
    <!-- Chart library -->
    <script src="/plugins/chart.min.js"></script>
    <!-- Icons library -->
    <script src="/plugins/feather.min.js"></script>
    <!-- Custom scripts -->
    <script src="/js/script.js"></script>
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
  </body>
</html>