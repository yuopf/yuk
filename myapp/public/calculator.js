const BASE_PRICE_PER_SQ_M = 500; 
const CORNER_PRICE = 100; 
const PIPE_PRICE = 200; 
const CHANDELIER_PRICE = 500; 
const LIGHT_PRICE = 300; 

const PROFILE_PRICES = {
    plastic: 0,
    aluminum: 200,
    shadow: 300
};

const WINDOW_PRICES = {
    curtain: 400,
    hidden: 600,
    niche: 500
};

let currentProfile = 'plastic';
let currentWindow = 'hidden';

function changeValue(fieldId, delta) {
    const input = document.getElementById(fieldId);
    let value = parseInt(input.value) || 0;
    value = Math.max(0, value + delta); 
    input.value = value;
    calculateTotal();
}


function setProfile(profile) {
    currentProfile = profile;
    document.querySelectorAll('.tabs button').forEach(btn => btn.classList.remove('active'));
    event.target.classList.add('active');
    calculateTotal();
}

function setWindow(windowType) {
    currentWindow = windowType;
    document.querySelectorAll('.tabs button').forEach(btn => btn.classList.remove('active'));
    event.target.classList.add('active');
    calculateTotal();
}


function calculateTotal() {
    const length = parseFloat(document.getElementById('length').value) || 0;
    const width = parseFloat(document.getElementById('width').value) || 0;
    const corners = parseInt(document.getElementById('corners').value) || 0;
    const pipes = parseInt(document.getElementById('pipes').value) || 0;
    const chandeliers = parseInt(document.getElementById('chandeliers').value) || 0;
    const lights = parseInt(document.getElementById('lights').value) || 0;
    const windowLength = parseInt(document.getElementById('windowLength').value) || 0;


    const area = length * width;


    let total = area * BASE_PRICE_PER_SQ_M;


    total += corners * CORNER_PRICE;
    total += pipes * PIPE_PRICE;
    total += chandeliers * CHANDELIER_PRICE;
    total += lights * LIGHT_PRICE;


    const perimeter = 2 * (length + width);
    total += perimeter * PROFILE_PRICES[currentProfile];

    total += windowLength * WINDOW_PRICES[currentWindow];


    document.getElementById('totalPrice').textContent = `${Math.round(total).toLocaleString()} ₽`;
}

document.querySelectorAll('input').forEach(input => {
    input.addEventListener('input', calculateTotal);
});


calculateTotal();