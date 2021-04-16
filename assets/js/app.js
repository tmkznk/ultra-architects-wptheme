var isInViewport = function(elem) {
    var distance = elem.getBoundingClientRect();
    return (
        distance.bottom <= ((window.innerHeight + distance.height - 100) || (document.documentElement.clientHeight + distance.height -100)) 
    );
};

var showItem = function () {
    var findMe = document.querySelectorAll('.animate__animated');    
    findMe.forEach(element => {
        if (isInViewport(element)) {
            element.classList.add("animate__fadeInUp");
        }
    });
};

window.addEventListener('scroll', showItem, false);

window.almComplete = function(alm){
	showItem();
};

var menu = document.getElementById('menu');
var myCollapsible = document.getElementById('navbarSupportedContent');

myCollapsible.addEventListener('hide.bs.collapse', function () {
    menu.classList.remove("is-open");
})

myCollapsible.addEventListener('show.bs.collapse', function () {
    menu.classList.add("is-open");
})
