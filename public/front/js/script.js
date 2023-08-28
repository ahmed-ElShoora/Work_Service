let load = document.querySelector(".load")
let bar = document.querySelector(".menu")
let menu = document.querySelector(".list-item ul")
let bars = document.querySelector(".menu i")
let container = document.querySelector(".container")
let header = document.querySelector("header")
let videos = document.querySelectorAll(".videos")
let ifr = document.querySelector(".ifr")
let popup = document.querySelector(".popup")
let closeIframe = document.querySelector(".close")
let links = document.querySelectorAll("header a")
let useapp = document.querySelector(".link-show a")
let divs = document.querySelectorAll(".container > div")
let li = document.querySelectorAll("header li")


window.onload = _=> {
    setTimeout(_=> loading() ,1500)
}

window.onscroll = _=> {
    menu.classList.remove("bar-click")
    container.style.opacity = "1"
    bars.classList.remove("fa-xmark")
    bars.classList.add("fa-bars")
    activeMenu()
}

bar.addEventListener("click", barClick)

function loading(){
    load.style.display = "none"
}

function barClick(){
    menu.classList.toggle("bar-click")

    if(!menu.classList.contains("bar-click")){
        bars.classList.remove("fa-xmark")
        bars.classList.add("fa-bars")
        menu.classList.add("hidden")
        container.style.opacity = "1"
    }else{
        bars.classList.remove("fa-bars")
        bars.classList.add("fa-xmark")
        menu.classList.remove("hidden")
        container.style.opacity = "0.5"
    }
}

function activeMenu(){
    let len = divs.length
    while(--len && window.scrollY + 97 < divs[len].offsetTop){}
    li.forEach(ltx => ltx.classList.remove("item-active"))
    li[len].classList.add("item-active")
}
activeMenu()
if(videos){
    videos.forEach(vid => {
        vid.addEventListener("click", e => {

            let link = e.target.getAttribute("link")
            closeIframe.style.display = "block"
            ifr.style.display = "block"
            popup.classList.add("active-pop")
            ifr.innerHTML += `
            <iframe src="${link}">
            </iframe>
        `

        })
    })
}


if(closeIframe){
    closeIframe.addEventListener("click", e => {
        document.querySelector(".ifr iframe").remove()
        closeIframe.style.display = "none"
        popup.classList.remove("active-pop")
    })
}

links.forEach(link => {
    link.addEventListener("click", e =>{
        let href = e.target.dataset.href
        let scroll = document.querySelector(href).offsetTop
        scrollTo(0,scroll -80)
    })
})
if(useapp){
    useapp.addEventListener("click", e => {
        let href = e.target.dataset.href
        let scroll = document.querySelector(href).offsetTop
        scrollTo(0,scroll -80)
    })
}

