$(document).ready(function () {
    $("#slider-range").slider({
        range: true,
        min: 26,
        max: 899,
        values: [26, 899],
        slide: function (event, ui) {
            $("#amount").val(ui.values[ 0 ] + " - " + ui.values[ 1 ]);
        }
    });
    $("#amount").val($("#slider-range").slider("values", 0) +
            " - " + $("#slider-range").slider("values", 1));
});
