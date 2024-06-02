<div class="w-full h-12 -z-10 p-1 bg-black borderWindow flex flex-row justify-start items-center">
Start
<button id="runningProgramButton" style="display: none;" class="w-fit h-10 border p-1 fontBar mx-1">Running Program</button>
<button id="ipButton" style="display: none;" class="w-fit h-10 border p-1 fontBar mx-1">Servier Ip Address</button>
<button id="pingButton" style="display: none;" class="w-fit h-10 border p-1 fontBar mx-1">Connection</button>
<button id="dropdownButton" style="display: none;" class="w-fit h-10 border p-1 fontBar mx-1">Application Engine</button>
<button id="loginButton" style="display: none;" class="w-fit h-10 border p-1 fontBar mx-1">Login Credentials</button>
</div>

<script>
    document.getElementById('runningProgramButton').addEventListener('click', function() {
    let windowRunningProgram = document.getElementById('runningProgramWindow')
    let buttonRunningProgram = document.getElementById('runningProgramButton')
    windowRunningProgram.style.visibility = 'visible';
    buttonRunningProgram.style.display = 'none';
    });

    document.getElementById('ipButton').addEventListener('click', function() {
    let windowIp = document.getElementById('ipWindow')
    let buttonIp = document.getElementById('ipButton')
    windowIp.style.visibility = 'visible';
    buttonIp.style.display = 'none';
    });

    document.getElementById('pingButton').addEventListener('click', function() {
    let windowPing = document.getElementById('pingWindow')
    let buttonPing = document.getElementById('pingButton')
    windowPing.style.visibility = 'visible';
    buttonPing.style.display = 'none';
    });

    document.getElementById('dropdownButton').addEventListener('click', function() {
    let windowDropdown = document.getElementById('dropdownWindow')
    let buttonDropdown = document.getElementById('dropdownButton')
    windowDropdown.style.visibility = 'visible';
    buttonDropdown.style.display = 'none';
    });

    document.getElementById('loginButton').addEventListener('click', function() {
    let loginWindow = document.getElementById('loginWindow')
    let loginButton = document.getElementById('loginButton')
    loginWindow .style.visibility = 'visible';
    loginButton.style.display = 'none';
    });
</script>