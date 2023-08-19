<h1>Video Tracker WordPress Plugin</h1>

Description: This WordPress plugin allows you to track video playtime and display the view count for each video embedded on your website.

Version: 1.1 <br>
Author: vikum rajeewa <br>
Plugin URL: [View Plugin work
](https://dev.nonimi.ink/2023/08/15/qq-2/)<br>

<h2>Features</h2><br>

Embed videos using a shortcode.<br>
Automatically track video playtime and update view count.<br>
Display video playtime and view count using a shortcode.<br>
View video statistics in the admin dashboard.<br>

<h2>Installation</h2><br>

Download the plugin zip file.<br>
Log in to your WordPress dashboard.<br>
Go to 'Plugins' > 'Add New'.<br>
Click the 'Upload Plugin' button and choose the downloaded zip file.<br>
Activate the plugin.<br>

<h2>Usage</H2><br>

Use the [video_embed] shortcode to embed videos in your posts or pages.<br>
Example: [video_embed src="video_url.mp4" id="video1"]<br>

Add the [video_statistics] shortcode to display video statistics.<br>
Example: [video_statistics id="video1"]<br>

Videos' view count and playtime will be automatically tracked as users watch the videos.<br>

To view video statistics in the admin dashboard, go to 'Video Tracker' in the left sidebar.<br>

<h2>How It Works</h2><br>

When a video starts playing, the plugin begins tracking its playtime.<br>
The playtime is sent to the server every 10 seconds.<br>
When the video is paused or ends, the final playtime is sent to the server.<br>
The plugin updates the playtime and view count in the database.<br>
Video statistics can be displayed using shortcodes or viewed in the admin dashboard.<br>

<h2>Known Issues</h2><br>

Occasionally, view count may increase by 2 or more due to user interactions or browser behavior. This is being actively addressed.<br>
Notes<br>
Make sure to have jQuery loaded on your website for the plugin to work properly.<br>

<h2>Support</h2><br>

For any issues or questions, please contact us at vikumrp@gmail.com.<br>
