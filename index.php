<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8"/>
		<title>Slack Message Data Design Project</title>
	</head>
	<body>
		<header>
				<main>
			<h1>Data Design Slack Message</h1>
		</header>
		<main><h3>User</h3>
				<p>
					Gloria will be using Slack direct messanger with her school peers for ongoing project colaboration.
				</p>
				<ul>
					<li><strong>Name:</strong> Gloria Mendez</li>
					<li><strong>Age:</strong>27</li>
					<li><strong>Hobbies:</strong> Photography and hiking</li>
					<li><strong>Profession:</strong> Photography Student</li>
					<li><strong>Technology></strong>Gloria will be using her Android phone and her Mac computer at home and school.</li>
				</ul>
					<p>Gloria decided to go back to school to continue her Photography studies sinced she wants to change careers from
						High school Art Teacher, to professional photographer and start her own business, as she wants to be able to work her
						own schedule to enjoy nature and to have the freedom to express her own style in her work.</p>
						<p>She wants to make the most out of the time in school having the opportunity to learn as much as possible from
							the experience the professors and her peers to become an excellent photographer</p>
						<p>Gloria wants to start her busimess in partnership with her sister since they work well together and combining their
						talents on their company they will have more band opportunities to succeed. Gloria is contemplating the possibility
						to use the same app for her business by creating a group in Slack for her and her sister.</p>
				<h3>Use Case</h3>
				<p><strong>Goal:</strong>Gloria wants to become very effective at her communication with Slack. She has commited
					to use it as much as possible while in school to ensure the use of this app will be convinient for her business.</p>
			<ol>
				<li>Gloria will download the app to her phone and computer</li>
				<li>Gloria will register and will receive her userId</li>
				<li>Gloria will log in and will join her school team</li>
				<li>Gloria will contact group members to ask for feedback on her work</li>
			</ol>
			<h2>Conceptual Model</h2>
			<h3>Entities and Atributes</h3>
			<h2>user</h2>
				<ul>
					<li>userId (primary key)</li>
					<li>userName</li>
					<li>userPicture</li>
				</ul>
			<h2>message</h2>
			<ul>
				<li>messageId (primary key)</li>
				<li>messageTime</li>
				<li>messageContent</li>
			</ul>
			<h3>Relationships</h3>
			<p>user can send many messages 1-to-n </p>
			<p>user can receive many messages one-to-many</p>
		</main>
	</body>
</html>