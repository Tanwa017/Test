$(function() {
    var element = document.getElementById('soldier');
    $('input:radio[name="conditions"]').change(function() {
        if ($(this).val() == '3') {
            element.style.display = 'block';
        } else {
            element.style.display = 'none';
        }
    });
});

$(function() {
    var element = document.getElementById('other');
    $('input:radio[name="home"]').change(function() {
        if ($(this).val() == 'other') {
            element.style.display = 'block';
        } else {
            element.style.display = 'none';
        }
    });
});