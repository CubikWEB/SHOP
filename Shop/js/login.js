function styles(){
    if(pageYOffset>=20){
        document.getElementsByTagName('header')[0].style.backgroundColor = 'black';
        if(document.getElementById('log')){
        document.getElementById('log').style.color = 'white';}
        else{
        document.getElementById('myname').style.color = 'white';}
    }
    else{
        document.getElementsByTagName('header')[0].style.backgroundColor = 'white';
        if(document.getElementById('log')){
        document.getElementById('log').style.color = 'black';}
        else{
        document.getElementById('myname').style.color = 'black';}
    }
}

window.addEventListener("scroll", styles);

document.getElementById('log').onmouseover = function(){
    document.getElementById('log').style.cursor = 'pointer';
}

document.getElementById('log').onclick = function(){
    target = document.getElementById('forma');
    
    if(target.style.visibility=='hidden'){
        target.style.visibility='visible';
    }
    else{
        target.style.visibility='hidden';
    }
}

function MoveTo(IdElement){
    
    let Coord = document.getElementById(IdElement).offsetTop;
    let vector;
    let current = pageYOffset;
    if(current == Coord){return;}
    if(Coord > (document.documentElement.scrollHeight - document.documentElement.clientHeight)){
        Coord = document.documentElement.scrollHeight - document.documentElement.clientHeight;
    }
    if(current<=Coord){
        vector = 1;
    }
    else{
        vector = -1;
    }
    let speed = 20;
    let Move = setInterval(function() {
        if(vector==1){
            if(current >= Math.abs(Coord-3)){
                clearInterval(Move);
            }
        }else{
            if(current <= Math.abs(Coord+3)){
                clearInterval(Move);
            }
        }

        window.scrollTo(0,current);
        current=current+speed*vector;
    }, 20);
}

function OpenMenu(number){
    function Close(target){
        target.style.height = 0 + 'px';
        target.style.visibility = 'hidden';
        target.style.border = 'none';
    }
    function Open(target){
        target.style.height = 'auto';
        target.style.visibility = 'visible';
    }

    let alltarget = document.getElementsByClassName('openmenu');
    let Ontarget = document.getElementsByClassName('openmenu')[number];
    if(Ontarget.style.visibility == 'visible'){
        Close(Ontarget);
    }
    else{
        
        for(let i = 0; i<=alltarget.length-1;i++){
            Close(alltarget[i]);
        }
        
        Open(Ontarget);
    }
    
}

document.getElementById('main').onmouseover = function(){
    function Close(target){
        target.style.height = 0 + 'px';
        target.style.visibility = 'hidden';
        target.style.border = 'none';
    }
    let alltarget = document.getElementsByClassName('openmenu');
    for(let i = 0; i<=alltarget.length-1;i++){
         Close(alltarget[i]);
    }
}