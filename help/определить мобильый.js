//Определение типа устройства
var user = detect.parse(navigator.userAgent);
var deviceType = user.device.type;
$('body').addClass(deviceType);

// На выходе берем или deviceType или
// <body class="Mobile">
// или
// <body class="Desktop">