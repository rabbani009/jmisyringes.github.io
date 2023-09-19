$(document).ready(function () {
    $(".dependent-dropdown").on('change', function(e) {
        console.log("Dropdown change event triggered.");
        e.preventDefault();
        var _url = $(this).data('route');
        var _params = $(this).data('params');
        _params.value = $(this).val();
        $.ajax({
            url: _url,
            type: "POST",
            data: _params,
            success: function(data) {
                console.log("Data received from the API:", data);
                var dropdown = $(data.dropdown);
                dropdown.find("option:not(:first)").remove();
                $.each(data.options, function(key, val) { dropdown.append($("<option />").val(key).text(val)); });
            }
        });
    });
});
