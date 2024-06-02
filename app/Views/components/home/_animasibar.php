<style>
    .chart-container {
        z-index: -5;
        width: 200px;
        height: 150px;
        background-color: #f0f0f0;
        position: relative;
    }

    .bar {
        width: 20px;
        height: 100%;
        background-color: #007bff;
        position: absolute;
        bottom: 0;
        animation: animateBar 2s infinite alternate;
    }

    @keyframes animateBar {
        0% {
            height: 10%;
        }
        100% {
            height: 90%;
        }
    }
</style>

<div class="chart-container flex flex-row justify-start item">
    <div class="bar" id="bar1"></div>
    <div class="bar" id="bar2"></div>
    <div class="bar" id="bar3"></div>
    <div class="bar" id="bar4"></div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const bars = document.querySelectorAll('.bar');

        function randomizeHeight(bar) {
            const randomHeight = Math.floor(Math.random() * 80) + 10; // Random height between 10% and 90%
            bar.style.height = randomHeight + '%';
        }

        function animateBar(bar) {
            setTimeout(function() {
                randomizeHeight(bar);
                animateBar(bar); // Recursive call to animateBar for continuous animation
            }, Math.random() * 2000); // Change height randomly between 0 to 2 seconds
        }

        bars.forEach(bar => {
            animateBar(bar);
        });
    });
</script>
