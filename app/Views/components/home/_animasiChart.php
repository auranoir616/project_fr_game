<style>
        #Chart {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0f0f0;
        }
        canvas {
            max-width: 100%;
            max-height: 100%;
        }
    </style>
</head>
<div class="w-11/12 h-80">
<div class="border w-full flex flex-row justify-between items-start p-1">
    <div class="w-fit fontBar">Running Program</div>
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
    <div class="w-full min-h-80 window" id="myDiv">
        <div id="Chart">
            <canvas id="myChart" class="window w-full h-full"></canvas>
        </div>
    </div>
</div>

<script>
    const ctx = document.getElementById('myChart').getContext('2d');
const data = {
    labels: Array.from({ length: 10 }, (_, i) => i + 1),
    datasets: [{
        label: 'Random Data',
        borderColor: 'rgb(75, 192, 192)',
        tension: 0.1,
        data: Array.from({ length: 10 }, () => Math.floor(Math.random() * 100))
    }]
};

const config = {
    type: 'line',
    data: data,
    options: {
        scales: {
            x: {
                beginAtZero: true
            },
            y: {
                beginAtZero: true
            }
        }
    }
};

const myChart = new Chart(ctx, config);

function updateChart() {
    myChart.data.datasets[0].data = myChart.data.datasets[0].data.map(() => Math.floor(Math.random() * 100));
    myChart.update();
}

setInterval(updateChart, 1000);

</script>

