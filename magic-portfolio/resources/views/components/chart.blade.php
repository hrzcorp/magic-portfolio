<div class="flex text-[#27326F] font-semibold font-outfit ">
    <div class="bg-white px-8 pb-8 pt-4 rounded-xl shadow-lg lg:w-72 max-h-[400px] text-center">
        <h2 class="text-lg pb-3">Industries Categories</h2>
        <div class="chart-container lg:relative m-auto flex items-center justify-center">
            <canvas id="myDonutChart" class="max-w-40 max-h-40 flex justify-center items-center"></canvas>
        </div>
        <div class="flex flex-col justify-start gap-1 pt-7">
            <div class="flex items-center gap-2 text-sm"><span class="h-4 w-4 rounded-full bg-[#1078F8]"></span> IT & Design</div>
            <div class="flex items-center gap-2 text-sm"><span class="h-4 w-4 rounded-full bg-[#1CE284]"></span> Marketing & Sales</div>
            <div class="flex items-center gap-2 text-sm"><span class="h-4 w-4 rounded-full bg-[#FBA117]"></span> Finance</div>
            <div class="flex items-center gap-2 text-sm"><span class="h-4 w-4 rounded-full bg-[#FA284C]"></span> Human & Resource</div>
            <div class="flex items-center gap-2 text-sm"><span class="h-4 w-4 rounded-full bg-[#6145C5]"></span> General</div>
        </div>
    </div>
</div>

<script>
    const ctx = document.getElementById('myDonutChart').getContext('2d');

    const sliceThickness = {
        id: 'sliceThickness',
        beforeDraw(chart) {
            const outerRadii = [200, 210, 210, 210, 210];
            const innerRadii = [330, 310, 310, 310, 310];
            const meta = chart.getDatasetMeta(0);
            meta.data.forEach((data, index) => {
                data.outerRadius = (chart.chartArea.width / outerRadii[index]) * 100;
                data.innerRadius = (chart.chartArea.width / innerRadii[index]) * 100;
            });
        }
    };

    const doughnutLabel = {
        id: 'doughnutLabel',
        beforeDraw(chart, args, pluginOptions) {
            const { ctx, data } = chart;
            ctx.save();
            const xCoor = (chart.chartArea.left + chart.chartArea.right) / 2;
            const yCoor = (chart.chartArea.top + chart.chartArea.bottom) / 2;
            ctx.font = 'bold 16px sans-serif';
            ctx.fillStyle = 'rgba(39, 50, 111, 1)';
            ctx.textAlign = 'center';
            ctx.textBaseline = 'middle';
            ctx.fillText('$14,337.94', xCoor, yCoor - 5);

            ctx.font = 'normal 10px sans-serif';
            ctx.fillStyle = 'rgba(93, 197, 197, 1)';
            ctx.fillText('Total Portfolio', xCoor, yCoor + 10);
            ctx.restore();
        }
    };

    const myDonutChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: ['IT & Design', 'Marketing & Sales', 'Finance', 'Human & Resource', 'General'],
            datasets: [{
                data: [25, 50, 40, 15, 15],
                backgroundColor: [
                    '#1078F8', // blue
                    '#1CE284', // green
                    '#FBA117', // orange
                    '#FA284C', // red
                    '#6145C5'  // purple
                ],
                borderWidth: 0
            }]
        },
        options: {
            responsive: false,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: false
                },
                sliceThickness
            }
        },
        plugins: [doughnutLabel, sliceThickness]
    });
</script>