@extends('layouts.main')

@section('content')

<section class="page faq">
	<div class="container">
		<h1 class="title-big">FAQ</h1>
		
			<div class="question" id="q1">
				<h3>Why is my Activity going so slow?</h3>
				<div class="question-answer">
					<p>This is happening due to the activity speed algorithm, which is built on Instagram’s daily limits. In order to evenly distribute your activity throughout the day, our system may automatically reduce speed to avoid exceeding daily limits.</p>
				</div>
				
					<div class="question-hint well well-small mt20">
						<p>Use Normal activity speed. Try not to have liking, commenting, following and unfollowing activity on your phone while your activity is started on Instagress.</p>
					</div>
				
			</div>
		
			<div class="question" id="q2">
				<h3>Why don't my Likes, Comments, Follows or Unfollows work?</h3>
				<div class="question-answer">
					<p>It seems that you've reached your daily Instagram limits. You need to wait about 12-24 hours and try to start your Activity again.</p>
				</div>
				
			</div>
		
			<div class="question" id="q3">
				<h3>What does &quot;Instagram limits&quot; mean?</h3>
				<div class="question-answer">
					<p>This is an amount of possible actions for your account. It’s about 1000 likes, 250 comments, 300 follows and 200 unfollow actions per day (24 hours). We have noticed that different accounts have different limits — a bit more or less.</p>
				</div>
				
			</div>
		
			<div class="question" id="q4">
				<h3>Do I need to stay online and keep the site open to keep my Activity working?</h3>
				<div class="question-answer">
					<p>No, all activity is going on our servers, so you can feel free to log out, change account or close your browser after you start your activity — everything will continue to work on our servers!</p>
				</div>
				
			</div>
		
			<div class="question" id="q5">
				<h3>Does activity work even when I log out, close the browser window, or turn off the computer?</h3>
				<div class="question-answer">
					<p>Yes, it does. When you start your activity you can feel free to log out, close your browser, or turn off your device — your activity will continue to work on our servers.</p>
				</div>
				
			</div>
		
			<div class="question" id="q6">
				<h3>Why am I unable to edit/change my settings?</h3>
				<div class="question-answer">
					<p>You cannot edit or change your settings while your Activity is started. To change your settings, please stop your Activity, make the changes and then start it again.</p>
				</div>
				
			</div>
		
			<div class="question" id="q7">
				<h3>Why can’t I follow any more people?</h3>
				<div class="question-answer">
					<p>Instagram has strict limit for following — 7500. Sometimes even unaccepted requests to private users also count as followings. In such cases, you will see your followings counter at about 7450 and you cannot follow any more people because there are outstanding 50 requests to private users.</p>
				</div>
				
					<div class="question-hint well well-small mt20">
						<p>Start Unfollow actions to free some space for new followings.</p>
					</div>
				
			</div>
		
			<div class="question" id="q8">
				<h3>How do I prevent integrity checkpoints and password resets?</h3>
				<div class="question-answer">
					<p>Please, note that when your Activity is started we strongly discourage conducting any manual activity on Instagram using a mobile device or third-party websites, as well as use other automation services simultaneously with Instagress — it can lead to errors or password reset.</p>
				</div>
				
			</div>
		
			<div class="question" id="q9">
				<h3>Is it possible to buy using credit/debit card?</h3>
				<div class="question-answer">
					<p>Yes, it is possible to make a credit/debit card purchase using our new payment system with <a href="https://stripe.com/" target="_blank">Stripe</a>.</p>
				</div>
				
			</div>
		
			<div class="question" id="q10">
				<h3>Is it possible to buy using PayPal?</h3>
				<div class="question-answer">
					<p>Yes, it is possible to make a purchase using our new payment system with <a href="https://www.paypal.com/" target="_blank">PayPal</a>.</p>
				</div>
				
			</div>
		
			<div class="question" id="q11">
				<h3>How many Instagram accounts can I have running under one Instagress account?</h3>
				<div class="question-answer">
					<p>You can run as many accounts under one Instagress account as you need. But each account you want to run should get some time. So your options are: buy one desired time package and split it across all your accounts, or you can buy the same time package for each account and even get the Quantity Discount based on the quantity of one time purchase. Read more info in our blog: <a href="blog/quantity-discount.html">https://instagressalternative.com/blog/quantity-discount</a></p>
				</div>
				
			</div>
		
			<div class="question" id="q12">
				<h3>How do I transfer/split my remaining time from one account to another?</h3>
				<div class="question-answer">
					<p>You can transfer your Activity time from one username to another by yourself. You also can split your time between usernames and transfer only the desired amount.</p><p>To use this feature, you need to open the special Time Transfer dialog. To do so, please click on the "Transfer time" link under the "Buy time package" button on your Dashboard page, or you can also find the same link in the "More" dropdown menu for any of your usernames.</p>
				</div>
				
			</div>
		
			<div class="question" id="q13">
				<h3>What does the &quot;Activity start/stop task placed but not completed yet&quot; error mean?</h3>
				<div class="question-answer">
					<p>When you get this error, just wait couple of minutes and refresh your page — our system must pick up your start/stop task as soon as one of the servers is ready to handle it. Such errors may occur in peak hours/days or when we're updating/restarting our servers.</p>
				</div>
				
			</div>
		
			<div class="question" id="q14">
				<h3>How do I delete my Instagram username from your service?</h3>
				<div class="question-answer">
					<p>If you want to delete your Instagram username from our service, please stop your activity and log out. All your sensitive data such as session and access tokens will be automatically deleted after 3 days.</p>
				</div>
				
			</div>
		
	</div>
</section>

@endsection