document.querySelector('#createAccounts').addEventListener('click', () => {this.validationForm.password();});
window.addEventListener('keypress', (e) => {
    if(e.key === 'Enter') {this.validationForm.password();};
});

var validationForm = {

    password: function() {
        let password1 = document.querySelector('#Password1').value;
        let password2 = document.querySelector('#repeatPassword').value;
    
    
        if (password1.length >= 8) {
            if (password1 === password2) {
                document.querySelector('.msgPassword').style.display = 'none';
                document.querySelector('#repeatPassword').style.border = '#444341 .01rem solid'
                
                window.location.href = "newLogin.php";

            } else {
                document.querySelector('.msgPassword').style.display = 'block';
                document.querySelector('#repeatPassword').style.border = '#f00 .01rem solid'
            };
        } else {
            alert("A senha deve conter acima de 8 digitos !");
        };
    },

};