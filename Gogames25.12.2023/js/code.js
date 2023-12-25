/*
<div class="formpage" id="form">
<form>
    <div class="formname">Обратная связь</div>
        <div class="formusername">Ваше имя</div>
        <input class="formusernamefield" type="text" minlength="1" maxlength="32" pattern="[a-z]|[A-Z]|[а-я]|[А-Я]{1-30}">
            <div class="formemail">Ваша электронная почта</div>
            <input class="formemailfield" type="email" minlength="4" maxlength="32">
                <div class="formnumber">Ваш возраст</div>
                <input class="formnumberfield" type="number" min="4" max="150">
                    <div class="pozhelaniya">Рекомендации</div>
                    <textarea class="pozhelaniyafield" maxlength="1024"></textarea>
                        <div class="formcheckbox"><input class="formcheckboxfield" type="checkbox">  Вы согласны на обработку персональных данных</div>
                            <input class="button" type="submit" value="Отправить">
    </form>
</div>;
*/

/*
document.querySelector("html").onclick = function(){
    alert("Click");
}
*/

/*
let button = document.createElement('button');
let footer = document.querySelector(".footer");
// document.body.appendChild(button);
//forma1 = document.createElement('forma');
footer.after(button);
button.id = 'button';
button.classList.add("new_class");
//forma1.id = 'form';
let rem = document.querySelector("#form");
let q = 1;
const body = document.getElementsByClassName("footerpage");
button.onclick=function(){
    if (q==0)
    {   
        q=1;
        body.classList.remove("background-color");
    }
    else 
    {
        q=0;
        document.body.appendChild(forma1);
    }
}
button.textContent='Feedback';


*/

const btn1=document.querySelector(".btn");
q=0;
btn1.addEventListener("click",()=>{
    if (q==0)
    {
    let btn=document.createElement("div");
    btn.innerHTML="gogames@gmail.com +3492157408";
    btn.classList.add("new_style");
    btn1.before(btn);
    let new_element_close=document.createElement("input");
    new_element_close.type="button";
    new_element_close.value="X";
    new_element_close.classList.add("new_element_close");
    new_element_close.addEventListener("click",()=>{
        btn.remove();
        q=0;
    })
    btn.append(new_element_close);
    q=1;
    }
})

// изменение фона
const stb=document.querySelector(".stb");
const body=document.querySelector(".BodyPage");
let t=0;
stb.addEventListener("click",()=>{
    body.classList.toggle("BodyPage2");
})
/*
stb.addEventListener("click",()=>{
    if (t==0)
    {
    body.classList.toggle("BodyPage2");
    t=1;
    }
    else 
    {
    t=0;
    body.classList.toggle("BodyPage");
    }
})
*/




