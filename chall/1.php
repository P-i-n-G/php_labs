<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>PHP Labs | Chall 1 ~ Md5 Collision</title>
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
                <h5>Some php challenge labs for new <br> CTF player</h5>
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
                  <form name="myForm" action="1.php" method="post">
                    <div class="siimple-form">
                      <span class="help-msg">Chall 1 — Clue : <span class="code">Md5 collision</span> </span>
                      <br><br>
                      <div class="siimple-form-field">
                        <input type="text" class="siimple-input siimple-input--fluid" placeholder="String 1" name="String_1"> String 1
                      </div>
                      <div class="siimple-form-field">
                        <input type="text" class="siimple-input siimple-input--fluid" placeholder="String 2" name="String_2"> String 2
                      </div>
                      <div class="siimple-form-field"><br>
                        <input class="siimple-btn siimple-btn--blue" type="submit" value="Compare">
                      </div>
                    </div>
                  </form>
                  <?php
                  if (isset($_POST['String_1']) && ($_POST['String_2'])) {
                    if ( $_POST['String_1'] != $_POST['String_2']) {
                      if (md5($_POST['String_1']) == md5($_POST['String_2'])){
                        echo "<script>alert('Selamat kamu berhasil!')</script>";
                      } else {
                        echo "<script>alert('Try Harder! :)')</script>";
                      }
                    } else {
                      echo "<script>alert('Masukkan string yang berbeda! >:(')</script>";
                    }
                  } else {
                    echo "<div style=\"text-align:left;font-size:1em;\">Silahkan masukkan 2 string yang berbeda</div>";
                  }
                  ?>
                  <br>
                  <span class="success">Happy</span> <span class="directory">hacking ^_^</span> <span class="user-input" id="userInput"></span>
                </div>
              </div>
              <br>
              <button style="align:right;" class="button is-info is-outlined is-small"><a href="/php_labs">Home</a></button> |
              <button style="align:right;" class="button is-link is-outlined is-small"><a href="2.php">Next Chall</a></button>
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