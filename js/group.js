// const search = document.querySelector('#search')
// const mySearch = document.querySelector('#mySearch')
// const output = document.querySelector('#output')
// search.addEventListener('click', e => {
//   if (mySearch.value) {
//     let xhr = new XMLHttpRequest();
//     xhr.onreadystatechange = function (e) {
//       console.log(xhr.readyState);
//       if (xhr.readyState === 4) {
//         console.log(xhr.responseText);// modify or populate html elements based on response.
//         //DOM Manipulation
//         const users = JSON.parse(xhr.responseText)
//         for (let i of users) {
//           const div = document.createElement('div')
//           div.innerHTML = `<span>${i.username}</span>
//           <a href="javascript:;">+ add</a>`
//           output.appendChild(div)
//         }
//       }
//     };

//     xhr.open("GET", `search-user.php?q=${mySearch.value}`, true); //true means it is asynchronous // Send variables through the url
//     xhr.send();
//   }

// })

// const createGroup = document.forms.createGroup

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
//         // createGroup.style.display = 'none'
//       }
//       //DOM Manipulation
//     }
//   };

//   xhr.open("GET", `create-group.php?groupName=${groupName}`, true); //true means it is asynchronous // Send variables through the url
//   xhr.send();
//   // console.log(1)
// })