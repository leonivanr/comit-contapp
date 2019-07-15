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
    // Añadir registro.
    $('#registro-anadi').click(function (e) {
        // e.preventDefault();
        let nota = '';
        if ($('#registro-descr').val() === '' || $('#registro-monto').val() === '' ) {
            return;
        }
        if ($('#registro-nota').val() !== '') {
            nota = `<div class="ml-1">
            <i class="fas fa-info-circle"></i>
            `
            +
            $('#registro-nota').val()
            +
            `
            </div>`;
        }
        
        $('#reg-container').prepend(
            `<div class="mt-1">
                <div class="row m-0">

                <div class="col card">
                    <div class="card-body px-1 py-1">
                    
                    <div class="row">
                        <div class="col-12 d-flex justify-content-between text-secondary small">
                        <div>
                            Por Ivan
                        </div>
                        <div class="align-self-end">
                        `
                        +
                        $('#registro-fecha').val()
                        +
                        `
                        </div>

                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-12 d-flex justify-content-between">
                        <h4 class="my-1">
                        `
                        +
                        $('#registro-descr').val()
                        +
                        `
                        </h4>
                        <h4 class="align-self-end my-1">
                        
                        <span>
                        $
                        `
                        +
                        $('#registro-monto').val()
                        +
                        `
                        </span>
                        </h4>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 d-flex justify-content-start text-secondary small">
                        <div>
                            <i class="fas fa-tag"></i>
                            `
                            +
                            $('#registro-cat').val()
                            +
                            `
                        </div>
                            `
                            +
                            nota
                            +
                            `
                        </div>
                    </div>


                    </div>
                </div>

                </div>

            </div>`
            );
        // $('#registro-nota, #registro-descr, #registro-monto').val("");

    })
    // Login Register Form
    // $('#logreg-forms #forgot_pswd').click(toggleResetPswd);
    // $('#logreg-forms #cancel_reset').click(toggleResetPswd);
    $('#logreg-forms #btn-signup').click(toggleSignUp);
    $('#logreg-forms #cancel_signup').click(toggleSignUp);

    // Validación contraseña.
    $('#user-pass, #user-repeatpass').on('keyup', function () {
        if ($('#user-pass').val() == $('#user-repeatpass').val()) {
            $('#register-btn').removeClass('disabled');
        }
    });
    // function toggleResetPswd(e){
    //     e.preventDefault();
    //     $('#logreg-forms .form-signin').toggle() // display:block or none
    //     $('#logreg-forms .form-reset').toggle() // display:block or none
    // }

    function toggleSignUp(e) {
        e.preventDefault();
        $('#logreg-forms .form-signin').toggle(); // display:block or none
        $('#logreg-forms .form-signup').toggle(); // display:block or none
    }

})