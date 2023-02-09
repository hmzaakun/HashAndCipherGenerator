<html>
<head>
  <title>Hash Generator</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
</head>
<body>
  <div class="container my-5">
    <h1 class="text-center mb-5">Hash Generator</h1>
    <form action="" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <textarea class="form-control" name="text" rows="5"></textarea><br>
        <div class="text-center my-5">Ou</div><br>
        <div class="text-center">
          Téléchargez un fichier : <input type="file" name="file"><br><br>
        </div>
        <div style="text-align:center;">
            <p class="text-center">Choisissez le type de hashage :</p>
            <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="hash_type" id="md5" value="md5">
            <label class="form-check-label" for="md5">MD5</label>
            </div>
            <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="hash_type" id="sha256" value="sha256" checked>
            <label class="form-check-label" for="sha256">SHA-256</label>
            </div>
            <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="hash_type" id="keccak512" value="sha3-512">
            <label class="form-check-label" for="keccak512">Keccak-512</label>
            </div>
            <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="hash_type" id="ripemd160" value="ripemd160">
            <label class="form-check-label" for="ripemd160">RipeMD160</label>
            </div>
            <br><br>
            <input type="submit" class="btn btn-primary" value="Générer le hash">
        </div>
      </div>
    </form>
    <br><br>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      if (isset($_POST['text'])) {
        $text = $_POST['text'];
        $hash = hash($_POST['hash_type'], $text);
        echo "<p class='text-center'>Le hash du texte est : <strong>$hash</strong></p>";
      } else if (isset($_FILES['file'])) {
        $file = file_get_contents($_FILES['file']['tmp_name']);
        $hash = hash($_POST['hash_type'], $file);
        echo "<p class='text-center'>Le hash du fichier est : <strong>$hash</strong></p>";
      } else {
        echo "<p class='text-center'>Veuillez saisir du texte ou télécharger un fichier.</p>";
      }
    }
    ?>
  </div>
</body>
</html>
