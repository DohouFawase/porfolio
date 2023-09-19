function Times() {
    let Curentime = document.getElementById('curent-time');
    let now = new Date();
    let hours = now.getHours().toString().padStart(2,'0')
    let minutes = now.getMinutes().toString().padStart(2,'0')
    let seconds = now.getSeconds().toString().padStart(2,'0')
    let formattedTime = `${hours}:${minutes}:${seconds}`
    Curentime.textContent = formattedTime
}

Times()
setInterval(Times,1000)

