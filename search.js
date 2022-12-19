document.querySelector('.elastic').oninput = function (){
    let val = this.value.trim();
    let elasticItems = document.querySelectorAll('elastic li')
    if (val != ''){
        elasticItems.forEach(function(elem){
            if(elem.innerText.search(val) == -1){
                elem.classList.add('hide');
            
            }
            else{
                elem.classList.remove('hide');
                let str = elem.innerText;
                elem.innerHTML = insertMark(str, elem.innerText.search(val), val.length)
            }
        });
    }
    else{
        elasticItems.forEach(function(elem){
            elem.classList.remove('hide');
        });
    }
}

function insertMark(string, pos, ien){
    return string.slice(0, pos) + '<mark>' + string.slice(pos, pos + len) + '</mark>' + string.slice(pos + len);
}


