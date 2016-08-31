/**
* Slide left instantiation and action.
*/
var slideLeft = new Menu({
wrapper: '#wrapper',
type: 'slide-left',
menuOpenerClass: '.c-button',
maskId: '#c-mask'
});

var slideLeftBtn = document.querySelector('#c-button--slide-left');

slideLeftBtn.addEventListener('click', function(e) {
e.preventDefault;
slideLeft.open();
});

/**
* Push left instantiation and action.
*/
var pushLeft = new Menu({
wrapper: '#wrapper',
type: 'push-left',
menuOpenerClass: '.c-button',
maskId: '#c-mask'
});

var pushLeftBtn = document.querySelector('#c-button--push-left');

pushLeftBtn.addEventListener('click', function(e) {
e.preventDefault;
pushLeft.open();
});

/**
* Push right instantiation and action.
*/
var pushRight = new Menu({
wrapper: '#wrapper',
type: 'push-right',
menuOpenerClass: '.c-button',
maskId: '#c-mask'
});

var pushRightBtn = document.querySelector('#c-button--push-right');

pushRightBtn.addEventListener('click', function(e) {
e.preventDefault;
pushRight.open();
});