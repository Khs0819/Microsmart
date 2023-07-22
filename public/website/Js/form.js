var checks = document.querySelectorAll(".checked");
for (let i = 0; i < checks.length; i++) {
    checks[i].onchange = (_) => {
        checks[i].classList.toggle("check");
    };
}
var policy = document.querySelectorAll(".policy");
for (let i = 0; i < policy.length; i++) {
    policy[i].onchange = (_) => {
        policy[i].classList.toggle("agree");
    };
}

/**
 * Define a function to navigate betweens form steps.
 * It accepts one parameter. That is - step number.
 */
const navigateToFormStep = (stepNumber) => {
    /**
     * Hide all form steps.
     */
    document.querySelectorAll(".form-step").forEach((formStepElement) => {
        formStepElement.classList.add("d-none");
    });
    /**
     * Mark all form steps as unfinished.
     */
    document
        .querySelectorAll(".form-stepper-list")
        .forEach((formStepHeader) => {
            formStepHeader.classList.add("form-stepper-unfinished");
            formStepHeader.classList.remove(
                "form-stepper-active",
                "form-stepper-completed"
            );
        });
    /**
     * Show the current form step (as passed to the function).
     */
    document.querySelector("#step-" + stepNumber).classList.remove("d-none");
    /**
     * Select the form step circle (progress bar).
     */
    const formStepCircle = document.querySelector(
        'li[step="' + stepNumber + '"]'
    );
    /**
     * Mark the current form step as active.
     */
    formStepCircle.classList.remove(
        "form-stepper-unfinished",
        "form-stepper-completed"
    );
    formStepCircle.classList.add("form-stepper-active");
    /**
     * Loop through each form step circles.
     * This loop will continue up to the current step number.
     * Example: If the current step is 3,
     * then the loop will perform operations for step 1 and 2.
     */
    for (let index = 0; index < stepNumber; index++) {
        /**
         * Select the form step circle (progress bar).
         */
        const formStepCircle = document.querySelector(
            'li[step="' + index + '"]'
        );
        /**
         * Check if the element exist. If yes, then proceed.
         */
        if (formStepCircle) {
            /**
             * Mark the form step as completed.
             */
            formStepCircle.classList.remove(
                "form-stepper-unfinished",
                "form-stepper-active"
            );
            formStepCircle.classList.add("form-stepper-completed");
        }
    }
};
/**
 * Select all form navigation buttons, and loop through them.
 */

document
    .querySelectorAll(".btn-navigate-form-step")
    .forEach((formNavigationBtn) => {
        /**
         * Add a click event listener to the button.
         */
        formNavigationBtn.addEventListener("click", () => {
            /**
             * Get the value of the step.
             */
            const stepNumber = parseInt(
                formNavigationBtn.getAttribute("step_number")
            );
            /**
             * Call the function to navigate to the target form step.
             */
            navigateToFormStep(stepNumber);
        });
    });

function showHideElements() {
    var workingCondition = document.getElementById("Governorate").value;
    if (workingCondition === "الضفة الغربية") {
        document.getElementById("WestBank-select").style.display = "block";
    } else {
        document.getElementById("WestBank-select").style.display = "none";
    }
}

function showHidephone() {
    var workingCondition = document.getElementById("country-code").value;
    if (workingCondition === "xx") {
        document.getElementById("phone").style.display = "block";
    } else {
        document.getElementById("phone").style.display = "none";
    }
    if (workingCondition === "جوال") {
        document.getElementById("phone-numberj").style.display = "block";
        document.getElementById("phone-numberj").value = "059";
    } else {
        document.getElementById("phone-numberj").style.display = "none";
    }
    if (workingCondition === "أوريدو") {
        document.getElementById("phone-numbero").style.display = "block";
        document.getElementById("phone-numbero").value = "056";
    } else {
        document.getElementById("phone-numbero").style.display = "none";
    }
    if (workingCondition === "شبكة خلوية أخرى") {
        document.getElementById("phone-numberx").style.display = "block";
    } else {
        document.getElementById("phone-numberx").style.display = "none";
    }
}

