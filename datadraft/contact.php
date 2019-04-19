<?php include("includes/config.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php include(TEMPLATES_PATH . "/head-tag-contents.php");?>
</head>
<body>

	<?php include(TEMPLATES_PATH . "/navigation.php");?>

	<div class="container" id="main-content">
		<div id="contact-banner">
			<div class="container">
				<div class="text">Contact Us</div>
			</div>
		</div>
		<div id="contact-content" class="container">
			<form>
				<table>
					<tr>
						<td valign="top">
							<label for="first_name">First Name *</label>
						</td>
					</tr>
					<tr>
						<td valign="top">
							<input  type="text" name="first_name" maxlength="50" size="30">
						</td>
					</tr>
					<tr>
						<td valign="top">
							<label for="last_name">Last Name *</label>
						</td>
					</tr>
					<tr>
						<td valign="top">
							<input  type="text" name="last_name" maxlength="50" size="30">
						</td>
					</tr>
					<tr>
						<td valign="top">
							<label for="email">Email Address *</label>
						</td>
					</tr>
					<tr>
						<td valign="top">
							<input  type="text" name="email" maxlength="80" size="30">
						</td>
					</tr>
					<tr>
						<td valign="top">
							<label for="telephone">Telephone Number</label>
						</td>
					</tr>
					<tr>
						<td valign="top">
							<input  type="text" name="telephone" maxlength="30" size="30">
						</td>
					</tr>
					<tr>
						<td valign="top">
							<label for="comments">Comments *</label>
						</td>
					</tr>
					<tr>
						<td valign="top">
							<textarea  name="comments" maxlength="1000" cols="25" rows="6"></textarea>
						</td>
					</tr>
					<tr>
						<td colspan="2" style="text-align:center">
							<input class="submit-button" type="submit" value="Submit">
						</td>
					</tr>
				</table>
			</form>
		</div>
	</div>

</body>
</html>
