document.addEventListener('DOMContentLoaded', () => {
    const steps = Array.from(document.querySelectorAll('.form-step'));
    const prevBtn = document.getElementById('prev-step');
    const nextBtn = document.getElementById('next-step');
    const saveBtn = document.getElementById('save-form');
    const otherConditionCheckbox = document.querySelector('input[data-other-condition="true"]');
    const otherConditionNotesWrapper = document.getElementById('other-condition-notes-wrapper');
    const otherConditionNotesInput = document.getElementById('other-condition-notes');

    if (!steps.length || !prevBtn || !nextBtn || !saveBtn) return;

    let currentStep = 1;

    const renderStep = () => {
        steps.forEach((step, index) => {
            const stepNumber = index + 1;
            step.classList.toggle('hidden', stepNumber !== currentStep);
        });

        if (currentStep === steps.length) {
            nextBtn.disabled = true;
            saveBtn.classList.remove('hidden');
        } else {
            nextBtn.disabled = false;
            saveBtn.classList.add('hidden');
        }

        prevBtn.disabled = currentStep === 1;
    };

    prevBtn.addEventListener('click', () => {
        if (currentStep > 1) {
            currentStep -= 1;
            renderStep();
        }
    });

    nextBtn.addEventListener('click', () => {
        if (currentStep < steps.length) {
            currentStep += 1;
            renderStep();
        }
    });

    if (otherConditionCheckbox && otherConditionNotesWrapper) {
        const renderOtherConditionNotes = () => {
            const shouldShow = otherConditionCheckbox.checked;

            otherConditionNotesWrapper.classList.toggle('hidden', !shouldShow);

            if (otherConditionNotesInput) {
                otherConditionNotesInput.disabled = !shouldShow;
                if (!shouldShow) {
                    otherConditionNotesInput.value = '';
                }
            }
        };

        otherConditionCheckbox.addEventListener('change', renderOtherConditionNotes);
        renderOtherConditionNotes();
    }

    renderStep();
});
