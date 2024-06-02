<style>
        .font {
        font-family: 'Courier New', Courier, monospace;
        color: #00FF00;
    }
    .inputLogin{
        color: #00FF00;
        border: 1px solid #00FF00;
        background-color: black;
    }
    .buttonForm{
        color: #00FF00;
        border: 1px solid #00FF00;
        background-color: black;
        width: 30%; /* Atur lebar tombol */
        height: 100%; /* Atur tinggi tombol */

    }
    .table{
        width: 100%;
    }
    .windowForm{
        background: black;
        border-top: 1px solid #00FF00;
        border-left: 1px solid #00FF00;
        border-right: 1px solid #00FF00;
        border-bottom: 1px solid #00FF00;
        overflow-y: scroll; /* Tetap menggunakan scroll */
        overflow-x: hidden; /* Tetap menggunakan hidden untuk overflow-x */
    }
    .windowForm::-webkit-scrollbar {
        display: none; /* Hapus scrollbar untuk Chrome, Safari, dan Opera */
    }
    .windowForm {
        -ms-overflow-style: none;  /* Hapus scrollbar untuk IE dan Edge */
        scrollbar-width: none;  /* Hapus scrollbar untuk Firefox */
    }
    .containerLogin{
        margin: 10px;
        background-color: #00FF00;
        border-top: 1px solid #00FF00;
        border-left: 1px solid #00FF00;
        border-right: 1px solid #00FF00;
        border-bottom: 1px solid #00FF00;
        color: black;
        font-weight: bold;


    }
    @keyframes blink {
        0% {
            opacity: 0;
        }
        100% {
            opacity: 1;
        }
    }

    .btn-glow {
        position: relative;
        padding: 10px 20px;
        text-decoration: none;
        background-color: black;
        overflow: hidden;
        z-index: 0;
    }

    .btn-glow:before {
        content: '';
        position: absolute;
        top: -50%;
        left: -50%;
        width: 200%;
        height: 200%;
        background: linear-gradient(45deg, rgba(255, 0, 0, 0.5), rgba(0, 255, 0, 0.5), rgba(0, 0, 255, 0.5));
        background-size: 200% 200%;
        z-index: -1;
        opacity: 0;
        transition: opacity 0.5s;
        border-radius: inherit;
        animation: glow-animation 2s infinite;
    }

    .btn-glow:before {
        opacity: 1;
    }

    @keyframes glow-animation {
        0% { background-position: 0% 50%; }
        50% { background-position: 100% 50%; }
        100% { background-position: 0% 50%; }
    }
    #buttonRunning,  #buttonReset:hover{
        cursor: pointer;
        background: #00FF00;
        color: black;
    }


</style>
<div class="w-full h-60 bg-black borderWindow" id="loginWindow" style="visibility:visible">
    <div class="border w-full flex flex-row justify-between items-start p-1">
    <div class="w-fit fontBar">Login Credentials</div>
    <div class="w-fit">
            <button id="minimizeButtonLogin" class="p-1">
                <i class="fas fa-window-minimize"></i>
            </button>
            <button id="maximizeButton" class="p-1">
                <i class="fas fa-window-maximize"></i>
            </button>
            <button id="closeButton" class="p-1">
                <i class="fas fa-times"></i>
            </button>
        </div>
    </div>
    <div class="bg-black " id="myDiv">
        
        <form action="" class="font flex flex-col justify-center items-center m-2 bg-black" autocomplete="off">
            <table>
                <tr>
                    <td><label for="Website">Website</label></td>
                    <td>:</td>
                    <td><input class="inputLogin" type="text" id="Website" name="Website"></td>
                </tr>
                <tr>
                    <td><label for="Username">Username</label></td>
                    <td>:</td>
                    <td><input class="inputLogin" type="text" id="Username" name="Username"></td>
                </tr>
                <tr>
                    <td><label for="password">Password</label></td>
                    <td>:</td>
                    <td><input class="inputLogin" type="password" id="Password" name="password"></td>
                </tr>
            </table>
            <div class="flex w-full flex-row justify-center items-center m-2"> 
                <button data-modal-target="static-modal-runningprogram" onclick="RunProgram()" data-modal-toggle="static-modal-runningprogram" type="button" class="buttonForm m-1" id="buttonRunning" disabled>Run Program</button>
                <button id="buttonReset" type="reset" class="buttonForm m-1">Reset</button>
            </div>
        </form>
    </div>
