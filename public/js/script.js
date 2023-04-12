const a = prompt("Berapa banyak angka yang anda inginkan ?")

const deretGenap = []
const deret = (str) => {
    if(deretGenap===0)
    for(let i=1; deretGenap.length<str; i++){
        deretGenap.push(i*2)
    }
    console.log(deretGenap)
}

deret(a)