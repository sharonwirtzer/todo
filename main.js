// Data

const todos = [
  {
    id: "101",
    title: "Feed the cat",
    date: 7,
    time: 2008,
  },
  {
    id: "102",
    title: "brush my teeth",
    date: 10,
    time: 2008,
  },
  {
    id: "103",
    title: "Fold my socks",
    date: 5,
    time: 2008,
  },
];

const tbody = document.querySelector("tbody");
const sortButtons = document.querySelectorAll(".sort-button");

// Functions

const renderTodos = () => {
  let html = "";

  for (let i = 0; i < todos.length; i++) {
    html += "<td>" + "<i class='bi bi-check-lg'></i>" + "</td>";
    html += "<td class=vl>";
    html += '<a href="update-todo.php">' + todos[i].title + "</a>";
    html += "</td>";
    html += "<td>" + todos[i].date + "</td>";
    html += "<td>" + todos[i].time + "</td>";
    html += "</tr>";

    tbody.innerHTML = html;
  }
};

renderTodos();

for (let i = 0; i < sortButtons.length; i ++) {

  sortButtons[i].addEventListener('click', function() {

      sortTodos(sortButtons[i]);

  });

}

const sortTodos = (sortButton) => {

  const { id } = sortButton;     

 if (id === 'title') 
 todos.sort((b, a) =>  a.date - b.date);

  else if (id === 'date') 
  todos.sort((a, b) =>  a.date - b.date);


  renderTodos();

}
