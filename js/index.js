console.log(1)
const today = document.querySelector('#today');
const date = new Date()
const months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"]
const days = [
  "Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"
]
today.innerHTML = `${days[date.getDay()]}, ${months[date.getMonth()]} ${date.getDate()}, ${date.getFullYear()}`
// const times = [9, 10, 11, 12, 13, 14, 15, 16, 17, 18]
const timeSpan = document.querySelectorAll('.time span')
const taskData = document.querySelector('#taskData')
const tasks = JSON.parse(taskData.innerHTML)
for (let i = 0; i < tasks.length; i++) {
  let time = tasks[i].timeEnd - tasks[i].timeStart
  for (let x = 0; x <= time; x++) {
    // tasks[i].timeStart + x
    for (let j = 0; j < timeSpan.length; j++) {
      // console.log(tasks[i].timeStart + x)
      if (timeSpan[j].innerHTML == parseInt(tasks[i].timeStart) + x) {
        // if(timeSpan[j].parentElement.classList)
        console.log(timeSpan[j].parentElement.classList.contains('todo'))
        if (timeSpan[j].parentElement.classList.contains('todo')) {
          timeSpan[j].parentElement.classList.add('todo2')

        } else {
          timeSpan[j].parentElement.classList.add('todo')

        }
        timeSpan[j].parentElement.addEventListener('click', function () { display(tasks[i]) })
      }
    }
  }
}
// console.log(JSON.parse(taskData.innerHTML))
function display(task) {
  const detail = document.querySelector('#detail')
  detail.style.display = 'block'
  detail.querySelector('.title h2').innerHTML = task.title
  detail.querySelector('h3').innerHTML = `Time: ${task.timeStart}:00 - ${task.timeEnd}:00`
  detail.querySelector('article').innerHTML = task.description
  const edit = detail.querySelector('#edit')
  // detail.querySelector('#delete').href = `delete.php?taskId=${task.taskId}`
  // detail.querySelector('#delete').removeEventListener('click', function () { delTask(task) })
  let old_element = document.getElementById("delete")
  let new_element = old_element.cloneNode(true)
  old_element.parentNode.replaceChild(new_element, old_element)
  // detail.querySelector('#delete').addEventListener('click', function () { delTask(task) })
  new_element.addEventListener('click', function () { delTask(task) })

  edit.addEventListener('click', function () { editHandler(detail, task) })
  console.log(task)
}
function delTask(task) {
  let confirm = window.confirm('Are you sure?')
  if (confirm) {
    // console.log(1)
    window.location.replace(`delete.php?taskId=${task.taskId}`)
  } else {
    console.log(2)
  }
}
function editHandler(detail, task) {
  console.log('edit')
  detail.querySelector('.title h2').innerHTML = `<input type="text" name="title" value="${task.title}">`
  detail.querySelector('article').innerHTML = `<textarea name="description" cols="60" rows="8">${task.description}</textarea>`
  detail.querySelector('article').innerHTML += `<button type="button" id="editButton" onclick="editSubmit(${task.taskId})">Edit</button>`
}

function editSubmit(id) {
  console.log(id)
  const title = document.querySelector('input[name=title]').value
  console.log(title)
  const description = document.querySelector('textarea[name=description]').value
  console.log(description)
  // document.querySelector('.title h2').innerHTML = title
  // title.remove()
  // task.title = title
  // task.description = description
  let xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function (e) {
    console.log(xhr.readyState);
    if (xhr.readyState === 4) {
      console.log(xhr.responseText);// modify or populate html elements based on response.
      //DOM Manipulation
      const res = JSON.parse(xhr.responseText)
      if (res.success) {
        document.querySelector('.title h2').innerHTML = title
        document.querySelector('article').innerHTML = description
        location.reload()
      } else {
        alert('An error occurred, please try again later')
      }
    }
  }
  xhr.open("POST", "edit-task.php", true);
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhr.send(`taskId=${id}&description=${description}&title=${title}`);
}