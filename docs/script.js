const selectInput = document.getElementById('accountType');
let overdraft_limit = document.getElementById('overdraft_limit');
let credit_limit = document.getElementById('credit_limit');
let interest_rate = document.getElementById('interest_rate');

selectInput.addEventListener('change', () => {
    console.log(selectInput.value);

    // Hide and disable irrelevant sections
    overdraft_limit.classList.add('hidden');
    overdraft_limit.classList.remove('block');
    overdraft_limit.querySelectorAll('input').forEach(input => input.removeAttribute('required'));

    credit_limit.classList.add('hidden');
    credit_limit.classList.remove('block');
    credit_limit.querySelectorAll('input').forEach(input => input.removeAttribute('required'));

    interest_rate.classList.add('hidden');
    interest_rate.classList.remove('block');
    interest_rate.querySelectorAll('input').forEach(input => input.removeAttribute('required'));

    // Show and enable relevant section based on selection
    if (selectInput.value == 'CurrentAccount') {
        overdraft_limit.classList.remove('hidden');
        overdraft_limit.classList.add('block');
        overdraft_limit.querySelectorAll('input').forEach(input => input.setAttribute('required', 'true'));
    } else if (selectInput.value == 'SavingsAccount') {
        interest_rate.classList.remove('hidden');
        interest_rate.classList.add('block');
        interest_rate.querySelectorAll('input').forEach(input => input.setAttribute('required', 'true'));
    } else if (selectInput.value == 'BusinessAccount') {
        credit_limit.classList.remove('hidden');
        credit_limit.classList.add('block');
        credit_limit.querySelectorAll('input').forEach(input => input.setAttribute('required', 'true'));
    }
});