function handleEducationStatus() {
    var status = document.getElementById("education-status").value;
    var otherField = document.getElementById("other-field");
    var academicLevelField = document.getElementById("academic-level-field");
    var graduationField = document.getElementById("graduation-field");
    var universityField = document.getElementById("university-field");
    var ss = document.getElementById("ss");

    otherField.classList.add("hidden");
    academicLevelField.classList.add("hidden");
    graduationField.classList.add("hidden");
    universityField.classList.add("hidden");

    ss.classList.toggle("hidden", status === "أخرى");

    if (status === "أخرى") {
        otherField.classList.toggle("hidden");
    } else if (status === "AAA") {
        academicLevelField.classList.toggle("hidden");
    } else if (status === "BBB") {
        graduationField.classList.toggle("hidden");
    }
    if (status !== "أخرى") {
        universityField.classList.toggle("hidden");
    }
}

function handleEmploymentStatus() {
    var status = document.getElementById("employment-status").value;
    var workSectorField = document.getElementById("work-sector-field");

    workSectorField.classList.add("hidden");

    if (status === "AAA") {
        workSectorField.classList.remove("hidden");
    }
}

function handleWorkSector() {
    var sector = document.getElementById("work-sector").value;
    var workSectorOtherField = document.getElementById(
        "work-sector-other-field"
    );

    workSectorOtherField.classList.add("hidden");

    if (sector === "أخرى") {
        workSectorOtherField.classList.remove("hidden");
    }
}

function handleDegree() {
    var degree = document.getElementById("degree").value;
    var degreeOtherField = document.getElementById("degree-other-field");
    degreeOtherField.classList.add("hidden");

    if (degree === "أخرى") {
        degreeOtherField.classList.remove("hidden");
    }
}

function handleUniversity() {
    var university = document.getElementById("university").value;
    var arabUniversityField = document.getElementById("arab-university-field");
    var foreignUniversityField = document.getElementById(
        "foreign-university-field"
    );
    var university1 = document.getElementById("university1");
    var collegeUniversityField = document.getElementById(
        "college-university-field"
    );

    arabUniversityField.classList.add("hidden");
    foreignUniversityField.classList.add("hidden");
    university1.classList.add("hidden");
    collegeUniversityField.classList.add("hidden");

    if (university === "جامعات عربية") {
        arabUniversityField.classList.remove("hidden");
    } else if (university === "جامعات أجنبية") {
        foreignUniversityField.classList.remove("hidden");
    } else if (university === "جامعات فلسطينية") {
        university1.classList.remove("hidden");
    }
}

function handleTrainingProgram() {
    var selectedProgram = document.getElementById("training-program").value;
    var efficiencyCheckbox = document.getElementById("efficiency-checkbox");
    var AdministrationCheckbox = document.getElementById(
        "Administration-checkbox"
    );
    var ITCheckbox = document.getElementById("IT-checkbox");
    var ITdevice = document.getElementById("for-IT");

    efficiencyCheckbox.classList.add("hidden");
    AdministrationCheckbox.classList.add("hidden");
    ITCheckbox.classList.add("hidden");
    ITdevice.classList.add("hidden");

    if (selectedProgram == "1") {
        efficiencyCheckbox.classList.remove("hidden");
    }

    if (selectedProgram == "2") {
        AdministrationCheckbox.classList.remove("hidden");
    }

    if (selectedProgram == "3") {
        ITCheckbox.classList.remove("hidden");
        ITdevice.classList.remove("hidden");
    }
}

function University5() {
    var university11 = document.getElementById("university11").value;
    var palestinian_university_field = document.getElementById(
        "palestinian-university-field"
    );
    var mid_college_university_field = document.getElementById(
        "mid-college-university-field"
    );
    var collegeUniversityField = document.getElementById(
        "college-university-field"
    );

    palestinian_university_field.classList.add("hidden");
    mid_college_university_field.classList.add("hidden");
    collegeUniversityField.classList.add("hidden");

    if (university11 === "الجامعات الفلسطينية") {
        palestinian_university_field.classList.remove("hidden");
    } else if (university11 === "الكليات الجامعية") {
        collegeUniversityField.classList.remove("hidden");
    } else if (university11 === "الكليات المتوسطة") {
        mid_college_university_field.classList.remove("hidden");
    }
}
