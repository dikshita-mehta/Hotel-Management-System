 var today = new Date().toISOString().split('T')[0];
 document.getElementsByName("somedate")[0].setAttribute('min', today);
