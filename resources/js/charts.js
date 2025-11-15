import ApexCharts from 'apexcharts';

// Helper function to extract brand color from CSS variables (Flowbite theming)
const getBrandColor = () => {
    const computedStyle = getComputedStyle(document.documentElement);
    return computedStyle.getPropertyValue('--color-fg-brand').trim() || '#1447E6';
};

const getBrandSecondaryColor = () => {
    const computedStyle = getComputedStyle(document.documentElement);
    return computedStyle.getPropertyValue('--color-fg-brand-subtle').trim() || '#3F83F8';
};

// Line Chart - Weekly Revenue Trends
if (document.getElementById('line-chart') && typeof ApexCharts !== 'undefined') {
    const lineChartOptions = {
        series: [{
            name: 'Revenue',
            data: [450, 520, 480, 600, 550, 700, 650],
            color: getBrandColor()
        }],
        chart: {
            type: 'area',
            height: 350,
            fontFamily: 'Inter, sans-serif',
            toolbar: {
                show: true
            },
            zoom: {
                enabled: true
            }
        },
        stroke: {
            curve: 'smooth',
            width: 2
        },
        fill: {
            type: 'gradient',
            gradient: {
                shadeIntensity: 1,
                opacityFrom: 0.45,
                opacityTo: 0.05,
                stops: [0, 100]
            }
        },
        dataLabels: {
            enabled: false
        },
        tooltip: {
            enabled: true,
            x: {
                show: true
            },
            y: {
                formatter: function(value) {
                    return '$' + value;
                }
            }
        },
        grid: {
            show: true,
            strokeDashArray: 4,
            borderColor: '#E5E7EB'
        },
        xaxis: {
            categories: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
            labels: {
                show: true,
                style: {
                    fontFamily: 'Inter, sans-serif',
                    cssClass: 'text-xs font-normal fill-gray-500 dark:fill-gray-400'
                }
            },
            axisBorder: {
                show: false
            },
            axisTicks: {
                show: false
            }
        },
        yaxis: {
            labels: {
                show: true,
                formatter: function(value) {
                    return '$' + value;
                },
                style: {
                    fontFamily: 'Inter, sans-serif',
                    cssClass: 'text-xs font-normal fill-gray-500 dark:fill-gray-400'
                }
            }
        },
        legend: {
            show: true,
            position: 'bottom',
            fontFamily: 'Inter, sans-serif'
        }
    };

    const lineChart = new ApexCharts(document.getElementById('line-chart'), lineChartOptions);
    lineChart.render();
}

// Bar Chart - Product Category Sales
if (document.getElementById('bar-chart') && typeof ApexCharts !== 'undefined') {
    const barChartOptions = {
        series: [{
            name: 'Sales',
            data: [44, 55, 41, 67, 22, 43],
            color: getBrandColor()
        }, {
            name: 'Returns',
            data: [13, 23, 20, 8, 13, 27],
            color: getBrandSecondaryColor()
        }],
        chart: {
            type: 'bar',
            height: 350,
            fontFamily: 'Inter, sans-serif',
            toolbar: {
                show: true
            }
        },
        plotOptions: {
            bar: {
                horizontal: false,
                columnWidth: '55%',
                borderRadius: 4
            }
        },
        dataLabels: {
            enabled: false
        },
        stroke: {
            show: true,
            width: 2,
            colors: ['transparent']
        },
        tooltip: {
            enabled: true,
            shared: true,
            intersect: false,
            y: {
                formatter: function(value) {
                    return value + ' units';
                }
            }
        },
        grid: {
            show: true,
            strokeDashArray: 4,
            borderColor: '#E5E7EB'
        },
        xaxis: {
            categories: ['Electronics', 'Clothing', 'Books', 'Home & Garden', 'Sports', 'Toys'],
            labels: {
                show: true,
                style: {
                    fontFamily: 'Inter, sans-serif',
                    cssClass: 'text-xs font-normal fill-gray-500 dark:fill-gray-400'
                }
            },
            axisBorder: {
                show: false
            },
            axisTicks: {
                show: false
            }
        },
        yaxis: {
            labels: {
                show: true,
                formatter: function(value) {
                    return value + ' units';
                },
                style: {
                    fontFamily: 'Inter, sans-serif',
                    cssClass: 'text-xs font-normal fill-gray-500 dark:fill-gray-400'
                }
            }
        },
        fill: {
            opacity: 1
        },
        legend: {
            show: true,
            position: 'bottom',
            fontFamily: 'Inter, sans-serif'
        }
    };

    const barChart = new ApexCharts(document.getElementById('bar-chart'), barChartOptions);
    barChart.render();
}

// Pie Chart - Traffic Sources
if (document.getElementById('pie-chart') && typeof ApexCharts !== 'undefined') {
    const pieChartOptions = {
        series: [35, 25, 20, 20],
        colors: [getBrandColor(), getBrandSecondaryColor(), '#10B981', '#F59E0B'],
        chart: {
            type: 'donut',
            height: 350,
            fontFamily: 'Inter, sans-serif'
        },
        labels: ['Direct', 'Organic Search', 'Referral', 'Social Media'],
        dataLabels: {
            enabled: true,
            style: {
                fontFamily: 'Inter, sans-serif'
            }
        },
        tooltip: {
            enabled: true,
            y: {
                formatter: function(value) {
                    return value + '%';
                }
            }
        },
        legend: {
            show: true,
            position: 'bottom',
            fontFamily: 'Inter, sans-serif'
        },
        plotOptions: {
            pie: {
                donut: {
                    size: '65%',
                    labels: {
                        show: true,
                        name: {
                            show: true,
                            fontFamily: 'Inter, sans-serif'
                        },
                        value: {
                            show: true,
                            fontFamily: 'Inter, sans-serif',
                            formatter: function(value) {
                                return value + '%';
                            }
                        },
                        total: {
                            show: true,
                            label: 'Total Traffic',
                            fontFamily: 'Inter, sans-serif',
                            formatter: function() {
                                return '100%';
                            }
                        }
                    }
                }
            }
        }
    };

    const pieChart = new ApexCharts(document.getElementById('pie-chart'), pieChartOptions);
    pieChart.render();
}
