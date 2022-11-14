
/*      FORM DE CONNECTION      */

// Get the modal
var modal = document.getElementById("connection_modal");
// Get the button that opens the modal
var btn = document.getElementById("connection");
// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];


/* When the user clicks on the button, open the modal*/
btn.addEventListener('click', (event) =>{
  modal.style.display = "block";
})

// When the user clicks on <span> (x), close the modal
span.addEventListener('click', (event) => {
  modal.style.display = "none";
})


// When the user clicks anywhere outside of the modal, close it
window.addEventListener('click', (event) => {
  if (event.target == modal) {
    modal.style.display = "none";
  }
})




/**************************************************************
 * LOGIN FORM 
 *************************************************************/

document.getElementById('btn_login_form')
.addEventListener('click', (event) => {
  event.preventDefault();
  check_inputs_login();
})

function check_inputs_login()
{
    const username = document.getElementById('username_login') ;

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
    username.addEventListener('input', check_input );
    
    if( !username.value.match(/^[a-zA-Z]+(([',. -][a-zA-Z ])?[a-zA-Z]*)*$/) )
    {
        haserror = true;
        set_error(username, '');
    }

    if(!haserror)
    {
        console.log("LOGIN");
        document.getElementById('login_form').submit();
    }
}


/**************************************************************
 * SIGNIN FORM 
 *************************************************************/

document.getElementById('btn_signin_form')
.addEventListener('click', (event) => {
  event.preventDefault();
  check_inputs();
})

function check_inputs()
{
    const username = document.getElementById('username_signin') ;
    const prenom = document.getElementById('prenom_signin') ;
    const nom = document.getElementById('nom_signin') ;
    const mdp = document.getElementById('mdp_signin') ;
    const email = document.getElementById('email_signin') ;

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
    username.addEventListener('input', check_input );
    prenom.addEventListener('input', check_input );
    nom.addEventListener('input', check_input );
    mdp.addEventListener('input', check_input );
    email.addEventListener('input', check_input );
    
    if( !username.value.match(/^[a-zA-Z]+(([',. -][a-zA-Z ])?[a-zA-Z]*)*$/) )
    {
        haserror = true;
        set_error(username, 'Il doit y avoir que des lettres');
    }

    if( !prenom.value.match(/^[a-zA-Z]+(([',. -][a-zA-Z ])?[a-zA-Z]*)*$/) )
    {
        haserror = true;
        set_error(prenom, 'Il doit y avoir que des lettres');
    }

    if( !nom.value.match(/^[a-zA-Z]+(([',. -][a-zA-Z ])?[a-zA-Z]*)*$/) )
    {
        haserror = true;
        set_error(nom, 'Il doit y avoir que des lettres');
    }

    if( !email.value.match(/[a-z0-9-_.]+@[a-z0-9-_.]+\.[a-z]{2,}/) )
    {
        haserror = true; 
        set_error(email,'Le mail doit avoir une forme xxx@xxx.xx ');
    }

    if(!haserror)
    {
        document.getElementById('form_signin').submit();
    }
}


function set_error(input, message)
{
    let err = document.createElement('p');
    err.textContent = message;
    input.insertAdjacentElement("afterend", err);
    input.classList.add('error');
}

