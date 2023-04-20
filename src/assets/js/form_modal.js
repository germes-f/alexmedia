const formModalBtn = document.getElementById("form_btn_modal");
const formModalOne = document.getElementById("form_modal");
function sendForm() {
    const req = new XMLHttpRequest();
    req.open('POST', './../php/sendmail.php');
    req.responseType = '';
    req.onload = function () {
        if (req.status !== 200) {
            return;
        }

        const res = req.response;
        document.querySelector("#form-content_modal").innerHTML = res
    }
    let formModalData = new FormData(formModalOne);
    req.send(formModalData);

    document.querySelector("#form-content_modal").textContent = req.responseText;
}

formModalBtn.addEventListener('click', function (event) {
    event.preventDefault();
    sendForm();
})

