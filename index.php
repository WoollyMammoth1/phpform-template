
<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Site Title</title>

    </head>
    <body>
                            <form action="mail.php" method="POST">
                                <div class="row form-group">
                                    <div class="col-md-12">
                                        <label class="sr-only" for="name">Name</label>
                                        <input type="text" id="name" name="name" class="form-control" placeholder="Your firstname (required)" required>
                                    </div>

                                </div>

                                <div class="row form-group">
                                    <div class="col-md-12">
                                        <label class="sr-only" for="email">Email</label>
                                        <input type="text" id="email" name="email" class="form-control" placeholder="Your email address (required)" required>
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col-md-12">
                                        <label class="sr-only" for="number">Number</label>
                                        <input type="text" id="number" name="number" class="form-control" placeholder="Your Number (required)" required>
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col-md-12">
                                        <label class="sr-only" for="address">Address</label>
                                        <input type="text" id="address" name="address" class="form-control" placeholder="Your Address">
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col-md-12">
                                        <label class="sr-only" for="email">City</label>
                                        <input type="text" id="email" name="city" class="form-control" placeholder="Your City">
                                    </div>
                                </div>
                                
                                <div class="antispam">
                                    <div class="antispam">
                                        <label class="sr-only" for="spammers">DON'T WRITE IN THIS</label>
                                        <input type="text" id="spammers" name="url" class="antispam" placeholder="DON'T WRITE IN THIS">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <input type="submit" value="Submit" class="btn btn-primary">
                                </div>

                            </form>

        <!-- scrolling -->
        <script>
            // Select all links with hashes
            $('a[href*="#"]')
                    // Remove links that don't actually link to anything
                    .not('[href="#"]')
                    .not('[href="#0"]')
                    .click(function (event) {
                        // On-page links
                        if (
                                location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '')
                                &&
                                location.hostname === this.hostname
                                ) {
                            // Figure out element to scroll to
                            var target = $(this.hash);
                            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                            // Does a scroll target exist?
                            if (target.length) {
                                // Only prevent default if animation is actually gonna happen
                                event.preventDefault();
                                $('html, body').animate({
                                    scrollTop: target.offset().top
                                }, 1000, function () {
                                    // Callback after animation
                                    // Must change focus!
                                    var $target = $(target);
                                    $target.focus();
                                    if ($target.is(":focus")) { // Checking if the target was focused
                                        return false;
                                    } else {
                                        $target.attr('tabindex', '-1'); // Adding tabindex for elements not focusable
                                        $target.focus(); // Set focus again
                                    }
                                    ;
                                });
                            }
                        }
                    });
        </script>
        
    </body>
</html>

