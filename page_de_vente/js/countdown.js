const MINUTES = 60
const HOURS = 60 * MINUTES
const DAYS = 24 * HOURS
    const countdown = document.querySelector('#countdown')
    const dateLancement = Date.parse(countdown.dataset.time) / 1000


// Calculer la différence en seconde entre les deux dates
function decompte() {
    const differenceDate = dateLancement - Date.now() / 1000
    if (differenceDate < 0) {
        differenceDate.classList.add('contenu_js')
    body.classList.remove('contenu')
    document.documentElement.style.setProperty('display','none')
    }
    const convertionDate = {
        jour: Math.floor(differenceDate / DAYS),
        heure: Math.floor(differenceDate % DAYS / HOURS),
        minute: Math.floor(differenceDate % HOURS / MINUTES),
        seconde: Math.floor(differenceDate % MINUTES)
    }

    document.getElementById('jour').innerText = convertionDate.jour
    document.getElementById('heure').innerText = convertionDate.heure
    document.getElementById('minute').innerText = convertionDate.minute
    document.getElementById('seconde').innerText = convertionDate.seconde
    window.setTimeout(decompte)
}

decompte()
// On crée un objet qui contient les heures, les minutes et les secondes
// On va envoyer cet objet à une fonction qui mettra à jour l'HTML