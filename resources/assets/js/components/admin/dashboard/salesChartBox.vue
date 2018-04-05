<template>
    <sales-chart :height="200" :chartData="datacollection" :options="options"></sales-chart>
</template>

<script>
    import salesChart from './salesChart'
    export default {
        data() {
            return {
                datacollection: null,
                months: ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'],
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true,
                            },
                            gridLines: {
                                display: true
                            }
                        }],
                        xAxes: [{
                            gridLines: {
                                display: true
                            },
                            ticks: {
                                autoSkip: false
                            }
                        }]
                    },
                    legend: {
                        display: true
                    },
                    responsive: true,
                    maintainAspectRatio: true
                }
            }
        },
        components: {
            salesChart
        },
        methods: {
            generateRandomData() {
                return Math.floor(Math.random() * 120);
            },
            fillDataCollection() {
                    this.datacollection = {
                        labels: this.months,
                        datasets: [
                            {
                                label: 'Total Sales',
                                backgroundColor: "#009688",
                                data: [ 
                                    this.generateRandomData(), 
                                    this.generateRandomData(), 
                                    this.generateRandomData(), 
                                    this.generateRandomData(), 
                                    this.generateRandomData(), 
                                    this.generateRandomData(), 
                                    this.generateRandomData(), 
                                    this.generateRandomData(), 
                                    this.generateRandomData(), 
                                    this.generateRandomData(),
                                    this.generateRandomData(), 
                                    this.generateRandomData()
                                ],
                            },
                            // {
                            //     label: '# of Calls Made',
                            //     backgroundColor: "#8e5ea2",
                            //     data: [ 
                            //         this.generateRandomData(), 
                            //         this.generateRandomData(), 
                            //         this.generateRandomData(), 
                            //         this.generateRandomData(), 
                            //         this.generateRandomData(), 
                            //         this.generateRandomData(), 
                            //         this.generateRandomData(), 
                            //         this.generateRandomData(), 
                            //         this.generateRandomData(), 
                            //         this.generateRandomData(),
                            //         this.generateRandomData(), 
                            //         this.generateRandomData()
                            //     ],
                            // },
                            // {
                            //     label: '# of Saturations',
                            //     backgroundColor:"#3cba9f",
                            //     data: [ 
                            //         this.generateRandomData(), 
                            //         this.generateRandomData(), 
                            //         this.generateRandomData(), 
                            //         this.generateRandomData(), 
                            //         this.generateRandomData(), 
                            //         this.generateRandomData(), 
                            //         this.generateRandomData(), 
                            //         this.generateRandomData(), 
                            //         this.generateRandomData(), 
                            //         this.generateRandomData(),
                            //         this.generateRandomData(), 
                            //         this.generateRandomData()
                            //     ],
                            // },
                            // {
                            //     label: '# of Presentations',
                            //     backgroundColor: "#e8c3b9",
                            //     data: [ 
                            //         this.generateRandomData(), 
                            //         this.generateRandomData(), 
                            //         this.generateRandomData(), 
                            //         this.generateRandomData(), 
                            //         this.generateRandomData(), 
                            //         this.generateRandomData(), 
                            //         this.generateRandomData(), 
                            //         this.generateRandomData(), 
                            //         this.generateRandomData(), 
                            //         this.generateRandomData(),
                            //         this.generateRandomData(), 
                            //         this.generateRandomData()
                            //     ],
                            // }
                        ]
                    };
                },
        },
        created() {
            this.fillDataCollection();
        }
    }
</script>

<style>

</style>
