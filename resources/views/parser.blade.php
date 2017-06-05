<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Parser</title>
</head>
<body>
  <form>
      <label for="feed_url"> Enter feed URL here:</label><input id="feed_url" name="feed_url">
      <input type="submit" value="Read">
  </form>
  <?php
    if (isset($_REQUEST['feed_url'])) {
    	require '../../vendor/autoload.php';

    	$myClient = new GuzzleHttp\Client([

        ])
    }
  ?>
</body>
</html>