<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
        <div class="container" id="heading">
                <h2 class="centered-text">Download your Foursquare data now!</h2>
                <h5 class="centered-text lato-bold">We help you recall where you lay your data eggs.</h5>
                <div class="centered-text">
                        <div id="buttons" class="btn-group">
<?php
	echo "<a class='btn btn-primary btn-lg lato-bold' role='button'
                                        href='https://foursquare.com/oauth2/authenticate?client_id=$clid&response_type=code&redirect_uri=$url'>";
?>
			<span class="glyphicon glyphicon-play-circle"></span>&nbsp;&nbsp;Login with Foursquare</a>
                        </div>
                </div>
        </div>
</div>

