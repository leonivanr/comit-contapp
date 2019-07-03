
$(()=>{
    $('#nav-bar a').click(function (e) {
        let aux = $(e.target);
        let proximaPagina = aux.parent()[0].hash;
        let activeNav = aux.parents('a')[0];
        $('#tab-wrap .active').removeClass('active');
        $(proximaPagina).addClass('active');
        $('#nav-bar a').removeClass('active');
        $(activeNav).addClass('active');
    })


    // Login Register Form
    $('#logreg-forms #forgot_pswd').click(toggleResetPswd);
    $('#logreg-forms #cancel_reset').click(toggleResetPswd);
    $('#logreg-forms #btn-signup').click(toggleSignUp);
    $('#logreg-forms #cancel_signup').click(toggleSignUp);
})


function toggleResetPswd(e){
    e.preventDefault();
    $('#logreg-forms .form-signin').toggle() // display:block or none
    $('#logreg-forms .form-reset').toggle() // display:block or none
}

function toggleSignUp(e){
    e.preventDefault();
    $('#logreg-forms .form-signin').toggle(); // display:block or none
    $('#logreg-forms .form-signup').toggle(); // display:block or none
}