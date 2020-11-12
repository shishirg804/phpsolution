<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Search Users</title>
  <link rel="stylesheet" href="https://bootswatch.com/4/cosmo/bootstrap.min.css">
</head>

<body>
  <div class="container">
    <h1>Search Users</h1>
    <form action="">
      <label for="search">Search</label>
      <input type="text" name='search' class='form-control' onkeyup="showSuggestion(this.value)" />

    </form>
    <p>Suggestion:<span id='output' style='font-weight:bold;'></span></p>
  </div>
  <script>
  const showSuggestion = (str) => {
    if (str.length === 0) {
      document.getElementById('output').innerHTML = '';
    } else {
      // ajax request
      const xml = new XMLHttpRequest();
      xml.onreadystatechange = function() {
        if (this.readyState === 4 && this.status === 200) {
          document.getElementById('output').innerHTML = this.responseText;
        }
      }

      xml.open('GET', 'suggest.php?q=' + str, true);
      xml.send();
    }

  }
  </script>
</body>

</html>