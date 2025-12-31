document.addEventListener("DOMContentLoaded",function(){
    let a=[...document.querySelectorAll(".question_title")];
        a.forEach(function(b){
            b.addEventListener("click",function(){
                let c=0,
                d=b.nextElementSibling, e=b.parentElement.parentElement;
                e.classList.toggle("question_padding--add");
                b.children[0].classList.toggle("question_arrow--rotate");
                if(d.clientHeight===0){
                    c=d.scrollHeight
                }
                d.style.height=`${c}px`
            })
        })
    });


