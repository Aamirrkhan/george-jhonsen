document.addEventListener('DOMContentLoaded', function() {
    const steps = document.querySelectorAll('.step-btn');
    const formTabs = document.querySelectorAll('.stepform-tab');
    const nextButtons = document.querySelectorAll('.next-btnstep');
    const backButtons = document.querySelectorAll('.back-btnstep');

    steps.forEach(step => {
        step.addEventListener('click', function(e) {
            e.preventDefault();
            const stepNum = parseInt(this.getAttribute('data-step'));
            const currentStep = document.querySelector('.stepform-tab.active').getAttribute('data-step');

            if (validateStep(currentStep)) {
                showStep(stepNum);
            }
        });
    });

    nextButtons.forEach(button => {
        button.addEventListener('click', function() {
            const currentStep = this.closest('.stepform-tab').getAttribute('data-step');
            if (validateStep(currentStep)) {
                showStep(parseInt(currentStep) + 1);
            }
        });
    });

    backButtons.forEach(button => {
        button.addEventListener('click', function() {
            const currentStep = this.closest('.stepform-tab').getAttribute('data-step');
            showStep(parseInt(currentStep) - 1);
        });
    });

    function showStep(stepNum) {
        formTabs.forEach(tab => {
            tab.classList.remove('active');
            if (tab.getAttribute('data-step') === stepNum.toString()) {
                tab.classList.add('active');
            }
        });
        steps.forEach(step => {
            // step.classList.remove('active');
            if (parseInt(step.getAttribute('data-step')) === stepNum) {
                step.classList.add('active');
            }
        });
    }

    function validateStep(stepNum) {
        const currentTab = document.querySelector(`.stepform-tab[data-step="${stepNum}"]`);
        const inputs = currentTab.querySelectorAll('input[required], textarea[required]');
        let valid = true;

        inputs.forEach(input => {
            if (!input.value.trim()) {
                input.style.border = '2px solid red';
                valid = false;
            } else {
                input.style.border = '';
            }
        });

        return valid;
    }
});
