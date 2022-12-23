let input1 = document.querySelector("#bank-card-input1"),


    numbers1 = /[0-9]/,
    regExp1 = /[0-2]{2}/

input1.addEventListener("input",(ev)=>{

    if( ev.inputType === "insertText" && !numbers1.test(ev.data) || input1.value.length > 2){
        input1.value = input1.value.slice(0, input1.value.length - 1)
        return
    }


    let value = input1.value
    if( ev.inputType === "deleteContentBackward" && regExp1.test(value.slice(-2)) ){
        input1.value = input1.value.slice(0, input1.value.length - 1)
        return
    }



})
const cards = document.querySelectorAll('.memory-card');

function flipCard() {
    this.classList.toggle('flip');
}

cards.forEach(card => card.addEventListener('click', flipCard));