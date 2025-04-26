function showForm(formId){
    document.querySelectorAll(".form-box").forEach(form => form.classList.remove("active"));
    document.getElementById(formId).classList.add("active");

}

function showLanguageSelection() {
    // Hide the login and registration forms, show the language selection
    document.getElementById('login-form').style.display = 'none';
    document.getElementById('register-form').style.display = 'none';
    document.getElementById('language-selection-form').style.display = 'block';
}

function startQuiz() {
    // Get selected language
    const language = document.getElementById('language').value;

    // Redirect to the quiz page based on the selected language
    // For now, just log the language. You can redirect to a quiz page for the selected language.
    alert("Starting quiz for " + language);
}