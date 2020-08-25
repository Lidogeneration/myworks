const nameScroll = document.getElementById('input_order');
const customTextFormSpan = document.getElementById('customTextForm');

function setNameScroll(namescroll, customTextFormSpanF) {
    nameScroll.value = namescroll;
    customTextFormSpan.textContent = customTextFormSpanF;
}

const navBarBtn = document.getElementById('menuBtn');   
const navMobile = document.getElementById('navMobile'); 


window.onscroll = function () {
    navBarInit();
};

window.onresize = function()
{    
    navBarInit();
}

function ready()
{
    if(window.innerWidth <= 992)
    {
        navBarBtn.classList.add('d-flex');
    }
    navBarInit();
};


document.addEventListener("DOMContentLoaded", ready);


function navBarInit(){

    if(document.documentElement.scrollTop > 0 || window.innerWidth <= 992)
    {
        navBarBtn.classList.add('d-flex');
    }
    else
    {
        navBarBtn.classList.remove('d-flex');
    }
};


document.addEventListener('click',function(event){
    if(navMobile.contains(event.target) && !navBarBtn.contains(event.target)){
        navMobile.classList.remove('navMobileShow');
        navMobile.classList.add('navMobileHide');
        navBarBtn.classList.remove('menuBtnShow');
        navBarBtn.classList.add('menuBtnHide');
    }
    if(!navMobile.contains(event.target) && !navBarBtn.contains(event.target)){
        if(navMobile.classList.contains('navMobileShow'))
        {
            navMobile.classList.remove('navMobileShow');
            navMobile.classList.add('navMobileHide');
            navBarBtn.classList.remove('menuBtnShow');
            navBarBtn.classList.add('menuBtnHide');
        }
    }
    if(navBarBtn.contains(event.target)){
        if(navMobile.classList.contains('navMobileHide'))
        {
            navMobile.classList.remove('navMobileHide');
            navMobile.classList.add('navMobileShow');
            navBarBtn.classList.remove('menuBtnHide');
            navBarBtn.classList.add('menuBtnShow');
        }
        else{
            navMobile.classList.remove('navMobileShow');
            navMobile.classList.add('navMobileHide');
            navBarBtn.classList.remove('menuBtnShow');
            navBarBtn.classList.add('menuBtnHide');
        }
    }
});

