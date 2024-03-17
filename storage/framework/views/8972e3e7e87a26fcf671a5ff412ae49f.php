<v-charts-bar <?php echo e($attributes); ?>></v-charts-bar>

<?php if (! $__env->hasRenderedOnce('d9755e24-f402-4d7f-821f-f294803d3838')): $__env->markAsRenderedOnce('d9755e24-f402-4d7f-821f-f294803d3838');
$__env->startPush('scripts'); ?>
    
    <script type="text/x-template" id="v-charts-bar-template">
        <canvas
            :id="$.uid + '_chart'"
            class="flex items-end w-full aspect-[3.23/1]"
        ></canvas>
    </script>

    <script type="module">
        app.component('v-charts-bar', {
            template: '#v-charts-bar-template',

            props: ['labels', 'datasets'],

            data() {
                return {
                    chart: undefined,
                }
            },

            mounted() {
                this.prepare();
            },

            methods: {
                prepare() {
                    if (this.chart) {
                        this.chart.destroy();
                    }

                    this.chart = new Chart(document.getElementById(this.$.uid + '_chart'), {
                        type: 'bar',
                        
                        data: {
                            labels: this.labels,

                            datasets: this.datasets,
                        },
                
                        options: {
                            aspectRatio: 3.17,
                            
                            plugins: {
                                legend: {
                                    display: false
                                },

                                
                            },
                            
                            scales: {
                                x: {
                                    beginAtZero: true,

                                    border: {
                                        dash: [8, 4],
                                    }
                                },

                                y: {
                                    beginAtZero: true,
                                    border: {
                                        dash: [8, 4],
                                    }
                                }
                            }
                        }
                    });
                }
            }
        });
    </script>
<?php $__env->stopPush(); endif; ?><?php /**PATH D:\Documentos\NewGitHub\SistemaVentaWeb_Laravel\packages\Webkul\Admin\src/resources/views/components/charts/bar.blade.php ENDPATH**/ ?>