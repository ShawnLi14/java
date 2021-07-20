<ul class="nav nav-pills nav-justified flex-column">
    <li>
        <a href="" class="nav-link text-white" id="dashboard">
            <svg class="bi me-2" width="16" height="16">
            </svg>
            Dashboard
        </a>
    </li>
    <hr>
</ul>
<div class="accordion accordion-flush" id="subjectsDropdown" style="margin-bottom: auto">
    <div class="accordion-item">
        <h2 class="accordion-header" id="basicsHeader">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Basics
            </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="basicsHeader" data-bs-parent="#subjectsDropdown">
            <div class="accordion-body bg-dark">
                <ul class="nav nav-pills nav-justified flex-column mb-auto">
                    <li>
                        <a href="/basics/introduction" class="nav-link text-white" id="1-introduction">
                            <svg class="bi me-2" width="16" height="16">
                            </svg>
                            Introduction
                        </a>
                    </li>
                    <li>
                        <a href="/basics/printing" class="nav-link text-white" id="1-printing">
                            <svg class="bi me-2" width="16" height="16">
                            </svg>
                            Printing
                        </a>
                    </li>
                    <li>
                        <a href="/basics/variables" class="nav-link text-white" id="1-variables">
                            <svg class="bi me-2" width="16" height="16">
                            </svg>
                            Variables
                        </a>
                    </li>
                    <li>
                        <a href="/basics/operators" class="nav-link text-white" id="1-operators">
                            <svg class="bi me-2" width="16" height="16">
                            </svg>
                            Operators
                        </a>
                    </li>
                    <li>
                        <a href="/basics/quiz" class="nav-link text-white" id="1-quiz">
                            <svg class="bi me-2" width="16" height="16">
                            </svg>
                            Quiz
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Conditionals + Loops
            </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#subjectsDropdown">
            <div class="accordion-body bg-dark">
                <ul class="nav nav-pills nav-justified flex-column mb-auto">
                    <li>
                        <a href="/conditionalsloops/conditionals" class="nav-link text-white" id="2-conditionals">
                            <svg class="bi me-2" width="16" height="16">
                            </svg>
                            Conditionals
                        </a>
                    </li>
                    <li>
                        <a href="/conditionalsloops/loops" class="nav-link text-white" id="2-loops">
                            <svg class="bi me-2" width="16" height="16">
                            </svg>
                            Loops
                        </a>
                    </li>
                    <li>
                        <a href="/conditionalsloops/strings" class="nav-link text-white" id="2-strings">
                            <svg class="bi me-2" width="16" height="16">
                            </svg>
                            Strings
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<hr>
<?php
if(!isset($_SESSION)){
    echo '<a href="/login" class="nav-link text-white" id="loginsignup">
        <svg class="bi me-2" width="16" height="16">
        </svg>
        <strong>Login/Sign Up</strong>
    </a>';
}
else{
    echo '<p>Welcome ' + $_SESSION["currentUser"] + '</p>';
}
?>