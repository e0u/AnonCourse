
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../docs-assets/ico/favicon.png">

    <title>匿名課程資訊</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="navbar.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <!-- Fixed navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand">NTUE 匿名課程資訊</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">首頁</a></li>
            <li><a href="#coruse">課程資訊</a></li>
            <li><a href="#coruse"> Q&A </a></li>

            
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#About">關於我們</a></li>
            <li><a href="devlog.php">開發日誌</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">會員資訊 <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">個人資料</a></li>
                <li><a href="#">網站管理</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">登出</li>
              </ul>
            </li>
    
         <form class="navbar-form navbar-right" role="form">
            <div class="form-group">
              <input type="text" placeholder="課程名稱或老師姓名" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">查詢</button>
          </form> 
   
            
          </ul>
        </div>
        <!--/.nav-collapse -->
      </div>
    </div>

    <div class="container">
    <div class="jumbotron">
      <div class="container">
        <h1>匿名課程資訊系統</h1>
        <p>每次選課，都要問別人好不好過嗎？抽到了雷課，卻又不知道嗎？</p>
        <p>這裡，給你更棒更友善的平台！給你輕易的分享和查詢課程資訊...</p>
        <p>只要用 FB 帳號登入，就可以進行查詢和建立課程資訊...</p>
        <p>不僅如此，除了自己之外...沒有人可以看到這則課程資訊是誰建立的噢！</p>
        <p><a class="btn btn-primary btn-lg" role="button">了解更多 &raquo;</a></p>
      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4">
          <h2>最新消息</h2>
          <p>2014.1.15 網站誕生</p>
          <p><a class="btn btn-default" href="#" role="button">查看更多 &raquo;</a></p>
        </div>
        <div class="col-md-4">
          <h2>一般課程</h2>
          <p><span class="label label-success">通識</span> 歌唱</p>
          <p><span class="label label-info">專門</span> 統計學</p>
       </div>
        <div class="col-md-4">
          <h2>教育學程</h2>
          <p><span class="label label-default">教程</span> 普通數學</p>
        </div>
      </div>

      <hr>

      <footer>
        <p>&copy; Powered By Rick Li</p>
      </footer> 
    </div>

     <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
