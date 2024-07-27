<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">

<style>
    html,
    body {
        height: 100%;
        margin: 0;
        font-family: Geneva, Tahoma, sans-serif;
        display: flex;
        flex-direction: column;
    }

    .wrapper {
        display: flex;
        flex-direction: column;
        flex: 1;
    }

    .container {
        flex: 1;
        padding: 20px;
    }

    .brainster-bg {
        background-color: rgba(252, 212, 50);
    }

    .hire-btn {
        background-color: red;
        border: 1px solid red;
        border-radius: 5px;
    }

    .nav-item a {
        font-weight: 600;
    }

    .banner {
        background-size: cover;
        background-position: center;
        height: 600px;
        position: relative;
    }


    .card-link .card {
        transition: box-shadow 0.3s ease-in-out;
    }

    .card-link .card:hover {
        box-shadow: 0 0 1px 1px yellow;
    }

    @media (max-width: 425px) {
        .navbar-brand {
            width: 50%;
        }

        .banner {
            height: 400px;
            text-align: center;
        }
    }
</style>