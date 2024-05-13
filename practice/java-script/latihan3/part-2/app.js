// Dummy student data
let students = [];

// Function to add student
function addStudent(name, age) {
  students.push({ name: name, age: age });
  displayStudents();
}

// Function to display students
function displayStudents() {
  const studentList = document.getElementById("student-list");
  studentList.innerHTML = "";

  students.forEach((student, index) => {
    const row = `<tr>
                        <td>${student.name}</td>
                        <td>${student.age}</td>
                        <td><button onclick="deleteStudent(${index})">Delete</button></td>
                    </tr>`;
    studentList.innerHTML += row;
  });
}

// Function to delete student
function deleteStudent(index) {
  students.splice(index, 1);
  displayStudents();
}

// Event listener for form submission
document
  .getElementById("student-form")
  .addEventListener("submit", function (event) {
    event.preventDefault();
    const name = document.getElementById("name").value;
    const age = document.getElementById("age").value;
    addStudent(name, age);
    document.getElementById("name").value = "";
    document.getElementById("age").value = "";
  });

// Initial display
displayStudents();
