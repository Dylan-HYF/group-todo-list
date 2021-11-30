// const createGroup = document.forms.createGroup
// const createSection = document.querySelector('.create-group')
// const h1 = document.querySelector('.create-group h1')
// const addMembers = document.querySelector('.add-members')
// createGroup.addEventListener('submit', e => {
//   e.preventDefault()
//   let groupName = createGroup.groupName.value
//   let xhr = new XMLHttpRequest();
//   xhr.onreadystatechange = function (e) {
//     console.log(xhr.readyState);
//     if (xhr.readyState === 4) {
//       console.log(xhr.responseText);// modify or populate html elements based on response.
//       const res = JSON.parse(xhr.responseText)
//       if (res.success) {
//         // createSection.style.display = 'none'
//         // createGroup.style.display = 'none'
//         // createGroup.remove()
//         // h1.innerHTML = 'Add members'
//         // addMembers.style.display = 'block'
//         // searchMembers()

//       }
//       //DOM Manipulation
//     }
//   };

//   xhr.open("GET", `create-group.php?groupName=${groupName}`, true); //true means it is asynchronous // Send variables through the url
//   xhr.send();
//   // console.log(1)
// })

// function searchMembers() {
//   const search = document.querySelector('#search')
//   const mySearch = document.querySelector('#mySearch')
//   search.addEventListener('click', e => {
//     if (mySearch.value) {
//       let xhr = new XMLHttpRequest();
//       xhr.onreadystatechange = function (e) {
//         console.log(xhr.readyState);
//         if (xhr.readyState === 4) {
//           console.log(xhr.responseText);// modify or populate html elements based on response.
//           //DOM Manipulation
//           const users = JSON.parse(xhr.responseText)
//           for (let i of users) {
//             const div = document.createElement('div')
//             div.innerHTML = `<span>${i.username}</span>
//                             <a href="javascript:;" onclick="addMember(${i.userId})">+ add</a>`
//             output.appendChild(div)
//           }
//         }
//       };

//       xhr.open("GET", `search-user.php?q=${mySearch.value}`, true); //true means it is asynchronous // Send variables through the url
//       xhr.send();
//     }
//   })
// }


const groupSet = document.querySelectorAll('input[name="groupSet"]')
const createGroup = document.querySelector('#createGroup')

for (let i of groupSet) {
  i.addEventListener('change', e => {
    if (i.value == 1) {
      // console.log('1')
      createGroup.style.display = 'block'
    } else {
      createGroup.style.display = 'none'

    }
  })
}