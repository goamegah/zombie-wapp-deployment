
document.querySelector('form')
	.addEventListener('submit', function (event) {
		event.preventDefault();
		let hasError = false;



		const regexInput = /^[\S]{1,100}$/;
		const inputVerification = function () {
			// console.log(this);
			if (this.value.match(regexInput) === null) {
				this.classList.add("error");
				this.previousElementSibling.previousElementSibling.classList.add("error");
				hasError = true;
			}
			else {
				this.classList.remove("error");
				this.previousElementSibling.previousElementSibling.classList.remove("error");
				hasError = false;
			}
		}

		// console.log(usernameInput);
		// console.log(this);
		// ^ => debut de ma chaine;   $ => fin de la chaine 
		// \S => tous les caractères sauf le blanc ou tab ou retour chariot

		// console.log(usernameInput.value);
		// console.log(usernameInput.value.match(/^[\S]{1,100}$/));
		let usernameInput = document.getElementById('username');
		if (usernameInput.value.match(regexInput) === null) {
			usernameInput.classList.add("error");
			usernameInput.previousElementSibling.previousElementSibling.classList.add("error");
			hasError = true;
		}
		usernameInput.addEventListener("input", inputVerification);

		let titleinput = document.getElementById("title")
		if (usernameInput.value.match(regexInput) === null) {
			titleinput.classList.add("error");
			titleinput.previousElementSibling.previousElementSibling.classList.add("error");
			hasError = true;
		}
		titleinput.addEventListener("input", inputVerification);

		let descriptInput = document.getElementById("description");
		if (descriptInput.value === "") {
			descriptInput.classList.add("error");
			descriptInput.previousElementSibling.previousElementSibling.classList.add("error");
			hasError = true;
		}
		descriptInput.addEventListener("input", function () {
			if (this.value === "") {
				this.classList.add("error");
				this.previousElementSibling.previousElementSibling.classList.add("error");
				hasError = true;
			}
			else {
				this.classList.remove("error");
				this.previousElementSibling.previousElementSibling.classList.remove("error");
				hasError = false;
			}
		});


		let emailInput = document.getElementById("email");
		// emailError = document.getElementById("status");
		if (emailInput.value.match(/[\w.-]+@[\w.-]+\.[a-z]{2,}/) === null) {
		    // emailError.textContent = 'L\'email n\'a pas le bon format'
		    // emailError.style.display = 'block'
			emailInput.classList.add("error");
			emailInput.previousElementSibling.previousElementSibling.classList.add("error");
		    hasError = true
		} 
		if (emailInput.value.length >= 100) {
			emailInput.classList.add("error");
			emailInput.previousElementSibling.previousElementSibling.classList.add("error");
		    hasError = true
		}

		emailInput.addEventListener("input", function(){
			if (this.value.match(/[\w.-]+@[\w.-]+\.[a-z]{2,}$/) === null) {
				this.classList.add("error");
				this.previousElementSibling.previousElementSibling.classList.add("error");
				hasError = true
			} 
			else if (this.value.length >= 100) {
				this.classList.add("error");
				this.previousElementSibling.previousElementSibling.classList.add("error");
				hasError = true
			}
			else {
				this.classList.remove("error");
				this.previousElementSibling.previousElementSibling.classList.remove("error");
				hasError = false;
			}
		});








		if (!hasError) {
		    this.submit()
		}
	})