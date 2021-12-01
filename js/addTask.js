// console.log('111')
const timeStart = document.querySelector('#timeStart')
const times = [09, 10, 11, 12, 13, 14, 15, 16, 17]
for (let i of times) {
  timeStart.innerHTML += `<option value="${i}">${i}:00</option>`
}
const timeEnd = document.querySelector('#timeEnd')
timeStart.addEventListener('change', e => {
  if (e.target.value) {
    // console.log(e.target.value)
    timeEnd.innerHTML = `<option value="">--select end time--</option>`
    timeEnd.disabled = false
    let index = times.findIndex(x => x == e.target.value)
    const timeEnds = times.slice(index + 1)
    for (let i of timeEnds) {
      timeEnd.innerHTML += `<option value="${i}">${i}:00</option>`
    }
    timeEnd.innerHTML += `<option value="18">18:00</option>`
  } else {
    timeEnd.disabled = true
    timeEnd.innerHTML = `<option value="">--select end time--</option>`
  }
})
