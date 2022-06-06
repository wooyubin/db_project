<html>
<head>
   <meta charset = "UTF-8">

   <title>공부 리스트</title>

   <!-- bootstrap css -->

   <link rel="stylesheet"
      href="${pageContext.request.contextPath}/css/bootstrap.min.css">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

   <!-- 스타일 시트 -->

   <style>
    	main {
    		margin :50;
    	}
   </style>

</head>

<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">공부 노트</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="db_project.html">Home</a>
        </li>
      </ul>
      <form class="d-flex" method="post" action="db_project_search.php">
      <input class="form-control me-2" type="date" name = "c1">
      <input class="btn btn-outline-success" type="submit" value="확인">
      </form>
    </div>
  </div>
</nav>

<main>
<?php
$con = mysqli_connect("localhost","yubin", "1234", "yubin");
$c1_d = $_POST["c1"];
$sql = "SELECT * FROM db_project WHERE today like '$c1_d'";
$result = mysqli_query($con, $sql);
while($row = mysqli_fetch_assoc($result)) {
echo "
<div class='card'>
  <h5 class='card-header'>{$row['today']}</h5>
  <div class='card-body'>
    <h3 class='card-title'>{$row['title']}</h3>
    <p class='card-text'>{$row['mess']}</p>
  </div>
</div><br><br>
";
}
?>
<br><br>

</main>
</body>
</html>