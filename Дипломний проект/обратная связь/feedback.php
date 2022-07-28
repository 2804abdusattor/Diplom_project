<!DOCTYPE html>
<html lang="en">
<style type="text/css">
	.feedbackCol {
		margin-top: 5%;
		width: 40%;
		margin-left: 30%;
	}
	.feedbackCol #done {
		background-color: green;
		border-radius: 5px;
	}
	.feedbackCol #done:hover {
		background-color: lightgreen;
	}
</style>
<head>
	<link rel="stylesheet"  href="/Дипломний проект/css/style.css" type="text/css">
	<link rel="stylesheet"  href="/English_club_folder/css/font-awesome.css" type="text/css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
	<script >
		$(document).ready(function(){
			$("#done").click(function(){
				$("#messageShow").hide();
				var name = $("#name").val();
				var email = $("#email").val();
				var subject = $("#subject").val();
				var message = $("#message").val();
				var fail = "";
				if (name.length < 3){
					fail = "Имя не меньше 3 символов";
				}
				else if (email.split('@').length - 1 == 0 || email.split('.').length - 1 == 0){
					fail = "Вы ввели некорректный email";
				}
				else if (subject.length < 5){
					fail = "Тема сообщения не менее 5 символов";
				}
				else if (message.length < 20){
					fail = "Сообщения не менее 20 символов";
				}
				if (fail != ""){
					$('#messageShow').html(fail + "<div class='clear'><br></div>");
					$('#messageShow').show();
					return false;
				}
				$.ajax ({
					url: '/Дипломний проект/обратная связь/ajax_sent.php',
					type: 'POST',
					cache: false,
					data: {'name': name, 'email': email, 'subject': subject, 'message': message},
					dataType: 'html',
					success: function(data){
						$('#messageShow').html(data+"<div class='clear'><br></div>");
						$('#messageShow').show();
					}
				});

			});
		});
	</script>
</head>
<body style="background-color:gray;">
	<div class="feedbackCol">
		<input type="text" placeholder="Имя" id="name" name="name" class="form-control"><br/>
		<input type="text" placeholder="Email" id="email" name="email" class="form-control"><br/>
		<input type="text" placeholder="Тема сообщения" id="subject" name="subject" class="form-control"><br/>
		<textarea name="message" id="message" placeholder="Введите сюда ваше сообщение" class="form-control"></textarea><br/>
		<div id="messageShow"></div>
		<input type="button"  name="done"  id="done"  value="Отправить" class="form-control">
	</div>
</body>
</html>