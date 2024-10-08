var my_handlers = {
    // fill provinces
    fill_provinces: function () {
        let dropdown = $('#province');
        dropdown.empty();
        dropdown.append('<option selected="true" disabled>Choose Province</option>');
        dropdown.prop('selectedIndex', 0);

        var url = 'lib/ph-json/province.json';
        $.getJSON(url, function (data) {
            $.each(data, function (key, entry) {
                dropdown.append($('<option></option>').attr('value', entry.province_code).text(entry.province_name));
            })
        });
    },

    // orig modified fill cities
    fill_cities: function () {
        let province_code = $(this).val();
        let dropdown = $('#city');
        dropdown.empty();
        dropdown.append('<option selected="true" disabled>Choose City/Municipality</option>');
        dropdown.prop('selectedIndex', 0);

        var url = 'lib/ph-json/city.json';
        $.getJSON(url, function (data) {
            var result = data.filter(function (value) {
                return value.province_code == province_code;
            });

            result.sort(function (a, b) {
                return a.city_name.localeCompare(b.city_name);
            });

            $.each(result, function (key, entry) {
                dropdown.append($('<option></option>').attr('value', entry.city_code).text(entry.city_name));
            })
        });
    },


    onchange_barangay: function () {
        let barangay_text = $(this).find("option:selected").text();
        let barangay_input = $('#barangay-text');
        barangay_input.val(barangay_text);
    },
};

$(function () {
    // events
    $('#province').on('change', my_handlers.fill_cities);
    $('#city').on('change', my_handlers.fill_barangays);
    $('#barangay').on('change', my_handlers.onchange_barangay);

    // load provinces
    my_handlers.fill_provinces();
});