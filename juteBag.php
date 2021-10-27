<html>
<head>
<title>Simple Feedback Form</title>
<style>label{display:block;}</style>
</head>
<body>

<form action="/feedback_form.php" method="post">
<label>Create Template</label>
<input type="image" name="Create_Template" size="40">
echo "<img src='images/".$row['JuteBag.jpeg']."' >";


<label>Name</label>
<input type="text" name="Name" size="40">
<label>Email Address</label>


<input type="text" name="email_address" size="40">

<label>Your Feedback</label>
<textarea name="feedback" cols="50" rows="10"></textarea>

<input type="submit" name="send" value="Submit">
<form>
</body>
</html>