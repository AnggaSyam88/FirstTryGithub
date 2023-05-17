function checkOnlyOne(checkbox) {
    var checkboxes = document.getElementsByName('Jenjang[]');
    checkboxes.forEach(function(currentCheckbox) {
        if (currentCheckbox !== checkbox) {
            currentCheckbox.checked = false;
        }
    });
}

