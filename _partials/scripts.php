
<!-- Script to pull in a random word from the array and output to element-->
<script>
  var words = ["happy", "joyful", "mellow", "pleasant", "cheerful", "rosy"];

  var getRandomWord = function () {
      return words[Math.floor(Math.random() * words.length)];
  };

  var word = getRandomWord();

  console.log(word);

  document.getElementById("happySynonym").textContent = word;
</script>
