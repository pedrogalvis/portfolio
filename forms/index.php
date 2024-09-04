<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
    <!-- container for Contact-->
    <div class="container-fluid">
        <div class="Contact" id="ContactLink">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <form class="form-horizontal" role="form" method="post" action="index.php">
                            <div class="form-group">
                                <label for="name" class="col-sm-2 control-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="<?php echo htmlspecialchars($_POST['name'] ?? ''); ?>">
                                    <?php echo "<p class='text-danger'>" . ($errName ?? '') . "</p>"; ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email" class="col-sm-2 control-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="<?php echo htmlspecialchars($_POST['email'] ?? ''); ?>">
                                    <?php echo "<p class='text-danger'>" . ($errEmail ?? '') . "</p>"; ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="message" class="col-sm-2 control-label">Message</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" rows="4" name="message"><?php echo htmlspecialchars($_POST['message'] ?? ''); ?></textarea>
                                    <?php echo "<p class='text-danger'>" . ($errMessage ?? '') . "</p>"; ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="human" class="col-sm-2 control-label">2 + 3 = ?</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="human" name="human" placeholder="Your Answer">
                                    <?php echo "<p class='text-danger'>" . ($errHuman ?? '') . "</p>"; ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-10 col-sm-offset-2">
                                    <input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-10 col-sm-offset-2">
                                    <?php echo $result ?? ''; ?>
                                </div>
                            </div>
                        </form>
                    </div> <!-- ending div for contact form-->
                </div><!-- ending div for row -->
            </div><!-- ending div for container-->
        </div><!-- ending div for contact -->
    </div><!-- ending div for contact container-->
</body>
</html>
