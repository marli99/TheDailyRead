console.log("Hello");
$(function () {

    $(".register").hide();

    $('.form-reg').on("click", function () {
        $(".login").hide();
        $(".register").fadeIn();
    });

    $('.back-login').on("click", function () {
        $(".login").fadeIn();
        $(".register").hide();
    });

});
