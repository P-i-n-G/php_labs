<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>PHP Labs | Chall 8 ~ Hidden & Encode</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel='stylesheet' href='../css/bulma.min.css'>
  <link rel="stylesheet" href="./style.css">
</head>

<body>
  <!-- partial:index.partial.html -->
  <section class="hero is-fullheight">
    <div class="hero-body">
      <div class="container">
        <div class="columns">
          <div class="column is-3 is-flex">
            <div class="column-child sidebar shadow">
              <div class="sidebar-header has-text-centered"><br>
                <div class="photo"><img src="img/logo.png" width="250px" /></div>
                <h5>Some php challenge labs for new <br> CTF player </h5>
              </div>
            </div>
          </div>
          <div class="column is-flex">
            <div class="column-child terminal shadow">
              <div class="terminal-bar dark-mode">
                <div class="icon-btn close"></div>
                <div class="icon-btn min"></div>
                <div class="icon-btn max"></div>
                <div class="terminal-bar-text is-hidden-mobile dark-mode-text">guest@P.i.n.G: ~</div>
              </div>
              <div class="terminal-window primary-bg" onclick="document.getElementById('dummyKeyboard').focus();">
                <div class="terminal-output" id="terminalOutput">
                </div>
                <div class="terminal-line">
                  <form name="myForm" action="8.php" method="post">
                    <div class="siimple-form">
                      <span class="help-msg">Chall 8 — Clue : <span class="code">Hidden & Encode</span> </span>
                      <br><br>
                      <div class="siimple-form-field">
                        <input type="text" class="siimple-input siimple-input--fluid" placeholder="Username" name="Username"> Username
                      </div>
                      <div class="siimple-form-field">
                        <input type="hidden" class="siimple-input siimple-input--fluid" placeholder="Password" name="Password" value="426175426177616e672e6964">
                      </div>
                      <div class="siimple-form-field"><br>
                        <input class="siimple-btn siimple-btn--blue" type="submit" value="Login">
                      </div>
                    </div>
                  </form>
                  <?php
                  if (isset($_POST['Username']) && ($_POST['Password'])) {
                    if (bin2hex($_POST['Username']) == '4d656e616e672e6964' && $_POST['Password'] == base64_decode('QmF1QmF3YW5nLmlk')) {

                      echo "<script>alert('Selamat Kamu berhasil!')</script>";
                    } else {
                      echo "<script>alert('Yah, kamu masih gagal :(')</script>";
                    }
                  } 
                    echo "<div style=\"text-align:left;font-size:1em;\">Silahkan login dengan akun yang benar</div>";
                  
                  ?>
                  <br>
                  <span class="success">Happy</span> <span class="directory">hacking ^_^</span> <span class="user-input" id="userInput"></span>
                </div>
              </div>
              <br>
              <button style="align:right;" class="button is-info is-outlined is-small"><a href="/php_labs">Home</a></button> |
              <button style="align:right;" class="button is-link is-outlined is-small"><a href="7.php">Previous Chall</a></button>
              <button style="align:right;" class="button is-link is-outlined is-small"><a href="9.php">Next Chall</a></button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer class="footer">
      <div class="content has-text-centered">
        <p>
          Support by <i class="fas fa-heart icon"></i> P.i.n.G.
        </p>
      </div>
    </footer>
  </section>
  <!-- partial -->
  <script src='../src/all.js'></script>
  <script src="./script.js"></script>

</body>

</html>