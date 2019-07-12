
$(()=>{
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
      });
    $('#agregar-btn').click(function () {
        console.log($('#add-monto').val());
        console.log($('#add-descripcion').val());
        $('.detalles-wrap').append(
            `<div class="card">
                <div class="card-body d-flex justify-content-between">
                    <span>`+
                    $('#add-descripcion').val()
                    
                    +`
                    </span>
                    <span class="align-self-end">$
                    `+
                    $('#add-monto').val()
                    +`
                    </span>
                </div>
            </div>`
        )


    })
    // Login Register Form
    $('#logreg-forms #forgot_pswd').click(toggleResetPswd);
    $('#logreg-forms #cancel_reset').click(toggleResetPswd);
    $('#logreg-forms #btn-signup').click(toggleSignUp);
    $('#logreg-forms #cancel_signup').click(toggleSignUp);

    $('#user-pass, #user-repeatpass').on('keyup', function () {
        if ($('#user-pass').val() == $('#user-repeatpass').val()) {
            $('#register-btn').removeClass('disabled');
        } 
      });
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