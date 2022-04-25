$('button[type=submit]').click(function(e) 
{
	e.preventDefault();
	var form = $("form.request-demo");

	if(formValid(form)) 
	{
        grecaptcha.ready(function()
		{
			grecaptcha.execute('6Leoe-0dAAAAAAiSW0MQD01BbQ7HQXIF0NZW-gi5', {action: 'submit'}).then(function(token)
			{
				$.post('/?/requestdemo',
				{ 
					firstname: form.find('[name="firstname"]').val(),
					surname: form.find('[name="surname"]').val(),
					email: form.find('[name="email"]').val(),
					phonenumber: form.find('[name="phonenumber"]').val(),
					position: form.find('[name="position"]').val(),
					country: form.find('[name="country"]').val(),
					company: form.find('[name="company"]').val(),
					nbemployees: form.find('[name="nbemployees"]').val(),
					comment: form.find('[name="comment"]').val(),
					use: form.find('[name="use-case"]').val(),
				})
				.done(function()
				{
					location.reload();
				});
			});
		});
	}
});


function formValid(form) 
{
	var valid = true;
	//var email = document.getElementById("email").value;

	
	var email = document.getElementById("email");
	var phonenumber = document.getElementById("phonenumber");

	var pattenforemail = /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/;
	var pattenforphone = /^\d{10}$/;

	if(!checkInput(form.find('[name="firstname"]')))
	{
		valid = false;
	}

	if(!checkInput(form.find('[name="surname"]'))) 
	{
		valid = false;
	}

	if(!checkInput(form.find('[name="use"]'))) 
	{
		valid = false;
	}

	if(!checkInput(form.find('[name="email"]'))) 
	{
		if(!email.match(pattenforemail))
		{
			valid = false;
			alert(" enter valid email ");
		}
	}

	if(!checkInput(form.find('[name="phonenumber"]'))) 
	{
		if(!phonenumber.match(pattenforphone))
		{
			valid = false;
			alert(" enter valid phonenumber ");
		}

		valid = false;
	}

	if(!checkInput(form.find('[name="position"]'))) 
	{
		valid = false;
	}

	if(!checkInput(form.find('[name="company"]'))) 
	{
		valid = false;
	}
	
	if(!checkInput(form.find('[name="nbemployees"]'))) 
	{
		valid = false;
	}

	if(!checkInput(form.find('[name="country"]'))) 
	{
		valid = false;
	}

	
	if(checkInput(form.find('[name="email"]')).match(patten))
	{
		valid = true;
		console.alert("this");
	}
	else
	{
		valid = false;
	}




	return valid;
}

function checkInput(input) 
{
	//input.removeClass('is-invalid');
	if(!input.val())
	{
		//input.addClass('is-invalid');
		return false;
	}
	return true;
}

<script src="https://www.google.com/recaptcha/api.js?render=reCAPTCHA_site_key"></script>