<!DOCTYPE html>

<?php
// Define PHP variables here
  $pageTitle = "Today, a daily update";
  $pageDescription = "A simple webpage that updates me on somethings I like to know each day.";

  // Use php to find the current date
  $currentDate = cal_to_jd(CAL_GREGORIAN,date("m"),date("d"),date("Y"));
?>

<html>

  <head>
    <!-- Pull in the head, info populated from the PHP variables above -->
    <?php include('_partials/head.php'); ?>
  </head>

  <body>
    <main>

      Hey Chris, <span id="happySynonym"></span> <span><?php echo(jddayofweek($currentDate,1)); ?></span>. It's 23 outside &amp; in an hour it will be raining. There is a strong north westerly wind with gusts of 14mph. A joke you say? What is red and smells like blue paint? Red paint.

    </main>
  </body>

  <!-- Pull in scripts -->
  <?php include('_partials/scripts.php'); ?>

</html>
