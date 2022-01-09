<!DOCTYPE html>
<html>
<!--SOEN 287 Group Project
        Team 8 - PALLAS Entertainment
        Team members:
        Florian Charreau (26494889) 
        Piyush Goyal(40106759) 
        Aline Kurkdjian (40131528)
        Joseph Mezzacappa(40134799)
        Luiza Nogueira Costa (40124771)
        Yi Heng Yan(40060587)
    -->


<head>
    <meta charset="utf-8" />

    <!--Google Fonts-->
    <!--Luckiest Guy || Montserrat-->
    <link href="https://fonts.googleapis.com/css2?family=Luckiest+Guy&family=Montserrat:wght@400;700;900&display=swap" rel="stylesheet" />
    <!--Manual CSS-->
    <link rel="stylesheet" href="styles.css?v=<?php echo time(); ?>" />

    <!--Icons-->
    <script src="https://kit.fontawesome.com/ba7a137c00.js" crossorigin="anonymous"></script>

    <style type="text/css">
        .box {
            width: 640px;
            margin: 30px auto;
            background-color: #fff;
            border-radius: 7px;
            box-shadow: 1px 2px 4px rgba(0, 0, 0, .3);
        }

        .box .heading {
            background: #717fff;
            border-radius: 7px 7px 0px 0px;
            padding: 10px;
            color: rgb(0, 0, 0);
            text-align: left;

        }

        .title {
            padding: 0px 20px 20px;
        }

        ::-webkit-details-marker {
            float: left;
            margin-top: 3px;
        }
    summary{
        cursor: pointer;
    }
        details {
            background-color: #f6f6f6;
            padding: 10px 20px;
            border-radius: 7px;
            margin-top: 20px;
            font-size: 14px;
            letter-spacing: 1px;
        }

        details summary {
            outline: none;
        }

        .menu {
            width: 60%;
            margin: 30px auto;
            font-size: 20px;
            border-radius: 5px;
            color: white;
            letter-spacing: 1px;
            text-align: center;
            background-image: url(media/images/pattern2.jpg);
            box-shadow: 1px 2px 4px rgba(0, 0, 0, .3);
        }

        h1 {
            text-align: center;
            text-shadow: black;
            padding: 20px;

        }

        #footer {
            background-color: white;
        }

        a,
        a:link,
        a:visited,
        a:hover,
        a:active {
            font-style: "Montserrat";
            text-decoration: none;
            color: white;
        }
    </style>
</head>

