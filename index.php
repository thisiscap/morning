<!DOCTYPE html>

<?php
  // Define PHP variables here
  $pageTitle = "Today, a daily update";
  $pageDescription = "A simple webpage that updates me on somethings I like to know each day.";
  $userName = "Chris";
?>

<html>

  <head>
    <!-- Pull in the head, info populated from the PHP variables above -->
    <?php include('_partials/head.php'); ?>
  </head>

  <body>
    <!-- Pull in Dark Sky API code for weather output -->
    <?php include('_partials/dark-sky-api.php') ?>

    <!-- Start the text block -->
    <main>

      Hey
      <span><?php echo $userName ?></span>,
      <span id="happySynonym"><!-- Word output with JS --></span>
      <span><?php echo date("l"); ?></span>.

      It's
      <span><?php echo round($weather['currently']['apparentTemperature']) ?>&deg;</span>
      outside &amp;

      there will be <span><?php echo strtolower($weather['minutely']['summary']) ?></span>

      There is a <span><?php echo round($weather['currently']['windSpeed']) ?>mph</span> wind coming from the
      <span>
      <?php
        // Found this snippet to echo into a variable (echo value is nummeral degree, i.e 123)
        ob_start();
        echo $weather['currently']['windBearing'];
        $windBearing = ob_get_contents();
        ob_end_clean();

        // Put it into something more understandable
        if (($windBearing >= "0") && ($windBearing <= "45")) { echo "North."; }
        elseif (($windBearing >= "45") && ($windBearing <= "90")) { echo "North East."; }
        elseif (($windBearing >= "90") && ($windBearing <= "135")) { echo "East."; }
        elseif (($windBearing >= "135") && ($windBearing <= "180")) { echo "South East."; }
        elseif (($windBearing >= "180") && ($windBearing <= "225")) { echo "South."; }
        elseif (($windBearing >= "225") && ($windBearing <= "270")) { echo "South West."; }
        elseif (($windBearing >= "270") && ($windBearing <= "315")) { echo "West."; }
        else { echo "North West."; }
      ?>
      </span>

      <?php
        // Check the date, if a weekday then check the time, display different results
        $currentTime = date("H");
        $currentWeekday = date("l");

        ob_start();
        echo $weather['currently']['windSpeed'];
        $windSpeed = ob_get_contents();
        ob_end_clean();

        // Nice message during the weekend
        if (($currentWeekday == "Saturday" ) || ($currentWeekday == "Sunday")) {} //Do nothing
        // If it is a weekday, then check time, wind speed and direction for headwinds
        if (($currentTime <= "11") && ($windSpeed >= "6") && ($windBearing >= "225")) { echo "You'll have a headwind going to work today."; }
      ?>

    </main>

    <!-- Add Dark Sky mandatory message -->
    <aside>
      <a href="https://darksky.net/poweredby/" title="Check out the Dark Sky website.">Powered by Dark Sky</a>
    </aside>

  </body>

  <!-- Pull in scripts -->
  <?php include('_partials/scripts.php'); ?>

</html>
