var validationForm = {

    passwordsRepeat: function() {

        let password1 = document.querySelector('#Password').value;
        let password2 = document.querySelector('#repeat_password').value;

        setInterval(() => {
            if(password1 && password2) {
                if (password1 === password2) {
                    console.log('As senha estão iguais !')
                };
            };
        }, 1000);

    },

};

validationForm.passwordsRepeat();