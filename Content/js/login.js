$(document).ready(function () {
    $('#formRegister').css('display', 'none');
    $('#loading').hide();      
});

function showRegister() {
    $('#formLogin').hide();
    $('#formRegister').show();
}

function hideRegister() {
    $('#formRegister').hide();
    $('#formLogin').show();
}