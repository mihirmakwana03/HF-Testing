<!-- <div data-tf-live="01JWTPRS8EBXH1KXX4SN55RT7W"></div>
<script src="//embed.typeform.com/next/embed.js"></script> -->

<head>
    {{-- Other head elements like title, meta tags, etc. --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<div class="quiz-container">
    <!-- Decorative elements -->
    <div class="decorative-circle circle-1"></div>
    <div class="decorative-circle circle-2"></div>
    <div class="decorative-circle circle-3"></div>
    <div class="decorative-wave wave-1"></div>
    <div class="decorative-wave wave-2"></div>
    
    <div id="quiz-title">
        <span class="title-icon"><i class="fas fa-heart"></i></span>
        Emotional Wellness Quiz
    </div>
    <div id="question-area">
        <div id="question-number"></div>
        <div id="question-text"></div>
        <div id="options">
            <!-- Options will be dynamically inserted here -->
        </div>
    </div>
    <div class="button-container">
        <button id="prev-button" style="display: none;"><i class="fas fa-arrow-left"></i> Previous</button>
        <button id="submit-button" style="display: none;">Submit <i class="fas fa-check"></i></button>
        <button id="next-button" style="display: none;">Next <i class="fas fa-arrow-right"></i></button>
    </div>
    
    <div id="results-area" style="display: none;">
        <div class="results-header">
            <i class="fas fa-star results-icon"></i>
            <div id="total-score"></div>
        </div>
        <div id="rating"></div>
        <div id="rating-details"></div>
        <div class="social-links">
            <p>Connect with us:</p>
            <div class="social-icons-grid mb-4">
                <a href="https://www.facebook.com/HappinessFactors/" target="_blank" data-toggle="tooltip" title="Facebook">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="https://twitter.com/happinessfaster" target="_blank" data-toggle="tooltip" title="Twitter">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="https://www.instagram.com/happinessfactors/" target="_blank" data-toggle="tooltip" title="Instagram">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="https://www.linkedin.com/company/happinessfactors/" target="_blank" data-toggle="tooltip" title="LinkedIn">
                    <i class="fab fa-linkedin"></i>
                </a>
                <a href="https://www.youtube.com/channel/UCicqa9p-mkaO5wUL2lllkrQ" target="_blank" data-toggle="tooltip" title="YouTube">
                    <i class="fab fa-youtube"></i>
                </a>
                <a href="https://www.tumblr.com/happinessfactors" target="_blank" data-toggle="tooltip" title="Tumblr">
                    <i class="fab fa-tumblr"></i>
                </a>
            </div>
        </div>
        <div class="results-buttons" style="margin-top: 20px;">
            <button id="home-button" style="display: none;" class="btn btn-primary">
                <i class="fas fa-home"></i> Go to Homepage
            </button>
            <button id="contact-button" style="display: none;" class="btn btn-primary">
                <i class="fas fa-envelope"></i> Contact Us
            </button>
        </div>
    </div>
</div>

<style>
    :root {
        --primary-color: #4a90e2;
        --secondary-color: #f5f7fa;
        --accent-color: #ff6b6b;
        --text-color: #2c3e50;
        --border-radius: 12px;
        --transition: all 0.3s ease;
    }

    body {
        font-family: 'Helvetica Neue', sans-serif;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        background: linear-gradient(135deg, #f5f7fa 0%, #e4e8f0 100%);
        margin: 0;
        overflow-x: hidden;
        padding: 20px;
    }

    .quiz-container {
        background-color: rgba(255, 255, 255, 0.95);
        padding: 40px;
        border-radius: var(--border-radius);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        text-align: center;
        max-width: 700px;
        width: 100%;
        box-sizing: border-box;
        position: relative;
        overflow: hidden;
        backdrop-filter: blur(10px);
    }

    /* Decorative Elements */
    .decorative-circle {
        position: absolute;
        border-radius: 50%;
        opacity: 0.1;
        z-index: 0;
    }

    .circle-1 {
        width: 200px;
        height: 200px;
        background: var(--primary-color);
        top: -100px;
        right: -100px;
    }

    .circle-2 {
        width: 150px;
        height: 150px;
        background: var(--accent-color);
        bottom: -75px;
        left: -75px;
    }

    .circle-3 {
        width: 100px;
        height: 100px;
        background: var(--primary-color);
        top: 50%;
        right: -50px;
    }

    .decorative-wave {
        position: absolute;
        height: 100px;
        width: 200%;
        background: linear-gradient(90deg, transparent, var(--primary-color), transparent);
        opacity: 0.05;
        z-index: 0;
    }

    .wave-1 {
        top: 20%;
        transform: rotate(-5deg);
    }

    .wave-2 {
        bottom: 20%;
        transform: rotate(5deg);
    }

    #quiz-title {
        font-size: 2.5rem;
        font-weight: 700;
        margin-bottom: 40px;
        color: var(--text-color);
        position: relative;
        z-index: 1;
    }

    .title-icon {
        color: var(--accent-color);
        margin-right: 10px;
    }

    #question-area {
        margin-bottom: 30px;
        min-height: 200px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        position: relative;
        z-index: 1;
    }

    #question-number {
        font-size: 1rem;
        color: var(--primary-color);
        margin-bottom: 15px;
        font-weight: 500;
    }

    #question-text {
        font-size: 1.5rem;
        font-weight: 600;
        margin-bottom: 30px;
        color: var(--text-color);
        line-height: 1.4;
        padding: 0 20px;
    }

    #options {
        display: flex;
        flex-direction: column;
        gap: 15px;
        width: 100%;
        max-width: 600px;
        margin: 0 auto;
    }

    #options label {
        background-color: var(--secondary-color);
        padding: 20px;
        border-radius: var(--border-radius);
        cursor: pointer;
        transition: var(--transition);
        width: 100%;
        text-align: left;
        border: 2px solid transparent;
        box-sizing: border-box;
        font-size: 1.1rem;
        color: var(--text-color);
        display: flex;
        align-items: center;
    }

    #options label:hover {
        background-color: #e8eef7;
        transform: translateY(-2px);
    }

    #options input[type="radio"] {
        display: none;
    }

    #options input[type="radio"]:checked + label {
        background-color: var(--primary-color);
        color: white;
        border-color: var(--primary-color);
    }

    .button-container {
        display: flex;
        justify-content: space-between;
        margin-top: 30px;
        gap: 15px;
    }

    .button-container button {
        padding: 12px 25px;
        font-size: 1rem;
        border-radius: var(--border-radius);
        cursor: pointer;
        transition: var(--transition);
        border: none;
        display: flex;
        align-items: center;
        gap: 8px;
        flex: 1;
        justify-content: center;
    }

    #next-button,
    #submit-button {
        background-color: var(--primary-color);
        color: white;
    }

    #prev-button {
        background-color: #6c757d;
        color: white;
    }

    .button-container button:hover:not(:disabled) {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }

    #results-area {
        margin-top: 30px;
        padding: 30px;
        border-radius: var(--border-radius);
        background-color: var(--secondary-color);
        position: relative;
        z-index: 1;
    }

    .results-header {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 15px;
        margin-bottom: 20px;
    }

    .results-icon {
        font-size: 2rem;
        color: var(--accent-color);
    }

    #total-score {
        font-size: 2rem;
        font-weight: bold;
        color: var(--text-color);
    }

    #rating {
        font-size: 1.5rem;
        font-weight: bold;
        color: var(--primary-color);
        margin-bottom: 20px;
    }

    #rating-details {
        font-size: 1.1rem;
        color: var(--text-color);
        line-height: 1.6;
        margin-bottom: 30px;
    }

    .results-buttons {
        display: flex;
        gap: 15px;
        justify-content: center;
        flex-wrap: wrap;
    }

    #home-button,
    #contact-button {
        background-color: var(--primary-color);
        color: white;
        padding: 12px 25px;
        font-size: 1rem;
        border-radius: var(--border-radius);
        cursor: pointer;
        transition: var(--transition);
        border: none;
        display: flex;
        align-items: center;
        gap: 8px;
    }

    #home-button:hover,
    #contact-button:hover {
        background-color: #357abd;
        transform: translateY(-2px);
    }

    .social-links {
        margin-top: 40px;
    }

    .social-links p {
        font-size: 1.1rem;
        color: var(--text-color);
        margin-bottom: 20px;
    }

    .social-icons-grid {
        display: flex;
        justify-content: center;
        gap: 15px;
        flex-wrap: wrap;
    }

    .social-icons-grid a {
        font-size: 1.2rem;
        transition: var(--transition);
        background-color: white;
        border-radius: 50%;
        width: 45px;
        height: 45px;
        display: inline-flex;
        justify-content: center;
        align-items: center;
        text-decoration: none;
        box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
        border: 1px solid #eee;
    }

    .social-icons-grid a:hover {
        transform: translateY(-3px);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
    }

    /* Mobile Responsiveness */
    @media (max-width: 768px) {
        .quiz-container {
            padding: 20px;
        }

        #quiz-title {
            font-size: 2rem;
        }

        #question-text {
            font-size: 1.2rem;
            padding: 0 10px;
        }

        #options label {
            padding: 15px;
            font-size: 1rem;
        }

        .button-container {
            flex-direction: column;
        }

        .button-container button {
            width: 100%;
        }

        #results-area {
            padding: 20px;
        }

        #total-score {
            font-size: 1.8rem;
        }

        #rating {
            font-size: 1.3rem;
        }

        #rating-details {
            font-size: 1rem;
        }

        .results-buttons {
            flex-direction: column;
        }

        #home-button,
        #contact-button {
            width: 100%;
        }

        .social-icons-grid {
            gap: 10px;
        }

        .social-icons-grid a {
            width: 40px;
            height: 40px;
            font-size: 1.1rem;
        }
    }

    /* Animations */
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }

    @keyframes fadeOut {
        from { opacity: 1; transform: translateY(0); }
        to { opacity: 0; transform: translateY(-20px); }
    }

    .fade-in-animation {
        animation: fadeIn 0.6s ease-out forwards;
    }

    .fade-out-animation {
        animation: fadeOut 0.6s ease-out forwards;
    }

    /* Progress indicator */
    .progress-container {
        width: 100%;
        height: 4px;
        background-color: var(--secondary-color);
        border-radius: 2px;
        margin-bottom: 30px;
        overflow: hidden;
    }

    .progress-bar {
        height: 100%;
        background-color: var(--primary-color);
        transition: width 0.3s ease;
    }
