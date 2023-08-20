(function ($) {
    var videos = document.querySelectorAll('video');

    videos.forEach(function (video) {
        var interval;
        var isPlaying = false; // Flag to track if video is currently playing

        video.addEventListener('play', function () {
            if (!isPlaying) {
                isPlaying = true; // Set the flag to true
                interval = setInterval(function () {
                    sendPlaytime(video);
                }, 10000); // Send playtime data every 10 seconds
            }
        });

        video.addEventListener('pause', function () {
            clearInterval(interval);
            if (isPlaying) {
                isPlaying = false; // Reset the flag when video is paused
                sendPlaytime(video); // Send final playtime data when video is paused
            }
        });

        video.addEventListener('ended', function () {
            clearInterval(interval);
            if (isPlaying) {
                isPlaying = false; // Reset the flag when video ends
                sendPlaytime(video); // Send final playtime data when video ends
            }
        });
    });

    function sendPlaytime(video) {
        var currentTime = Math.floor(video.currentTime);
        var videoId = video.getAttribute('id');
        
        $.ajax({
            url: video_tracker_data.ajax_url,
            method: 'POST',
            data: {
                action: 'update_video_playtime',
                video_id: videoId,
                playtime: currentTime
            },
            success: function (response) {
                // Do nothing on success
            }
        });
    }
})(jQuery);
