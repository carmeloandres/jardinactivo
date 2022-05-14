console.log(jardinactivo.ajax_url);

let form_login_form = document.getElementById('jardinactivo-login-form');

if(form_login_form != null){
    
    let button_login_form = document.getElementById('jardinactivo-button-login-form');
    button_login_form.addEventListener('click',function(e){
        let datos = new FormData(form_login_form);
    
        fetch(jardinactivo.ajax_url,
            {
                method: "POST",
                body: datos
            }
        )
        .then(() => {
            window.location.reload();
        });

    });
}

let log_out = document.getElementById('jardinactivo-log-out');

if(log_out != null){
    console.log('jardinactivo-log-out');
    log_out.addEventListener('click',function(e){
        let datos = new FormData();
            datos.append("action","jardinactivo_log_out");

        fetch(jardinactivo.ajax_url,
            {
                method: "POST",
                body: datos
            }
        )
        .then(() => {
            window.location.reload();
        });

    });
}