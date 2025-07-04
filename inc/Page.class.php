<?php
class Page
{
	static function getHeader($title, $author)
	{
?>
		<!DOCTYPE html>
		<html>

		<head>
			<meta charset="utf-8">
			<title><?= $title ?></title>
			<link href="css/styles.css" rel="stylesheet">
		</head>

		<body>
			<header>
				<h1><?= $title ?> by <?= $author ?></h1>
			</header>
			<article>
				<section class="main">
				<?php
			}
			static function getFooter()
			{
				?>
					<!-- Start the page's footer -->
			</article>
		</body>

		</html>
	<?php
			}
			static function showForm($valid_status)
			{
	?>
		<div class="form">
			<form action="" method="post">
				<fieldset id="form">
					<legend>Custom Build Order Page</legend>
					<div>
						<label for="fullName">Full Name</label>
						<input type="text" name="fullName" id="fullName" placeholder="First and last name">
					</div>
					<div>
						<label for="email">Email Address</label>
						<input type="email" name="email" id="email" placeholder="someone@here.ca">
					</div>
					<div>
						<label for="phoneNumber">Phone Number</label>
						<input type="text" name="phoneNumber" id="phoneNumber" placeholder="(nnn) nnn nnnn">
					</div>
					<div>
						<label for="productAmount">Product Amount</label>
						<input type="text" name="productAmount" id="productAmount" placeholder="number of product less than 7">
					</div>
					<div>
						<label for="giftWrap">Gift wrap?</label>
						<span>
							<input type="radio" name="giftWrap" id="giftWrapYes" value="yes"> Yes
							<input type="radio" name="giftWrap" id="giftWrapNo" value="no"> No
						</span>
					</div>
					<div>
						<label for="shipping">Shipping Priority</label>
						<select name="shipping">
							<option value="Select...">Please select one option</option>
							<option value="regular">Regular - $6</option>
							<option value="express">Express - $15</option>
							<option value="priority">Priority - $25</option>
						</select>
					</div>
					<div>
						<input type="submit" name="submit" value="Submit Order">
						<input type="reset" name="reset" value="Clear Data">
					</div>
				</fieldset>
			</form>
		</div>
		</section>
		<section class="sidebar">
		<?php
			}
			static function showNotification($error_notifications)
			{
		?>
			<div class="highlight">
				<?php
				if (count($error_notifications) == 0) {
				?>
					<p>thank you</p>
				<?php
				} else {
				?>
					<p>Please fix the following errors:</p>
					<ul>
						<?php
						foreach ($error_notifications as $value) {
							echo "<li>" . $value . "</li>";
						}
						?>
						<li>Error 1</li>
						<li>Error 2</li>
					</ul>
				<?php
				}
				?>
			</div>
		<?php
			}
			static function showData($values)
			{
		?>
			<div class="data">
				<b>Entered data is:</b>
				<table>

					<tr>
						<th>Name</th>
						<td><?= $values['fullName'] ?></td>
					</tr>
					<tr>
						<th>Email</th>
						<td>Email entry</td>
					</tr>
					<tr>
						<th>Phone</th>
						<td>Phone entry</td>
					</tr>
					<tr>
						<th>Product Amount</th>
						<td>Amount entry</td>
					</tr>
					<tr>
						<th>Gift Wrap?</th>
						<td>Gift entry</td>
					</tr>
					<tr>
						<th>Shipping</th>
						<td>Shipping entry</td>
					</tr>
					<tr>
						<th>Total Cost</th>
						<td>Total Cost</td>
					</tr>
				</table>
			</div>
		</section>

<?php
			}
		}
?>