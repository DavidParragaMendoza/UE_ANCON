var el = document.getElementById("overlayBtn");
el && el.addEventListener("click", swapper, false);


document.addEventListener("DOMContentLoaded",function(){
    window.addEventListener("scroll",function(){
        a(".price_elemet,.about_icons,.fade-in",.75);
        b(".knowledge_img",1.5)});
        a(".about_icons,.fade-in",.75)});

        
        function a(d,e){
            var f=document.querySelectorAll(d);
            f.forEach(function(g){
                var h=g.getBoundingClientRect().top;
                var i=window.innerHeight;
                if(h<i*e){
                    g.style.opacity=1;
                    g.style.transform="scale(1)";
                    g.classList.add("active")
                }else{
                    g.classList.remove("active")
                }
            })
        }
        function b(d,e){
            var f=document.querySelector(d);
            var g=f.getBoundingClientRect().top;
            var h=window.innerHeight;
            if(g<h/e){
                f.classList.add("active")}
            }
