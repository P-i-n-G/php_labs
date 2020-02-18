<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>PHP Labs | Query String</title>
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
                    <span class="help-msg">Chall 9 — Clue : <span class="code">Query String</span> </span>
                  </div>
                </div>
                <div class="terminal-line">
                  <?php
                  if (!empty($_SERVER['QUERY_STRING'])) {
                    $query = $_SERVER['QUERY_STRING'];
                    $res = parse_str($query);
                    if (!empty($res['action'])) {
                      $action = $res['action'];
                    }
                  }

                  if ($action === 'login') {
                    if (!empty($res['user'])) {
                      $user = $res['user'];
                    }
                    if (!empty($res['pass'])) {
                      $pass = $res['pass'];
                    }
                    if (!empty($user) && !empty($pass)) {
                      $hashed = hash('md5', $user . $pass);
                    }
                    if (!empty($hashed) && $hashed === '2599adb4e86aecb0137cf9404ff538bc') {
                      echo "<script>alert('Selamat datang kembali <3')</script>";
                    } else {
                      echo "<script>alert('Sedikit lagi berhasil >__<')</script>";
                    }
                  }
                  
                  echo "<div style=\"text-align:left;font-size:1em;\">Bisakah kamu login tanpa form? :D</div>";

                  ?>
                  <br><br><br>
                  <span class="success">Happy</span> <span class="directory">hacking ^_^</span> <span class="user-input" id="userInput"></span>
                </div>
              </div>
              <br>
              <button style="align:right;" class="button is-info is-outlined is-small"><a href="/php_labs">Home</a></button> |
              <button style="align:right;" class="button is-link is-outlined is-small"><a href="8.php">Previous Chall</a></button>
              <button style="align:right;" class="button is-link is-outlined is-small"><a href="10.php">Next Chall</a></button>
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