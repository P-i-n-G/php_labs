<?php
if (!isset($_COOKIE['role'])) {
  setcookie('role', 'user', time() + (86400 * 30), "/", null, null, true);
  header("Refresh:0");
}
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>PHP Labs | Chall 5 ~ Cookie</title>
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
                  <div class="terminal-line">
                    <span class="help-msg">Chall 5 — Clue : <span class="code">Cookie</span> </span>
                  </div>
                </div>

                <div class="terminal-line">

                  <?php
                  if (isset($_COOKIE['role'])) {
                    $role = $_COOKIE['role'];
                    if (md5($role) === "e3afed0047b08059d0fada10f400c1e5"){
                      echo "<script>alert('Hai, Selamat datang kembali " . (string) $role . " <3')</script>";
                    } else {
                      echo "<script>alert('Kamu siapa? Aku ngga kenal! >:(')</script>";
                    }
                  }

                  ?>
                  <br>
                  <br>
                  <span class="success">Happy</span> <span class="directory">hacking ^_^</span> <span class="user-input" id="userInput"></span>
                </div>
              </div>
              <br>
              <button style="align:right;" class="button is-info is-outlined is-small"><a href="/php_labs">Home</a></button> |
              <button style="align:right;" class="button is-link is-outlined is-small"><a href="4.php">Previous Chall</a></button>
              <button style="align:right;" class="button is-link is-outlined is-small"><a href="6.php">Next Chall</a></button>
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