<body>
    <?php include("navbar.php"); ?>
    <main>
        <div class="heading">
            <h2>Frequently Asked Questions</h2>
            <div class="menu">
                <br />
                <a href="#Pallas">About Pallas</a>
                <br />
                <a href="#Accounts">Account issues and personal information</a>
                <br />
                <a href="#Tickets">Tickets - purchase and sale</a>
                <br />
                <a href="#payment">Payment and refunds</a>
                <br />
                <a href="#Other">Other problems</a>
                <br />
                <br />
            </div>
        </div>

        <div class="box">
            <a class="heading" name="Pallas">1.About Pallas</a>
            <details>
                <summary>What is Pallas Entertainment?</summary>
                <p>Pallas Entertainment is a event entertainment and performance company. We offer services from children's party entertainment to festival-level circus acts. We are a Montreal-based entertainment company that provides acts and performances to bring life to events big and small.</p>
            </details>
            <details>
                <summary>Why the name Pallas?</summary>
                <p>The name Pallas is the given epithet of Ancient Greek goddess Athena, associated with wisdom and handicraft. We thought those were important elements to bring to the entertainment industry, and look to the godess Athena as a source of motivation.
                </p>
            </details>

            <details>
                <summary>Who invented Pallas?</summary>
                <p>A group of Concordia Univeristy students had the idea for Pallas Entertainment for a course project. Then, a few of our more artistic-inclined members decided to join in. We started as just a group of friends trying to build upon our hobbies, and now we are a full-fledged, world-recognized company. What a ride!.
                </p>
            </details>


        </div>

        <div class="box">
            <a class="heading" name="Accounts">2.Account issues and personal information</a>
            <details>
                <summary>Do I need an account?</summary>
                <p> Though an account is not necessary to browse the website or ask for a quote estimation through email, having one is highly recommended.
                    Buying performance tickets or booking an event through an account will allow you to manage this information through the user page. You will also need an account to post a review.</p>
            </details>
            <details>
                <summary>What information do I need to create an account?</summary>
                <p> An account can be created by adding your email, first and last names, phone number, and a password. If you decide to buy a ticket, you will have the option to save your payment information for future purchases. For event bookings, we may need to reach out to discuss the details, but we will do so through email.
                </p>
            </details>

            <details>
                <summary>What should I do if I forget my password?</summary>
                <p>You can simply click "forgot my password" button on the login page. A link will be sent to your
                    registred email to reset the password.
                </p>
            </details>

            <details>
                <summary>What should I do if somebody else uses my account?</summary>
                <p>In the case of unauthorized account use, please contact the customer services to retrieve it. If the payment was made, please contact the bank for further information. We will never share our customer's information to
                    the others, however, it is important to keep your account safe.
                </p>
            </details>

            <details>
                <summary>What if I decide to close my account?</summary>
                <p>If you decide to no longer use our website, you can write an us an email to delete your account. Once the
                    account is deleted, no more information will stay on our system including your receipts, addresses, past bookings history and so on.
                </p>
            </details>
            <details>
                <summary>Can I set my account to private?</summary>
                <p> The only time your information will be visible to other users is if you decide to publish a review. In that case, your first name and review will be posted to our review page. If you do not wish for your name to be published, you can opt to review our services through Yelp instead, or just send us an email with your thoughts.
                </p>
            </details>
        </div>


        <div class="box">
            <a class="heading" name="Tickets">3.Tickets - Sale and Purchase.</a>
            <details>
                <summary>How can I buy a ticket?</summary>
                <p>You can either go to the ticket sales page and select which you would like to watch. The payment will go through your choice of
                    Visa, Mastercard, or Paypal. Some events will have an option to pay at the event. If there is this choice, you can check the box to reserve your ticket, and pay at
                    the event. If you chose to pay at the event, we cannot guarantee that your reservation will be fulfullied - this is the responsibility of the event booker.
                </p>
            </details>
            <details>
                <summary>How can I sell tickets if I booked a public event with ticket sales?</summary>
                <p>If you are a booker, just visit the booked performances section in your user page and click the "Add tickets for sale" button.
                    Just fill in the form and the event will be added to the ticket sales page. The total sales profit will be transferred to your payment method of choice after the event date, once our performeers report back to us. Note that there is a 5% service fee on all sales for using our platform.
                </p>
            </details>

            <details>
                <summary>Can I have a physical ticket as a souvenir?</summary>
                <p>Pallas recommends digital tickets, but people who want to keep the physical (paper) ticket as a sourvenir can chose to print the ticket PDF. You can view your purchased tickets on your user page.
                </p>
            </details>

            <details>
                <summary>Can I sell my ticket to someone else?</summary>
                <p>You can sell ticket to someone else if you decide to no longer attend the event. However, ticket re-sale is limited to a single ticket per user, and it must be at the original ticket price or lower.
                    Ticket re-sale for profit is prohibited by law, and accounts that are identified to do this will be persecuted.
                </p>
            </details>
        </div>



        <div class="box">
            <a class="heading" name="Payment">4.Payment and Refunds</a>
            <details>
                <summary>What kind of payment is acceptable?</summary>
                <p>Pallas will accept MasterCard, Visa, and Paypal. You can reach out to us through email to discuss any other payment methods.</p>
            </details>
            <details>
                <summary>What if I regret the purchase of a ticket?</summary>
                <p>Up to 48 hours before the performance begins, the ticket is refundable. Just click my order and click "cancel order" button, and the refund will
                    be processed within 5 business days (circumstances permitting). Within 48 hours to the performance, the ticket is no longer refundable. To refund a performance, the booker must contact us through our phone (123-456-7890) at least a week before the event date. Events cancelled last-minute (up to three days before the performance) will result in a fee equivalent to 60% of the event quote. Events cancelled any later will result in the booker being charged the full price.
                </p>

            </details>

            <details>
                <summary>How long it takes for the refund to be processed?</summary>
                <p>The refund for the ticket will depend on the bank. Usually it takes 3~5 bussiness days. If you did not receive
                    your refund within the estimated time, please contact the customer services in order to make sure everything is going right. The refund will
                    go to the orignal payment method.
                </p>

            </details>

            <details>
                <summary>Why was my payment unsuccessful?</summary>
                <p>There are many reason that the payment can be rejected. If the payment method is not wrong (such as the card information, the credit limit),
                    there is a chance that the ticket is already sold out and there is a delay to the information. If you curious about why the payment is not successful, you
                    can write an email to customer service. Usually is takes 48 hours for an answer.
                </p>

            </details>
        </div>
        <div class="box">
            <a class="heading" name="Other">5.Other problems</a>
            <details>
                <summary>What if there is an error with my order?</summary>
                <p>If you find something wrong with your order and you cannot fix it by yourself please contact us. You can find useful links in our contact page.
                </p>
            </details>
            <details>
                <summary>Will I be able to report someone?</summary>
                <p> We encourage our clients to give us their honest opinion. That said, reviews which make use of hate speech or that violate our code of conduct will be manually removed from our servers. If you wish to report the behaviour of one of our performers, please do so by calling our customer service line (123-46-7890). Please contact your local law enforcement in case of an emergency.
                </p>
            </details>
        </div>
        </div>
    </main>

    <footer class="white-section" id="footer">
        <div class="container-fluid">
            <i class="footer-icon fab fa-twitter"></i>
            <i class="footer-icon fab fa-facebook-f"></i>
            <i class="footer-icon fab fa-instagram"></i>
            <i class="footer-icon fas fa-envelope"></i>
            <p>© Copyright 2020 PALLAS Entertainment</p>
        </div>
    </footer>

</body>

</html>
