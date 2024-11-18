import "./bootstrap";

// Subscribe to the public channel: "students"
Echo.channel("students").listen(".student_created", (event) => {
    console.log("There is a student added");
    alert(`There is a student added :
        Student Full Name: ${event.data.full_name}
        Student Degrees: ${event.data.degree}
    `);
    document.getElementById('test').textContent("nnnn");
    location.reload();
});
