<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>PHP Labs | Chall 6 ~ Browser</title>
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
                    <span class="help-msg">Chall 6 — Clue : <span class="code">Browser</span></span>
                  </div>
                </div>
                <div class="terminal-line">
                <?php
                  if (isset($_SERVER['HTTP_USER_AGENT'])) {
                    $browser = $_SERVER['HTTP_USER_AGENT'];
                    if ($browser === "AnonymousBrowser"){
                      echo "<script>alert('Hai, Selamat datang kembali <3')</script>";
                    } else {
                      echo "<script>alert('Kamu siapa? Aku ngga kenal! >:(')</script>";
                    }
                  }
                  ?>
                  <br>
                  <span class="success">Happy</span> <span class="directory">hacking ^_^</span> <span class="user-input" id="userInput"></span>
                </div>
              </div>
              <br>
              <button style="align:right;" class="button is-info is-outlined is-small"><a href="/php_labs">Home</a></button> |
              <button style="align:right;" class="button is-link is-outlined is-small"><a href="5.php">Previous Chall</a></button>
              <button style="align:right;" class="button is-link is-outlined is-small"><a href="7.php">Next Chall</a></button>
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
  <script>
    if (localStorage.getItem("labs-P.i.n.G") !== null) {
      document.getElementById("content").innerHTML = "<span style=\"font-size:0.4em;\">Current value of <b>labs-P.i.n.G</b> LocalStorage is: </span><br>" + localStorage.getItem("labs-P.i.n.G") + "";
    }
  </script>
</body>

</html>