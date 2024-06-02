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

</style>
<div class="w-full h-[500px] borderWindow">
<div class="border w-full flex flex-row justify-between items-start p-1">
    <div class="w-fit fontBar">Connection</div>
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
    <div class="ping-output font h-full borderWindow" id="pingOutput">
    <span id="connection">Checking Connection...</span>
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

</script>