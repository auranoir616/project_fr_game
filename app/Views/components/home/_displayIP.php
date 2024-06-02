<style>
        .font {
        font-family: 'Courier New', Courier, monospace;
        color: #00FF00;
    }
    .window {
        height: 100%;
        background: black;
        border-top: 1px solid #00FF00;
        border-left: 1px solid #00FF00;
        border-right: 1px solid #00FF00;
        border-bottom: 1px solid #00FF00;
        overflow-y: scroll; /* Tetap menggunakan scroll */
        overflow-x: hidden; /* Tetap menggunakan hidden untuk overflow-x */
    }
    .window::-webkit-scrollbar {
        display: none; /* Hapus scrollbar untuk Chrome, Safari, dan Opera */
    }
    .window {
        -ms-overflow-style: none;  /* Hapus scrollbar untuk IE dan Edge */
        scrollbar-width: none;  /* Hapus scrollbar untuk Firefox */
    }

</style>
<div class="w-full h-28 mt-14">
<div class="border w-full flex flex-row justify-between items-start p-1">
    <div class="w-fit fontBar">Server IP Address</div>
    <div class="w-fit">
            <button id="minimizeButton" class="p-1">
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
    <div class="window" >
    <h1 class="font" ><span id="ip-address-server">Getting Server IP Address is: </span><span id="ip-address">Loading...</span></h1>
    <p class="font">-------------------------------------------</p>
    <p id='ipdesc' class="font">Connecting to Server...</p>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        let dataIp1 = Math.floor(Math.random() * 255) + 1;
        let dataIp2 = Math.floor(Math.random() * 255) + 1;
        let dataIp3 = Math.floor(Math.random() * 255) + 1;
        let dataIp4 = Math.floor(Math.random() * 255) + 1;
            setTimeout(() => {
                document.getElementById('ip-address').textContent = dataIp1+'.'+dataIp2+'.'+dataIp3+'.'+dataIp4;
                document.getElementById('ip-address-server').textContent = "Success Get Server IP Address: ";
                document.getElementById('ipdesc').textContent = `Connected to Server`;
                document.getElementById('ipdesc').innerHTML += '<span class="blinking-cursor">_</span>';
            },3000)
    
});

</script>
