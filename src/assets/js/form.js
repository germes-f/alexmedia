const formBtn = document.getElementById("form_btn");
const formOne = document.getElementById("form");
function sendForm() {
    const req = new XMLHttpRequest();
    req.open('POST', './../php/sendmail.php');
    req.responseType = '';
    req.onload = function () {
        if (req.status !== 200) {
            return;
        }

        const res = req.response;
        document.querySelector("#form-content").innerHTML = res
    }
    let formData = new FormData(formOne);
    req.send(formData);

    document.querySelector("#form-content").textContent = req.responseText;
}

formBtn.addEventListener('click', function (event) {
    event.preventDefault();
    sendForm();
})
