/* Dropdown menu: */

var x, i, j, l, ll, selElmnt, a, b, c;
/* Look for any elements with the class "custom-select": */
x = document.getElementsByClassName("custom-select");
l = x.length;
for (i = 0; i < l; i++) {
    selElmnt = x[i].getElementsByTagName("select")[0];
    ll = selElmnt.length;
    /* For each element, create a new DIV that will act as the selected item: */
    a = document.createElement("DIV");
    a.setAttribute("class", "select-selected");
    a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
    x[i].appendChild(a);
    /* For each element, create a new DIV that will contain the option list: */
    b = document.createElement("DIV");
    b.setAttribute("class", "select-items select-hide");
    for (j = 1; j < ll; j++) {
        /* For each option in the original select element,
                    create a new DIV that will act as an option item: */
        c = document.createElement("DIV");
        c.innerHTML = selElmnt.options[j].innerHTML;
        c.addEventListener("click", function (e) {
            /* When an item is clicked, update the original select box,
                        and the selected item: */
            var y, i, k, s, h, sl, yl;
            s = this.parentNode.parentNode.getElementsByTagName("select")[0];
            sl = s.length;
            h = this.parentNode.previousSibling;
            for (i = 0; i < sl; i++) {
                if (s.options[i].innerHTML == this.innerHTML) {
                    s.selectedIndex = i;
                    h.innerHTML = this.innerHTML;
                    y =
                        this.parentNode.getElementsByClassName(
                            "same-as-selected"
                        );
                    yl = y.length;
                    for (k = 0; k < yl; k++) {
                        y[k].removeAttribute("class");
                    }
                    this.setAttribute("class", "same-as-selected");
                    break;
                }
            }
            h.click();
        });
        b.appendChild(c);
    }
    x[i].appendChild(b);
    a.addEventListener("click", function (e) {
        /* When the select box is clicked, close any other select boxes,
                    and open/close the current select box: */
        e.stopPropagation();
        closeAllSelect(this);
        this.nextSibling.classList.toggle("select-hide");
        this.classList.toggle("select-arrow-active");
    });
}

function closeAllSelect(elmnt) {
    /* A function that will close all select boxes in the document,
                except the current select box: */
    var x,
        y,
        i,
        xl,
        yl,
        arrNo = [];
    x = document.getElementsByClassName("select-items");
    y = document.getElementsByClassName("select-selected");
    xl = x.length;
    yl = y.length;
    for (i = 0; i < yl; i++) {
        if (elmnt == y[i]) {
            arrNo.push(i);
        } else {
            y[i].classList.remove("select-arrow-active");
        }
    }
    for (i = 0; i < xl; i++) {
        if (arrNo.indexOf(i)) {
            x[i].classList.add("select-hide");
        }
    }
}

/* If the user clicks anywhere outside the select box,
            then close all select boxes: */
document.addEventListener("click", closeAllSelect);

Highcharts.chart("bpContainer2", {
    chart: {
        type: "boxplot",
    },

    title: {
        text: "Box plot of monthly recorded PM2.5 concentration",
    },

    legend: {
        enabled: false,
    },

    xAxis: {
        categories: [
            "1",
            "2",
            "3",
            "4",
            "5",
            "6",
            "7",
            "8",
            "9",
            "10",
            "11",
            "12",
        ],
        title: {
            text: "Month",
        },
    },

    yAxis: {
        title: {
            text: "PM2.5",
        },
    },

    series: [
        {
            name: "Observations (Conc. of PM2.5)",
            data: [
                // min, lower q, median, upper q, max
                [100, 180, 190, 220, 290],
                [5, 160, 170, 210, 290],
                [50, 140, 170, 190, 220],
                [35, 120, 140, 150, 180],
                [55, 100, 110, 120, 150],
                [35, 70, 80, 100, 120],
                [20, 40, 47, 50, 70],
                [15, 30, 40, 50, 100],
                [27, 65, 74, 100, 120],
                [70, 120, 137, 140, 170],
                [40, 110, 120, 160, 180],
                [60, 140, 175, 180, 200],
            ],
            tooltip: {
                headerFormat: "<em>Month No: {point.key}</em><br/>",
            },
        },
    ],
});

Highcharts.chart("bpContainer3", {
    chart: {
        type: "boxplot",
    },

    title: {
        text: "Box plot of season-wise, time based AQI data",
    },

    xAxis: {
        categories: ["Winter", "Spring", "Summer", "Autmn"],
        title: {
            text: "Season",
        },
    },

    yAxis: {
        title: {
            text: "AQI",
        },
    },
    legend: {
        enabled: false,
    },

    series: [
        {
            name: "AQI",
            data: [
                // min, lower q, median, upper q, max
                [25, 120, 150, 200, 280],
                [15, 50, 75, 100, 180],
                [5, 25, 30, 40, 70],
                [20, 40, 70, 100, 190],
            ],
            tooltip: {
                headerFormat: "<em>Season: {point.key}</em><br/>",
            },
        },
    ],
});
