$(document).ready(function () {
    $("#slider-range1").slider({
        range: true,
        min: 26,
        max: 899,
        values: [26, 899],
        slide: function (event, ui) {
            $("#amount").val(ui.values[ 0 ] + " - " + ui.values[ 1 ]);
        }
    });
    $("#amount").val($("#slider-range1").slider("values", 0) +
            " - " + $("#slider-range1").slider("values", 1));
});
$(document).ready(function () {
    var acc = document.getElementsByClassName("accordion1");
    var i;

    for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function () {
            this.classList.toggle("active1");
            var panel = this.nextElementSibling;
            if (panel.style.display === "block") {
                panel.style.display = "none";
            } else {
                panel.style.display = "block";
            }
        });
    }
});

