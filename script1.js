function addQuestion() {
    const questionsDiv = document.getElementById('questions');

    const newQuestionDiv = document.createElement('div');
    newQuestionDiv.classList.add('question-answer');

    newQuestionDiv.innerHTML = `
      <label for="questions[]">Question:</label>
      <input type="text" name="questions[]" placeholder="Enter your question">
      <br>
      <textarea name="answers[]" placeholder="Write your answer for this question"></textarea>
      <br>
    `;

    questionsDiv.appendChild(newQuestionDiv);
  }

