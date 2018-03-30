var element = document.createElement('footer');
element.className="page-footer font-small bg-dark text-light mt-4 text-center";
element.innerHTML = "&copy; " + (new Date()).getFullYear();
document.body.appendChild(element);

require('bootstrap');