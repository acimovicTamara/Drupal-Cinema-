function genre(){
    $("#genre").on("change", function () {
     const genre = $(this).val();
        $.ajax({
            method: "GET",
            url: "/movie-reservation?genre=" + $("#genre").val(),
            success: function () {
                window.location.href = "/movie-reservation?genre=" + $("#genre").val();
            }
        });
    });
}
genre();
