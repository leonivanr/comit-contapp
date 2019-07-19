$(() => {
    // Botones menú y añadir.
    $(document).on('click', '.cta', function () {
        $(this).toggleClass('active')
    })
    $("#menu-toggle").click(function (e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });

    // Sidebar.
    $("#menu-plus-toggle").click(function (e) {
        
        $("#aniadir-wrap").toggleClass("d-block");
        $("#balance-wrap").toggleClass("d-none");
    });
    // Login Register Form
    $('#logreg-forms #forgot_pswd').click(toggleResetPswd);
    $('#logreg-forms #cancel_reset').click(toggleResetPswd);
    $('#logreg-forms #btn-signup').click(toggleSignUp);
    $('#logreg-forms #cancel_signup').click(toggleSignUp);


    function toggleResetPswd(e){
        e.preventDefault();
        $('#logreg-forms .form-signin').toggle() // display:block or none
        $('#logreg-forms .form-reset').toggle() // display:block or none
    }

    function toggleSignUp(e) {
        e.preventDefault();
        $('#logreg-forms .form-signin').toggle(); // display:block or none
        $('#logreg-forms .form-signup').toggle(); // display:block or none
    }

})