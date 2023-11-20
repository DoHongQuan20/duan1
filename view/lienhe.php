
    <style>
        .tong1 {
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 600px;
            background-image: url('https://demoda.vn/wp-content/uploads/2022/01/Hinh-anh-thien-nhien-buon-troi-chap-toi.jpg');
        }
        
        .container1 {
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 85%;
            margin-left: -100px;
            /* Giảm chiều rộng của .container xuống 80% */
            /* Cách lề trên và dưới 20px, và căn giữa theo chiều ngang */
            
        }
        
        .contact-img {
            max-width: 70%;
            animation: slideIn 1s ease-out;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            height: 560px;
            margin-left: -52px;
            
        }
        
        .contact-form {
            position: absolute;
            right: 0;
            width: 40%;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            animation: slideInForm 1s ease-out;
            margin-left: -200px;
            height: 550px;
        }
        
        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateX(-50%);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }
        
        @keyframes slideInForm {
            from {
                opacity: 0;
                transform: translateX(50%);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }
        
        .contact-form input,
        .contact-form textarea {
            width: 100%;
            padding: 5px;
            margin-bottom: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        
        .contact-form label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        
        .contact-form button {
            background-color: #4caf50;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
            width: 100%;
        }
        
        .contact-form button:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <div class="tong1">
        <div class="container1">
            <div class="anh">
                <img src="https://24hstore.vn/upload_images/images/2019/10/31/1.jpg" alt=" Contact Image " class="contact-img ">
            </div>
            <div class="contact-form ">
                <form id="contactForm">
                    <H3 style="text-align: center;">LIÊN HỆ</H3>
                    <label for="name ">Tên:</label>
                    <input type="text " id="name " name="name " required>

                    <label for="email ">Email:</label>
                    <input type="email " id="email " name="email " required>

                    <label for="subject ">Tiêu đề:</label>
                    <input type="text " id="subject " name="subject " required>

                    <label for="message ">Nội dung:</label>
                    <textarea id="message " name="message " rows="4 " required></textarea>

                    <button style="text-align: center;" type="button " onclick="submitForm() ">Gửi</button>
                </form>
            </div>
        </div>
    </div>
    <script>
        // Function to handle form submission (you can replace this with your own logic)
        function submitForm() {
            alert("Form submitted! "); // You can replace this with your own logic to handle form submission
        }
    </script>

