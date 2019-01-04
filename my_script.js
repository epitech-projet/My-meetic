function checkForm()
{
    var num = "/^0\d(\s|-)?(\d{2}(\s|-)?){4}$/";
    if ( document.forms['identiter']['prenom'].value == "")
    {
        alert ( "Veuillez entrer votre prénom !" );
        document.forms['identiter']['prenom'].setAttribute('placeholder', "Veuillez entrer votre prénom !");
        document.forms['identiter']['prenom'].style.backgroundColor = 'red'
        valid = false;
    }

    if ( document.forms['identiter']['nom'].value == "" )
    {
        alert ( "Veuillez entrer votre nom !" );
        document.forms['identiter']['nom'].setAttribute('placeholder', "Veuillez entrer votre nom !");
        document.forms['identiter']['nom'].style.backgroundColor = 'red'
        valid = false;
    }

    if ( document.forms['identiter']['mail'].value == "" )
    {
        alert ( "Veuillez entrer votre courriel !" );
        document.forms['identiter']['mail'].setAttribute('placeholder', "Veuillez entrer votre courriel !");
        document.forms['identiter']['mail'].style.backgroundColor = 'red'
        valid = false;
    }

    if ( document.forms['identiter']['tel'].value == "" )
    {
        alert ( "Veuillez entrer votre numéro de téléphone !" );
        document.forms['identiter']['tel'].setAttribute('placeholder', "Veuillez entrer votre téléphone !");
        document.forms['identiter']['tel'].style.backgroundColor = 'red'
        valid = false;
    }
    if ( document.forms['identiter']['website'].value == "" )
    {
        alert ( "Veuillez entrer votre website!" );
        document.forms['identiter']['website'].setAttribute('placeholder', "Veuillez entrer votre website !");
        document.forms['identiter']['website'].style.backgroundColor = 'red'
        valid = false;
    }
    if ( document.forms['identiter']['date'].value == "" )
    {
        alert ( "Veuillez entrer votre date de naissance !" );
        document.forms['identiter']['date'].setAttribute('placeholder', "Veuillez entrer votre date de naissance !");
        document.forms['identiter']['date'].style.backgroundColor = 'red'
        valid = false;
    }
    if ( document.forms['identiter']['tel'].value == "num" )
    {
        alert ( "Veuillez entrer un numéro de téléphone valide !" );
        document.forms['identiter']['tel'].setAttribute('placeholder', "Veuillez entrer votre téléphone !");
        document.forms['identiter']['tel'].style.backgroundColor = 'red'
        valid = false;
    }
    return valid;
}