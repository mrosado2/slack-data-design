<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Slack Message Data Design Project</title>
	</head>
	<body>
		<header>
				<main>
			<h1>Data Design Slack Message</h1>
		</header>
		<main><h3>User</h3>
				<p>
					Gloria will be using Slack Direct Message with her school peers and professors for ongoing project
					colaboration.
				</p>
				<ul>
					<li><strong>Name:</strong> Gloria Mendez</li>
					<li><strong>Age:</strong>27</li>
					<li><strong>Hobbies:</strong> Photography and hiking</li>
					<li><strong>Profession:</strong> Photography Student</li>
					<li><strong>Technology:</strong>Gloria will be using her Android phone and her Mac computer at home and
						school.</li>
				</ul>
					<p>Gloria decided to go back to school to continue her Photography studies sinced she wants to
						change careers from High school Art Teacher, to professional photographer and start her
						own business.</p>
			<p>She wants to be her own boss and be able to work her own schedule, enjoy nature and to have
						the freedom to express her ownstyle in her work.</p>
						<p>She wants to make the most out of her time in school and learn from the experience and technique
							of the professors and her peers, as she wants to become an excellent photographer. </p>
						<p>Gloria wants to start her business in partnership with her sister since they work well
							together and by combining their talents on the company they will have better opportunities
							to succeed.</p>
			         <p>Gloria is contemplating the possibility also implement the use of Slack for her business
							to cummunicate with her sister and her employees by creating her own team in Slack.</p>
				<h3>Use Case</h3>
				<p><strong>Goal:</strong> Gloria wants to become very effective at her communication with Slack.</p>
			   <p>She has commited herself to use it as much as possible to maximaze her learning while in
					school and to ensure that the use of this app will be convinient for her business.</p>
			<ol>
				<li>Gloria will download the app to her phone and computer</li>
				<li>Gloria will register and will receive her userId</li>
				<li>Gloria will log in and will join her school team</li>
				<li>Gloria will contact group members to ask for feedback on her work and plan practice field trips.</li>
			</ol>
			<h3>Conceptual Model</h3>
			<h3>Entities and Atributes</h3>
			<h4>user</h4>
				<ul>
					<li>userId (primary key)</li>
					<li>userName</li>
					<li>userPicture</li>
				</ul>
			<h4>message</h4>
			<ul>
				<li>messageId (primary key)</li>
				<li>messageTime</li>
				<li>messageContent</li>
				<li>messageSenderId  foreign key</li>
				<li>messageReceiverId foreign key</li>
			</ul>
			<ul>
				<li>receiverId (primary key)</li>
				<li>receiverNameId</li>
				<li>receiverPictureId</li>
			</ul>

			<h4>Relationships</h4>
			<p>userId can send many messages 1-to-n </p>
			<p>userId can receive many messages 1-to-n</p>
			<p>one message can be send to many usersIds m-to-n</p>
			<p>messageId can get only 1-to-1 messageTimeStamp 1-to-1</p>
			<p>message can be send to one receiverId</p>
			<p>message cab be sent to multiple receiverId 1-to-n</p>
		</main>
	</body>
</html>