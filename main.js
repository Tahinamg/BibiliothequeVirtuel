(function(){var button=document.getElementsByTagName('button')[0];
button.nextElementSibling.style.opacity='0';
button.addEventListener('click',function(event){
    var element=event.target;
    var list=event.target.classList;
    if(list.value.indexOf('fading')==-1){
        list+=' fading';
        element.setAttribute('class',list);
    }
    setTimeout(function(){
        let list=button.nextElementSibling.classList;
        list+=' show';
        button.nextElementSibling.setAttribute('class',list);

    },900);

},false);})();
