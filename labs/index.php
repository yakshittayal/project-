<?php
$title = "AlgomaU";
require_once 'includes/header.php';
?>
<style>
    hr {
        border: 0;
        height: 4px;
        background-color: black;
        
        margin-bottom: 20px;
    }

    h3 {
        line-height: 15px;
        color: white;
        font-weight: bold;
        font-size: 25px;
    }

    .intro {
    line-height: 15px;
    color: white;
    font-weight: bold;
    font-size: 25px;
    backdrop-filter: blur(10px);
    text-align: center;
    }

    .excitingnews {
        align-items: center;
        color: white;
        font-size: 105%;
        margin: 0px;
        margin-bottom: 1em;
        border: 1px solid white;
        border-width: 5px;
        border-radius: 4px;
        backdrop-filter: blur(10px);
    }

    .note {
        font-size: 20px; 
        margin-top: 10px;
        color: white;
    }
</style>

<div class ="intro">
    <hr>
    <p>welcome to algoma university, computing comunity </p>
    <hr>
</div>
<div class="excitingnews">
<h2>Hello, World !</h2>
    <div class="note">
        <p>
        The cumunity club supports the undergraduate computer science student body at algoma and acts as an entry point to industry. We host tech talks, hackathons, info sessions, workshops, LAN parties, and the biannual Startup Fair.
        Looking for a place to learn more about computer science and meet other students? Come visit us at our office (student centre) or come to our events.
        </p>
        <br>
        <p>upcoming events</p>
        <p>No upcoming events found.</p>
        Stay up to date with our upcoming events—join our mailing list by signing up and follow us on Facebook and of course github.
    </div>
</div>

<?php include 'includes/footer.php'; ?>