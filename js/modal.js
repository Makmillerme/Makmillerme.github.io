$(document).ready(function() {
    $('#wf-form-Call-Me-Back').submit(function(e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: "mail.php",
            data: $(this).serialize(),
            success: function(response) {
                var responseData = response;
                console.log(responseData);
                if(responseData.status === "success") {
                    $("#modalMessage").text("Die E-Mail wurde erfolgreich gesendet.");
                    // Очищення полів форми
                    $('#wf-form-Call-Me-Back').trigger("reset");
                } else {
                    $("#modalMessage").text("Die E-Mail wurde nicht gesendet.");
                }
                $("#modal").css('display', 'flex');
            },
            error: function(xhr, status, error) {
                $("#modalMessage").text("Es gab einen Fehler bei der Anfrage.");
                $("#modal").css('display', 'flex');
            }
        });
    });
});

function closeModal() {
    $("#modal").hide();
}

