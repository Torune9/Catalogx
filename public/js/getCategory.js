document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('form');  
    const baseUrl = form.getAttribute('data-url'); 
    const radioButtons = document.querySelectorAll('input[name="category"]');
   
    function getQueryParam(param) {
        const urlParams = new URLSearchParams(window.location.search);
        return urlParams.get(param);
    }
 
    const categoryParam = getQueryParam('category');

    if (categoryParam !== null) {
        radioButtons.forEach(function(radio) {
            if (radio.value === categoryParam) {
                radio.checked = true;
            }
        });
    } else {

        document.getElementById('allCategories').checked = true;
    }

    radioButtons.forEach(function(radio) {
        radio.addEventListener('change', function() {
            form.action = baseUrl;
            form.submit();
        });
    });
});
