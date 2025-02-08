'use strict';
$(document).ready(function () {

    var data = [
            { y: '1390', a: 50, b: 90},
            { y: '1391', a: 65,  b: 75},
            { y: '1392', a: 50,  b: 50},
            { y: '1393', a: 75,  b: 60},
            { y: '1394', a: 80,  b: 65},
            { y: '1395', a: 90,  b: 70},
            { y: '1396', a: 100, b: 75},
            { y: '1397', a: 115, b: 75},
            { y: '1398', a: 120, b: 85},
            { y: '1399', a: 145, b: 85},
            { y: '1400', a: 160, b: 95}
        ],
        config = {
            data: data,
            xkey: 'y',
            ykeys: ['a', 'b'],
            labels: ['درآمد کلی', 'خرج کلی'],
            fillOpacity: 0.6,
            hideHover: 'auto',
            behaveLikeLine: true,
            resize: true,
            pointFillColors:['#ffffff'],
            pointStrokeColors: ['black'],
            lineColors:['gray','red']
        };
    config.element = 'area-chart';
    Morris.Area(config);
    config.element = 'line-chart';
    Morris.Line(config);
    config.element = 'bar-chart';
    Morris.Bar(config);
    config.element = 'stacked';
    config.stacked = true;
    Morris.Bar(config);
    Morris.Donut({
        element: 'pie-chart',
        data: [
            {label: "دوستان", value: 30},
            {label: "متحدان", value: 15},
            {label: "دشمنان", value: 45},
            {label: "بی‌طرف", value: 10}
        ]
    });

});