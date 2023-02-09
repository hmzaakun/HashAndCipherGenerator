<html>
<head>
  <title>Cipher Generator</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
</head>
<body>
  <div class="container my-5">
    <h1 class="text-center mb-5">Cipher Generator</h1>
    <form action="" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <textarea class="form-control" name="inputText" rows="5"></textarea><br>
        <div class="form-group">
        <label for="inputKey">Clé de chiffrement</label>
        <input type="text" class="form-control" id="inputKey" name="inputKey" placeholder="Entrer la clé de chiffrement"/>
        </div>
        <br>
        <div style="text-align:center;">
            <p class="text-center">Choisissez le type de chiffrement :</p>
            <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="hash_type" id="aes" value="AES" checked>
            <label class="form-check-label" for="aes">AES</label>
            </div>
            <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="hash_type" id="rsa" value="RSA">
            <label class="form-check-label" for="rsa">RSA</label>
            </div>
            <br><br>
            <input type="submit" class="btn btn-primary" value="Générer le chiffrement">
        </div>
      </div>
    </form>
    <br><br>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST["hash_type"]) && isset($_POST["inputKey"])) {
            $inputText = $_POST["inputText"];
            $inputKey = $_POST["inputKey"];
            $encryptionMethod = $_POST["hash_type"];
            if ($encryptionMethod === "AES") {
                $encryptedText = openssl_encrypt($inputText, 'AES-128-CBC', $inputKey);
                echo "<h2 class='mt-5'>Message chiffré (AES):</h2>";
                echo "<p>$encryptedText</p>";
            } elseif ($encryptionMethod === "RSA") {
                echo "<h2 class='mt-5'>Message chiffré (RSA):</h2>";
                echo "<p>J'avoue ca marche pas</p>";
            }
            }
    }
    ?>
  </div>

  <div class="container my-5">
    <h1 class="text-center mb-5">dé Cipher Generator</h1>
    <form action="" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <textarea class="form-control" name="inputText2" rows="5"></textarea><br>
        <div class="form-group">
        <label for="inputKey">Clé de déchiffrement</label>
        <input type="text" class="form-control" id="inputKey" name="inputKey2" placeholder="Entrer la clé de déchiffrement"/>
        </div>
        <br>
        <div style="text-align:center;">
            <p class="text-center">Choisissez le type de chiffrement :</p>
            <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="hash_type2" id="aes" value="AES" checked>
            <label class="form-check-label" for="aes">AES</label>
            </div>
            <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="hash_type2" id="rsa" value="RSA">
            <label class="form-check-label" for="rsa">RSA</label>
            </div>
            <br><br>
            <input type="submit" class="btn btn-primary" value="Générer le déchiffrement">
        </div>
      </div>
    </form>
    <br><br>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST["hash_type2"]) && isset($_POST["inputKey2"])) {
            $inputText2 = $_POST["inputText2"];
            $inputKey2 = $_POST["inputKey2"];
            $encryptionMethod = $_POST["hash_type2"];
            if ($encryptionMethod === "AES") {
                $encryptedText2 = openssl_decrypt($inputText2, 'AES-128-CBC', $inputKey2);
                echo "<h2 class='mt-5'>Message chiffré (AES):</h2>";
                echo "<p>$encryptedText2</p>";
            } elseif ($encryptionMethod === "RSA") {
                echo "<h2 class='mt-5'>Message chiffré (RSA):</h2>";
                echo "<p>J'avoue ca marche pas</p>";
            }
            }
    }
    ?>
  </div>
</body>
</html>
