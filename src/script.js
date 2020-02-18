const BLACKLISTED_KEY_CODES = [38];
const COMMANDS = {
    help: 'Supported commands: <span class="code">about</span>, <span class="code">ls</span>',
    ls: 'List of chall : <br><br> ~ <a href="/php_labs/chall/1.php">Chall 1 | Md5 collision </a><br> ~ <a href="/php_labs/chall/2.php">Chall 2 | Strcmp </a><br>~ <a href="/php_labs/chall/3.php">Chall 3 | Magic Hash </a><br>~ <a href="/php_labs/chall/4.php">Chall 4 | Magic Hash++ </a><br>~ <a href="/php_labs/chall/5.php">Chall 5 | Cookie </a><br>~ <a href="/php_labs/chall/6.php">Chall 6 | Browser </a><br>~ <a href="/php_labs/chall/7.php">Chall 7 | Tipe Data </a><br>~ <a href="/php_labs/chall/8.php">Chall 8 | Hidden & Encode </a><br>~ <a href="/php_labs/chall/9.php">Chall 9 | Query String </a><br>~ <a href="/php_labs/chall/10.php">Chall 10 | POST Extract </a><br>~ <a href="/php_labs/chall/11.php">Chall 11 | Tergantikan :" </a><br>~ <a href="/php_labs/chall/12.php">Chall 12 | PHP Shell </a><br>~ <a href="/php_labs/chall/13.php">Chall 13 | Referer </a><br>~ <a href="/php_labs/chall/14.php">Chall 14 | Eval </a><br>~ <a href="/php_labs/chall/15.php">Chall 15 | Non-alphanumeric </a><br></a><br>',
    about: 'PHP Labs | P.i.n.G<br>Some php challenge labs for new CTF player , <br>This website is made for practice, please dont hack',
};
let userInput, terminalOutput;

const app = () => {
    userInput = document.getElementById("userInput");
    terminalOutput = document.getElementById("terminalOutput");
    document.getElementById("dummyKeyboard").focus();
    console.log("Application loaded");
};

const execute = function executeCommand(input) {
    let output;
    input = input.toLowerCase();
    if (input.length === 0) {
        return;
    }
    output = `<div class="terminal-line"><span class="success">➜</span> <span class="directory">~</span> ${input}</div>`;
    if (!COMMANDS.hasOwnProperty(input)) {
        output += `<div class="terminal-line">no such command: ${input}</div>`;
        console.log("Oops! no such command");
    } else {
        output += COMMANDS[input];
    }

    terminalOutput.innerHTML = `${
    terminalOutput.innerHTML
  }<div class="terminal-line">${output}</div>`;
    terminalOutput.scrollTop = terminalOutput.scrollHeight;
};

const key = function keyEvent(e) {
    const input = userInput.innerHTML;

    if (BLACKLISTED_KEY_CODES.includes(e.keyCode)) {
        return;
    }

    if (e.key === "Enter") {
        execute(input);
        userInput.innerHTML = "";
        return;
    }

    userInput.innerHTML = input + e.key;
};

const backspace = function backSpaceKeyEvent(e) {
    if (e.keyCode !== 8 && e.keyCode !== 46) {
        return;
    }
    userInput.innerHTML = userInput.innerHTML.slice(
        0,
        userInput.innerHTML.length - 1
    );
};

document.addEventListener("keydown", backspace);
document.addEventListener("keypress", key);
document.addEventListener("DOMContentLoaded", app);