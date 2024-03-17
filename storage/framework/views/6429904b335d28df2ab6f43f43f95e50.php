<v-charts-line <?php echo e($attributes); ?>></v-charts-line>

<?php if (! $__env->hasRenderedOnce('e141f863-d197-471a-b02c-a7016a2d0ff2')): $__env->markAsRenderedOnce('e141f863-d197-471a-b02c-a7016a2d0ff2');
$__env->startPush('scripts'); ?>
    
    <script type="text/x-template" id="v-charts-line-template">
        <canvas
            :id="$.uid + '_chart'"
            class="flex items-end w-full aspect-[3.23/1]"
        ></canvas>
    </script>

    <script type="module">
        app.component('v-charts-line', {
            template: '#v-charts-line-template',

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
                        type: 'line',
                        
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
<?php $__env->stopPush(); endif; ?><?php /**PATH D:\Documentos\NewGitHub\SistemaVentaWeb_Laravel\packages\Webkul\Admin\src/resources/views/components/charts/line.blade.php ENDPATH**/ ?>