</style>

<script>
    const questions = [
        { text: "How would you rate your ability to develop and maintain relationships?", options: [{ value: 5, text: 'Excellent' }, { value: 4, text: 'Very Good' }, { value: 3, text: 'Good' }, { value: 2, text: 'Fair' }, { value: 1, text: 'Poor' }] },
        { text: "How well do you accept your mistakes?", options: [{ value: 5, text: 'Excellent' }, { value: 4, text: 'Very Good' }, { value: 3, text: 'Good' }, { value: 2, text: 'Fair' }, { value: 1, text: 'Poor' }] },
        { text: "Do you like constructive criticism?", options: [{ value: 5, text: 'Excellent' }, { value: 4, text: 'Very Good' }, { value: 3, text: 'Good' }, { value: 2, text: 'Fair' }, { value: 1, text: 'Poor' }] },
        { text: "Are you able to laugh at life?", options: [{ value: 5, text: 'Excellent' }, { value: 4, text: 'Very Good' }, { value: 3, text: 'Good' }, { value: 2, text: 'Fair' }, { value: 1, text: 'Poor' }] },
        { text: "How good do you feel about yourself?", options: [{ value: 5, text: 'Excellent' }, { value: 4, text: 'Very Good' }, { value: 3, text: 'Good' }, { value: 2, text: 'Fair' }, { value: 1, text: 'Poor' }] },
        // { text: "How would you rate your self love?", options: [{ value: 5, text: 'Excellent' }, { value: 4, text: 'Very Good' }, { value: 3, text: 'Good' }, { value: 2, text: 'Fair' }, { value: 1, text: 'Poor' }] },
        // { text: "You get an unexpected challenge, how do feel about it?", options: [{ value: 5, text: 'Excellent' }, { value: 4, text: 'Very Good' }, { value: 3, text: 'Good' }, { value: 2, text: 'Fair' }, { value: 1, text: 'Poor' }] },
        // { text: "Do you have your life under control?", options: [{ value: 5, text: 'Excellent' }, { value: 4, text: 'Very Good' }, { value: 3, text: 'Good' }, { value: 2, text: 'Fair' }, { value: 1, text: 'Poor' }] },
        // { text: "How well do you handle stress?", options: [{ value: 5, text: 'Excellent' }, { value: 4, text: 'Very Good' }, { value: 3, text: 'Good' }, { value: 2, text: 'Fair' }, { value: 1, text: 'Poor' }] },
        // { text: "Are you grounded?", options: [{ value: 5, text: 'Excellent' }, { value: 4, text: 'Very Good' }, { value: 3, text: 'Good' }, { value: 2, text: 'Fair' }, { value: 1, text: 'Poor' }] },
        // { text: "How is your energy level?", options: [{ value: 5, text: 'Excellent' }, { value: 4, text: 'Very Good' }, { value: 3, text: 'Good' }, { value: 2, text: 'Fair' }, { value: 1, text: 'Poor' }] },
        // { text: "Do you take time regularly to unwind?", options: [{ value: 5, text: 'Excellent' }, { value: 4, text: 'Very Good' }, { value: 3, text: 'Good' }, { value: 2, text: 'Fair' }, { value: 1, text: 'Poor' }] },
        // { text: "Do you have control over your life?", options: [{ value: 5, text: 'Excellent' }, { value: 4, text: 'Very Good' }, { value: 3, text: 'Good' }, { value: 2, text: 'Fair' }, { value: 1, text: 'Poor' }] },
        // { text: "Do you set priorities regularly?", options: [{ value: 5, text: 'Excellent' }, { value: 4, text: 'Very Good' }, { value: 3, text: 'Good' }, { value: 2, text: 'Fair' }, { value: 1, text: 'Poor' }] },
        // { text: "Do you achieve goals regularly?", options: [{ value: 5, text: 'Excellent' }, { value: 4, text: 'Very Good' }, { value: 3, text: 'Good' }, { value: 2, text: 'Fair' }, { value: 1, text: 'Poor' }] },
        // { text: "Are you well aware of your strengths?", options: [{ value: 5, text: 'Excellent' }, { value: 4, text: 'Very Good' }, { value: 3, text: 'Good' }, { value: 2, text: 'Fair' }, { value: 1, text: 'Poor' }] },
        // { text: "Are you well aware of your weaknesses?", options: [{ value: 5, text: 'Excellent' }, { value: 4, text: 'Very Good' }, { value: 3, text: 'Good' }, { value: 2, text: 'Fair' }, { value: 1, text: 'Poor' }] },
        // { text: "Do you feel good about your future?", options: [{ value: 5, text: 'Excellent' }, { value: 4, text: 'Very Good' }, { value: 3, text: 'Good' }, { value: 2, text: 'Fair' }, { value: 1, text: 'Poor' }] },
        // { text: "How good are you at expressing your feelings?", options: [{ value: 5, text: 'Excellent' }, { value: 4, text: 'Very Good' }, { value: 3, text: 'Good' }, { value: 2, text: 'Fair' }, { value: 1, text: 'Poor' }] },
        // { text: "Do you look forward to the future?", options: [{ value: 5, text: 'Excellent' }, { value: 4, text: 'Very Good' }, { value: 3, text: 'Good' }, { value: 2, text: 'Fair' }, { value: 1, text: 'Poor' }] }
    ];

    const ratings = [
        { range: [20, 40], text: "You need to put serious efforts to get emotionally well, before it derails your life." },
        { range: [41, 60], text: "You need to make efforts to get emotionally well." },
        { range: [61, 80], text: "You have average emotional wellness & need some work." },
        { range: [81, 100], text: "You are on the right path. With little effort, you can achieve your dream life" }
    ];

    let currentQuestionIndex = 0;
    let userAnswers = new Array(questions.length).fill(null); // Use an array to store answers

    const questionNumberEl = document.getElementById('question-number');
    const questionTextEl = document.getElementById('question-text');
    const optionsEl = document.getElementById('options');
    const nextButton = document.getElementById('next-button');
    const prevButton = document.getElementById('prev-button');
    const submitButton = document.getElementById('submit-button');
    const homeButton = document.getElementById('home-button');
    const contactButton = document.getElementById('contact-button');
    const questionAreaEl = document.getElementById('question-area');
    const resultsAreaEl = document.getElementById('results-area');
    const totalScoreEl = document.getElementById('total-score');
    const ratingEl = document.getElementById('rating');
    const ratingDetailsEl = document.getElementById('rating-details');

    function displayQuestion() {
        // Apply fade-out animation before changing content
        questionAreaEl.classList.remove('fade-in-animation');
        questionAreaEl.classList.add('fade-out-animation');

        // Wait for animation to finish before updating content and fading in
        setTimeout(() => {
            const question = questions[currentQuestionIndex];
            questionNumberEl.textContent = `Question ${currentQuestionIndex + 1} of ${questions.length}`;
            questionTextEl.textContent = question.text;
            optionsEl.innerHTML = ''; // Clear previous options

            question.options.forEach(option => {
                const input = document.createElement('input');
                input.type = 'radio';
                input.name = 'question' + currentQuestionIndex;
                input.id = 'option' + currentQuestionIndex + '-' + option.value;
                input.value = option.value;

                const label = document.createElement('label');
                label.htmlFor = 'option' + currentQuestionIndex + '-' + option.value;
                label.textContent = option.text;

                optionsEl.appendChild(input);
                optionsEl.appendChild(label);

                // Pre-select the option if an answer for this question exists
                if (userAnswers[currentQuestionIndex] !== null && parseInt(userAnswers[currentQuestionIndex]) === option.value) {
                    input.checked = true;
                }
            });

            // Add event listener to handle option selection (auto-advance or enable submit)
            optionsEl.removeEventListener('change', handleOptionSelection); // Prevent duplicate listeners
            optionsEl.addEventListener('change', handleOptionSelection);

            // Update button visibility
            updateButtonVisibility();

            // Apply fade-in animation after updating content
            questionAreaEl.classList.remove('fade-out-animation');
            questionAreaEl.classList.add('fade-in-animation');

        }, 600); // Match timeout to animation duration
    }

    function handleOptionSelection(event) {
        const selectedOption = event.target;
        if (selectedOption.type === 'radio') {
            userAnswers[currentQuestionIndex] = parseInt(selectedOption.value);

            // If it's the last question, enable the submit button
            if (currentQuestionIndex === questions.length - 1) {
                submitButton.disabled = false;
            } else {
                 // Auto-advance to the next question for all other questions
                currentQuestionIndex++;
                displayQuestion();
            }
        }
    }

    function goToPreviousQuestion() {
        if (currentQuestionIndex > 0) {
            currentQuestionIndex--;
            displayQuestion();
        }
    }

    function updateButtonVisibility() {
        // Hide Next and Submit buttons by default
        nextButton.style.display = 'none';
        submitButton.style.display = 'none';

        // Show/hide Previous button
        if (currentQuestionIndex > 0) {
            prevButton.style.display = 'inline-block';
        } else {
            prevButton.style.display = 'none';
        }

        // Show Submit button on the last question if an option is selected
        if (currentQuestionIndex === questions.length - 1) {
             submitButton.style.display = 'inline-block';
             // Disable submit button initially if no option is selected
             if (userAnswers[currentQuestionIndex] === null) {
                 submitButton.disabled = true;
             } else {
                 submitButton.disabled = false;
             }
        } else if (currentQuestionIndex < questions.length - 1) {
            // Auto-advance means Next button is not needed except possibly for debugging
            // nextButton.style.display = 'inline-block';
        }

         // Hide quiz buttons and show home button on the results page
        if (currentQuestionIndex >= questions.length) {
            prevButton.style.display = 'none';
            nextButton.style.display = 'none';
            submitButton.style.display = 'none';
            homeButton.style.display = 'inline-block'; // Show home button
            contactButton.style.display = 'inline-block'; // Show contact button
        } else {
             homeButton.style.display = 'none'; // Hide home button during quiz
             contactButton.style.display = 'none'; // Hide contact button during quiz
        }
    }

    function calculateScore() {
        // Calculate score only from questions that have been answered
        return userAnswers.reduce((sum, score) => sum + (score || 0), 0);
    }

    function getRating(score) {
        for (const rating of ratings) {
            if (score >= rating.range[0] && score <= rating.range[1]) {
                return rating.text;
            }
        }
        return "Score out of range."; // Should not happen if ranges cover 20-100
    }

     function getRatingLabel(score) {
        if (score >= 81) return 'Excellent';
        else if (score >= 61) return 'Very Good';
        else if (score >= 41) return 'Good';
        else if (score >= 20) return 'Fair';
        else return 'Poor'; // Scores below 20 or with unanswered questions
    }

    function showResults() {
        questionAreaEl.style.display = 'none'; // Hide question area instantly
        nextButton.style.display = 'none'; // Hide button instantly
        prevButton.style.display = 'none'; // Hide previous button
        submitButton.style.display = 'none'; // Hide submit button

        const totalScore = calculateScore();
        totalScoreEl.textContent = `Total Score: ${totalScore}`;
        ratingDetailsEl.textContent = getRating(totalScore);
        ratingEl.textContent = `Rating: ${getRatingLabel(totalScore)}`;

        // Add a slight delay before showing results with fade-in
        resultsAreaEl.style.opacity = 0; // Start hidden
        resultsAreaEl.style.display = 'block'; // Make it block to allow fade-in
        resultsAreaEl.classList.add('fade-in-animation'); // Apply fade-in animation

        // Show the home button after results are displayed
        homeButton.style.display = 'inline-block'; // Show home button
        contactButton.style.display = 'inline-block'; // Show contact button
    }

    function goToHomePage() {
        window.location.href = '/'; // Redirect to home page
    }

    function goToContactPage() {
        window.location.href = '/#contact'; // Redirect to contact page
    }

    //nextButton.addEventListener('click', nextQuestion); // Removed auto-advance
    prevButton.addEventListener('click', goToPreviousQuestion);
    homeButton.addEventListener('click', goToHomePage);
    contactButton.addEventListener('click', goToContactPage);
    submitButton.addEventListener('click', showResults);

    // Initial display with fade-in animation
    questionAreaEl.classList.add('fade-in-animation');
    displayQuestion();


    // Tooltip for social icons
    document.addEventListener('DOMContentLoaded', function() {
        const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-toggle="tooltip"]'));
        tooltipTriggerList.map(function(tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl);
        });
    });

</script>
