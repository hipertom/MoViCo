<?php
$laravel = app();
$laravel_version = $laravel::VERSION;
?>

<footer class="footer">
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-md-offset-1">
        <p>laravel: {{ $laravel_version }}</p>
      </div>
      <div class="col-md-4">
        <p>Copyright&copy; 2015-{{date("Y")}} MoViCo, <a href="http://tomgrootjans.nl">Tom Grootjans</a></p>
      </div>
      <div class="col-md-3">
        <p>PHP: {{ phpversion() }}</p>
      </div>
    </div>
  </div>
</footer>

<div class="hidden">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="js/app.js"></script>
</div>
