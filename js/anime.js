const debounce = function(func, wait, immediate) {
    let timeout;
    return function(...args) {
        const context = this;
        const later = function() {
            timeout = null;
            if(!immediate) func.apply(context, args);
        };

        const callNow = immediate && !timeout;
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
        if (callNow) func.apply(context, args);
    };
};

/********* variavel criada para as animações *********/
const target = document.querySelectorAll('[data-anime]');
const animationClass = 'animate';

/*********Função criada para movementar o Scroll **********/
function animeScroll() {
    const windowTop = window.pageYOffset + ((window.innerHeight * 3) / 4);
    target.forEach(function(element) {
        if((windowTop) > element.offsetTop) {
            element.classList.add(animationClass)
        } else {
            element.classList.remove(animationClass);
        }
    });
}

animeScroll();

if(target.length) { 
    window.addEventListener('scroll', debounce( function() {
        animeScroll();
    }, 200));
}


/**********Animação do scroll das imagens Home **********/
document.querySelector('#items');
addEventListener("wheel", Event => {
    if(Event.deltaY > 0) {
        Event.target.scrollBy(300, 0)
    } else {
        Event.target.scrollBy(-300, 0)
    }
})

(function () {
    var options = {
        whatsapp: "+55(16)991690872", // WhatsApp number
        call_to_action: "Fale Conosco Agora!", // Call to action
        position: "right", // Position may be 'right' or 'left'
    };
    var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static." + host;
    var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
    s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
    var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
})();