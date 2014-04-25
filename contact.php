<!DOCTYPE html>
<?php if (!empty($_POST)): ?>
	<?php
		// Validate Required Fields
		if (!empty($_POST['name']) and !empty($_POST['email']) and !empty($_POST['help']) and !empty($_POST['question'])) {
			$validate = TRUE;

			// Send success email to user
			$headers  = 'From: evidencetoprograms@sw.org' . "\r\n";
			$headers .= 'MIME-Version: 1.0' . "\n";
			$headers .= 'Content-Type: text/html; charset=ISO-8859-1' . "\n";

			$message  = '<html><body>';
			$message .= '<img src="http://www.evidencetoprograms.com/images/logo.png" alt="logo" />';
			$message .= '<p>Thank you, ' . $_POST['name'] . ', for sharing your feedback with us. We will review your message and provide a response promptly. </p>';
			$message .= "</body></html>";

			mail($_POST['email'], 'Contact form submitted', $message, $headers);

			// Send form answers to client in email
			$to       = 'evidencetoprograms@sw.org';
			$subject  =  $_POST['name'] . ' has contacted us.';
			$headers  = 'From: ' . strip_tags($_POST['email']) . "\r\n";
			$headers .= 'MIME-Version: 1.0' . "\n";
			$headers .= 'Content-Type: text/html; charset=ISO-8859-1' . "\n";

			$message  = '<html><body>';
			$message .= '<img src="http://www.evidencetoprograms.com/images/logo.png" alt="logo" />';
			$message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
			$message .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" . strip_tags($_POST['name']) . "</td></tr>";
			$message .= "<tr><td><strong>Email:</strong> </td><td>" . strip_tags($_POST['email']) . "</td></tr>";
			$message .= "<tr><td><strong>Work Setting:</strong> </td><td>" . strip_tags($_POST['setting']) . "</td></tr>";
			$message .= "<tr><td><strong>Familiarity with evidence-based programming:</strong> </td><td>" . strip_tags($_POST['familiarity']) . "</td></tr>";
			$message .= "<tr><td><strong>How can we help?:</strong> </td><td>" . $_POST['help'] . "</td></tr>";
			$message .= "<tr><td><strong>Message:</strong> </td><td>" . $_POST['question'] . "</td></tr>";
			$message .= "</table>";
			$message .= "</body></html>";

			mail($to, $subject, $message, $headers);
		}
	?>
<?php endif; ?>
<!--[if IE 8]> <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta name="description" content="Is your organization interested in providing evidence-based programs for seniors? Find resources in this Toolkit to help you implement these programs well."/>
	<meta name="keywords"    content="EBPs, seniors, senior health, evidence-based programs, evidence-based programs for seniors, evidence-based programming, how to implement EBPs, how to implement evidence-based programs "/>
	<?php include('partials/head.php') ?>
</head>
<body class="document">
	<?php include('partials/header.php') ?>
	<section class="section-title blue">
		<div class="row">
			<div class="small-12 columns">
				<h1>Contact Us</h1>
			</div>
		</div>
	</section>
	<section class="document-view">
		<div class="row">
			<div class="small-10 small-offset-1 columns">
				<?php if ($validate): ?>
					<p class="form-success">Thank you for sharing your feedback with us. We will review your message and provide a response promptly.</p>
				<?php endif; ?>
				<form method="post" action="" id="" class="contact-form">
				<h5 class="indicates-required"><span>*</span> Indicates Required</h5>
					<div class="row">
						<div class="small-6 columns">
							<div class="inner-form">
								<div class="field-wrap text form-label required">
									<label for="name">Name</label>
									<span class="needed">*</span>
									<input type="text" name="name" value="" placeholder="Name" required>
								</div>
							</div>
						</div>
						<div class="small-6 columns">
							<div class="inner-form">
								<div class="field-wrap text form-label required">
									<label for="email">Email</label>
									<span class="needed">*</span>
									<input type="text" name="email" value="" placeholder="Email Address" required>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="small-12 columns">
							<div class="inner-form">
								<div class="field-wrap text form-label contact-radio">
									<label for="Work Setting">work Setting</label>
									<p>Work Setting</p>
									<ul>
										<li><input type="radio" name="setting" value="Community-based organization">Community-based organization</li>
										<li><input type="radio" name="setting" value="Governmental agency">Governmental agency</li>
										<li><input type="radio" name="setting" value="Faith-based organization">Faith-based organization</li>
										<li><input type="radio" name="setting" value="Healthcare organization">Healthcare organization</li>
										<li><input type="radio" name="setting" value="Occupational health">Occupational health</li>
										<li><input type="radio" name="setting" value="School or university">School or university</li>
										<li><input type="radio" name="setting" value="Student in related field">Student in related field</li>
										<li><input type="radio" name="setting" value="Voluntary health agency">Voluntary health agency</li>
										<li><input type="radio" name="setting" value="Other">Other</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="small-12 columns">
							<div class="inner-form">
								<div class="field-wrap text form-label contact-radio">
									<label for="Familiarity">Familiarity with evidence-based programming </label>
									<p>Familiarity with evidence-based programming</p>
									<ul>
										<li><input type="radio" name="familiarity" value="Not at all familiar">Not at all familiar</li>
										<li><input type="radio" name="familiarity" value="Moderately familiar">Moderately familiar</li>
										<li><input type="radio" name="familiarity" value="Very familiar">Very familiar</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="small-12 columns">
							<div class="inner-form">
								<div class="field-wrap text form-label contact-radio outside-error">
									<label for="Familiarity">How can we help?</label>
									<span class="needed">*</span>
									<p>How can we help?</p>
									<ul>
										<li><input type="radio" name="help" value="I want to ask a question" required>I want to ask a question </li>
										<li><input type="radio" name="help" value="I want to provide feedback on the site">I want to provide feedback on the site</li>
										<li><input type="radio" name="help" value="Recommend an additional resource">Recommend an additional resource</li>
										<li><input type="radio" name="help" value="Report a technical issue with the site ">Report a technical issue with the site </li>
										<li><input type="radio" name="help" value="Other">Other</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="small-12 columns">
							<div class="inner-form">
								<div class="field-wrap textarea form-label required">
									<label for="question">Message</label>
									<span class="needed">*</span>
									<textarea name="question" rows="0" cols="0" placeholder="Message" required></textarea>
								</div>
								<button type="submit" class="submit">Submit</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</section>
	<?php include('partials/footer.php') ?>
	<script src="/js/jquery.validation.js"></script>
	<script>
		$("form").validate();
	</script>
</body>
</html>
