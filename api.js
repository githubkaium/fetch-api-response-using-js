function loadData() {
    fetch('https://gorest.co.in/public/v1/users')
  .then(response => response.json())
  .then(json => displayData(json.data))
}

loadData();

function displayData(users) {
    const allUsers = document.getElementById('users');
    for (const user of users) {
        const div = document.createElement('div');
        div.classList.add('users');
        div.innerHTML = `
        <h4>ID    : ${user.id}</h4>
        <p>Name   : ${user.name}</p>
        <p>Email  : ${user.email}</p>
        <p>Gender : ${user.gender}</p>
        <p>Status : ${user.status}</p>
        `;
        allUsers.appendChild(div);
    }
}