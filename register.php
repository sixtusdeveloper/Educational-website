<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Resgister</title>
</head>
<body>
      <a href="" onclick="get_current_url()">Home page</a>

      <script type="text/javascript">
            function get_current_url(event){
                  let url_link = 'index.php'
                  event.preventDefault();
                  window.location.replace(url_link);
            }
      </script>
</body>


</html>