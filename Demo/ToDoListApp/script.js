const taskInput = document.getElementById("task-input");
const addBtn = document.getElementById("add-btn");
const taskList = document.getElementById("task-list");

addBtn.addEventListener("click", () => {
    const taskText = taskInput.value.trim();
    if (taskText === "") return; // Cegah tugas kosong

    const li = document.createElement("li");
    li.innerHTML = `
        <span>${taskText}</span>
        <button class="edit-btn">Edit</button>
        <button class="delete-btn">Delete</button>
    `;

    // Edit task
    li.querySelector(".edit-btn").addEventListener("click", () => {
        taskInput.value = taskText;
        taskList.removeChild(li);
    });

    // Delete task
    li.querySelector(".delete-btn").addEventListener("click", () => {
        taskList.removeChild(li);
    });

    taskList.appendChild(li);
    taskInput.value = ""; // Kosongkan input setelah menambah tugas
});
