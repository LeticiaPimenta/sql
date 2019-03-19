/*!
 *
 * Angle - Bootstrap Admin Template
 *
 * Version: 4.0
 * Author: @themicon_co
 * Website: http://themicon.co
 * License: https://wrapbootstrap.com/help/licenses
 *
 */
!function(e, t, o, a) {
    "use strict";
    if (void 0 === o)
        throw new Error("This application's JavaScript requires jQuery");
    o(function() {
        var e = o("body");
        (new StateToggler).restoreState(e),
        o("#chk-fixed").prop("checked", e.hasClass("layout-fixed")),
        o("#chk-collapsed").prop("checked", e.hasClass("aside-collapsed")),
        o("#chk-collapsed-text").prop("checked", e.hasClass("aside-collapsed-text")),
        o("#chk-boxed").prop("checked", e.hasClass("layout-boxed")),
        o("#chk-float").prop("checked", e.hasClass("aside-float")),
        o("#chk-hover").prop("checked", e.hasClass("aside-hover")),
        o(".offsidebar.d-none").removeClass("d-none"),
        o.ajaxPrefilter(function(e, t, o) {
            e.async = !0
        })
    })
}(window, document, window.jQuery),
function(e, t, n, o) {
    "use strict";
    n(function() {
        if (!n.fn.knob)
            return;
        var e = {
            width: "50%",
            displayInput: !0,
            fgColor: APP_COLORS.info
        };
        n("#knob-chart1").knob(e);
        var t = {
            width: "50%",
            displayInput: !0,
            fgColor: APP_COLORS.purple,
            readOnly: !0
        };
        n("#knob-chart2").knob(t);
        var o = {
            width: "50%",
            displayInput: !0,
            fgColor: APP_COLORS.info,
            bgColor: APP_COLORS.gray,
            angleOffset: -125,
            angleArc: 250
        };
        n("#knob-chart3").knob(o);
        var a = {
            width: "50%",
            displayInput: !0,
            fgColor: APP_COLORS.pink,
            displayPrevious: !0,
            thickness: .1,
            lineCap: "round"
        };
        n("#knob-chart4").knob(a)
    })
}(window, document, window.jQuery),
function(e, c, t, o) {
    "use strict";
    (0,
    window.jQuery)(function() {
        if ("undefined" == typeof Chart)
            return;
        var e = function() {
            return Math.round(100 * Math.random())
        }
          , t = {
            labels: ["January", "February", "March", "April", "May", "June", "July"],
            datasets: [{
                label: "My First dataset",
                backgroundColor: "rgba(114,102,186,0.2)",
                borderColor: "rgba(114,102,186,1)",
                pointBorderColor: "#fff",
                data: [e(), e(), e(), e(), e(), e(), e()]
            }, {
                label: "My Second dataset",
                backgroundColor: "rgba(35,183,229,0.2)",
                borderColor: "rgba(35,183,229,1)",
                pointBorderColor: "#fff",
                data: [e(), e(), e(), e(), e(), e(), e()]
            }]
        }
          , o = c.getElementById("chartjs-linechart").getContext("2d")
          , a = (new Chart(o,{
            data: t,
            type: "line",
            options: {
                legend: {
                    display: !1
                }
            }
        }),
        {
            labels: ["January", "February", "March", "April", "May", "June", "July"],
            datasets: [{
                backgroundColor: "#23b7e5",
                borderColor: "#23b7e5",
                data: [e(), e(), e(), e(), e(), e(), e()]
            }, {
                backgroundColor: "#5d9cec",
                borderColor: "#5d9cec",
                data: [e(), e(), e(), e(), e(), e(), e()]
            }]
        })
          , n = c.getElementById("chartjs-barchart").getContext("2d")
          , r = (new Chart(n,{
            data: a,
            type: "bar",
            options: {
                legend: {
                    display: !1
                }
            }
        }),
        c.getElementById("chartjs-doughnutchart").getContext("2d"))
          , i = (new Chart(r,{
            data: {
                labels: ["Purple", "Yellow", "Blue"],
                datasets: [{
                    data: [300, 50, 100],
                    backgroundColor: ["#7266ba", "#fad732", "#23b7e5"],
                    hoverBackgroundColor: ["#7266ba", "#fad732", "#23b7e5"]
                }]
            },
            type: "doughnut",
            options: {
                legend: {
                    display: !1
                }
            }
        }),
        c.getElementById("chartjs-piechart").getContext("2d"))
          , s = (new Chart(i,{
            data: {
                labels: ["Purple", "Yellow", "Blue"],
                datasets: [{
                    data: [300, 50, 100],
                    backgroundColor: ["#7266ba", "#fad732", "#23b7e5"],
                    hoverBackgroundColor: ["#7266ba", "#fad732", "#23b7e5"]
                }]
            },
            type: "pie",
            options: {
                legend: {
                    display: !1
                }
            }
        }),
        c.getElementById("chartjs-polarchart").getContext("2d"))
          , l = (new Chart(s,{
            data: {
                datasets: [{
                    data: [11, 16, 7, 3],
                    backgroundColor: ["#f532e5", "#7266ba", "#f532e5", "#7266ba"],
                    label: "My dataset"
                }],
                labels: ["Label 1", "Label 2", "Label 3", "Label 4"]
            },
            type: "polarArea",
            options: {
                legend: {
                    display: !1
                }
            }
        }),
        c.getElementById("chartjs-radarchart").getContext("2d"));
        new Chart(l,{
            data: {
                labels: ["Eating", "Drinking", "Sleeping", "Designing", "Coding", "Cycling", "Running"],
                datasets: [{
                    label: "My First dataset",
                    backgroundColor: "rgba(114,102,186,0.2)",
                    borderColor: "rgba(114,102,186,1)",
                    data: [65, 59, 90, 81, 56, 55, 40]
                }, {
                    label: "My Second dataset",
                    backgroundColor: "rgba(151,187,205,0.2)",
                    borderColor: "rgba(151,187,205,1)",
                    data: [28, 48, 40, 19, 96, 27, 100]
                }]
            },
            type: "radar",
            options: {
                legend: {
                    display: !1
                }
            }
        })
    })
}(window, document),
function(t, e, o, a) {
    "use strict";
    (0,
    window.jQuery)(function() {
        if ("undefined" == typeof Chartist)
            return;
        new Chartist.Bar("#ct-bar1",{
            labels: ["W1", "W2", "W3", "W4", "W5", "W6", "W7", "W8", "W9", "W10"],
            series: [[1, 2, 4, 8, 6, -2, -1, -4, -6, -2]]
        },{
            high: 10,
            low: -10,
            height: 280,
            axisX: {
                labelInterpolationFnc: function(e, t) {
                    return t % 2 == 0 ? e : null
                }
            }
        }),
        new Chartist.Bar("#ct-bar2",{
            labels: ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"],
            series: [[5, 4, 3, 7, 5, 10, 3], [3, 2, 9, 5, 4, 6, 4]]
        },{
            seriesBarDistance: 10,
            reverseData: !0,
            horizontalBars: !0,
            height: 280,
            axisY: {
                offset: 70
            }
        }),
        new Chartist.Line("#ct-line1",{
            labels: ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday"],
            series: [[12, 9, 7, 8, 5], [2, 1, 3.5, 7, 3], [1, 3, 4, 5, 6]]
        },{
            fullWidth: !0,
            height: 280,
            chartPadding: {
                right: 40
            }
        }),
        new Chartist.Line("#ct-line3",{
            labels: ["Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
            series: [[1, 5, 2, 5, 4, 3], [2, 3, 4, 8, 1, 2], [5, 4, 3, 2, 1, .5]]
        },{
            low: 0,
            showArea: !0,
            showPoint: !1,
            fullWidth: !0,
            height: 300
        }).on("draw", function(e) {
            "line" !== e.type && "area" !== e.type || e.element.animate({
                d: {
                    begin: 2e3 * e.index,
                    dur: 2e3,
                    from: e.path.clone().scale(1, 0).translate(0, e.chartRect.height()).stringify(),
                    to: e.path.clone().stringify(),
                    easing: Chartist.Svg.Easing.easeOutQuint
                }
            })
        });
        var e = new Chartist.Line("#ct-line2",{
            labels: ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12"],
            series: [[12, 9, 7, 8, 5, 4, 6, 2, 3, 3, 4, 6], [4, 5, 3, 7, 3, 5, 5, 3, 4, 4, 5, 5], [5, 3, 4, 5, 6, 3, 3, 4, 5, 6, 3, 4], [3, 4, 5, 6, 7, 6, 4, 5, 6, 7, 6, 3]]
        },{
            low: 0,
            height: 300
        })
          , n = 0
          , r = 500;
        e.on("created", function() {
            n = 0
        }),
        e.on("draw", function(e) {
            if (n++,
            "line" === e.type)
                e.element.animate({
                    opacity: {
                        begin: 80 * n + 1e3,
                        dur: r,
                        from: 0,
                        to: 1
                    }
                });
            else if ("label" === e.type && "x" === e.axis)
                e.element.animate({
                    y: {
                        begin: 80 * n,
                        dur: r,
                        from: e.y + 100,
                        to: e.y,
                        easing: "easeOutQuart"
                    }
                });
            else if ("label" === e.type && "y" === e.axis)
                e.element.animate({
                    x: {
                        begin: 80 * n,
                        dur: r,
                        from: e.x - 100,
                        to: e.x,
                        easing: "easeOutQuart"
                    }
                });
            else if ("point" === e.type)
                e.element.animate({
                    x1: {
                        begin: 80 * n,
                        dur: r,
                        from: e.x - 10,
                        to: e.x,
                        easing: "easeOutQuart"
                    },
                    x2: {
                        begin: 80 * n,
                        dur: r,
                        from: e.x - 10,
                        to: e.x,
                        easing: "easeOutQuart"
                    },
                    opacity: {
                        begin: 80 * n,
                        dur: r,
                        from: 0,
                        to: 1,
                        easing: "easeOutQuart"
                    }
                });
            else if ("grid" === e.type) {
                var t = {
                    begin: 80 * n,
                    dur: r,
                    from: e[e.axis.units.pos + "1"] - 30,
                    to: e[e.axis.units.pos + "1"],
                    easing: "easeOutQuart"
                }
                  , o = {
                    begin: 80 * n,
                    dur: r,
                    from: e[e.axis.units.pos + "2"] - 100,
                    to: e[e.axis.units.pos + "2"],
                    easing: "easeOutQuart"
                }
                  , a = {};
                a[e.axis.units.pos + "1"] = t,
                a[e.axis.units.pos + "2"] = o,
                a.opacity = {
                    begin: 80 * n,
                    dur: r,
                    from: 0,
                    to: 1,
                    easing: "easeOutQuart"
                },
                e.element.animate(a)
            }
        }),
        e.on("created", function() {
            t.__exampleAnimateTimeout && (clearTimeout(t.__exampleAnimateTimeout),
            t.__exampleAnimateTimeout = null),
            t.__exampleAnimateTimeout = setTimeout(e.update.bind(e), 12e3)
        })
    })
}(window, document),
function(e, t, n, o) {
    "use strict";
    n(function() {
        if (!n.fn.easyPieChart)
            return;
        n("[data-easypiechart]").each(function() {
            var e = n(this)
              , t = e.data();
            e.easyPieChart(t || {})
        });
        var e = {
            animate: {
                duration: 800,
                enabled: !0
            },
            barColor: APP_COLORS.success,
            trackColor: !1,
            scaleColor: !1,
            lineWidth: 10,
            lineCap: "circle"
        };
        n("#easypie1").easyPieChart(e);
        var t = {
            animate: {
                duration: 800,
                enabled: !0
            },
            barColor: APP_COLORS.warning,
            trackColor: !1,
            scaleColor: !1,
            lineWidth: 4,
            lineCap: "circle"
        };
        n("#easypie2").easyPieChart(t);
        var o = {
            animate: {
                duration: 800,
                enabled: !0
            },
            barColor: APP_COLORS.danger,
            trackColor: !1,
            scaleColor: APP_COLORS.gray,
            lineWidth: 15,
            lineCap: "circle"
        };
        n("#easypie3").easyPieChart(o);
        var a = {
            animate: {
                duration: 800,
                enabled: !0
            },
            barColor: APP_COLORS.danger,
            trackColor: APP_COLORS.yellow,
            scaleColor: APP_COLORS["gray-dark"],
            lineWidth: 15,
            lineCap: "circle"
        };
        n("#easypie4").easyPieChart(a)
    })
}(window, document, window.jQuery),
function(e, t, n, o) {
    "use strict";
    n(function() {
        var e = {
            series: {
                lines: {
                    show: !1
                },
                points: {
                    show: !0,
                    radius: 4
                },
                splines: {
                    show: !0,
                    tension: .4,
                    lineWidth: 1,
                    fill: .5
                }
            },
            grid: {
                borderColor: "#eee",
                borderWidth: 1,
                hoverable: !0,
                backgroundColor: "#fcfcfc"
            },
            tooltip: !0,
            tooltipOpts: {
                content: function(e, t, o) {
                    return t + " : " + o
                }
            },
            xaxis: {
                tickColor: "#fcfcfc",
                mode: "categories"
            },
            yaxis: {
                min: 0,
                max: 150,
                tickColor: "#eee",
                tickFormatter: function(e) {
                    return e
                }
            },
            shadowSize: 0
        }
          , t = n(".chart-spline");
        t.length && n.plot(t, [{
            label: "Uniques",
            color: "#768294",
            data: [["Mar", 70], ["Apr", 85], ["May", 59], ["Jun", 93], ["Jul", 66], ["Aug", 86], ["Sep", 60]]
        }, {
            label: "Recurrent",
            color: "#1f92fe",
            data: [["Mar", 21], ["Apr", 12], ["May", 27], ["Jun", 24], ["Jul", 16], ["Aug", 39], ["Sep", 15]]
        }], e);
        var o = n(".chart-splinev2");
        o.length && n.plot(o, [{
            label: "Hours",
            color: "#23b7e5",
            data: [["Jan", 70], ["Feb", 20], ["Mar", 70], ["Apr", 85], ["May", 59], ["Jun", 93], ["Jul", 66], ["Aug", 86], ["Sep", 60], ["Oct", 60], ["Nov", 12], ["Dec", 50]]
        }, {
            label: "Commits",
            color: "#7266ba",
            data: [["Jan", 20], ["Feb", 70], ["Mar", 30], ["Apr", 50], ["May", 85], ["Jun", 43], ["Jul", 96], ["Aug", 36], ["Sep", 80], ["Oct", 10], ["Nov", 72], ["Dec", 31]]
        }], e);
        var a = n(".chart-splinev3");
        a.length && n.plot(a, [{
            label: "Home",
            color: "#1ba3cd",
            data: [["1", 38], ["2", 40], ["3", 42], ["4", 48], ["5", 50], ["6", 70], ["7", 145], ["8", 70], ["9", 59], ["10", 48], ["11", 38], ["12", 29], ["13", 30], ["14", 22], ["15", 28]]
        }, {
            label: "Overall",
            color: "#3a3f51",
            data: [["1", 16], ["2", 18], ["3", 17], ["4", 16], ["5", 30], ["6", 110], ["7", 19], ["8", 18], ["9", 110], ["10", 19], ["11", 16], ["12", 10], ["13", 20], ["14", 10], ["15", 20]]
        }], e)
    })
}(window, document, window.jQuery),
function(e, t, o, a) {
    "use strict";
    o(function() {
        var e = o(".chart-area");
        e.length && o.plot(e, [{
            label: "Uniques",
            color: "#aad874",
            data: [["Mar", 50], ["Apr", 84], ["May", 52], ["Jun", 88], ["Jul", 69], ["Aug", 92], ["Sep", 58]]
        }, {
            label: "Recurrent",
            color: "#7dc7df",
            data: [["Mar", 13], ["Apr", 44], ["May", 44], ["Jun", 27], ["Jul", 38], ["Aug", 11], ["Sep", 39]]
        }], {
            series: {
                lines: {
                    show: !0,
                    fill: .8
                },
                points: {
                    show: !0,
                    radius: 4
                }
            },
            grid: {
                borderColor: "#eee",
                borderWidth: 1,
                hoverable: !0,
                backgroundColor: "#fcfcfc"
            },
            tooltip: !0,
            tooltipOpts: {
                content: function(e, t, o) {
                    return t + " : " + o
                }
            },
            xaxis: {
                tickColor: "#fcfcfc",
                mode: "categories"
            },
            yaxis: {
                min: 0,
                tickColor: "#eee",
                tickFormatter: function(e) {
                    return e + " visitors"
                }
            },
            shadowSize: 0
        })
    })
}(window, document, window.jQuery),
function(e, t, o, a) {
    "use strict";
    o(function() {
        var e = o(".chart-bar");
        e.length && o.plot(e, [{
            label: "Sales",
            color: "#9cd159",
            data: [["Jan", 27], ["Feb", 82], ["Mar", 56], ["Apr", 14], ["May", 28], ["Jun", 77], ["Jul", 23], ["Aug", 49], ["Sep", 81], ["Oct", 20]]
        }], {
            series: {
                bars: {
                    align: "center",
                    lineWidth: 0,
                    show: !0,
                    barWidth: .6,
                    fill: .9
                }
            },
            grid: {
                borderColor: "#eee",
                borderWidth: 1,
                hoverable: !0,
                backgroundColor: "#fcfcfc"
            },
            tooltip: !0,
            tooltipOpts: {
                content: function(e, t, o) {
                    return t + " : " + o
                }
            },
            xaxis: {
                tickColor: "#fcfcfc",
                mode: "categories"
            },
            yaxis: {
                tickColor: "#eee"
            },
            shadowSize: 0
        })
    })
}(window, document, window.jQuery),
function(e, t, a, o) {
    "use strict";
    a(function() {
        var e = {
            series: {
                stack: !0,
                bars: {
                    align: "center",
                    lineWidth: 0,
                    show: !0,
                    barWidth: .6,
                    fill: .9
                }
            },
            grid: {
                borderColor: "#eee",
                borderWidth: 1,
                hoverable: !0,
                backgroundColor: "#fcfcfc"
            },
            tooltip: !0,
            tooltipOpts: {
                content: function(e, t, o) {
                    return t + " : " + o
                }
            },
            xaxis: {
                tickColor: "#fcfcfc",
                mode: "categories"
            },
            yaxis: {
                tickColor: "#eee"
            },
            shadowSize: 0
        }
          , t = a(".chart-bar-stacked");
        t.length && a.plot(t, [{
            label: "Tweets",
            color: "#51bff2",
            data: [["Jan", 56], ["Feb", 81], ["Mar", 97], ["Apr", 44], ["May", 24], ["Jun", 85], ["Jul", 94], ["Aug", 78], ["Sep", 52], ["Oct", 17], ["Nov", 90], ["Dec", 62]]
        }, {
            label: "Likes",
            color: "#4a8ef1",
            data: [["Jan", 69], ["Feb", 135], ["Mar", 14], ["Apr", 100], ["May", 100], ["Jun", 62], ["Jul", 115], ["Aug", 22], ["Sep", 104], ["Oct", 132], ["Nov", 72], ["Dec", 61]]
        }, {
            label: "+1",
            color: "#f0693a",
            data: [["Jan", 29], ["Feb", 36], ["Mar", 47], ["Apr", 21], ["May", 5], ["Jun", 49], ["Jul", 37], ["Aug", 44], ["Sep", 28], ["Oct", 9], ["Nov", 12], ["Dec", 35]]
        }], e);
        var o = a(".chart-bar-stac");
        o.length && a.plot(o, [{
            label: "Pending",
            color: "#9289ca",
            data: [["Pj1", 86], ["Pj2", 136], ["Pj3", 97], ["Pj4", 110], ["Pj5", 62], ["Pj6", 85], ["Pj7", 115], ["Pj8", 78], ["Pj9", 104], ["Pj10", 82], ["Pj11", 97], ["Pj12", 110], ["Pj13", 62]]
        }, {
            label: "Assigned",
            color: "#7266ba",
            data: [["Pj1", 49], ["Pj2", 81], ["Pj3", 47], ["Pj4", 44], ["Pj5", 100], ["Pj6", 49], ["Pj7", 94], ["Pj8", 44], ["Pj9", 52], ["Pj10", 17], ["Pj11", 47], ["Pj12", 44], ["Pj13", 100]]
        }, {
            label: "Completed",
            color: "#564aa3",
            data: [["Pj1", 29], ["Pj2", 56], ["Pj3", 14], ["Pj4", 21], ["Pj5", 5], ["Pj6", 24], ["Pj7", 37], ["Pj8", 22], ["Pj9", 28], ["Pj10", 9], ["Pj11", 14], ["Pj12", 21], ["Pj13", 5]]
        }], e)
    })
}(window, document, window.jQuery),
function(e, t, o, a) {
    "use strict";
    o(function() {
        var e = o(".chart-donut");
        e.length && o.plot(e, [{
            color: "#39C558",
            data: 60,
            label: "Coffee"
        }, {
            color: "#00b4ff",
            data: 90,
            label: "CSS"
        }, {
            color: "#FFBE41",
            data: 50,
            label: "LESS"
        }, {
            color: "#ff3e43",
            data: 80,
            label: "Jade"
        }, {
            color: "#937fc7",
            data: 116,
            label: "AngularJS"
        }], {
            series: {
                pie: {
                    show: !0,
                    innerRadius: .5
                }
            }
        })
    })
}(window, document, window.jQuery),
function(e, t, o, a) {
    "use strict";
    o(function() {
        var e = o(".chart-line");
        e.length && o.plot(e, [{
            label: "Complete",
            color: "#5ab1ef",
            data: [["Jan", 188], ["Feb", 183], ["Mar", 185], ["Apr", 199], ["May", 190], ["Jun", 194], ["Jul", 194], ["Aug", 184], ["Sep", 74]]
        }, {
            label: "In Progress",
            color: "#f5994e",
            data: [["Jan", 153], ["Feb", 116], ["Mar", 136], ["Apr", 119], ["May", 148], ["Jun", 133], ["Jul", 118], ["Aug", 161], ["Sep", 59]]
        }, {
            label: "Cancelled",
            color: "#d87a80",
            data: [["Jan", 111], ["Feb", 97], ["Mar", 93], ["Apr", 110], ["May", 102], ["Jun", 93], ["Jul", 92], ["Aug", 92], ["Sep", 44]]
        }], {
            series: {
                lines: {
                    show: !0,
                    fill: .01
                },
                points: {
                    show: !0,
                    radius: 4
                }
            },
            grid: {
                borderColor: "#eee",
                borderWidth: 1,
                hoverable: !0,
                backgroundColor: "#fcfcfc"
            },
            tooltip: !0,
            tooltipOpts: {
                content: function(e, t, o) {
                    return t + " : " + o
                }
            },
            xaxis: {
                tickColor: "#eee",
                mode: "categories"
            },
            yaxis: {
                tickColor: "#eee"
            },
            shadowSize: 0
        })
    })
}(window, document, window.jQuery),
function(e, t, o, a) {
    "use strict";
    o(function() {
        var e = {
            series: {
                pie: {
                    show: !0,
                    innerRadius: 0,
                    label: {
                        show: !0,
                        radius: .8,
                        formatter: function(e, t) {
                            return '<div class="flot-pie-label">' + Math.round(t.percent) + "%</div>"
                        },
                        background: {
                            opacity: .8,
                            color: "#222"
                        }
                    }
                }
            }
        }
          , t = o(".chart-pie");
        t.length && o.plot(t, [{
            label: "jQuery",
            color: "#4acab4",
            data: 30
        }, {
            label: "CSS",
            color: "#ffea88",
            data: 40
        }, {
            label: "LESS",
            color: "#ff8153",
            data: 90
        }, {
            label: "SASS",
            color: "#878bb6",
            data: 75
        }, {
            label: "Jade",
            color: "#b2d767",
            data: 120
        }], e)
    })
}(window, document, window.jQuery),
function(e, t, o, a) {
    "use strict";
    (0,
    window.jQuery)(function() {
        if ("undefined" == typeof Morris)
            return;
        var e = [{
            y: "2006",
            a: 100,
            b: 90
        }, {
            y: "2007",
            a: 75,
            b: 65
        }, {
            y: "2008",
            a: 50,
            b: 40
        }, {
            y: "2009",
            a: 75,
            b: 65
        }, {
            y: "2010",
            a: 50,
            b: 40
        }, {
            y: "2011",
            a: 75,
            b: 65
        }, {
            y: "2012",
            a: 100,
            b: 90
        }];
        new Morris.Line({
            element: "morris-line",
            data: e,
            xkey: "y",
            ykeys: ["a", "b"],
            labels: ["Serie A", "Serie B"],
            lineColors: ["#31C0BE", "#7a92a3"],
            resize: !0
        }),
        new Morris.Donut({
            element: "morris-donut",
            data: [{
                label: "Download Sales",
                value: 12
            }, {
                label: "In-Store Sales",
                value: 30
            }, {
                label: "Mail-Order Sales",
                value: 20
            }],
            colors: ["#f05050", "#fad732", "#ff902b"],
            resize: !0
        }),
        new Morris.Bar({
            element: "morris-bar",
            data: e,
            xkey: "y",
            ykeys: ["a", "b"],
            labels: ["Series A", "Series B"],
            xLabelMargin: 2,
            barColors: ["#23b7e5", "#f05050"],
            resize: !0
        }),
        new Morris.Area({
            element: "morris-area",
            data: e,
            xkey: "y",
            ykeys: ["a", "b"],
            labels: ["Serie A", "Serie B"],
            lineColors: ["#7266ba", "#23b7e5"],
            resize: !0
        })
    })
}(window, document),
function(e, n, t, o) {
    "use strict";
    (0,
    window.jQuery)(function() {
        if ("undefined" == typeof Rickshaw)
            return;
        for (var e = [[], [], []], t = new Rickshaw.Fixtures.RandomData(150), o = 0; o < 150; o++)
            t.addData(e);
        var a = [{
            color: "#c05020",
            data: e[0],
            name: "New York"
        }, {
            color: "#30c020",
            data: e[1],
            name: "London"
        }, {
            color: "#6060c0",
            data: e[2],
            name: "Tokyo"
        }];
        new Rickshaw.Graph({
            element: n.querySelector("#rickshaw1"),
            series: a,
            renderer: "area"
        }).render(),
        new Rickshaw.Graph({
            element: n.querySelector("#rickshaw2"),
            renderer: "area",
            stroke: !0,
            series: [{
                data: [{
                    x: 0,
                    y: 40
                }, {
                    x: 1,
                    y: 49
                }, {
                    x: 2,
                    y: 38
                }, {
                    x: 3,
                    y: 30
                }, {
                    x: 4,
                    y: 32
                }],
                color: "#f05050"
            }, {
                data: [{
                    x: 0,
                    y: 40
                }, {
                    x: 1,
                    y: 49
                }, {
                    x: 2,
                    y: 38
                }, {
                    x: 3,
                    y: 30
                }, {
                    x: 4,
                    y: 32
                }],
                color: "#fad732"
            }]
        }).render(),
        new Rickshaw.Graph({
            element: n.querySelector("#rickshaw3"),
            renderer: "line",
            series: [{
                data: [{
                    x: 0,
                    y: 40
                }, {
                    x: 1,
                    y: 49
                }, {
                    x: 2,
                    y: 38
                }, {
                    x: 3,
                    y: 30
                }, {
                    x: 4,
                    y: 32
                }],
                color: "#7266ba"
            }, {
                data: [{
                    x: 0,
                    y: 20
                }, {
                    x: 1,
                    y: 24
                }, {
                    x: 2,
                    y: 19
                }, {
                    x: 3,
                    y: 15
                }, {
                    x: 4,
                    y: 16
                }],
                color: "#23b7e5"
            }]
        }).render(),
        new Rickshaw.Graph({
            element: n.querySelector("#rickshaw4"),
            renderer: "bar",
            series: [{
                data: [{
                    x: 0,
                    y: 40
                }, {
                    x: 1,
                    y: 49
                }, {
                    x: 2,
                    y: 38
                }, {
                    x: 3,
                    y: 30
                }, {
                    x: 4,
                    y: 32
                }],
                color: "#fad732"
            }, {
                data: [{
                    x: 0,
                    y: 20
                }, {
                    x: 1,
                    y: 24
                }, {
                    x: 2,
                    y: 19
                }, {
                    x: 3,
                    y: 15
                }, {
                    x: 4,
                    y: 16
                }],
                color: "#ff902b"
            }]
        }).render()
    })
}(window, document),
function(a, e, n, t) {
    "use strict";
    n(function() {
        n("[data-sparkline]").each(function() {
            var e = n(this)
              , t = e.data()
              , o = t.values && t.values.split(",");
            t.type = t.type || "bar",
            t.disableHiddenCheck = !0,
            e.sparkline(o, t),
            t.resize && n(a).resize(function() {
                e.sparkline(o, t)
            })
        })
    })
}(window, document, window.jQuery),
function(e, t, o, a) {
    "use strict";
    o(function() {
        o('[data-toggle="popover"]').popover(),
        o('[data-toggle="tooltip"]').tooltip({
            container: "body"
        }),
        o(".dropdown input").on("click focus", function(e) {
            e.stopPropagation()
        })
    })
}(window, document, window.jQuery),
function(e, t, c, o) {
    "use strict";
    c(function() {
        var a = "card.removed";
        c(t).on("click", '[data-tool="card-dismiss"]', function() {
            var t = c(this).closest(".card")
              , e = new c.Deferred;
            function o() {
                var e = t.parent();
                c.when(t.trigger(a, [t])).done(function() {
                    t.remove(),
                    e.trigger(a).filter(function() {
                        var e = c(this);
                        return e.is('[class*="col-"]:not(.sortable)') && 0 === e.children("*").length
                    }).remove()
                })
            }
            t.trigger("card.remove", [t, e]),
            e.done(function() {
                t.animo({
                    animation: "bounceOut"
                }, o)
            })
        })
    }),
    c(function() {
        var e = '[data-tool="card-collapse"]'
          , s = "jq-cardState";
        function l(e, t) {
            var o = Storages.localStorage.get(s);
            o || (o = {}),
            o[e] = t,
            Storages.localStorage.set(s, o)
        }
        c(e).each(function() {
            var e = c(this)
              , t = e.closest(".card")
              , o = t.find(".card-wrapper")
              , a = {
                toggle: !1
            }
              , n = e.children("em")
              , r = t.attr("id");
            o.length || (o = t.children(".card-heading").nextAll().wrapAll("<div/>").parent().addClass("card-wrapper"),
            a = {}),
            o.collapse(a).on("hide.bs.collapse", function() {
                n.removeClass("fa-minus").addClass("fa-plus"),
                l(r, "hide"),
                o.prev(".card-heading").addClass("card-heading-collapsed")
            }).on("show.bs.collapse", function() {
                n.removeClass("fa-plus").addClass("fa-minus"),
                l(r, "show"),
                o.prev(".card-heading").removeClass("card-heading-collapsed")
            });
            var i = function(e) {
                var t = Storages.localStorage.get(s);
                if (t)
                    return t[e] || !1
            }(r);
            i && (setTimeout(function() {
                o.collapse(i)
            }, 50),
            l(r, i))
        }),
        c(t).on("click", e, function() {
            var e = c(this).closest(".card")
              , t = e.find(".card-wrapper");
            t.collapse("toggle")
        })
    }),
    c(function() {
        function a() {
            this.removeClass("whirl")
        }
        c(t).on("click", '[data-tool="card-refresh"]', function() {
            var e = c(this)
              , t = e.parents(".card").eq(0)
              , o = e.data("spinner") || "standard";
            t.addClass("whirl " + o),
            t.removeSpinner = a,
            e.trigger("card.refresh", [t])
        })
    })
}(window, document, window.jQuery),
function(e, t, o, a) {
    e.APP_COLORS = {
        primary: "#5d9cec",
        success: "#27c24c",
        info: "#23b7e5",
        warning: "#ff902b",
        danger: "#f05050",
        inverse: "#131e26",
        green: "#37bc9b",
        pink: "#f532e5",
        purple: "#7266ba",
        dark: "#3a3f51",
        yellow: "#fad732",
        "gray-darker": "#232735",
        "gray-dark": "#3a3f51",
        gray: "#dde6e9",
        "gray-light": "#e4eaec",
        "gray-lighter": "#edf1f2"
    },
    e.APP_MEDIAQUERY = {
        desktopLG: 1200,
        desktop: 992,
        tablet: 768,
        mobile: 480
    }
}(window, document, window.jQuery),
function(n, r, i, e) {
    "use strict";
    i(function() {
        if ("undefined" == typeof screenfull)
            return;
        var e = i(r)
          , t = i("[data-toggle-fullscreen]")
          , o = n.navigator.userAgent;
        (0 < o.indexOf("MSIE ") || o.match(/Trident.*rv\:11\./)) && t.addClass("hide");
        if (!t.is(":visible"))
            return;
        t.on("click", function(e) {
            e.preventDefault(),
            screenfull.enabled ? (screenfull.toggle(),
            a(t)) : console.log("Fullscreen not enabled")
        }),
        screenfull.raw && screenfull.raw.fullscreenchange && e.on(screenfull.raw.fullscreenchange, function() {
            a(t)
        });
        function a(e) {
            screenfull.isFullscreen ? e.children("em").removeClass("fa-expand").addClass("fa-compress") : e.children("em").removeClass("fa-compress").addClass("fa-expand")
        }
    })
}(window, document, window.jQuery),
function(e, t, a, o) {
    "use strict";
    a(function() {
        a("[data-load-css]").on("click", function(e) {
            var t = a(this);
            t.is("a") && e.preventDefault();
            var o = t.data("loadCss");
            o ? function(e) {
                var t = "autoloaded-stylesheet"
                  , o = a("#" + t).attr("id", t + "-old");
                a("head").append(a("<link/>").attr({
                    id: t,
                    rel: "stylesheet",
                    href: e
                })),
                o.length && o.remove();
                return a("#" + t)
            }(o) || a.error("Error creating stylesheet link element.") : a.error("No stylesheet location defined.")
        })
    })
}(window, document, window.jQuery),
function(e, t, a, o) {
    "use strict";
    a(function() {
        if (!a.fn.localize)
            return;
        var o = Storages.localStorage.get(s) || n
          , e = {
            language: o,
            pathPrefix: r,
            callback: function(e, t) {
                Storages.localStorage.set(s, o),
                t(e)
            }
        };
        function t(e) {
            a("[data-localize]").localize(i, e)
        }
        t(e),
        a("[data-set-lang]").on("click", function() {
            (o = a(this).data("setLang")) && (e.language = o,
            t(e),
            function(e) {
                var t = e.parents(".dropdown-menu");
                if (t.length) {
                    var o = t.prev("button, a");
                    o.text(e.text())
                }
            }(a(this)))
        })
    });
    var n = "en"
      , r = "server/i18n"
      , i = "site"
      , s = "jq-appLang"
}(window, document, window.jQuery),
function(e, o, a, t) {
    "use strict";
    a(function() {
        var t = new n;
        a("[data-search-open]").on("click", function(e) {
            e.stopPropagation()
        }).on("click", t.toggle);
        var e = a("[data-search-dismiss]");
        a('.navbar-form input[type="text"]').on("click", function(e) {
            e.stopPropagation()
        }).on("keyup", function(e) {
            27 == e.keyCode && t.dismiss()
        }),
        a(o).on("click", t.dismiss),
        e.on("click", function(e) {
            e.stopPropagation()
        }).on("click", t.dismiss)
    });
    var n = function() {
        var o = "form.navbar-form";
        return {
            toggle: function() {
                var e = a(o);
                e.toggleClass("open");
                var t = e.hasClass("open");
                e.find("input")[t ? "focus" : "blur"]()
            },
            dismiss: function() {
                a(o).removeClass("open").find('input[type="text"]').blur()
            }
        }
    }
}(window, document, window.jQuery),
function(e, t, a, o) {
    "use strict";
    a(function() {
        a("[data-now]").each(function() {
            var t = a(this)
              , o = t.data("format");
            function e() {
                var e = moment(new Date).format(o);
                t.text(e)
            }
            e(),
            setInterval(e, 1e3)
        })
    })
}(window, document, window.jQuery),
function(e, t, o, a) {
    "use strict";
    o(function() {
        var e = o("#maincss")
          , t = o("#bscss");
        o("#chk-rtl").on("change", function() {
            e.attr("href", this.checked ? "css/app-rtl.css" : "css/app.css"),
            t.attr("href", this.checked ? "css/bootstrap-rtl.css" : "css/bootstrap.css")
        })
    })
}(window, document, window.jQuery),
function(n, e, l, t) {
    "use strict";
    var c, r, d, u;
    function f(e) {
        e.siblings("li").removeClass("open").end().toggleClass("open")
    }
    function p() {
        l(".sidebar-subnav.nav-floating").remove(),
        l(".dropdown-backdrop").remove(),
        l(".sidebar li.open").removeClass("open")
    }
    function i() {
        return d.hasClass("aside-hover")
    }
    l(function() {
        c = l(n),
        r = l("html"),
        d = l("body");
        var t = (u = l(".sidebar")).find(".collapse");
        t.on("show.bs.collapse", function(e) {
            e.stopPropagation(),
            0 === l(this).parents(".collapse").length && t.filter(".show").collapse("hide")
        });
        var e = l(".sidebar .active").parents("li");
        i() || e.addClass("active").children(".collapse").collapse("show");
        u.find("li > a + ul").on("show.bs.collapse", function(e) {
            i() && e.preventDefault()
        });
        var o = r.hasClass("touch") ? "click" : "mouseenter"
          , a = l();
        u.on(o, ".sidebar-nav > li", function() {
            (d.hasClass("aside-collapsed") || d.hasClass("aside-collapsed-text") || i()) && (a.trigger("mouseleave"),
            a = function(e) {
                p();
                var t = e.children("ul");
                if (!t.length)
                    return l();
                if (e.hasClass("open"))
                    return f(e),
                    l();
                var o = l(".aside-container")
                  , a = l(".aside-inner")
                  , n = parseInt(a.css("padding-top"), 0) + parseInt(o.css("padding-top"), 0)
                  , r = t.clone().appendTo(o);
                f(e);
                var i = e.position().top + n - u.scrollTop()
                  , s = c.height();
                return r.addClass("nav-floating").css({
                    position: d.hasClass("layout-fixed") ? "fixed" : "absolute",
                    top: i,
                    bottom: r.outerHeight(!0) + i > s ? 0 : "auto"
                }),
                r.on("mouseleave", function() {
                    f(e),
                    r.remove()
                }),
                r
            }(l(this)),
            l("<div/>", {
                class: "dropdown-backdrop"
            }).insertAfter(".aside-container").on("click mouseenter", function() {
                p()
            }))
        }),
        void 0 !== u.data("sidebarAnyclickClose") && l(".wrapper").on("click.sidebar", function(e) {
            if (d.hasClass("aside-toggled")) {
                var t = l(e.target);
                t.parents(".aside-container").length || t.is("#user-block-toggle") || t.parent().is("#user-block-toggle") || d.removeClass("aside-toggled")
            }
        })
    })
}(window, document, window.jQuery),
function(e, t, o, a) {
    "use strict";
    o(function() {
        o("[data-scrollable]").each(function() {
            var e = o(this);
            e.slimScroll({
                height: e.data("height") || 250
            })
        })
    })
}(window, document, window.jQuery),
function(e, t, n, o) {
    "use strict";
    n(function() {
        n("[data-check-all]").on("change", function() {
            var e = n(this)
              , t = e.index() + 1
              , o = e.find('input[type="checkbox"]')
              , a = e.parents("table");
            a.find("tbody > tr > td:nth-child(" + t + ') input[type="checkbox"]').prop("checked", o[0].checked)
        })
    })
}(window, document, window.jQuery),
function(l, e, c, t) {
    "use strict";
    c(function() {
        var i = c("body")
          , s = new o;
        c("[data-toggle-state]").on("click", function(e) {
            e.stopPropagation();
            var t = c(this)
              , o = t.data("toggleState")
              , a = t.data("target")
              , n = void 0 !== t.attr("data-no-persist")
              , r = a ? c(a) : i;
            o && (r.hasClass(o) ? (r.removeClass(o),
            n || s.removeState(o)) : (r.addClass(o),
            n || s.addState(o))),
            c(l).resize()
        })
    });
    var o = function() {
        var a = "jq-toggleState";
        this.addState = function(e) {
            var t = Storages.localStorage.get(a);
            t instanceof Array ? t.push(e) : t = [e],
            Storages.localStorage.set(a, t)
        }
        ,
        this.removeState = function(e) {
            var t = Storages.localStorage.get(a);
            if (t) {
                var o = t.indexOf(e);
                -1 !== o && t.splice(o, 1),
                Storages.localStorage.set(a, t)
            }
        }
        ,
        this.restoreState = function(e) {
            var t = Storages.localStorage.get(a);
            t instanceof Array && e.addClass(t.join(" "))
        }
    };
    l.StateToggler = o
}(window, document, window.jQuery),
function(o, a, n, e) {
    "use strict";
    n(function() {
        var e = n("[data-trigger-resize]")
          , t = e.data("triggerResize");
        e.on("click", function() {
            setTimeout(function() {
                var e = a.createEvent("UIEvents");
                e.initUIEvent("resize", !0, !1, o, 0),
                o.dispatchEvent(e)
            }, t || 300)
        })
    })
}(window, document, window.jQuery),
function(e, t, o, a) {
    "use strict";
    o(function() {
        o(".card.card-demo").on("card.refresh", function(e, t) {
            setTimeout(function() {
                t.removeSpinner()
            }, 3e3)
        }).on("hide.bs.collapse", function(e) {
            console.log("Card Collapse Hide")
        }).on("show.bs.collapse", function(e) {
            console.log("Card Collapse Show")
        }).on("card.remove", function(e, t, o) {
            console.log("Removing Card"),
            o.resolve()
        }).on("card.removed", function(e, t) {
            console.log("Removed Card")
        })
    })
}(window, document, window.jQuery),
function(a, e, n, t) {
    "use strict";
    n(function() {
        if (!n.fn.nestable)
            return;
        var e = function(e) {
            var t = e.length ? e : n(e.target)
              , o = t.data("output");
            a.JSON ? o.val(a.JSON.stringify(t.nestable("serialize"))) : o.val("JSON browser support required for this demo.")
        };
        n("#nestable").nestable({
            group: 1
        }).on("change", e),
        n("#nestable2").nestable({
            group: 1
        }).on("change", e),
        e(n("#nestable").data("output", n("#nestable-output"))),
        e(n("#nestable2").data("output", n("#nestable2-output"))),
        n(".js-nestable-action").on("click", function(e) {
            var t = n(e.target)
              , o = t.data("action");
            "expand-all" === o && n(".dd").nestable("expandAll"),
            "collapse-all" === o && n(".dd").nestable("collapseAll")
        })
    })
}(window, document, window.jQuery),
function(e, t, a, o) {
    "use strict";
    function n(e) {
        var t = e.data("message")
          , o = e.data("options");
        t || a.error("Notify: No message specified"),
        a.notify(t, o || {})
    }
    a(function() {
        a(t);
        a("[data-notify]").each(function() {
            var t = a(this)
              , e = t.data("onload");
            void 0 !== e && setTimeout(function() {
                n(t)
            }, 800),
            t.on("click", function(e) {
                e.preventDefault(),
                n(t)
            })
        })
    })
}(window, document, window.jQuery),
function(t, e, o) {
    var a = {}
      , n = {}
      , r = function(e) {
        return "string" == t.type(e) && (e = {
            message: e
        }),
        arguments[1] && (e = t.extend(e, "string" == t.type(arguments[1]) ? {
            status: arguments[1]
        } : arguments[1])),
        new i(e).show()
    }
      , i = function(e) {
        this.options = t.extend({}, i.defaults, e),
        this.uuid = "ID" + (new Date).getTime() + "RAND" + Math.ceil(1e5 * Math.random()),
        this.element = t(['<div class="uk-notify-message alert-dismissable">', '<a class="close">&times;</a>', "<div>" + this.options.message + "</div>", "</div>"].join("")).data("notifyMessage", this),
        this.options.status && (this.element.addClass("alert alert-" + this.options.status),
        this.currentstatus = this.options.status),
        this.group = this.options.group,
        n[this.uuid] = this,
        a[this.options.pos] || (a[this.options.pos] = t('<div class="uk-notify uk-notify-' + this.options.pos + '"></div>').appendTo("body").on("click", ".uk-notify-message", function() {
            t(this).data("notifyMessage").close()
        }))
    };
    t.extend(i.prototype, {
        uuid: !1,
        element: !1,
        timout: !1,
        currentstatus: "",
        group: !1,
        show: function() {
            if (!this.element.is(":visible")) {
                var t = this;
                a[this.options.pos].show().prepend(this.element);
                var e = parseInt(this.element.css("margin-bottom"), 10);
                return this.element.css({
                    opacity: 0,
                    "margin-top": -1 * this.element.outerHeight(),
                    "margin-bottom": 0
                }).animate({
                    opacity: 1,
                    "margin-top": 0,
                    "margin-bottom": e
                }, function() {
                    if (t.options.timeout) {
                        var e = function() {
                            t.close()
                        };
                        t.timeout = setTimeout(e, t.options.timeout),
                        t.element.hover(function() {
                            clearTimeout(t.timeout)
                        }, function() {
                            t.timeout = setTimeout(e, t.options.timeout)
                        })
                    }
                }),
                this
            }
        },
        close: function(e) {
            var t = this
              , o = function() {
                t.element.remove(),
                a[t.options.pos].children().length || a[t.options.pos].hide(),
                delete n[t.uuid]
            };
            this.timeout && clearTimeout(this.timeout),
            e ? o() : this.element.animate({
                opacity: 0,
                "margin-top": -1 * this.element.outerHeight(),
                "margin-bottom": 0
            }, function() {
                o()
            })
        },
        content: function(e) {
            var t = this.element.find(">div");
            return e ? (t.html(e),
            this) : t.html()
        },
        status: function(e) {
            return e ? (this.element.removeClass("alert alert-" + this.currentstatus).addClass("alert alert-" + e),
            this.currentstatus = e,
            this) : this.currentstatus
        }
    }),
    i.defaults = {
        message: "",
        status: "normal",
        timeout: 5e3,
        group: null,
        pos: "top-center"
    },
    t.notify = r,
    t.notify.message = i,
    t.notify.closeAll = function(e, t) {
        if (e)
            for (var o in n)
                e === n[o].group && n[o].close(t);
        else
            for (var o in n)
                n[o].close(t)
    }
}(jQuery, window, document),
function(e, t, a, o) {
    "use strict";
    a(function() {
        a(t).on("click", "[data-animate]", function() {
            var e = a(this)
              , t = e.data("target")
              , o = e.data("play") || "bounce";
            t && a(t).animo({
                animation: o
            })
        })
    })
}(window, document, window.jQuery),
function(t, e, n, o) {
    "use strict";
    var r = "jq-portletState";
    function a(e, t) {
        var o = Storages.localStorage.get(r);
        o || (o = {}),
        o[this.id] = n(this).sortable("toArray"),
        o && Storages.localStorage.set(r, o)
    }
    function i() {
        var e = Storages.localStorage.get(r);
        if (e) {
            var t = this.id
              , o = e[t];
            if (o) {
                var a = n("#" + t);
                n.each(o, function(e, t) {
                    n("#" + t).appendTo(a)
                })
            }
        }
    }
    n(function() {
        if (!n.fn.sortable)
            return;
        var e = '[data-toggle="portlet"]';
        n(e).sortable({
            connectWith: e,
            items: "div.card",
            handle: ".portlet-handler",
            opacity: .7,
            placeholder: "portlet box-placeholder",
            cancel: ".portlet-cancel",
            forcePlaceholderSize: !0,
            iframeFix: !1,
            tolerance: "pointer",
            helper: "original",
            revert: 200,
            forceHelperSize: !0,
            update: a,
            create: i
        })
    }),
    t.resetPorlets = function(e) {
        Storages.localStorage.remove(r),
        t.location.reload()
    }
}(window, document, window.jQuery),
function(e, t, o, a) {
    "use strict";
    (0,
    window.jQuery)(function() {
        if ("undefined" == typeof sortable)
            return;
        sortable(".sortable", {
            forcePlaceholderSize: !0,
            placeholder: '<div class="box-placeholder p0 m0"><div></div></div>'
        })
    })
}(window, document),
function(e, t, o, a) {
    "use strict";
    o(function() {
        o("#swal-demo1").on("click", function(e) {
            e.preventDefault(),
            swal("Here's a message!")
        }),
        o("#swal-demo2").on("click", function(e) {
            e.preventDefault(),
            swal("Here's a message!", "It's pretty, isn't it?")
        }),
        o("#swal-demo3").on("click", function(e) {
            e.preventDefault(),
            swal("Good job!", "You clicked the button!", "success")
        }),
        o("#swal-demo4").on("click", function(e) {
            e.preventDefault(),
            swal({
                title: "Are you sure?",
                text: "You will not be able to recover this imaginary file!",
                type: "warning",
                showCancelButton: !0,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Yes, delete it!",
                closeOnConfirm: !1
            }, function() {
                swal("Deleted!", "Your imaginary file has been deleted.", "success")
            })
        }),
        o("#swal-demo5").on("click", function(e) {
            e.preventDefault(),
            swal({
                title: "Are you sure?",
                text: "You will not be able to recover this imaginary file!",
                type: "warning",
                showCancelButton: !0,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Yes, delete it!",
                cancelButtonText: "No, cancel plx!",
                closeOnConfirm: !1,
                closeOnCancel: !1
            }, function(e) {
                e ? swal("Deleted!", "Your imaginary file has been deleted.", "success") : swal("Cancelled", "Your imaginary file is safe :)", "error")
            })
        })
    })
}(window, document, window.jQuery),
function(e, t, o, a) {
    "use strict";
    o(function() {
        if (!o.fn.colorpicker)
            return;
        o(".demo-colorpicker").colorpicker(),
        o("#demo_selectors").colorpicker({
            colorSelectors: {
                default: "#777777",
                primary: APP_COLORS.primary,
                success: APP_COLORS.success,
                info: APP_COLORS.info,
                warning: APP_COLORS.warning,
                danger: APP_COLORS.danger
            }
        })
    })
}(window, document, window.jQuery),
function(e, t, o, a) {
    "use strict";
    o(function() {
        if (!o.fn.slider)
            return;
        if (!o.fn.chosen)
            return;
        if (!o.fn.inputmask)
            return;
        if (!o.fn.filestyle)
            return;
        if (!o.fn.wysiwyg)
            return;
        if (!o.fn.datepicker)
            return;
        o("[data-ui-slider]").slider(),
        o(".chosen-select").chosen(),
        o("[data-masked]").inputmask(),
        o(".filestyle").filestyle(),
        o(".wysiwyg").wysiwyg(),
        o("#datetimepicker1").datepicker({
            orientation: "bottom",
            icons: {
                time: "fa fa-clock-o",
                date: "fa fa-calendar",
                up: "fa fa-chevron-up",
                down: "fa fa-chevron-down",
                previous: "fa fa-chevron-left",
                next: "fa fa-chevron-right",
                today: "fa fa-crosshairs",
                clear: "fa fa-trash"
            }
        }),
        o("#datetimepicker2").datepicker({
            format: "mm-dd-yyyy"
        })
    })
}(window, document, window.jQuery),
function(e, u, f, t) {
    "use strict";
    f(function() {
        if (!f.fn.cropper)
            return;
        var a = f(".img-container > img")
          , t = f("#dataX")
          , o = f("#dataY")
          , n = f("#dataHeight")
          , r = f("#dataWidth")
          , i = f("#dataRotate")
          , s = {
            aspectRatio: 16 / 9,
            preview: ".img-preview",
            crop: function(e) {
                t.val(Math.round(e.x)),
                o.val(Math.round(e.y)),
                n.val(Math.round(e.height)),
                r.val(Math.round(e.width)),
                i.val(Math.round(e.rotate))
            }
        };
        a.on({
            "build.cropper": function(e) {
                console.log(e.type)
            },
            "built.cropper": function(e) {
                console.log(e.type)
            },
            "dragstart.cropper": function(e) {
                console.log(e.type, e.dragType)
            },
            "dragmove.cropper": function(e) {
                console.log(e.type, e.dragType)
            },
            "dragend.cropper": function(e) {
                console.log(e.type, e.dragType)
            },
            "zoomin.cropper": function(e) {
                console.log(e.type)
            },
            "zoomout.cropper": function(e) {
                console.log(e.type)
            },
            "change.cropper": function(e) {
                console.log(e.type)
            }
        }).cropper(s),
        f(u.body).on("click", "[data-method]", function() {
            var e, t, o = f(this).data();
            if (a.data("cropper") && o.method) {
                if (void 0 !== (o = f.extend({}, o)).target && (e = f(o.target),
                void 0 === o.option))
                    try {
                        o.option = JSON.parse(e.val())
                    } catch (e) {
                        console.log(e.message)
                    }
                if (t = a.cropper(o.method, o.option),
                "getCroppedCanvas" === o.method && f("#getCroppedCanvasModal").modal().find(".modal-body").html(t),
                f.isPlainObject(t) && e)
                    try {
                        e.val(JSON.stringify(t))
                    } catch (e) {
                        console.log(e.message)
                    }
            }
        }).on("keydown", function(e) {
            if (a.data("cropper"))
                switch (e.which) {
                case 37:
                    e.preventDefault(),
                    a.cropper("move", -1, 0);
                    break;
                case 38:
                    e.preventDefault(),
                    a.cropper("move", 0, -1);
                    break;
                case 39:
                    e.preventDefault(),
                    a.cropper("move", 1, 0);
                    break;
                case 40:
                    e.preventDefault(),
                    a.cropper("move", 0, 1)
                }
        });
        var l, c = f("#inputImage"), d = e.URL || e.webkitURL;
        d ? c.change(function() {
            var e, t = this.files;
            a.data("cropper") && t && t.length && (e = t[0],
            /^image\/\w+$/.test(e.type) ? (l = d.createObjectURL(e),
            a.one("built.cropper", function() {
                d.revokeObjectURL(l)
            }).cropper("reset").cropper("replace", l),
            c.val("")) : alert("Please choose an image file."))
        }) : c.parent().remove();
        f(".docs-options :checkbox").on("change", function() {
            var e = f(this);
            a.data("cropper") && (s[e.val()] = e.prop("checked"),
            a.cropper("destroy").cropper(s))
        }),
        f('[data-toggle="tooltip"]').tooltip()
    })
}(window, document, window.jQuery),
function(e, t, o, a) {
    "use strict";
    o(function() {
        if (!o.fn.select2)
            return;
        o("#select2-1").select2({
            theme: "bootstrap4"
        }),
        o("#select2-2").select2({
            theme: "bootstrap4"
        }),
        o("#select2-3").select2({
            theme: "bootstrap4"
        }),
        o("#select2-4").select2({
            placeholder: "Select a state",
            allowClear: !0,
            theme: "bootstrap4"
        })
    })
}(window, document, window.jQuery),
function(e, t, o, a) {
    "use strict";
    "undefined" != typeof Dropzone && (Dropzone.autoDiscover = !1,
    o(function() {
        new Dropzone("#dropzone-area",{
            autoProcessQueue: !1,
            uploadMultiple: !0,
            parallelUploads: 100,
            maxFiles: 100,
            dictDefaultMessage: '<em class="fa fa-upload text-muted"></em><br>Drop files here to upload',
            paramName: "file",
            maxFilesize: 2,
            addRemoveLinks: !0,
            accept: function(e, t) {
                "justinbieber.jpg" === e.name ? t("Naha, you dont. :)") : t()
            },
            init: function() {
                var t = this;
                this.element.querySelector("button[type=submit]").addEventListener("click", function(e) {
                    e.preventDefault(),
                    e.stopPropagation(),
                    t.processQueue()
                }),
                this.on("addedfile", function(e) {
                    console.log("Added file: " + e.name)
                }),
                this.on("removedfile", function(e) {
                    console.log("Removed file: " + e.name)
                }),
                this.on("sendingmultiple", function() {}),
                this.on("successmultiple", function() {}),
                this.on("errormultiple", function() {})
            }
        })
    }))
}(window, document, window.jQuery),
function(e, t, o, a) {
    "use strict";
    o(function() {
        if (!o.fn.validate)
            return;
        var a = o("#example-form");
        a.validate({
            errorPlacement: function(e, t) {
                t.before(e)
            },
            rules: {
                confirm: {
                    equalTo: "#password"
                }
            }
        }),
        a.children("div").steps({
            headerTag: "h4",
            bodyTag: "fieldset",
            transitionEffect: "slideLeft",
            onStepChanging: function(e, t, o) {
                return a.validate().settings.ignore = ":disabled,:hidden",
                a.valid()
            },
            onFinishing: function(e, t) {
                return a.validate().settings.ignore = ":disabled",
                a.valid()
            },
            onFinished: function(e, t) {
                alert("Submitted!"),
                o(this).submit()
            }
        }),
        o("#example-vertical").steps({
            headerTag: "h4",
            bodyTag: "section",
            transitionEffect: "slideLeft",
            stepsOrientation: "vertical"
        })
    })
}(window, document, window.jQuery),
function(e, t, a, o) {
    "use strict";
    a(function() {
        if (!a.fn.editable)
            return;
        a.fn.editableform.buttons = '<button type="submit" class="btn btn-primary btn-sm editable-submit"><i class="fa fa-fw fa-check"></i></button><button type="button" class="btn btn-default btn-sm editable-cancel"><i class="fa fa-fw fa-times"></i></button>',
        a("#enable").click(function() {
            a("#user .editable").editable("toggleDisabled")
        }),
        a("#username").editable({
            type: "text",
            pk: 1,
            name: "username",
            title: "Enter username",
            mode: "inline"
        }),
        a("#firstname").editable({
            validate: function(e) {
                if ("" === a.trim(e))
                    return "This field is required"
            },
            mode: "inline"
        }),
        a("#sex").editable({
            prepend: "not selected",
            source: [{
                value: 1,
                text: "Male"
            }, {
                value: 2,
                text: "Female"
            }],
            display: function(t, e) {
                var o = a.grep(e, function(e) {
                    return e.value == t
                });
                o.length ? a(this).text(o[0].text).css("color", {
                    "": "gray",
                    1: "green",
                    2: "blue"
                }[t]) : a(this).empty()
            },
            mode: "inline"
        }),
        a("#status").editable({
            mode: "inline"
        }),
        a("#group").editable({
            showbuttons: !1,
            mode: "inline"
        }),
        a("#dob").editable({
            mode: "inline"
        }),
        a("#event").editable({
            placement: "right",
            combodate: {
                firstItem: "name"
            },
            mode: "inline"
        }),
        a("#comments").editable({
            showbuttons: "bottom",
            mode: "inline"
        }),
        a("#note").editable({
            mode: "inline"
        }),
        a("#pencil").click(function(e) {
            e.stopPropagation(),
            e.preventDefault(),
            a("#note").editable("toggle")
        }),
        a("#user .editable").on("hidden", function(e, t) {
            if ("save" === t || "nochange" === t) {
                var o = a(this).closest("tr").next().find(".editable");
                a("#autoopen").is(":checked") ? setTimeout(function() {
                    o.editable("show")
                }, 300) : o.focus()
            }
        }),
        a("#users a").editable({
            type: "text",
            name: "username",
            title: "Enter username",
            mode: "inline"
        })
    })
}(window, document, window.jQuery),
function(e, t, c, o) {
    "use strict";
    c(function() {
        if (!c.fn.fullCalendar)
            return;
        var e = c("#calendar")
          , t = (o = new Date,
        a = o.getDate(),
        n = o.getMonth(),
        r = o.getFullYear(),
        [{
            title: "All Day Event",
            start: new Date(r,n,1),
            backgroundColor: "#f56954",
            borderColor: "#f56954"
        }, {
            title: "Long Event",
            start: new Date(r,n,a - 5),
            end: new Date(r,n,a - 2),
            backgroundColor: "#f39c12",
            borderColor: "#f39c12"
        }, {
            title: "Meeting",
            start: new Date(r,n,a,10,30),
            allDay: !1,
            backgroundColor: "#0073b7",
            borderColor: "#0073b7"
        }, {
            title: "Lunch",
            start: new Date(r,n,a,12,0),
            end: new Date(r,n,a,14,0),
            allDay: !1,
            backgroundColor: "#00c0ef",
            borderColor: "#00c0ef"
        }, {
            title: "Birthday Party",
            start: new Date(r,n,a + 1,19,0),
            end: new Date(r,n,a + 1,22,30),
            allDay: !1,
            backgroundColor: "#00a65a",
            borderColor: "#00a65a"
        }, {
            title: "Open Google",
            start: new Date(r,n,28),
            end: new Date(r,n,29),
            url: "//google.com/",
            backgroundColor: "#3c8dbc",
            borderColor: "#3c8dbc"
        }]);
        var o, a, n, r;
        (function(a) {
            var n = c(".external-events");
            new u(n.children("div"));
            var r = "#f6504d"
              , e = c(".external-event-add-btn")
              , i = c(".external-event-name")
              , o = c(".external-event-color-selector .circle");
            c(".external-events-trash").droppable({
                accept: ".fc-event",
                activeClass: "active",
                hoverClass: "hovered",
                tolerance: "touch",
                drop: function(e, t) {
                    if (d) {
                        var o = d.id || d._id;
                        a.fullCalendar("removeEvents", o),
                        t.draggable.remove(),
                        d = null
                    }
                }
            }),
            o.click(function(e) {
                e.preventDefault();
                var t = c(this);
                r = t.css("background-color"),
                o.removeClass("selected"),
                t.addClass("selected")
            }),
            e.click(function(e) {
                e.preventDefault();
                var t = i.val();
                if ("" !== c.trim(t)) {
                    var o = c("<div/>").css({
                        "background-color": r,
                        "border-color": r,
                        color: "#fff"
                    }).html(t);
                    n.prepend(o),
                    new u(o),
                    i.val("")
                }
            })
        }
        )(e),
        i = e,
        s = t,
        l = c("#remove-after-drop"),
        i.fullCalendar({
            header: {
                left: "prev,next today",
                center: "title",
                right: "month,agendaWeek,agendaDay"
            },
            buttonIcons: {
                prev: " fa fa-caret-left",
                next: " fa fa-caret-right"
            },
            buttonText: {
                today: "today",
                month: "month",
                week: "week",
                day: "day"
            },
            editable: !0,
            droppable: !0,
            drop: function(e, t) {
                var o = c(this)
                  , a = o.data("calendarEventObject");
                if (a) {
                    var n = c.extend({}, a);
                    n.start = e,
                    n.allDay = t,
                    n.backgroundColor = o.css("background-color"),
                    n.borderColor = o.css("border-color"),
                    i.fullCalendar("renderEvent", n, !0),
                    l.is(":checked") && o.remove()
                }
            },
            eventDragStart: function(e, t, o) {
                d = e
            },
            events: s
        });
        var i, s, l
    });
    var d = null
      , u = function(e) {
        e && e.each(function() {
            var e = c(this)
              , t = {
                title: c.trim(e.text())
            };
            e.data("calendarEventObject", t),
            e.draggable({
                zIndex: 1070,
                revert: !0,
                revertDuration: 0
            })
        })
    }
}(window, document, window.jQuery),
function(e, t, o, a) {
    "use strict";
    o(function() {
        if (!o.fn.jQCloud)
            return;
        o("#jqcloud").jQCloud([{
            text: "Lorem",
            weight: 13
        }, {
            text: "Ipsum",
            weight: 10.5
        }, {
            text: "Dolor",
            weight: 9.4
        }, {
            text: "Sit",
            weight: 8
        }, {
            text: "Amet",
            weight: 6.2
        }, {
            text: "Consectetur",
            weight: 5
        }, {
            text: "Adipiscing",
            weight: 5
        }, {
            text: "Sit",
            weight: 8
        }, {
            text: "Amet",
            weight: 6.2
        }, {
            text: "Consectetur",
            weight: 5
        }, {
            text: "Adipiscing",
            weight: 5
        }], {
            width: 240,
            height: 200,
            steps: 7
        })
    })
}(window, document, window.jQuery),
function(e, t, o, a) {
    "use strict";
    o(function() {
        if (!o.fn.slider)
            return;
        if (!o.fn.chosen)
            return;
        if (!o.fn.datepicker)
            return;
        o("[data-ui-slider]").slider(),
        o(".chosen-select").chosen(),
        o("#datetimepicker").datepicker({
            orientation: "bottom",
            icons: {
                time: "fa fa-clock-o",
                date: "fa fa-calendar",
                up: "fa fa-chevron-up",
                down: "fa fa-chevron-down",
                previous: "fa fa-chevron-left",
                next: "fa fa-chevron-right",
                today: "fa fa-crosshairs",
                clear: "fa fa-trash"
            }
        })
    })
}(window, document, window.jQuery),
function(e, t, u, o) {
    "use strict";
    u(function() {
        if (!u.fn.gMap)
            return;
        var d = [];
        u("[data-gmap]").each(function() {
            var e = u(this)
              , t = e.data("address") && e.data("address").split(";")
              , o = e.data("title") && e.data("title").split(";")
              , a = e.data("zoom") || 14
              , n = e.data("maptype") || "ROADMAP"
              , r = [];
            if (t) {
                for (var i in t)
                    "string" == typeof t[i] && r.push({
                        address: t[i],
                        html: o && o[i] || "",
                        popup: !0
                    });
                var s = {
                    controls: {
                        panControl: !0,
                        zoomControl: !0,
                        mapTypeControl: !0,
                        scaleControl: !0,
                        streetViewControl: !0,
                        overviewMapControl: !0
                    },
                    scrollwheel: !1,
                    maptype: n,
                    markers: r,
                    zoom: a
                }
                  , l = e.gMap(s)
                  , c = l.data("gMap.reference");
                d.push(c),
                void 0 !== e.data("styled") && c.setOptions({
                    styles: f
                })
            }
        })
    });
    var f = [{
        featureType: "water",
        stylers: [{
            visibility: "on"
        }, {
            color: "#bdd1f9"
        }]
    }, {
        featureType: "all",
        elementType: "labels.text.fill",
        stylers: [{
            color: "#334165"
        }]
    }, {
        featureType: "landscape",
        stylers: [{
            color: "#e9ebf1"
        }]
    }, {
        featureType: "road.highway",
        elementType: "geometry",
        stylers: [{
            color: "#c5c6c6"
        }]
    }, {
        featureType: "road.arterial",
        elementType: "geometry",
        stylers: [{
            color: "#fff"
        }]
    }, {
        featureType: "road.local",
        elementType: "geometry",
        stylers: [{
            color: "#fff"
        }]
    }, {
        featureType: "transit",
        elementType: "geometry",
        stylers: [{
            color: "#d8dbe0"
        }]
    }, {
        featureType: "poi",
        elementType: "geometry",
        stylers: [{
            color: "#cfd5e0"
        }]
    }, {
        featureType: "administrative",
        stylers: [{
            visibility: "on"
        }, {
            lightness: 33
        }]
    }, {
        featureType: "poi.park",
        elementType: "labels",
        stylers: [{
            visibility: "on"
        }, {
            lightness: 20
        }]
    }, {
        featureType: "road",
        stylers: [{
            color: "#d8dbe0",
            lightness: 20
        }]
    }]
}(window, document, window.jQuery),
function(e, t, o, a) {
    "use strict";
    o(function() {
        var e = o("[data-vector-map]");
        new VectorMap(e,{
            CA: 11100,
            DE: 2510,
            FR: 3710,
            AU: 5710,
            GB: 8310,
            RU: 9310,
            BR: 6610,
            IN: 7810,
            CN: 4310,
            US: 839,
            SA: 410
        },[{
            latLng: [41.9, 12.45],
            name: "Vatican City"
        }, {
            latLng: [43.73, 7.41],
            name: "Monaco"
        }, {
            latLng: [-.52, 166.93],
            name: "Nauru"
        }, {
            latLng: [-8.51, 179.21],
            name: "Tuvalu"
        }, {
            latLng: [7.11, 171.06],
            name: "Marshall Islands"
        }, {
            latLng: [17.3, -62.73],
            name: "Saint Kitts and Nevis"
        }, {
            latLng: [3.2, 73.22],
            name: "Maldives"
        }, {
            latLng: [35.88, 14.5],
            name: "Malta"
        }, {
            latLng: [41, -71.06],
            name: "New England"
        }, {
            latLng: [12.05, -61.75],
            name: "Grenada"
        }, {
            latLng: [13.16, -59.55],
            name: "Barbados"
        }, {
            latLng: [17.11, -61.85],
            name: "Antigua and Barbuda"
        }, {
            latLng: [-4.61, 55.45],
            name: "Seychelles"
        }, {
            latLng: [7.35, 134.46],
            name: "Palau"
        }, {
            latLng: [42.5, 1.51],
            name: "Andorra"
        }])
    })
}(window, document, window.jQuery),
function(e, t, o, a) {
    "use strict";
    e.VectorMap = function(e, t, o) {
        if (!e || !e.length)
            return;
        var a = e.data()
          , n = a.height || "300"
          , r = {
            markerColor: a.markerColor || d.markerColor,
            bgColor: a.bgColor || d.bgColor,
            scale: a.scale || 1,
            scaleColors: a.scaleColors || d.scaleColors,
            regionFill: a.regionFill || d.regionFill,
            mapName: a.mapName || "world_mill_en"
        };
        e.css("height", n),
        i = e,
        s = r,
        l = t,
        c = o,
        i.vectorMap({
            map: s.mapName,
            backgroundColor: s.bgColor,
            zoomMin: 1,
            zoomMax: 8,
            zoomOnScroll: !1,
            regionStyle: {
                initial: {
                    fill: s.regionFill,
                    "fill-opacity": 1,
                    stroke: "none",
                    "stroke-width": 1.5,
                    "stroke-opacity": 1
                },
                hover: {
                    "fill-opacity": .8
                },
                selected: {
                    fill: "blue"
                },
                selectedHover: {}
            },
            focusOn: {
                x: .4,
                y: .6,
                scale: s.scale
            },
            markerStyle: {
                initial: {
                    fill: s.markerColor,
                    stroke: s.markerColor
                }
            },
            onRegionLabelShow: function(e, t, o) {
                l && l[o] && t.html(t.html() + ": " + l[o] + " visitors")
            },
            markers: c,
            series: {
                regions: [{
                    values: l,
                    scale: s.scaleColors,
                    normalizeFunction: "polynomial"
                }]
            }
        });
        var i, s, l, c
    }
    ;
    var d = {
        markerColor: "#23b7e5",
        bgColor: "transparent",
        scaleColors: ["#878c9a"],
        regionFill: "#bbbec6"
    }
}(window, document, window.jQuery),
function(e, t, o, a) {
    "use strict";
    o(function() {
        if (!o.fn.bootgrid)
            return;
        o("#bootgrid-basic").bootgrid({
            templates: {
                actionButton: '<button class="btn btn-secondary" type="button" title="{{ctx.text}}">{{ctx.content}}</button>',
                actionDropDown: '<div class="{{css.dropDownMenu}}"><button class="btn btn-secondary dropdown-toggle dropdown-toggle-nocaret" type="button" data-toggle="dropdown"><span class="{{css.dropDownMenuText}}">{{ctx.content}}</span></button><ul class="{{css.dropDownMenuItems}}" role="menu"></ul></div>',
                actionDropDownItem: '<li class="dropdown-item"><a href="" data-action="{{ctx.action}}" class="dropdown-link {{css.dropDownItemButton}}">{{ctx.text}}</a></li>',
                actionDropDownCheckboxItem: '<li class="dropdown-item"><label class="dropdown-item p-0"><input name="{{ctx.name}}" type="checkbox" value="1" class="{{css.dropDownItemCheckbox}}" {{ctx.checked}} /> {{ctx.label}}</label></li>',
                paginationItem: '<li class="page-item {{ctx.css}}"><a href="" data-page="{{ctx.page}}" class="page-link {{css.paginationButton}}">{{ctx.text}}</a></li>'
            }
        }),
        o("#bootgrid-selection").bootgrid({
            selection: !0,
            multiSelect: !0,
            rowSelect: !0,
            keepSelection: !0,
            templates: {
                select: '<div class="checkbox c-checkbox"><label class="mb-0"><input type="{{ctx.type}}" class="{{css.selectBox}}" value="{{ctx.value}}" {{ctx.checked}}><span class="fa fa-check"></span></label></div>',
                actionButton: '<button class="btn btn-secondary" type="button" title="{{ctx.text}}">{{ctx.content}}</button>',
                actionDropDown: '<div class="{{css.dropDownMenu}}"><button class="btn btn-secondary dropdown-toggle dropdown-toggle-nocaret" type="button" data-toggle="dropdown"><span class="{{css.dropDownMenuText}}">{{ctx.content}}</span></button><ul class="{{css.dropDownMenuItems}}" role="menu"></ul></div>',
                actionDropDownItem: '<li class="dropdown-item"><a href="" data-action="{{ctx.action}}" class="dropdown-link {{css.dropDownItemButton}}">{{ctx.text}}</a></li>',
                actionDropDownCheckboxItem: '<li class="dropdown-item"><label class="dropdown-item p-0"><input name="{{ctx.name}}" type="checkbox" value="1" class="{{css.dropDownItemCheckbox}}" {{ctx.checked}} /> {{ctx.label}}</label></li>',
                paginationItem: '<li class="page-item {{ctx.css}}"><a href="" data-page="{{ctx.page}}" class="page-link {{css.paginationButton}}">{{ctx.text}}</a></li>'
            }
        });
        var e = o("#bootgrid-command").bootgrid({
            formatters: {
                commands: function(e, t) {
                    return '<button type="button" class="btn btn-sm btn-info mr-2 command-edit" data-row-id="' + t.id + '"><em class="fa fa-edit fa-fw"></em></button><button type="button" class="btn btn-sm btn-danger command-delete" data-row-id="' + t.id + '"><em class="fa fa-trash fa-fw"></em></button>'
                }
            },
            templates: {
                actionButton: '<button class="btn btn-secondary" type="button" title="{{ctx.text}}">{{ctx.content}}</button>',
                actionDropDown: '<div class="{{css.dropDownMenu}}"><button class="btn btn-secondary dropdown-toggle dropdown-toggle-nocaret" type="button" data-toggle="dropdown"><span class="{{css.dropDownMenuText}}">{{ctx.content}}</span></button><ul class="{{css.dropDownMenuItems}}" role="menu"></ul></div>',
                actionDropDownItem: '<li class="dropdown-item"><a href="" data-action="{{ctx.action}}" class="dropdown-link {{css.dropDownItemButton}}">{{ctx.text}}</a></li>',
                actionDropDownCheckboxItem: '<li class="dropdown-item"><label class="dropdown-item p-0"><input name="{{ctx.name}}" type="checkbox" value="1" class="{{css.dropDownItemCheckbox}}" {{ctx.checked}} /> {{ctx.label}}</label></li>',
                paginationItem: '<li class="page-item {{ctx.css}}"><a href="" data-page="{{ctx.page}}" class="page-link {{css.paginationButton}}">{{ctx.text}}</a></li>'
            }
        }).on("loaded.rs.jquery.bootgrid", function() {
            e.find(".command-edit").on("click", function() {
                console.log("You pressed edit on row: " + o(this).data("row-id"))
            }).end().find(".command-delete").on("click", function() {
                console.log("You pressed delete on row: " + o(this).data("row-id"))
            })
        })
    })
}(window, document, window.jQuery),
function(e, t, o, a) {
    "use strict";
    o(function() {
        if (!o.fn.DataTable)
            return;
        o("#datatable1").DataTable({
            paging: !0,
            ordering: !0,
            info: !0,
            responsive: !0,
            oLanguage: {
                sSearch: '<em class="fas fa-search"></em>',
                sLengthMenu: "_MENU_ records per page",
                info: "Showing page _PAGE_ of _PAGES_",
                zeroRecords: "Nothing found - sorry",
                infoEmpty: "No records available",
                infoFiltered: "(filtered from _MAX_ total records)",
                oPaginate: {
                    sNext: '<em class="fa fa-caret-right"></em>',
                    sPrevious: '<em class="fa fa-caret-left"></em>'
                }
            }
        }),
        o("#datatable2").DataTable({
            paging: !0,
            ordering: !0,
            info: !0,
            responsive: !0,
            oLanguage: {
                sSearch: "Search all columns:",
                sLengthMenu: "_MENU_ records per page",
                info: "Showing page _PAGE_ of _PAGES_",
                zeroRecords: "Nothing found - sorry",
                infoEmpty: "No records available",
                infoFiltered: "(filtered from _MAX_ total records)",
                oPaginate: {
                    sNext: '<em class="fa fa-caret-right"></em>',
                    sPrevious: '<em class="fa fa-caret-left"></em>'
                }
            },
            dom: "Bfrtip",
            buttons: [{
                extend: "copy",
                className: "btn-info"
            }, {
                extend: "csv",
                className: "btn-info"
            }, {
                extend: "excel",
                className: "btn-info",
                title: "XLS-File"
            }, {
                extend: "pdf",
                className: "btn-info",
                title: o("title").text()
            }, {
                extend: "print",
                className: "btn-info"
            }]
        }),
        o("#datatable3").DataTable({
            paging: !0,
            ordering: !0,
            info: !0,
            responsive: !0,
            oLanguage: {
                sSearch: "Search all columns:",
                sLengthMenu: "_MENU_ records per page",
                info: "Showing page _PAGE_ of _PAGES_",
                zeroRecords: "Nothing found - sorry",
                infoEmpty: "No records available",
                infoFiltered: "(filtered from _MAX_ total records)",
                oPaginate: {
                    sNext: '<em class="fa fa-caret-right"></em>',
                    sPrevious: '<em class="fa fa-caret-left"></em>'
                }
            },
            keys: !0
        })
    })
}(window, document, window.jQuery),
function(e, t, a, o) {
    "use strict";
    a(function() {
        var e = {
            errorClass: "is-invalid",
            successClass: "is-valid",
            classHandler: function(e) {
                var t = e.$element.parents(".form-group").find("input");
                return t.length || (t = e.$element.parents(".c-checkbox").find("label")),
                t
            },
            errorsContainer: function(e) {
                return e.$element.parents(".form-group")
            },
            errorsWrapper: '<div class="text-help">',
            errorTemplate: "<div></div>"
        }
          , t = a("#loginForm");
        t.length && t.parsley(e);
        var o = a("#registerForm");
        o.length && o.parsley(e)
    })
}(window, document, window.jQuery),
function(e, t, o, a) {
    "use strict";
    (0,
    window.jQuery)(function() {})
}(window, document);
