<?php
// If the request is made from our space preview functionality then turn on PHP error reporting
if (isset($_SERVER['HTTP_X_FORWARDED_URL']) && strpos($_SERVER['HTTP_X_FORWARDED_URL'], '.w3spaces-preview.com/') !== false) {
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);
}
?>

<body class="body-container">

<?php include '_includes/functions/circular-menu.html';?>

<header>
<img src="assets/img/mavisstorm_logo.png">
<h1>Mavis Storm</h1>
</header>

<nav>
    <ul>
        <li><a href="_includes/2021.html">2021</a></li>
        <li><a href="_includes/2022.html">2022</a></li>
        <li><a href="_includes/2023.html">2023</a></li>
        <li><a href="_includes/2024.html">2024</a></li>
    </ul>
</nav>

<main>
<h1>Mavis Storm</h1>
<!---->
<p>This is a site where I can share my daughter's photos to our family.</p>
<!---->
</main>

<aside>
</aside>

<footer>Footer</footer>

<!-- Back To Top -->
<div class = "backToTop">
    <a class="icon" href="#"><i class="fa-solid fa-arrow-up"></i></a>
</div>
<!---->

</body>