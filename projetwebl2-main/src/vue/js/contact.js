
document.getElementById('btn_contact_form')
.addEventListener('click', (event) => {
    event.preventDefault();
    check_inputs_contact();
})


function check_inputs_contact()
{
    const nom = document.getElementById('nom') ;
    const prenom = document.getElementById('prenom') ;
    const email = document.getElementById('email') ;
    const message = document.getElementById('message') ;

    const check_input = function() {
        if( !this.value.match(/^[a-zA-Z]+(([',. -][a-zA-Z ])?[a-zA-Z]*)*$/) )
        {
            haserror = true;
            this.classList.add('error');
        }else{
            this.classList.remove('error');
        }
    }

    let haserror = false;
    
    prenom.addEventListener('input', check_input );
    nom.addEventListener('input', check_input );
    message.addEventListener('input', check_input );
    email.addEventListener('input', check_input );
    
    if( !prenom.value.match(/^[a-zA-Z]+(([',. -][a-zA-Z ])?[a-zA-Z]*)*$/) )
    {
        haserror = true;
        set_error(prenom, 'Il doit y avoir que des lettres');
    }

    if( !nom.value.match(/^[a-zA-Z]+(([',. -][a-zA-Z ])?[a-zA-Z]*)*$/) )
    {
        haserror = true;
        set_error(nom, 'Il doit y avoir que des lettres');
    }nom
    
    if( !email.value.match(/[a-z0-9-_.]+@[a-z0-9-_.]+\.[a-z]{2,}/) )
    {
        haserror = true; 
        set_error(email,'Le mail doit avoir une forme xxx@xxx.xx ');
    }

    if(!haserror)
    {
        document.getElementById('contact_form').submit();
    }
}


function set_error(input, message)
{
    let err = document.createElement('p');
    err.textContent = message;
    input.insertAdjacentElement("afterend", err);
    input.classList.add('error');
}
