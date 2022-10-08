// document.querySelector('#createAccounts').addEventListener('click', () => {this.validationForm.valuesForm();});
// window.addEventListener('keypress', (e) => {
//     if(e.key === 'Enter') {this.validationForm.valuesForm();};
// });

// var validationForm = {

//     valuesForm: function() {
//         let password1 = document.querySelector('#Password1').value;
//         let password2 = document.querySelector('#repeatPassword').value;
//         let username = document.querySelector('#username').value;
//         let email = document.querySelector('#email').value;
    
    
//         if (password1.length >= 8 && username.length >= 8) {
//             if (email) {
//                 if (password1 === password2) {
//                     document.querySelector('.msgPassword').style.display = 'none';
//                     document.querySelector('#repeatPassword').style.border = '#444341 .01rem solid'
                    
//                     this.insertInto();
    
//                 } else {
//                     document.querySelector('.msgPassword').style.display = 'block';
//                     document.querySelector('#repeatPassword').style.border = '#f00 .01rem solid'
//                 }
//             } else {
//                 alert('Email obrigatório')
//             };
//         } else {
//             alert("A senha e o nome deve conter acima de 8 digitos ! \n Email obrigaório");
//         };
//     },

//     insertInto: function() {

//         console.log('hello')
//         let submitForm = document.querySelector('#submitForm').click();

//         console.log(submitForm)

//     },

// };