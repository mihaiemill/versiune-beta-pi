function loadQuiz() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            displayQuestions(this.responseText);
        }
    };
    xhttp.open("GET", "getQuestions.php", true);
    xhttp.send();
}

function displayQuestions(data) {
    var questions = JSON.parse(data);
    var html = "";
    for(var i = 0; i < questions.length; i++) {
        console.log(questions[i]);
        html += "<p>" + questions[i].intrebare + "</p>";
        // Adăugați aici codul pentru opțiunile de răspuns
     const raspunsuri = questions[i].raspunsuri.split(";");
     console.log(raspunsuri);
      html += "<select>"+
    "<option>"+raspunsuri[0]+"</option>"+
    "<option>"+raspunsuri[1]+"</option>"+
    "<option>"+raspunsuri[2]+"</option>"+
    "<option>"+raspunsuri[3]+"</option>"+
  "</select>";
    }
    document.getElementById("quizContainer").innerHTML = html;
}

function submitQuiz() {
    // Aici codul pentru calculul scorului și trimiterea lui la server
}

window.onload = loadQuiz;
