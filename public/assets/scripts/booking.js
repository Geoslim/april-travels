

var myBook = document.getquerySelector(".footer__overlay--btn orange-btn");


myBook.addEventListener ("click", Function (){
	console.log("happy");
	// document.body.scrollTop = 0; // For Safari
  	document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
})



// function scrollFunction() {
//   if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
//     mybutton.style.display = "block";
//   } else {
//     mybutton.style.display = "none";
//   }
// }

// When the user clicks on the button, scroll to the top of the document
// function topFunction() {
// 	console.log("happy")
//   document.body.scrollTop = 0; // For Safari
//   document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
// }