<style>
        .fontCode {
        font-family: 'Courier New', Courier, monospace;
        color: #00FF00;
        font-weight: lighter;
    }

    #pingOutput{
      width: 100%;
      white-space: pre-line;
      overflow-y: scroll;
        padding: 2px;
        background: black;
        overflow-y: hidden;
}
.maximized {
    width: 80vw;
    height: 80vh;
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background: #000;
    z-index: 1000;
    display: flex;
    flex-direction: column;
}


</style>
<div class="w-full z-10 borderWindow  min-h-[550px]" id="pingWindow">
<div class="border w-full flex flex-row justify-between items-start p-1">
    <div class="w-fit fontBar">Connection</div>
    <div class="w-fit">
            <button id="minimizeButtonPing" class="p-1">
                <i class="fas fa-window-minimize"></i>
            </button>
            <button id="maximizeButtonPing" class="p-1">
                <i class="fas fa-window-maximize"></i>
            </button>
            <button id="closeButton" class="p-1">
                <i class="fas fa-times"></i>
            </button>
        </div>
    </div>
    <div style="background-image: url('https://media3.giphy.com/media/v1.Y2lkPTc5MGI3NjExMWVqbnEzMHEya3Fyang4bTQxdDhjMmN3MXpzd2NzMHZ2MXBiN2gwdCZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9Zw/l2Sq5sLKyulQOQC8U/giphy.gif'); background-size: cover;" 
    class="ping-output backdrop-grayscale-0 bg-white/30 font h-[550px] font-semibold" id="pingOutput">
    <span id="connection" >Checking Connection...</span>
      </div>
</div>
<script>
    const pingOutput = document.getElementById('pingOutput');
    const connection = document.getElementById('connection');

function simulatePing() {
  setTimeout(() => {
    const interval = setInterval(() => {
      const pingTime = Math.floor(Math.random() * 200) + 1; // Random ping time between 1ms and 200ms
      const response = `Reply from 192.168.1.8: bytes=32 time=${pingTime}ms`;
      connection.remove();
      pingOutput.innerHTML += response + '\n';
      pingOutput.scrollTop = pingOutput.scrollHeight;
    }, 1000); // Adjust interval as needed (in milliseconds)
  },3000)

}

simulatePing();

document.getElementById('minimizeButtonPing').addEventListener('click', function() {
    let windowPing = document.getElementById('pingWindow')
    let buttonPing = document.getElementById('pingButton')
    windowPing.style.visibility = 'hidden';
    buttonPing.style.display = 'block';
    });

    // document.getElementById('maximizeButtonPing').addEventListener('click', function() {
    //     const pingWindow = document.getElementById('pingWindow');
    //     if (pingWindow.classList.contains('maximized')) {
    //       pingWindow.classList.remove('maximized');
    //       pingWindow.style.width = '50%'; // Example action to restore size
    //     } else {
    //       pingWindow.classList.add('maximized');
    //       pingWindow.classList.add('w-screen');
    //       pingWindow.classList.add('h-screen');
    //       pingWindow.classList.add('fixed');
    //       pingWindow.classList.add('left-0 top-0 right-0 bottom-0'); 
    //       // pingWindow.style.width = '100vh'; // Example action to maximize
    //     }
    // });

    document.getElementById('maximizeButtonPing').addEventListener('click', function() {
        const pingWindow = document.getElementById('pingWindow');
        if (pingWindow.classList.contains('maximized')) {
            pingWindow.classList.remove('maximized');
        } else {
            pingWindow.classList.add('maximized');
        }
    });

    document.getElementById('closeButton').addEventListener('click', function() {
        let windowPing = document.getElementById('pingWindow');
        windowPing.classList.add('hidden');
    });








</script>