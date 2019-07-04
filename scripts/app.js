
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
    $('#add-btn').click(function () {
        $('#tab-wrap .active').removeClass('active');
        $('#tab-aniadir').addClass('active');
    })
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