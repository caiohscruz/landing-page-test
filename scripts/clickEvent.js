document.getElementById("submitButton").addEventListener("click", submit)

function submit() {
    value = document.getElementById('email').value
    validarDados('email', value)
}