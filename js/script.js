function validateForm ( )
{
    var valid = true;
    var fields = ["question", "birthday", "telefon", "email", "name"];
    fields.forEach(function(item, i, fields) {
        if ( document.feedback[item].value == "" ) {
            var input = document.getElementById(item);
            valid = false;
            input.focus();
        }
    });
    return valid;
}

function setHtml () {
        document.getElementById("formHtml").value = document.getElementById('feedback').innerHTML;
}