</div>

<script>
function RunProgram(){
    let webInput = document.getElementById('Website').value;
    let userInput = document.getElementById('Username').value;
    const RunningProgramText = `
const Website = ${webInput};
const Username = ${userInput};
const Password = **********;
    fetch('https://api.ipify.org?format=json',{
        method: 'POST',
        headers: {
        'Content-Type': 'application/json'
        },
        body: JSON.stringify({
            Website: ${webInput},
            Username: ${userInput},
            Password: **********
    });
    })
    .then(response => response.json())
    .then(data => {
        console.log(Login Success !!);
     })`;

    let indexRunningProgram = 0;
    const speedRunningProgram = 3; // Kecepatan mengetik dalam milidetik

    function typeWriter() {
        if (indexRunningProgram < RunningProgramText.length) {
            document.getElementById('Running-Programs').innerHTML += RunningProgramText.charAt(indexRunningProgram);
            indexRunningProgram++;
            const runningProgram = document.getElementById('runningProgram');
            runningProgram.scrollTop = runningProgram.scrollHeight; // Tambahkan ini untuk scroll otomatis
            setTimeout(typeWriter, speedRunningProgram);
        } else {
            document.getElementById('Running-Programs').innerHTML += '<span class="blinking-cursor">_</span>';
            setTimeout(() => {
                document.getElementById('Running-Programs').innerHTML = 'Running Program Successfully...'; 
            }, 1500);
            setTimeout(() => {
                document.getElementById('static-modal-runningprogram').classList.add('hidden');
            }, 2500);
            setTimeout(() => {
                document.getElementById('static-modal').classList.remove('hidden');
                increaseProgress();
            }, 3000);
        }
    }

    typeWriter();
}

function increaseProgress() {
    var progressElement = document.getElementById('loading');
    var currentWidth = parseInt(progressElement.style.width, 10);
    // Meningkatkan lebar sebesar 1% setiap detik
    var interval = setInterval(function() {
        if (currentWidth >= 100) {
            clearInterval(interval); // Hentikan interval jika lebar mencapai 100%
            document.getElementById('buttonLogin').classList.remove('hidden');
            document.getElementById('buttonLogin').classList.add('flex');
        } else {
            currentWidth++;
            progressElement.style.width = currentWidth + '%';
        }
    }, 25); // Waktu interval dalam milidetik (di sini 25ms)
}

document.addEventListener("DOMContentLoaded", function() {
        let webInput = document.getElementById('Website');
        let userInput = document.getElementById('Username');
        let passInput = document.getElementById('Password');
        let button = document.getElementById('buttonRunning');

        function validateInput(){
            let web = webInput.value.trim();
            let user = userInput.value.trim();
            let pass = passInput.value.trim();
            if(web !== '' && user !== '' && pass !== ''){
                button.disabled = false;
            }else{
                button.disabled = true;
            }
        }
        webInput.addEventListener('input', validateInput);
        userInput.addEventListener('input', validateInput);
        passInput.addEventListener('input', validateInput);
        
        validateInput();
    // Handle minimize, maximize, and close buttons
    // document.getElementById('minimizeButtonCode').addEventListener('click', function() {
    //     document.getElementById('myDiv').style.display = 'none'; // Example action for minimize
    // });

    // document.getElementById('maximizeButton').addEventListener('click', function() {
    //     const myDiv = document.getElementById('myDiv');
    //     if (myDiv.classList.contains('maximized')) {
    //         myDiv.classList.remove('maximized');
    //         myDiv.style.width = '50%'; // Example action to restore size
    //     } else {
    //         myDiv.classList.add('maximized');
    //         myDiv.style.width = '100%'; // Example action to maximize
    //     }
    // });

    // document.getElementById('closeButton').addEventListener('click', function() {
    //     document.getElementById('myDiv').style.display = 'none'; // Example action for close
    // });

    //fungsi minimize
    document.getElementById('minimizeButtonLogin').addEventListener('click', function() {
    let loginWindow = document.getElementById('loginWindow')
    let loginButton = document.getElementById('loginButton')
    loginWindow.style.visibility = 'hidden';
    loginButton.style.display = 'block';
    });

});
</script>
