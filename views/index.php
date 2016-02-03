<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="" />
    <title></title>
    <link media="all" type="text/css" rel="stylesheet" href="media/css/mui.min.css" />
    <link media="all" type="text/css" rel="stylesheet" href="media/css/materialize.min.css" />
    <link media="all" type="text/css" rel="stylesheet" href="media/css/google_material_icons.css" />
    <link media="all" type="text/css" rel="stylesheet" href="media/css/style.css" />
    <link href='https://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
    <link rel="apple-touch-icon" sizes="57x57" href="media/img/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="media/img/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="media/img/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="media/img/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="media/img/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="media/img/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="media/img/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="media/img/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="media/img/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="media/img/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="media/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="media/img/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="media/img/favicon-16x16.png">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="media/img/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <script src="media/js/jquery-2.1.4.min.js"></script>
    <script src="media/js/mui.min.js"></script>
    <script src="media/js/materialize.min.js"></script>
    <script src="media/js/index.js"></script>
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>
    <div class="container" id="the_body">
        <div class="row mui-panel" id="the_menu">
            <h1 id="title">Welcome to display_download !!</h1>
            <h2 class="title">Write your absolute path in the input and click to the button !!</h2>
        </div>
        <div class="row absolute_center mui-panel" id="absolute_center_form">
            <div class="input-field col s12">
              <i class="material-icons prefix">web_assets</i>
              <input id="path" type="text" value="/home/<your_name>/Downloads">
              <label for="path">Path</label>
              <button class="waves-effect waves-light mui-btn mui-btn--raised" id="send_path">Go In !!</button>
          </div>
      </div>
  </div>
  <span id="current_path"></span>
</body>
</html>