<!DOCTYPE html>
<html lang="en">
<head>
    <title>Thank You</title>
    <style>
        body {
            background-color: #fff;
            color: #fff;
            font-family: Arial, sans-serif;
            text-align: center;
            padding: 20px;
        }

        h1 {
            font-size: 32px;
            margin-bottom: 10px;
        }

        p {
            font-size: 18px;
            margin-bottom: 20px;
        }

        img {
            max-width: 100%;
            height: auto;
            margin-top: 20px;
        }

        @media (max-width: 600px) {
            img {
                max-width: 80%;
            }
        }

        .popup-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: #000;
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 9999;
            visibility: hidden;
            opacity: 0;
            transition: visibility 0s, opacity 0.5s;
        }

        .popup-container.show {
            visibility: visible;
            opacity: 1;
        }

        .popup-content {
            background-color: #222;
            padding: 20px;
            max-width: 1000px;
            text-align: center;
            border-radius: 5px;
            position: relative;
        }

        .close-button {
            color: #ccc;
            font-size: 40px;
            position: absolute;
            top: 10px;
            right: 20px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="popup-container" id="popupContainer">
        <div class="popup-content">
            <span class="close-button" onclick="closePopup()">&times;</span>
            <h1>Thank You for Contact Us!</h1>
            <p>We will contact you shortly.</p>
            <img src="assets/img/thankyou-img.webp" alt="Thank You Image">
        </div>
    </div>

    <script>
        function closePopup() {
            document.getElementById("popupContainer").classList.remove("show");
            window.location.href = "contact.php";
        }

        window.addEventListener("DOMContentLoaded", function () {
            document.getElementById("popupContainer").classList.add("show");
        });
    </script>
</body>
</html>