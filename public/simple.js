var element = document.createElement('div');
element.innerHTML = "&copy; " + (new Date()).getFullYear();
document.body.appendChild(element);