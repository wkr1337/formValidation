<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body><div class="wrapper3">
        <div class="contact-form-wrapper">
            <div class="contact-form-text">
                <h2>Leerling formulier</h2>
                <p>This is where you can send me a message :)</p>

            </div>
            <form action="validate.php" method="post">
            <div class="contact-form-form">

                <div>
                    <label for="name">First Name</label>
                    <input type="text" id="name" name="firstName" placeholder="Your name..">
                </div>
                <div>
                    <label for="name">Last Name</label>
                    <input type="text" id="name" name="lastName" placeholder="Your last name..">
                </div>
                <div>
                    <label for="name">Address</label>
                    <input type="address" id="name" name="address" placeholder="Your address..">
                </div>
                <div>
                    <label for="name">Woonplaats</label>
                    <input type="city" id="name" name="woonplaats" placeholder="Your woonplaats..">
                </div>
                <div>
                    <label for="name">Geboorte datum</label>
                    <input type="date" id="name" name="birthday" placeholder="Your birthday..">
                </div>
                <div>
                    <label for="email">Email address</label>
                    <input type="email" id="email" name="emailAddress" placeholder="Your email address..">
                </div>
                <div>
                    <label for="phone-number">Phone number</label>
                    <input type="text" id="phone-number" name="phoneNumber" placeholder="Your phone number..">
                </div>
                <div>
                    <label for="message">Message</label>
                    <textarea id="message" name="message" placeholder="Your message.." rows="5" cols="50"></textarea>
                </div>
                <div>
                    <input id="contact-submit-button"type="submit" name="leerlingForm" value="Submit">
                </div>
                </form>
            </div>
        </div>
        

    </div>
</body>
</html>