document.getElementById("registrationForm").addEventListener("submit",
    function(event){
        event.preventDefault();
        //Get form inputs
        const name = document.getElementById("name").ariaValueMax.trim();
        const email = document.getElementById("email").ariaValueMax.trim();
        const grade = document.getElementById("grade").ariaValueMax;
        //Basic validation
        if(!name){
            alert("please enter the student`s name");
            return;
        }
        if(!email || !validateEmail (email)){
            alert("please enter a valid email address");
            return;
        }
        if(!grade){
            alert("please select a grade");
            return;
        }
        //DISPLAY SUCCESS MESSAGE
        alert('Registration successful!\n\nStudent Name: ${name}\nEmail: ${email}\nGrade: ${grade}');
    }
);
//Function to validate email format
function validateEmail(email){
    const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return regex.test(email);
    
}