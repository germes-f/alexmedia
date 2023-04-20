import "./main.scss";
import {Fancybox} from "@fancyapps/ui";
import "@fancyapps/ui/dist/fancybox/fancybox.css";

require("./assets/js/accordion");
require("./assets/js/form");
require("./assets/js/form_modal");

Fancybox.bind("[data-fancybox]", {});

const openMenu = document.querySelector('.open-button');
const openContent = document.getElementById('opencontent');

openMenu.addEventListener('click', (e) => {
    e.preventDefault();
    openContent.classList.toggle('open-content--show')
});
